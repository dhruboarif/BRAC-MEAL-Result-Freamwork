<?php

namespace App\Http\Controllers;

use App\Models\DocumentArchive;
use App\Models\DocumentFile;
use App\Models\DocumentType;
use App\Models\Donor;
use App\Models\LearningActionArchive;
use App\Models\LearningActionFiles;
use App\Models\Program;
use App\Models\StudyArchive;
use App\Models\Support;
use App\Models\Thematic;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class LearningActionArchiveController extends Controller
{
    public function index()
    {
        if(Gate::allows('isAdmin')){
            $archives = LearningActionArchive::orderBy('created_at', 'desc')->get();

        }elseif(Gate::allows('isSupervisor')){
            $archives = LearningActionArchive::where(
                'user_id',User::addSelect('id')->where('parent_id', Auth::id())->pluck('id')
            )->orderBy('created_at', 'desc')->get();

        }elseif(Gate::allows('isRegistered')){

//            $archives = LearningActionArchive::where('user_id', Auth::id())->orderBy('created_at', 'desc')->paginate(10);
            $archives = LearningActionArchive::where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();
        }else{
            $archives = [];
        }

        return view('archive.learning-action.index',['archives' => $archives]);
    }

    public function create()
    {
        $programs = Program::addSelect('id', 'name', 'type', 'category')->where('status', 'A')->get();
        $documentTypes = DocumentType::addSelect('id', 'name')->where('status', 'A')->get();
        $thematics = Thematic::addSelect('id', 'name')->where('status', 'A')->get();
        $years =  array_combine(range(date("Y"), 1950), range(date("Y"), 1950   ));
        return view('archive.learning-action.create', [
            'programs' => $programs,
            'documentTypes' => $documentTypes,
            'thematics' => $thematics,
            'years' => $years
        ]);
    }

    public function uploadFiles(Request $request)
    {
        $validatedData = $request->validate([
            'file' =>  'required|mimes:jpeg,jpg,png,zip,pdf,doc,docx|max:30000',
        ]);

        if($validatedData){
            $destinationPath = 'uploads/archive/learning-action/'.date('d-m-y'); // upload path
            $originalFileName = $request->file('file')->getClientOriginalName();
            $extension =  $request->file('file')->getClientOriginalExtension(); // getting file extension
            $fileName = date('hisA').'_'.rand(1111111111, 9999999999).time() . '.' . $extension; // renameing image
            try{
                $upload_success =  $request->file('file')->move(public_path().'/'.$destinationPath, $fileName); // uploading file to given path
                if ($upload_success) {
                    return response()->json([
                        'status'=>'success',
                        'original_file'=>$originalFileName,
                        'new_file'=>$fileName,
                        'path' => $destinationPath.'/'.$fileName
                    ], 200);
                } else {
                    return response()->json([
                        'status'=>'error',
                        'original_file'=>$originalFileName,
                        'new_file'=>$fileName
                    ], 400);
                }
            }catch(\Exception $e){
                return response()->json([
                    'status'=>'error',
                    'original_file'=>$originalFileName,
                    'new_file'=>$fileName
                ], 400);
            }
        }else{
            return  response()->json($validatedData->errors->first(), 400 );
        }
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'type' => 'required|max:255',
            'program-support' => 'required|max:255',
            'thematic' => 'required|max:255',
            'name' => 'required|max:255',
            'year' => 'required|max:255',
            'file_names' => 'required|max:255',
        ], [
            'type.required' => 'Learning type is required.',
            'thematic.required' => 'Area Name is required.',
            'file_names.required' => 'File can not be empty.',
            'program-support.required' => 'Program/Function field is required'
        ]);
        if($validatedData){
            try{
                DB::beginTransaction();
                $learningActionArchive = new LearningActionArchive();
                $learningActionArchive->program_id = $request->post('program-support');
                $learningActionArchive->name = $request->post('name');
                $learningActionArchive->year = $request->post('year');
                $learningActionArchive->user_id = Auth::id();
                $learningActionArchive->save();

                $learningActionFileData = [];
                foreach ($request->post('file_names') as $key=>$file){
                    $learningActionFile = new LearningActionFiles();
                    $learningActionFile->store_by = Auth::id();
                    $learningActionFile->name = $file;
                    $learningActionFile->path = $request->post('file_paths')[$key];
                    $learningActionFileData[] = $learningActionFile;
                }
                $learningActionArchive->learningActionFiles()->saveMany($learningActionFileData);

                $thematic = Thematic::find($request->post('thematic'));
                $learningActionArchive->thematics()->attach($thematic);

                DB::commit();
                return redirect('/archive/learning-action')->with(['type'=>'success', 'msg'=>'Learning action archive is successfully added.']);

            }catch (\Exception $e){
                DB::rollback();
                return redirect('/archive/learning-action/create')->with(['type'=>'error', 'msg'=>'Failed to add Learning action archive. Please try again later.']);
            }
        }
    }

    public function show($id)
    {
        $archive = LearningActionArchive::findOrFail($id);
        return view('archive.learning-action.show', [
            'archive' => $archive,
        ]);
    }
    public function edit($id)
    {
        $donor = Donor::findOrFail($id);
        return view('archive.learning-action.edit', compact('donor'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255'
        ]);
        Donor::findOrFail($id)->update($validatedData);
        return redirect('/document')->with(['type'=>'success', 'msg'=>'Donor is successfully updated.']);
    }

    public function destroy(Request $request, $id)
    {
        Donor::findOrFail($id)->delete();
        return redirect('/learning-action')->with(['type'=>'success', 'msg'=>'Donor is successfully deleted.']);
    }
}
