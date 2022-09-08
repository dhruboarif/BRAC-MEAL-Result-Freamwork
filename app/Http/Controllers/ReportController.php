<?php

namespace App\Http\Controllers;

use App\Models\DocumentArchive;
use App\Models\LearningActionArchive;
use App\Models\Program;
use App\Models\StudyArchive;
use App\Models\Thematic;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class ReportController extends Controller
{
    public function monitoringStudiesBracRecentYear()
    {
        $users = User::paginate(5);
        return view('report.monitoring-studies.brac.recent-year',['users' => $users]);
    }

    public function monitoringStudiesBracThematicAreaName(Request $request)
    {
        $thematicId = $request->get('thematic');
        $arch = $request->get('arch');

        if(!$thematicId & !$arch){ //counter page

            $data = DB::table('thematics')->join('study_thematics', 'study_thematics.thematic_id', 'thematics.id')
                ->select('thematics.name','thematics.id',
                    DB::raw("(select count(*) from study_thematics where thematic_id = thematics.id) as total_study_thematic")
                )
                ->paginate(10);

            return view(
                'report.monitoring-studies.brac.thematic-area-name',
                ['data' => $data]
            );

        }elseif($thematicId){ //list page

            $studyArchives = StudyArchive::whereHas('thematics', function($q) use($thematicId){
                $q->where('thematic_id', '=', $thematicId);
            })
//                ->where('status', 'A')
                ->paginate(10);
            return view(
                'report.monitoring-studies.brac.thematic-area-name-list',
                ['studyArchives' => $studyArchives]
            );

        }elseif($arch){ //details page

            $StudyArchive = StudyArchive::findOrFail($arch);
            return view(
                'report.monitoring-studies.brac.thematic-area-name-show',
                [ 'studyArchive' => $StudyArchive ]
            );
        }

    }

    public function monitoringStudiesDevelopmentProgramsProgramList(Request $request)
    {

        $traceId = $request->get('trace');
        $arch = $request->get('arch');

        if(!$traceId & !$arch){ //counter page

            $data = DB::table('programs')
                ->select('programs.name','programs.id','programs.type','programs.category',
                    DB::raw("(select count(*) from study_archive where program_id = programs.id) as total_p")
//                    DB::raw("(select count(*) from document_archive where program_id = programs.id) as total_p")
//                    DB::raw("(select count(*) from learning_action_archive where program_id = programs.id) as total_la")
                )->where(['type'=> 'DEVELOPMENT', 'category'=>'PROGRAM'])
                ->paginate(10);
            return view('report.monitoring-studies.development-programs.program-list',['data' => $data]);


        }elseif($traceId){ //list page
             $studyArchives = StudyArchive::where(['program_id'=>$traceId])->paginate(10);
//            $studyArchives = StudyArchive::where(['program_id'=>$traceId, 'status'=>'A' ])->paginate(10);
            return view(
                'report.monitoring-studies.development-programs.program-list-list',
                ['studyArchives' => $studyArchives]
            );

        }elseif($arch){ //details page

            $StudyArchive = StudyArchive::findOrFail($arch);
            return view(
                'report.monitoring-studies.development-programs.program-list-show',
                [ 'studyArchive' => $StudyArchive ]
            );
        }
    }

    public function monitoringStudiesDevelopmentProgramsCrossProgramList(Request $request)
    {
//        $users = User::paginate(5);
//        return view('report.monitoring-studies.development-programs.cross-program-list',['users' => $users]);

        $traceId = $request->get('trace');
        $arch = $request->get('arch');

        if(!$traceId & !$arch){ //counter page

            $data = DB::table('programs')
                ->select('programs.name','programs.id','programs.type','programs.category',
                    DB::raw("(select count(*) from document_archive where program_id = programs.id) as total_p"),
                    DB::raw("(select count(*) from learning_action_archive where program_id = programs.id) as total_la")
                )->where(['type'=> 'CROSS', 'category'=>'PROGRAM'])
                ->paginate(10);
            return view('report.monitoring-studies.development-programs.cross-program-list',['data' => $data]);


        }elseif($traceId){ //list page

           $studyArchives = StudyArchive::where(['program_id'=>$traceId ])->paginate(10);

            return view(
                'report.monitoring-studies.development-programs.cross-program-list-list',
                ['studyArchives' => $studyArchives]
            );

        }elseif($arch){ //details page

            $StudyArchive = StudyArchive::findOrFail($arch);
            return view(
                'report.monitoring-studies.development-programs.cross-program-list-show',
                [ 'studyArchive' => $StudyArchive ]
            );
        }
    }

    public function monitoringStudiesDevelopmentProgramsDevelopmentProgram()
    {
        $users = User::paginate(5);
        return view('report.monitoring-studies.development-programs.development-program',['users' => $users]);
    }

    public function monitoringStudiesDevelopmentProgramsCrossProgramName()
    {
        $users = User::paginate(5);
        return view('report.monitoring-studies.development-programs.cross-program-name',['users' => $users]);
    }

    public function monitoringStudiesSupportFunctionRecentYearReport()
    {
        $users = User::paginate(5);
        return view('report.monitoring-studies.support-function.recent-year-report',['users' => $users]);
    }

    public function monitoringStudiesSupportFunctionCrossFunctionList()
    {
        $users = User::paginate(5);
        return view('report.monitoring-studies.support-function.cross-function-list',['users' => $users]);
    }

    public function monitoringStudiesSupportFunctionSupportFunctionName()
    {
        $users = User::paginate(5);
        return view('report.monitoring-studies.support-function.support-function-name',['users' => $users]);
    }

    public function monitoringStudiesSupportFunctionSupportFunctionList()
    {
        $users = User::paginate(5);
        return view('report.monitoring-studies.support-function.support-function-list',['users' => $users]);
    }

    public function monitoringStudiesSupportFunctionCrossFunctionName()
    {
        $users = User::paginate(5);
        return view('report.monitoring-studies.support-function.cross-function-name',['users' => $users]);
    }

    public function documentsDocumentType(Request $request)
    {
        $traceId = $request->get('trace');
        $arch = $request->get('arch');

        if(!$traceId & !$arch){ //counter page

            $data = DB::table('document_types')
                ->select('name','id',
                    DB::raw("(select count(*) from document_archive where document_type_id = document_types.id) as total")
                )->paginate(10);

            return view('report.documents.document-type',['data' => $data]);

        }elseif($traceId){ //list page

            $archives = DocumentArchive::where([ 'document_type_id'=>$traceId, 'status'=>'A' ])->paginate(10);
            return view(
                'report.documents.document-type-list',
                ['archives' => $archives]
            );

        }elseif($arch){ //details page

            $archive = DocumentArchive::findOrFail($arch);
            return view(
                'report.documents.document-type-show',
                [ 'archive' => $archive ]
            );
        }

    }

    public function all_type_document()
    {
//        $archives = DocumentArchive::where(['status'=>'A' ])->paginate(10);
        $archives = DocumentArchive::where(['status'=>'A' ])->get();
        return view(
            'report.documents.document-type-list-all',
            ['archives' => $archives]
        );
    }

    public function documentsDocumentProgramList(Request $request)
    {
       /* $users = User::paginate(5);
        return view('report.documents.document-program-list',['users' => $users]);*/

        $traceId = $request->get('trace');
        $arch = $request->get('arch');

        if(!$traceId & !$arch){ //counter page

            $data = DB::table('programs')
                ->select('name','id','type', 'category',
                    DB::raw("(select count(*) from document_archive where program_id = programs.id) as total")
                )->paginate(10);

            return view('report.documents.document-program-list',['data' => $data]);

        }elseif($traceId){ //list page

            $archives = DocumentArchive::where([ 'program_id'=>$traceId ])->paginate(10);
            return view(
                'report.documents.document-program-list-list',
                ['archives' => $archives]
            );

        }elseif($arch){ //details page

            $archive = DocumentArchive::findOrFail($arch);
            return view(
                'report.documents.document-program-list-show',
                [ 'archive' => $archive ]
            );
        }
    }
    public function documentsDocumentProgramName()
    {
        $users = User::paginate(5);
        return view('report.documents.document-program-name',['users' => $users]);
    }
    public function documentsDocumentDocumentTypeName()
    {
        $users = User::paginate(5);
        return view('report.documents.document-type-name',['users' => $users]);
    }
    public function learningActionsProgramType()
    {
        $users = User::paginate(5);
        return view('report.learning-actions.program-type',['users' => $users]);
    }
    public function learningActionsProgramList(Request $request)
    {

        $traceId = $request->get('trace');
        $arch = $request->get('arch');

        if(!$traceId & !$arch){ //counter page

            $data = DB::table('programs')
                ->select('name','id',
                    DB::raw("(select count(*) from learning_action_archive where program_id = programs.id) as total")
                )->paginate(10);

            return view('report.learning-actions.program-list',['data' => $data]);

        }elseif($traceId){ //list page

            $archives = LearningActionArchive::where([ 'program_id'=>$traceId ])->paginate(10);
            return view(
                'report.learning-actions.program-list-list',
                ['archives' => $archives]
            );

        }elseif($arch){ //details page

            $archive = LearningActionArchive::findOrFail($arch);
            return view(
                'report.learning-actions.program-list-view',
                [ 'archive' => $archive ]
            );
        }
    }
    public function learningActionsRecentYear()
    {
        $users = User::paginate(5);
        return view('report.learning-actions.recent-year',['users' => $users]);
    }


}
