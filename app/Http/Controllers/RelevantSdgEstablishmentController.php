<?php

namespace App\Http\Controllers;

use App\Models\SdgGoal;
use App\Models\SdgIndicator;
use App\Models\SdgTarget;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RelevantSdgEstablishmentController extends Controller
{
    public function index()
    {
        $data = SdgGoal::orderBy('id', 'desc')->paginate(5);
        $i =0;
        foreach ($data as $datum ){
            $data[$i]->targets = DB::table('sdg_targets')
                ->where('goal_id',$datum->id)
                ->select('sdg_targets.name')
                ->get();
            $i++;
        }
        return view('relevant-sdg-establishment.index',['data' => $data]);
    }
    public function create()
    {
        return view('relevant-sdg-establishment.create');
    }
    public function store(Request $request)
    {
        try{
            $check = DB::table('sdg_goals')
                ->where('name', '=', $request->post('goal'))
                ->first();
            if ($check){
                return redirect(route('relevant-sdg-establishment.create'))
                    ->with(['type'=>'error', 'msg'=>'Failed to add Relevant SDG Establishment. Goal Name Can not be Duplicate.']);
            }

            $gObject = new SdgGoal();
            $gObject->name = $request->post('goal');
            $gObject->user_id = Auth::id();

            if($gObject->save()){
                $g_id = $gObject->id;
                $targets = $request->post('target');
                if($targets && count($targets) > 0){
                    foreach ( $targets as $key => $t) {
                        $tObject = new SdgTarget();
                        $tObject->name = $t;
                        $tObject->user_id = Auth::id();
                        if($gObject->sdgTargets()->save($tObject)){

                            $indicatorsTargetId = $request->post('target_id')[$key];
                            $numbers = $request->post('number_'.$indicatorsTargetId);
                            $statements = $request->post('statement_'.$indicatorsTargetId);
                            $indicatorData= [];
                            foreach ($numbers as $nk => $n) {
                                $iObject = new SdgIndicator();
                                $iObject->number = $n;
                                $iObject->statement = $statements[$nk];
                                $iObject->user_id = Auth::id();
                                $iObject->goal_id = $g_id;
                                $indicatorData[] = $iObject;
                            }
                            $tObject->sdgIndicators()->saveMany($indicatorData);
                        }
                    }
                }
                return redirect(route('relevant-sdg-establishment.create'))
                    ->with(['type'=>'success', 'msg'=>'Relevant SDG Establishment is successfully added.']);
            }else{
                return redirect(route('relevant-sdg-establishment.create'))
                    ->with(['type'=>'error', 'msg'=>'Failed to add Relevant SDG Establishment. Please try again laters.']);
            }

        }catch (\Exception $e){
            return redirect(route('relevant-sdg-establishment.create'))
                ->with(['type'=>'error', 'msg'=>'Failed to add Relevant SDG Establishment. Please try again laterss.']);
        }

    }

    public function show($id)
    {
        $data = SdgGoal::findOrFail($id);
        return view('relevant-sdg-establishment.show', [
            'data' => $data,
        ]);
    }

    public function edit($id)
    {
        $data = SdgGoal::findOrFail($id);
//        $dataIndicator = SdgIndicator::where('goal_id', $id)->get();
        $dataIndicator = DB::table('sdg_targets')
            ->where('sdg_targets.goal_id', $id)
            ->select('sdg_targets.name as target','sdg_targets.id as t_id')
            ->get();
        $i =0;
        foreach ($dataIndicator as $item) {
            $dataIndicator[$i]->indicators = DB::table('sdg_indicators')
                ->where('sdg_indicators.goal_id', $id)
                ->where('sdg_indicators.target_id', $item->t_id)
                ->get();
            $i++;
        }
        return view('relevant-sdg-establishment.edit', ['data'=>$data, 'dataIndicator'=>$dataIndicator]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
        ]);
        if($validatedData){
            try{
                $check = DB::table('sdg_goals')
                    ->where('id', '!=', $id)
                    ->where('name', '=', $request->post('name'))
                    ->first();
                if ($check){
                    return redirect()->back()
                        ->with(['type'=>'error', 'msg'=>'Failed to add Relevant SDG Establishment. Goal Name Can not be Duplicate.']);
                }
                $sdgGoal = SdgGoal::findOrFail($id);
                $sdgGoal->name = $request->post('name');
                $sdgGoal->user_id = Auth::id();
                $sdgGoal->update();
//                $target_id = $request->post('target_id');
                foreach ($request->post('target_id') as $key=>$num){
                    $tr_name = $request->post('target')[$key];
                    $tr_update = DB::table('sdg_targets')
                        ->where('id',$num)
                        ->update([
                            'name'=> $tr_name,
                        ]);
                }
                foreach ($request->post('number') as $key=>$number){
                    $indicator_id = $request->post('indicator_id')[$key];

                    if(!empty($indicator_id)){
                        $ind_update = DB::table('sdg_indicators')
                            ->where('id',$indicator_id)
                            ->update([
                                'number'=> $number,
                                'statement' => $request->post('statement')[$key],
                                'user_id' => Auth::id(),
                                'goal_id' => $id,
                            ]);
                    }else{
                        if ($request->post('new_tr_id')){
                            foreach ($request->post('new_tr_id') as $key=>$t){
                                $ind_update = DB::table('sdg_indicators')
                                    ->insert([
                                        'number'=> $number,
                                        'statement' => $request->post('statement')[$key],
                                        'user_id' => Auth::id(),
                                        'goal_id' => $id,
                                        'target_id' => $t,
                                        'created_at' => date('Y-m-d H:i:s'),
                                        'updated_at' => date('Y-m-d H:i:s'),
                                    ]);
                            }
                        }
                    }
                }
                    if(!empty($request->post('deleted_ids'))){
                        SdgIndicator::whereIn('id', explode(',', $request->post('deleted_ids')))->delete();
                    }


                return redirect(route('relevant-sdg-establishment.index'))
                    ->with(['type'=>'success', 'msg'=>'Relevant SDG Establishment is successfully updated.']);
            }catch (\Exception $e){
                DB::rollback();
                return redirect(route('relevant-sdg-establishment.create'))
                    ->with(['type'=>'error', 'msg'=>'Failed to update Relevant SDG Establishment. Please try again later.']);
            }
        }else{
            return redirect(route('relevant-sdg-establishment.edit'))
                ->with(['type'=>'error', 'msg'=>'Failed to update Relevant SDG Establishment. Please try again later.']);
        }
    }

    public function destroy(Request $request, $id)
    {
        try {
            SdgIndicator::where('goal_id', $id)->delete();
            $tr_dlt = DB::table('sdg_targets')->where('goal_id',$id)->delete();
            SdgGoal::findOrFail($id)->delete();
            return redirect(route('relevant-sdg-establishment.index'))
                ->with(['type' => 'success', 'msg' => 'Relevant SDG Establishment is successfully deleted.']);

        } catch (\Exception $e) {
            return redirect(route('relevant-sdg-establishment.index'))
                ->with(['type' => 'error', 'msg' => 'Failed to delete. Relevant SDG Establishment is used by another source.']);
        }
    }
}
