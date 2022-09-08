<?php

namespace App\Http\Controllers;

use App\Models\IndicatorRegistration;
use App\Models\Pillar;
use App\Models\Program;
use App\Models\ResultEntry;
use App\Models\ResultEntryDetails;
use App\Models\SdgIndicator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ResultEntryController extends Controller
{
    public function index()
    {
//        $data = ResultEntry::where('user_id', Auth::id())->orderBy('created_at', 'desc')->paginate(5);
        $data = ResultEntry::where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();
        return view('result-entry.index', ['data'=>$data]);
    }
    public function create()
    {
        $pillars = Pillar::orderBy('number', 'asc')->get();
        $programs = Program::select('id', 'name')->where('status', 'A')->get();
        $indicatorRegistrations = IndicatorRegistration::all();
        $userProgramId = Auth::user()->program_id;
        if(!empty($userProgramId)){
            $program = Program::addSelect('id', 'name')->findOrFail($userProgramId);
        }else{
            $program = [];
        }
        return view('result-entry.create', ['program'=>$program, 'pillars'=>$pillars, 'programs' => $programs, 'indicatorRegistrations'=>$indicatorRegistrations]);
    }

    public function statement(Request $request){
        $id = $request->id;
        $data = DB::table('indicator_registration')->where('id',$id)->select('indicator_statement','id')->first();
        return response()->json($data);
    }

    public function getProgram(Request $request){
        $id = $request->id;
        $data = DB::table('indicator_registration_program')
            ->where('indicator_registration_program.indicator_registration_id',$id)
            ->join('programs','programs.id','=','indicator_registration_program.program_id')
            ->select('programs.*')->get();
        $year = DB::table('indicator_registration')->where('id',$id)->select('baseline_year','id')->first();
        return response()->json(['data'=>$data,'year'=>$year]);
    }

    public function store(Request $request)
    {
            try{

                $p = new ResultEntry();
                $p->pillar_id = $request->post('piller');
                $p->indicator_type = $request->post('indicator_type');
                $p->indicator_statement_id = $request->post('indicator_statement');
                $p->indicator_number_id = $request->post('indicator_number');
                $p->baseline_year = $request->post('baseline_year');
                $p->program_id = $request->post('program');
                $p->formula = $request->post('formula');
                $p->achievement_total = $request->post('achievement_total');
                $p->disagg_female_total = $request->post('disagg_female_total');
                $p->disagg_disability_total = $request->post('disagg_disability_total');
                $p->disagg_heard_to_reach_total = $request->post('disagg_heard_to_reach_total');
                $p->user_id = Auth::id();
                $p->save();

                if(!empty($request->post('milestone_year'))) {
                    $pd = [];
                    foreach ($request->post('milestone_year') as $key => $year) {
                        $d = new ResultEntryDetails();
                        $d->milestone_year = $year;
                        $d->recorded_to_date = $request->post('recorded_to_date')[$key];
                        $d->period_type = $request->post('period_type')[$key];
                        $d->achieved = $request->post('achieved')[$key];
                        $d->source = $request->post('source')[$key];
                        $d->methodology = $request->post('methodology')[$key];
                        $d->date_of_last_update = $request->post('last_update_date')[$key];
                        $d->remarks = $request->post('remarks')[$key];
                        $d->user_id = Auth::id();
                        $d->disagg_female = $request->post('disagg_female')[$key];
                        $d->disagg_disability = $request->post('disagg_disability')[$key];
                        $d->disagg_heard_to_reach = $request->post('disagg_heard_to_reach')[$key];
                        $pd[] = $d;
                    }

                    $p->resultEntryDetails()->saveMany($pd);
                }
                return redirect(route('result-entry.index'))->with(['type' => 'success', 'msg' => 'Result Entry is successfully added.']);

            }catch (\Exception $e){
                dd($e->getMessage());
                return redirect(route('result-entry.create'))
                    ->with(['type'=>'error', 'msg'=>'Failed to Result Entry. Please try again later.']);
            }



    }

    public function show($id)
    {
        $pillars = Pillar::select('id', 'name', 'number')->orderBy('number', 'asc')->get();
        $programs = Program::select('id', 'name')->where('status', 'A')->get();
        $userProgramId = Auth::user()->program_id;
        $indicatorRegistrations = IndicatorRegistration::all();
        $data = ResultEntry::findOrFail($id);
        if(!empty($userProgramId)){
            $program = Program::addSelect('id', 'name')->findOrFail($userProgramId);
        }else{
            $program = [];
        }

        return view('result-entry.show', ['program'=>$program, 'pillars'=>$pillars, 'programs' => $programs, 'data'=>$data, 'indicatorRegistrations'=>$indicatorRegistrations]);
    }

    public function edit($id)
    {
        $pillars = Pillar::select('id', 'name', 'number')->orderBy('number', 'asc')->get();
        $programs = Program::select('id', 'name')->where('status', 'A')->get();
        $userProgramId = Auth::user()->program_id;
        $indicatorRegistrations = IndicatorRegistration::all();
        $data = ResultEntry::findOrFail($id);
        if(!empty($userProgramId)){
            $program = Program::addSelect('id', 'name')->findOrFail($userProgramId);
        }else{
            $program = [];
        }

        return view('result-entry.edit', ['program'=>$program, 'pillars'=>$pillars, 'programs' => $programs, 'data'=>$data, 'indicatorRegistrations'=>$indicatorRegistrations]);
    }

    public function update(Request $request, $id)
    {
        try {
            $p = ResultEntry::findOrFail($id);
            $p->pillar_id = $request->post('piller');
            $p->indicator_type = $request->post('indicator_type');
            $p->indicator_number_id = $request->post('indicator_number');
            $p->indicator_statement_id = $request->post('indicator_statement');
            $p->program_id = $request->post('program');
            $p->formula = $request->post('formula');
            $p->achievement_total = $request->post('achievement_total');
            $p->disagg_female_total = $request->post('disagg_female_total');
            $p->disagg_disability_total = $request->post('disagg_disability_total');
            $p->disagg_heard_to_reach_total = $request->post('disagg_heard_to_reach_total');
            $p->user_id = Auth::id();
            $p->update();

            if (!empty($request->post('rdid'))) {
                foreach ($request->post('rdid') as $key => $id) {
                    $d = ResultEntryDetails::findOrFail($id);
                    $d->milestone_year = $request->post('milestone_year')[$key];
                    $d->recorded_to_date = $request->post('recorded_to_date')[$key];
                    $d->period_type = $request->post('period_type')[$key];
                    $d->achieved = $request->post('achieved')[$key];
                    $d->source = $request->post('source')[$key];
                    $d->methodology = $request->post('methodology')[$key];
                    $d->date_of_last_update = $request->post('last_update_date')[$key];
                    $d->remarks = $request->post('remarks')[$key];
                    $d->user_id = Auth::id();
                    $d->disagg_female = $request->post('disagg_female')[$key];
                    $d->disagg_disability = $request->post('disagg_disability')[$key];
                    $d->disagg_heard_to_reach = $request->post('disagg_heard_to_reach')[$key];
                    $d->update();
                }

            }
            return redirect(route('result-entry.index'))
                ->with(['type' => 'success', 'msg' => 'Result Entry is successfully updated.']);
        }catch (\Exception $e){
            return redirect(route('result-entry.index'))
                ->with(['type'=>'error', 'msg'=>'Failed to Result update. Please try again later.']);
        }

    }

    public function destroy(Request $request, $id)
    {
        try {
            $result_entry_details = DB::table('result_entry_details')->where('result_entry_id',$id)->delete();
            $result_entry = DB::table('result_entry')->where('id',$id)->delete();
            return redirect(route('result-entry.index'))
                ->with(['type' => 'success', 'msg' => 'Result Entry is successfully deleted.']);

        } catch (\Exception $e) {
            return redirect(route('relevant-sdg-establishment.index'))
                ->with(['type' => 'error', 'msg' => 'Failed to delete. Result Entry is used by another source.']);
        }
    }

}
