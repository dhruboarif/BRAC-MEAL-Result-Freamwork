<?php

namespace App\Http\Controllers;

use App\Models\DocumentArchive;
use App\Models\DocumentFile;
use App\Models\DocumentType;
use App\Models\Donor;
use App\Models\Program;
use App\Models\StudyArchive;
use App\Models\StudyFile;
use App\Models\Support;
use App\Models\Thematic;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class DocumentArchiveController extends Controller
{
    public function index()
    {
        if(Gate::allows('isAdmin')){
            $documentArchives = DocumentArchive::get();

        }elseif(Gate::allows('isSupervisor')){
            $documentArchives = DocumentArchive::where(
                'user_id', User::addSelect('id')->where('parent_id', Auth::id())->pluck('id')
            )->orderBy('created_at', 'desc')->get();

        }elseif(Gate::allows('isRegistered')){

//            $documentArchives = DocumentArchive::where('user_id', Auth::id())->orderBy('created_at', 'desc')->paginate(10);
            $documentArchives = DocumentArchive::where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();
        }else{
            $documentArchives = [];
        }
        return view('archive.document.index',['documentArchives' => $documentArchives]);
    }

    public function create()
    {
        $programs = Program::addSelect('id', 'name', 'type', 'category')->where('status', 'A')->get();
        $documentTypes = DocumentType::addSelect('id', 'name')->where('status', 'A')->get();
        $years =  array_combine(range(date("Y"), 1950), range(date("Y"), 1950   ));

        return view('archive.document.create', [
            'programs' => $programs,
            'documentTypes' => $documentTypes,
            'years' => $years
        ]);
    }

    public function uploadFiles(Request $request)
    {
        $validatedData = $request->validate([
            'file' =>  'required|mimes:jpeg,jpg,png,zip,pdf,doc,docx|max:30000',
        ]);

        if($validatedData){
            $destinationPath = 'uploads/archive/document/'.date('d-m-y'); // upload path
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
            'program' => 'required|max:255',
            'name' => 'required|max:255',
            'document_type' => 'required|max:255',
            'year' => 'required|max:255',
            'file_names' => 'required|max:255',
        ], [
            'file_names.required' => 'File can not be empty.'
        ]);
        if($validatedData){
            try{
                DB::beginTransaction();
                $documentArchive = new DocumentArchive();
                $documentArchive->program_id = $request->post('program');
                $documentArchive->document_type_id = $request->post('document_type');
                $documentArchive->name = $request->post('name');
                $documentArchive->year = $request->post('year');
                $documentArchive->user_id = Auth::id();
                $documentArchive->save();

                $documentFileData = [];
                foreach ($request->post('file_names') as $key=>$file){
                    $documentFile = new DocumentFile();
                    $documentFile->store_by = Auth::id();
                    $documentFile->name = $file;
                    $documentFile->path = $request->post('file_paths')[$key];
                    $documentFileData[] = $documentFile;
                }
                $documentArchive->documentArchiveFiles()->saveMany($documentFileData);

                DB::commit();
                return redirect('/archive/document')->with(['type'=>'success', 'msg'=>'Document archive is successfully added.']);

            }catch (\Exception $e){
                DB::rollback();
                return redirect('/archive/document/create')->with(['type'=>'error', 'msg'=>'Failed to add document archive. Please try again later.']);
            }
        }
    }

    public function show($id)
    {
        $documentArchive = DocumentArchive::findOrFail($id);
        return view('archive.document.show', [
            'documentArchive' => $documentArchive,
        ]);
    }

    public function edit($id)
    {
        $donor = Donor::findOrFail($id);
        return view('archive.document.edit', compact('donor'));
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
        return redirect('/document')->with(['type'=>'success', 'msg'=>'Donor is successfully deleted.']);
    }
}
