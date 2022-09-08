<?php

namespace App\Http\Controllers;

use App\Models\DocumentType;
use App\Models\Donor;
use App\Models\Program;
use App\Models\StudyArchive;
use App\Models\StudyFile;
use App\Models\Support;
use App\Models\Thematic;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use mysql_xdevapi\Exception;
use Illuminate\Support\Facades\Gate;

class StudyArchiveController extends Controller
{
    public function index()
    {
        if(Gate::allows('isAdmin')){
            $studyArchives = StudyArchive::paginate(10);

        }elseif(Gate::allows('isSupervisor')){
            $studyArchives = StudyArchive::whereIn(
                'user_id', User::select('id')->where('parent_id', Auth::id())->orderBy('id', 'desc')
            )
            ->orderBy('created_at', 'desc')
//                ->paginate(10);
                ->get();

        }elseif(Gate::allows('isRegistered')){

            $studyArchives = StudyArchive::where('user_id', Auth::id())->orderBy('id', 'desc')
                ->get();
//                ->paginate(10);
        }else{
            $studyArchives = [];
        }
        return view('archive.study.index',['studyArchives' => $studyArchives]);
    }

    public function create()
    {
        $programs = Program::addSelect('id', 'name', 'type', 'category')->where('status', 'A')->orderBy('name', 'desc')->get();
        $documentTypes = DocumentType::addSelect('id', 'name')->where('status', 'A')->get();
        $thematics = Thematic::addSelect('id', 'name')->where('status', 'A')->get();
        return view('archive.study.create', [
            'programs' => $programs,
            'documentTypes' => $documentTypes,
            'thematics' => $thematics,
        ]);
    }

