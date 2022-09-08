<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\IndicatorRegIndicators;
use App\Models\IndicatorRegistration;
use App\Models\IndicatorRegistrationFile;
use App\Models\IndicatorRegMilestone;
use App\Models\IndicatorRegProgramArea;
use App\Models\IndicatorRegPrograms;
use App\Models\Pillar;
use App\Models\Program;
use App\Models\SdgGoal;
use App\Models\SpaOwner;
use App\Models\Upazila;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class IndicatorRegistrationController extends Controller
{
    public function index()
    {
//        $data = IndicatorRegistration::orderBy('created_at', 'desc')->paginate(5);
        $data = DB::table('indicator_registration')
            ->orderBy('indicator_registration.id','desc')
            ->join('pillars','pillars.id','=','indicator_registration.pillar_id')
            ->select('indicator_registration.*','pillars.name')
            ->get();
//            ->paginate(5);

        return view('indicator-registration.index', ['data'=>$data]);
    }
    public function create()
    {
        $pillars = Pillar::select('id', 'name', 'number')->orderBy('number', 'asc')->get();
//        dd($pillars);
        $owners = SpaOwner::select('id', 'name')->where('status', 'A')->orderBy('id', 'asc')->get();
        $goals = SdgGoal::select('id', 'name')->get();
        $programs = Program::select('id', 'name')->where('status', 'A')->orderBy('name', 'ASC')->get();
        $districts = District::select('id','name')->get();
        $fileTypeTitles = ['PDF', 'DOC', 'EXCEL'];

        return view('indicator-registration.create', [
            'pillars' => $pillars,
            'owners' => $owners,
            'goals' => $goals,
            'programs' => $programs,
            'districts' => $districts,
            'fileTypeTitles'=>$fileTypeTitles
        ]);
    }

    public function store(Request $request)
    {

        $validate = $request->validate([
            'pillar' => 'required|max:255',
            'indicator_type' => 'required|max:255',
            'indicator_number' => 'required',
            'definition' => 'required',
            'owner' => 'required',
        ], [
            'pillar' => 'Pillar is required',
            'indicator_type' => 'Indicator Type is required',
            'indicator_number' => 'Indicator Type is required',
            'definition' => 'Definition is required',
            'owner' => 'Owner is required',
        ]);

        if($validate){
            try{


                $p = new IndicatorRegistration();
                $p->pillar_id = $request->post('pillar');
                $p->indicator_type = $request->post('indicator_type');
                $p->indicator_number = $request->post('indicator_number');
                $p->indicator_statement = $request->post('indicator_statement');
                $p->indicator_unit = $request->post('indicator_unit');
                $p->definition = $request->post('definition');
                $p->assumption = $request->post('assumption');
                $p->relevant_goal = $request->post('goal');
                $p->relevant_indicator = $request->post('goal_indicator');
                $p->relevant_indicator_target = $request->post('goal_target');
                $p->plan_number_type = $request->post('plan_number_type');
                $p->baseline_year = $request->post('baseline_year');
                $p->baseline_result = $request->post('baseline_result');
                $p->baseline_source = $request->post('baseline_source');
                $p->baseline_methodology = $request->post('baseline_methodology');
                $p->framework = ($request->post('dfr'))?'Y':'N';
                $p->framework_file_type = json_encode($request->post('framework_file_type'));
                $p->me = ($request->post('mep'))?'Y':'N';
                $p->me_file_type = json_encode($request->post('me_file_type'));
                $p->methodology_note = ($request->post('mn'))?'Y':'N';
                $p->methodology_note_file_type = json_encode($request->post('methodology_note_file_type'));
                $p->smart_guide = ($request->post('sg'))?'Y':'N';
                $p->smart_guide_file_type = json_encode($request->post('smart_guide_file_type'));
                $p->sdg_relevance = ($request->post('sg'))?'Y':'N';
                $p->sdg_relevance_file_type = json_encode($request->post('sdg_relevance_file_type'));
                $p->contribution_program = json_encode($request->post('contributions_program'));
                $p->user_id = Auth::id();
                if($p->save()){
                    $ind_id = $p->id;

                    //indicator data
                    try{
                        $owner = $request->post('owner');
                            if (isset($owner) && !empty($owner)){
                                $insert = DB::table('indicator_owner')->insert([
                                    'indicator_id' => $ind_id,
                                    'owner_id' => serialize($owner),
                                    'value' => serialize($request->post('owner_value'))
                                ]);
                            }

                        $indicators = $request->post('indicators');
                        if($indicators && count($indicators) > 0){
                            $indicatorData = [];
                            foreach ($indicators as $key=>$inid){
                                $indicator = new IndicatorRegIndicators();
                                $indicator->indicator_id = $inid;
                                $indicatorData[] = $indicator;
                            }
                            if($p->indicatorRegIndicators()->saveMany($indicatorData)){

                                //Program data
                                try{
                                    $programs = $request->post('contributions_program');
                                    if($programs && count($programs) > 0) {

                                        $programData = [];
                                        foreach ( $programs as $key => $i) {
                                            $pr = new IndicatorRegPrograms();
                                            $pr->program_id =   $i;
                                            $pr->plan_total = $request->post('milestone_total_target_'.$i);
                                            $pr->plan_formula = $request->post('milestone_formula_'.$i);
                                            $pr->female_disaggregation_total = $request->post('milestone_disagg_female_total_target_'.$i);
                                            $pr->female_disaggregation_formula = $request->post('milestone_disagg_female_formula_'.$i);
                                            $pr->disability_disaggregation_total = $request->post('milestone_disagg_disability_total_target_'.$i);
                                            $pr->disability_disaggregation_formula = $request->post('milestone_disagg_disability_formula_'.$i);
                                            $pr->milestone_disagg_reach_heard_formula = $request->post('milestone_disagg_reach_heard_formula_'.$i);
                                            $pr->milestone_disagg_reach_heard_total = $request->post('milestone_disagg_reach_heard_total_target_'.$i);

                                            if($p->indicatorRegPrograms()->save($pr)){

                                                //program area
                                                try{
                                                    $districts = $request->post('district_'.$i);
                                                    $policeStations = $request->post('police_station_'.$i);

                                                    if($districts && count($districts) > 0){
                                                        $paData = [];
                                                        foreach ( $districts as $k => $did) {
                                                            $pa = new IndicatorRegProgramArea();
                                                            $pa->district_id = $did;
                                                            $pa->upazila_id = $policeStations[$k];
                                                            $paData[] = $pa;
                                                        }
                                                        $pr->indicatorRegProgramArea()->saveMany($paData);
                                                    }

                                                }catch (\Exception $e){

                                                }

                                                //Milestone data
                                                try{
                                                    $milestone_years = $request->post('milestone_year_'.$i);
//                                                    $input_type = $request->post('input_type_'.$i);
                                                    $milestone_planned = $request->post('milestone_planned_'.$i);
                                                    $milestone_female_disaggregation = $request->post('milestone_disagg_female_'.$i);
                                                    $milestone_disability_disaggregation = $request->post('milestone_disagg_disability_'.$i);
                                                    $milestone_hard_disability = $request->post('milestone_disagg_reach_heard_'.$i);
                                                    $milestone_source = $request->post('milestone_source_'.$i);
                                                    $milestone_rationale = $request->post('milestone_rationale_'.$i);
                                                    $milestone_last_update = $request->post('milestone_last_update_'.$i);
                                                    $milestone_revision_last_approved = $request->post('milestone_revision_last_approved_'.$i);
                                                    $milestone_remarks = $request->post('milestone_remarks_'.$i);

                                                    if($milestone_years && count($milestone_years) > 0){
                                                        $pmData = [];
                                                        foreach ( $milestone_years as $m => $pmyid) {
                                                            $pm = new IndicatorRegMilestone();
                                                            $pm->milestone_year = $pmyid;
                                                            $pm->milestone_planned = $milestone_planned[$m];
                                                            $pm->milestone_female_disaggregation = $milestone_female_disaggregation[$m];
                                                            $pm->milestone_disability_disaggregation = $milestone_disability_disaggregation[$m];
                                                            $pm->milestone_hard_disability = $milestone_hard_disability[$m];
                                                            $pm->milestone_source = $milestone_source[$m];
                                                            $pm->milestone_rationale = $milestone_rationale[$m];
                                                            $pm->milestone_last_update = $milestone_last_update[$m];
                                                            $pm->milestone_revision_last_approved = $milestone_revision_last_approved[$m];
                                                            $pm->milestone_remarks = $milestone_remarks[$m];
                                                            $pm->user_id = Auth::id();
                                                            $pmData[] = $pm;
                                                        }
                                                        $pr->indicatorRegMilestone()->saveMany($pmData);
                                                    }
                                                }catch (\Exception $e){

                                                }

                                            }
                                        }
                                    }
                                }catch (\Exception $e){}
                            }
                        }
                    }catch (\Exception $e){}


                    //file upload data
                    try{
                        $files = $request->post('file_name');
                        if($files && count($files) > 0) {
                            $documentFileData = [];
                            foreach ( $files as $key => $file) {
                                $documentFile = new IndicatorRegistrationFile();
                                $documentFile->store_by = Auth::id();
                                $documentFile->name = $file;
                                $documentFile->file_section = $request->post('file_section')[$key];
                                $documentFile->path = $request->post('file_path')[$key];
                                $documentFileData[] = $documentFile;
                            }
                            $p->indicatorRegistrationFiles()->saveMany($documentFileData);
                        }
                    }catch (\Exception $e){
                    }
                    return redirect(route('indicator-registration.index'))->with(['type' => 'success', 'msg' => 'Indicator registration is successfully added.']);

                }else{
                    return redirect(route('indicator-registration.create'))->with(['type'=>'error', 'msg'=>'Failed to Indicator Registration. Please try again later.']);
                }

            }catch (\Exception $e){
                return redirect(route('indicator-registration.create'))->with(['type'=>'error', 'msg'=>'Failed to Indicator Registration. Please try again later.']);
            }
        }



    }

    public function uploadFiles(Request $request)
    {
//        return $request->file('file')->getMimeType();
        $validatedData = $request->validate([
            'file' =>  'required|mimes:pdf,doc,dot,docx,dotx,docm,dotm,xls,xlt,xla,xlsx,xltx,xlsm,xltm,xlam,xlsb,ppt,pot,pps,ppa,zip,octet-stream|max:30000',
        ]);

        if($validatedData){
            $destinationPath = 'uploads/indicator_registration/'.date('d-m-y');
            $originalFileName = $request->file('file')->getClientOriginalName();
            $extension =  $request->file('file')->getClientOriginalExtension();
            $fileName = date('hisA').'_'.rand(1111111111, 9999999999).time() . '.' . $extension;
            try{
                $upload_success =  $request->file('file')->move(public_path().'/'.$destinationPath, $fileName);
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

    public function show($id)
    {
        $pillars = Pillar::select('id', 'name', 'number')->orderBy('number', 'asc')->get();
        $owners = SpaOwner::select('id', 'name')->where('status', 'A')->orderBy('id', 'asc')->get();
        $goals = SdgGoal::select('id', 'name')->get();
        $programs = Program::select('id', 'name')->where('status', 'A')->get();
        $districts = District::select('id','name')->get();
        $upazilas = Upazila::select('id','name')->get();
        $data = IndicatorRegistration::findOrFail($id);
        $fileTypeTitles = ['PDF', 'DOC', 'EXCEL'];
        $ownerData = DB::table('indicator_owner')->where('indicator_id',$id)->first();
        return view('indicator-registration.show', [
            'pillars' => $pillars,
            'owners' => $owners,
            'goals' => $goals,
            'programs' => $programs,
            'districts' => $districts,
            'upazilas' => $upazilas,
            'data' => $data,
            'fileTypeTitles'=>$fileTypeTitles,
            'ownerData' => $ownerData
        ]);

    }

    public function destroy(Request $request, $id){
        $tr_dlt_fle = DB::table('indicator_registration_files')->where('indicator_registration_id',$id)->delete();
        $tr_dlt = DB::table('indicator_registration')->where('id',$id)->delete();

        if ($tr_dlt){
            return redirect(route('indicator-registration.index'))->with(['type' => 'success', 'msg' => 'Indicator registration is successfully Deleted.']);
        }else{
            return redirect(route('indicator-registration.index'))->with(['type' => 'error', 'msg' => 'Indicator registration Fail.']);
        }
    }

    public function edit($id)
    {
        $pillars = Pillar::select('id', 'name', 'number')->orderBy('number', 'asc')->get();
//        dd($pillars);
        $owners = SpaOwner::select('id', 'name')->where('status', 'A')->orderBy('id', 'asc')->get();
        $goals = SdgGoal::select('id', 'name')->get();
        $programs = Program::select('id', 'name')->where('status', 'A')->orderBy('name', 'ASC')->get();
        $districts = District::select('id','name')->get();
        $upazilas = Upazila::select('id','name')->get();
        $data = IndicatorRegistration::findOrFail($id);
        $fileTypeTitles = ['PDF', 'DOC', 'EXCEL'];
        $ownerData = DB::table('indicator_owner')->where('indicator_id',$id)->first();
        return view('indicator-registration.edit', [
            'pillars' => $pillars,
            'owners' => $owners,
            'goals' => $goals,
            'programs' => $programs,
            'districts' => $districts,
            'upazilas' => $upazilas,
            'data' => $data,
            'fileTypeTitles'=>$fileTypeTitles,
            'ownerData' => $ownerData,
            'id' => $id
        ]);

    }

    public function destroyData($id){
        $tr_dlt_fle = DB::table('indicator_registration_files')->where('indicator_registration_id',$id)->delete();
        $tr_dlt = DB::table('indicator_registration')->where('id',$id)->delete();
        return $tr_dlt;

    }

    public function update(Request $request, $id)
    {
//        $tr_dlt = DB::table('indicator_registration')->where('id',$id)->delete();
        $tr_dlt = $this->destroyData($id);
        if ($tr_dlt){
            try{


                $p = new IndicatorRegistration();
                $p->pillar_id = $request->post('pillar');
                $p->indicator_type = $request->post('indicator_type');
                $p->indicator_number = $request->post('indicator_number');
                $p->indicator_statement = $request->post('indicator_statement');
                $p->indicator_unit = $request->post('indicator_unit');
                $p->definition = $request->post('definition');
                $p->assumption = $request->post('assumption');
                $p->relevant_goal = $request->post('goal');
                $p->relevant_indicator = $request->post('goal_indicator');
                $p->relevant_indicator_target = $request->post('goal_target');
                $p->plan_number_type = $request->post('plan_number_type');
                $p->baseline_year = $request->post('baseline_year');
                $p->baseline_result = $request->post('baseline_result');
                $p->baseline_source = $request->post('baseline_source');
                $p->baseline_methodology = $request->post('baseline_methodology');
                $p->framework = ($request->post('dfr'))?'Y':'N';
                $p->framework_file_type = json_encode($request->post('framework_file_type'));
                $p->me = ($request->post('mep'))?'Y':'N';
                $p->me_file_type = json_encode($request->post('me_file_type'));
                $p->methodology_note = ($request->post('mn'))?'Y':'N';
                $p->methodology_note_file_type = json_encode($request->post('methodology_note_file_type'));
                $p->smart_guide = ($request->post('sg'))?'Y':'N';
                $p->smart_guide_file_type = json_encode($request->post('smart_guide_file_type'));
                $p->sdg_relevance = ($request->post('sg'))?'Y':'N';
                $p->sdg_relevance_file_type = json_encode($request->post('sdg_relevance_file_type'));
                $p->contribution_program = json_encode($request->post('contributions_program'));
                $p->user_id = Auth::id();
                if($p->save()){
                    $ind_id = $p->id;

                    //indicator data
                    try{
                        $owner = $request->post('owner');
                        if (isset($owner) && !empty($owner)){
                            $insert = DB::table('indicator_owner')->insert([
                                'indicator_id' => $ind_id,
                                'owner_id' => serialize($owner),
                                'value' => serialize($request->post('owner_value'))
                            ]);
                        }

                        $indicators = $request->post('indicators');
                        if($indicators && count($indicators) > 0){
                            $indicatorData = [];
                            foreach ($indicators as $key=>$inid){
                                $indicator = new IndicatorRegIndicators();
                                $indicator->indicator_id = $inid;
                                $indicatorData[] = $indicator;
                            }
                            if($p->indicatorRegIndicators()->saveMany($indicatorData)){

                                //Program data
                                try{
                                    $programs = $request->post('contributions_program');
                                    if($programs && count($programs) > 0) {

                                        $programData = [];
                                        foreach ( $programs as $key => $i) {
                                            $pr = new IndicatorRegPrograms();
                                            $pr->program_id =   $i;
                                            $pr->plan_total = $request->post('milestone_total_target_'.$i);
                                            $pr->plan_formula = $request->post('milestone_formula_'.$i);
                                            $pr->female_disaggregation_total = $request->post('milestone_disagg_female_total_target_'.$i);
                                            $pr->female_disaggregation_formula = $request->post('milestone_disagg_female_formula_'.$i);
                                            $pr->disability_disaggregation_total = $request->post('milestone_disagg_disability_total_target_'.$i);
                                            $pr->disability_disaggregation_formula = $request->post('milestone_disagg_disability_formula_'.$i);
                                            $pr->milestone_disagg_reach_heard_formula = $request->post('milestone_disagg_reach_heard_formula_'.$i);
                                            $pr->milestone_disagg_reach_heard_total = $request->post('milestone_disagg_reach_heard_total_target_'.$i);

                                            if($p->indicatorRegPrograms()->save($pr)){

                                                //program area
                                                try{
                                                    $districts = $request->post('district_'.$i);
                                                    $policeStations = $request->post('police_station_'.$i);

                                                    if($districts && count($districts) > 0){
                                                        $paData = [];
                                                        foreach ( $districts as $k => $did) {
                                                            $pa = new IndicatorRegProgramArea();
                                                            $pa->district_id = $did;
                                                            $pa->upazila_id = $policeStations[$k];
                                                            $paData[] = $pa;
                                                        }
                                                        $pr->indicatorRegProgramArea()->saveMany($paData);
                                                    }

                                                }catch (\Exception $e){

                                                }

                                                //Milestone data
                                                try{
                                                    $milestone_years = $request->post('milestone_year_'.$i);
//                                                    $input_type = $request->post('input_type_'.$i);
                                                    $milestone_planned = $request->post('milestone_planned_'.$i);
                                                    $milestone_female_disaggregation = $request->post('milestone_disagg_female_'.$i);
                                                    $milestone_disability_disaggregation = $request->post('milestone_disagg_disability_'.$i);
                                                    $milestone_hard_disability = $request->post('milestone_disagg_reach_heard_'.$i);
                                                    $milestone_source = $request->post('milestone_source_'.$i);
                                                    $milestone_rationale = $request->post('milestone_rationale_'.$i);
                                                    $milestone_last_update = $request->post('milestone_last_update_'.$i);
                                                    $milestone_revision_last_approved = $request->post('milestone_revision_last_approved_'.$i);
                                                    $milestone_remarks = $request->post('milestone_remarks_'.$i);

                                                    if($milestone_years && count($milestone_years) > 0){
                                                        $pmData = [];
                                                        foreach ( $milestone_years as $m => $pmyid) {
                                                            $pm = new IndicatorRegMilestone();
                                                            $pm->milestone_year = $pmyid;
                                                            $pm->milestone_planned = $milestone_planned[$m];
                                                            $pm->milestone_female_disaggregation = $milestone_female_disaggregation[$m];
                                                            $pm->milestone_disability_disaggregation = $milestone_disability_disaggregation[$m];
                                                            $pm->milestone_hard_disability = $milestone_hard_disability[$m];
                                                            $pm->milestone_source = $milestone_source[$m];
                                                            $pm->milestone_rationale = $milestone_rationale[$m];
                                                            $pm->milestone_last_update = $milestone_last_update[$m];
                                                            $pm->milestone_revision_last_approved = $milestone_revision_last_approved[$m];
                                                            $pm->milestone_remarks = $milestone_remarks[$m];
                                                            $pm->user_id = Auth::id();
                                                            $pmData[] = $pm;
                                                        }
                                                        $pr->indicatorRegMilestone()->saveMany($pmData);
                                                    }
                                                }catch (\Exception $e){

                                                }

                                            }
                                        }
                                    }
                                }catch (\Exception $e){}
                            }
                        }
                    }catch (\Exception $e){}


                    //file upload data
                    try{
                        $files = $request->post('file_name');
                        if($files && count($files) > 0) {
                            $documentFileData = [];
                            foreach ( $files as $key => $file) {
                                $documentFile = new IndicatorRegistrationFile();
                                $documentFile->store_by = Auth::id();
                                $documentFile->name = $file;
                                $documentFile->file_section = $request->post('file_section')[$key];
                                $documentFile->path = $request->post('file_path')[$key];
                                $documentFileData[] = $documentFile;
                            }
                            $p->indicatorRegistrationFiles()->saveMany($documentFileData);
                        }
                    }catch (\Exception $e){
                    }
                    return redirect(route('indicator-registration.index'))->with(['type' => 'success', 'msg' => 'Indicator registration is successfully Updated.']);

                }else{
                    return redirect(route('indicator-registration.index'))->with(['type' => 'success', 'msg' => 'Indicator registration Fail to Updated.']);
                }

            }catch (\Exception $e){
                return redirect(route('indicator-registration.index'))->with(['type' => 'success', 'msg' => 'Indicator registration Fail to Updated.']);
            }
        }else{
            return redirect(route('indicator-registration.index'))->with(['type' => 'error', 'msg' => 'Indicator registration Fail to Updated.']);
        }
    }

}
