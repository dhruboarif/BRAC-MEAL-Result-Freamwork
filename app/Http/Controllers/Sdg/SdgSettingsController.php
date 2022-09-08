<?php

namespace App\Http\Controllers\Sdg;

use App\Models\SdgGoal;
use App\Models\SdgIndicator;
use App\Models\StudyFile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SdgSettingsController extends Controller
{
    public function index()
    {
        $data = SdgGoal::orderBy('id', 'desc')->paginate(5);
        return view('sdg.settings.index',['data' => $data]);
    }
    public function create()
    {
        return view('sdg.settings.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'indicator_name' => 'required|max:255',
            'sdg_target' => 'required|max:255',
        ]);

        if($validatedData){
            try{
                DB::beginTransaction();
                $objData = new SdgGoal();
                $objData->name = $request->post('name');
                $objData->user_id = Auth::id();
                $objData->save();

                $indicatorsData = [];
                foreach ($request->post('indicator_name') as $key=>$indicatorName){
                    $d = new SdgIndicator();
                    $d->user_id = Auth::id();
                    $d->indicator_name = $indicatorName;
                    $d->sdg_target =$request->post('sdg_target')[$key];
                    $indicatorsData[] = $d;
                }
                $objData->sdgIndicators()->saveMany($indicatorsData);

                DB::commit();
                return redirect(route('sdg.settings.index'))->with(['type'=>'success', 'msg'=>'SDG Settings is successfully added.']);
            }catch (\Exception $e){
                DB::rollback();
                return redirect(route('sdg.settings.create'))
                    ->with(['type'=>'error', 'msg'=>'Failed to add SDG Settings. Please try again later.']);
            }

        }

    }

    public function edit($id)
    {
        $data = SdgGoal::findOrFail($id);
        return view('sdg.settings.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'indicator_name' => 'required|max:255',
            'sdg_target' => 'required|max:255',
        ]);
        if($validatedData){
            try{
                $objData = SdgGoal::findOrFail($id);
                $objData->name = $request->post('name');
                $objData->user_id = Auth::id();
                $objData->update();

                $indicatorsData = [];
                foreach ($request->post('indicator_name') as $key=>$indicatorName){
                    if(!empty($request->post('indicator_id')[$key])){
                        $d = SdgIndicator::findOrFail($request->post('indicator_id')[$key]);
                        $d->user_id = Auth::id();
                        $d->indicator_name = $indicatorName;
                        $d->sdg_target =$request->post('sdg_target')[$key];
                        $d->goal_id =$id;
                        $d->update();
                    }else{
                        $d = new SdgIndicator();
                        $d->user_id = Auth::id();
                        $d->indicator_name = $indicatorName;
                        $d->sdg_target =$request->post('sdg_target')[$key];
                        $d->goal_id =$id;
                        $d->save();
                    }

                    if(!empty($request->post('deleted-indicators'))){
                        SdgIndicator::whereIn('id', explode(',', $request->post('deleted-indicators')))->delete();
                    }

                }

                return redirect(route('sdg.settings.index'))->with(['type'=>'success', 'msg'=>'SDG Settings is successfully added.']);
            }catch (\Exception $e){
                DB::rollback();

                dd($e->getMessage());
                return redirect(route('sdg.settings.create'))
                    ->with(['type'=>'error', 'msg'=>'Failed to add SDG Settings. Please try again later.']);
            }
        }else{
            return redirect(route('sdg.settings.edit'))
                ->with(['type'=>'error', 'msg'=>'Failed to update SDG Settings. Please try again later.']);
        }


    }

    public function destroy(Request $request, $id)
    {
        try {
            SdgIndicator::where('goal_id', $id)->delete();
            SdgGoal::findOrFail($id)->delete();
            return redirect(route('sdg.settings.index'))->with(['type' => 'success', 'msg' => 'SDG Setting is successfully deleted.']);

        } catch (\Exception $e) {
            return redirect(route('sdg.settings.index'))->with(['type' => 'error', 'msg' => 'Failed to delete. SDG Setting is used by another source.']);
        }
    }
}