    public function uploadFiles(Request $request)
    {
        $validatedData = $request->validate([
            'file' =>  'required|mimes:jpeg,jpg,png,zip,pdf,doc,docx,pptx,xlsx|max:30000',
        ]);

        if($validatedData){
            $destinationPath = 'uploads/archive/study/'.date('d-m-y'); // upload path
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
            'document_type' => 'required|max:255',
            'name' => 'required|max:255',
            'study_period' => 'required|max:255',
            'summary' => 'required|max:255',
            'thematic' => 'required|max:255',
            'file_names' => 'required|max:255',
            'version_status' => 'required|max:255',
        ], [
            'study_period' => 'Study Period fields are required. ',
            'thematic.required' => 'The study area field is required. ',
            'file_names.required' => 'File can not be empty.'
        ]);
        if($validatedData){
            try{
                DB::beginTransaction();
                $studyArchive = new StudyArchive();
                $studyArchive->program_id = $request->post('program');
                $studyArchive->document_type_id = $request->post('document_type');
                $studyArchive->name = $request->post('name');
                $studyArchive->study_period = $request->post('study_period');
                $studyArchive->version_status = $request->post('version_status');
                $studyArchive->summary = $request->post('summary');
                $studyArchive->user_id = Auth::id();
                $studyArchive->save();

                $studyFileData = [];
                foreach ($request->post('file_names') as $key=>$file){
                    $studyFile = new StudyFile();
                    $studyFile->store_by = Auth::id();
                    $studyFile->name = $file;
                    $studyFile->path = $request->post('file_paths')[$key];
                    $studyFileData[] = $studyFile;
                }
                $studyArchive->studyArchiveFiles()->saveMany($studyFileData);

                $thematic = Thematic::find($request->post('thematic'));
                $studyArchive->thematics()->attach($thematic);

                DB::commit();
                return redirect('/archive/study')->with(['type'=>'success', 'msg'=>'Study archive is successfully added.']);

            }catch (\Exception $e){
                DB::rollback();
                return redirect('/archive/study')->with(['type'=>'error', 'msg'=>'Failed to add Study archive. Please try again later.']);
            }
        }
    }

    public function show($id)
    {
        $StudyArchive = StudyArchive::findOrFail($id);
        return view('archive.study.show', [
            'studyArchive' => $StudyArchive,
        ]);
    }


    public function edit($id)
    {
        $programs = Program::addSelect('id', 'name', 'type')->where('status', 'A')->get();
        $supports = Support::addSelect('id', 'name')->where('status', 'A')->get();
        $documentTypes = DocumentType::addSelect('id', 'name')->where('status', 'A')->get();
        $thematics = Thematic::addSelect('id', 'name')->where('status', 'A')->get();
        $StudyArchive = StudyArchive::findOrFail($id);
        return view('archive.study.create', [
            'programs' => $programs,
            'supports' => $supports,
            'documentTypes' => $documentTypes,
            'thematics' => $thematics,
            'studyArchive' => $StudyArchive,
        ]);

    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255'
        ]);
        Donor::findOrFail($id)->update($validatedData);
        return redirect('/donor')->with(['type'=>'success', 'msg'=>'Donor is successfully updated.']);
    }

    public function version($id)
    {
        $StudyArchive = StudyArchive::findOrFail($id);
        return view('archive.study.version', [
            'studyArchive' => $StudyArchive,
        ]);
    }

    public function versionStore(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'summary' => 'required|max:255',
            'file_names' => 'required|max:255',
            'version_status' => 'required|max:255',
        ], [
            'file_names.required' => 'File can not be empty.'
        ]);
        if($validatedData){
            try{
                $StudyArchiveData = StudyArchive::findOrFail($id);
                $versionRefId = empty($StudyArchiveData->version_ref_id)?$StudyArchiveData->id:$StudyArchiveData->version_ref_id;
                $version = StudyArchive::where('version_ref_id', $versionRefId)->max('version');
                $version = ($version == 0) ?($version+ 2):($version+1);

                DB::beginTransaction();
                $studyArchive = new StudyArchive();
                $studyArchive->program_id = $StudyArchiveData->program_id;
                $studyArchive->support_id = $StudyArchiveData->support_id;
                $studyArchive->document_type_id = $StudyArchiveData->document_type_id;
                $studyArchive->name = $request->post('name');
                $studyArchive->study_period = $StudyArchiveData->study_period;
                $studyArchive->version_status = $request->post('version_status');
                $studyArchive->summary = $request->post('summary');
                $studyArchive->version = $version;
                $studyArchive->version_ref_id = $versionRefId;
                $studyArchive->user_id = Auth::id();
                $studyArchive->save();

                $studyFileData = [];
                foreach ($request->post('file_names') as $key=>$file){
                    $studyFile = new StudyFile();
                    $studyFile->store_by = Auth::id();
                    $studyFile->name = $file;
                    $studyFile->path = $request->post('file_paths')[$key];
                    $studyFileData[] = $studyFile;
                }
                $studyArchive->studyArchiveFiles()->saveMany($studyFileData);


                $thematicData = array();
                foreach($StudyArchiveData->thematics as $thematic){
                    $thematicData[] = $thematic->id;
                }
                $studyArchive->thematics()->attach($thematicData);
                DB::commit();
                return redirect('/archive/study')->with(['type'=>'success', 'msg'=>'Study archive version is successfully added.']);

            }catch (\Exception $e){
                DB::rollback();
                return redirect('/archive/study')->with(['type'=>'error', 'msg'=>'Failed to add Study archive version. Please try again later.']);
            }
        }
    }


    public function destroy(Request $request, $id)
    {
        Donor::findOrFail($id)->delete();
        return redirect('/donor')->with(['type'=>'success', 'msg'=>'Donor is successfully deleted.']);
    }

    public function operation(Request $request, $id)
    {
        $validatedData = $request->validate([
            'remarks' => 'required|max:255',
        ]);
        if($validatedData){
            $studyArchiveData['remarks'] = $request->post('remarks');
            $studyArchiveData['status'] = $request->post('status');
            $studyArchiveData['approved_user_id'] = Auth::id();
            $studyArchiveData['approved_at'] = DB::raw('NOW()');
            $studyArchiveData['seen_at'] =  DB::raw('NOW()');

            if(StudyArchive::findOrFail($id)->update($studyArchiveData)){
                return redirect('/archive/study')->with(['type'=>'success', 'msg'=>'update successfully done.']);
            }else{
                return redirect('/archive/study')->with(['type'=>'error', 'msg'=>'Failed to update. Please try again.']);
            }
        }
    }
}
