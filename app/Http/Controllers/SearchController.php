<?php

namespace App\Http\Controllers;

use App\Models\DocumentArchive;
use App\Models\LearningActionArchive;
use App\Models\StudyArchive;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search_query');
//        dd($request->all());
        $data = [];

        if(Gate::allows('isAdmin')){
            $studyArchives = StudyArchive::get();
            $documentArchives = DocumentArchive::get();
            $learningActionArchive = LearningActionArchive::orderBy('created_at', 'desc')->get();

        }elseif(Gate::allows('isSupervisor')){
            $studyArchives = StudyArchive::whereIn(
                'user_id', User::select('id')->where('parent_id', Auth::id())->orderBy('id', 'desc')
            )->orderBy('created_at', 'desc')->get();

            $documentArchives = DocumentArchive::where(
                'user_id', User::addSelect('id')->where('parent_id', Auth::id())->pluck('id')
            )->orderBy('created_at', 'desc')->get();

            $learningActionArchive = LearningActionArchive::where(
                'user_id',User::addSelect('id')->where('parent_id', Auth::id())->pluck('id')
            )->orderBy('created_at', 'desc')->get();

        }elseif(Gate::allows('isRegistered')){
            $studyArchives = StudyArchive::where('user_id', Auth::id())->orderBy('id', 'desc')->get();
            $documentArchives = DocumentArchive::where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();
            $learningActionArchive = LearningActionArchive::where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();
        }else{
            $studyArchives = [];
            $documentArchives = [];
            $learningActionArchive = [];
        }

        if(count($studyArchives)> 0){
            foreach ($studyArchives as $d){
                $data[]=[
                    'id' => $d->id,
                    'name' => $d->name,
                    'program' =>$d->program->name.' ('.$d->program->type.':'.str_replace('_', ' ', $d->program->category).')',
                    'archive_type' =>'STUDY'
                    ];
            }

            foreach ($documentArchives as $d){
                $data[]=[
                    'id' => $d->id,
                    'name' => $d->name,
                    'program' =>$d->program->name.' ('.$d->program->type.':'.str_replace('_', ' ', $d->program->category).')',
                    'archive_type' =>'DOCUMENT'
                ];
            }

            foreach ($learningActionArchive as $d){
                $data[]=[
                    'id' => $d->id,
                    'name' => $d->name,
                    'program' =>$d->program->name.' ('.$d->program->type.':'.str_replace('_', ' ', $d->program->category).')',
                    'archive_type' =>'DOCUMENT'
                ];
            }
        }
        return view('search.index',['data' => $data, 'search'=>$search]);
    }
}
