<?php

namespace App\Http\Controllers;

use App\Models\DocumentArchive;
use App\Models\LearningActionArchive;
use App\Models\StudyArchive;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function module(Request $request, $id = 0)
    {
        $validModuleIds = ['1', '2', '3'];

        if(in_array($id, $validModuleIds)){
            $request->session()->put('module', $id);
            return Redirect::to('/home');
        }else{
            return Redirect::to('/error');
        }

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if (!$request->session()->has('module')) {
            return view('home.init');
        }else{
            if($request->session()->get('module') == '1'){

                $summary = [
                    'study'=>StudyArchive::where('status', 'A')->count(),
                    'document'=>DocumentArchive::where('status', 'A')->count(),
                    'la'=>LearningActionArchive::where('status', 'A')->count()
                ];
                $studyArchivePieChart = [
                    'pending' =>StudyArchive::where('status', 'P')->count(),
                    'approved' =>StudyArchive::where('status', 'A')->count(),
                    'rejected' =>StudyArchive::where('status', 'R')->count(),
                ];


                $performanceIndicator = DB::table('users')
                    ->select(
                        'id','name','email',
                        DB::raw("(select count(*) from study_archive where user_id = users.id and status='A') as total_sa"),
                        DB::raw("(select count(*) from learning_action_archive where user_id = users.id) as total_da"),
                        DB::raw("(select count(*) from document_archive where user_id = users.id) as total_la")
                    )
                    ->where('role', 'registered')
                    ->paginate(3);

                return view('home.module-1', [
                    'summary' => $summary,
                    'studyArchivePieChart' =>$studyArchivePieChart,
                    'performanceIndicator' =>$performanceIndicator,

                ]);

            }elseif ($request->session()->get('module') == '2'){
                $indicator_program = DB::table('indicator_registration')
                    ->groupBy('indicator_registration.baseline_year')
                    ->select('baseline_year')
                    ->orderBy('baseline_year','desc')
                    ->limit(4)
                    ->get();
                foreach ($indicator_program as $k=>$item){
                    $indicator_program[$k]->number_p = DB::table('indicator_registration')
                        ->where('indicator_registration.baseline_year',$item->baseline_year)
                        ->join('indicator_registration_program','indicator_registration_program.indicator_registration_id','=','indicator_registration.id')
                        ->count('indicator_registration_program.id');
                }
                return view('home.module-2',compact('indicator_program'));
            }else{
                return view('home.module-3');
            }
        }

    }

    public function program_chart_data(Request $request)
    {
        $indicator_program = DB::table('indicator_registration')
            ->groupBy('indicator_registration.baseline_year')
            ->select('baseline_year')
            ->orderBy('baseline_year','desc')
            ->limit(4)
            ->get();
        foreach ($indicator_program as $k=>$item){
            $indicator_program[$k]->number_p = DB::table('indicator_registration')
                ->where('indicator_registration.baseline_year',$item->baseline_year)
                ->join('indicator_registration_program','indicator_registration_program.indicator_registration_id','=','indicator_registration.id')
                ->count('indicator_registration_program.id');
            $indicator_program[$k]->number_indicator = DB::table('indicator_registration')
                ->where('indicator_registration.baseline_year',$item->baseline_year)
                ->count();
            $indicator_program[$k]->impact = DB::table('indicator_registration')
                ->where('indicator_registration.baseline_year',$item->baseline_year)
                ->where('indicator_registration.indicator_type','IMPACT')
                ->count();
            $indicator_program[$k]->outputn = DB::table('indicator_registration')
                ->where('indicator_registration.baseline_year',$item->baseline_year)
                ->where('indicator_registration.indicator_type','OUTPUT')
                ->count();
            $indicator_program[$k]->outcome = DB::table('indicator_registration')
                ->where('indicator_registration.baseline_year',$item->baseline_year)
                ->where('indicator_registration.indicator_type','OUTCOME')
                ->count();
        }
        return response()->json($indicator_program);
    }
}
