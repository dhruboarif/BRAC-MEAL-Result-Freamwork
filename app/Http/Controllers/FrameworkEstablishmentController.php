<?php

namespace App\Http\Controllers;

use App\Models\Pillar;
use App\Models\PillarDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FrameworkEstablishmentController extends Controller
{
    public function index()
    {
        $data = Pillar::orderBy('created_at', 'desc')->paginate(5);
//        dd($data);
//        $data = DB::table('pillars')
//            ->orderBy('pillars.id','desc')
//            ->join('pillar_details','pillar_details.pillar_id','=','pillars.id')
//            ->select('pillars.*','pillar_details.type','pillar_details.number')
//            ->paginate(5);
        $i=0;
        foreach ($data as $item){
            $data[$i]->details = DB::table('pillar_details')
                ->where('pillar_id',$item->id)
                ->select('pillar_details.type','pillar_details.number')
                ->get();
            $i++;
        }

        return view('framework-establishment.index',['data' => $data]);
    }

    public function create()
    {
        return view('framework-establishment.create');
    }


    public function store(Request $request)
    {
        $validate = $request->validate([
            'pillar_number' => 'required|max:255',
            'pillar_name' => 'required|max:255',
        ], [
            'pillar_number' => 'Pillar number is required',
            'pillar_name' => 'Pillar statement is required',
        ]);
        if($validate){
            try{

                $p = new Pillar();
                $p->name = $request->post('pillar_name');
                $p->number = $request->post('pillar_number');
                $p->user_id = Auth::id();
                $p->save();

                if(!empty($request->post('number')) && count($request->post('number')) > 0) {
                    $pd = [];
                    foreach ($request->post('number') as $key => $number) {
                        $d = new PillarDetails();
                        $d->type = $request->post('type')[$key]; //IMPACT, OUTCOME, OUTPUT
                        $d->statement = $request->post('statement')[$key];
                        $d->number = $number;
                        $d->user_id = Auth::id();
                        $pd[] = $d;
                    }
                    $p->pillarDetails()->saveMany($pd);
                }
                return redirect(route('framework-establishment.index'))->with(['type' => 'success', 'msg' => 'Framework Establishment is successfully added.']);

            }catch (\Exception $e){
                return redirect(route('framework-establishment.create'))
                    ->with(['type'=>'error', 'msg'=>'Failed to add Framework Establishment. Please try again later.']);
            }
        }

    }

    public function show($id){
        $data = Pillar::findOrFail($id);
        $details = PillarDetails::where('pillar_id', $id)->get();
        return view('framework-establishment.show', ['data'=>$data, 'details'=>$details]);
    }

    public function edit($id)
    {
        $data = Pillar::findOrFail($id);
        $details = PillarDetails::where('pillar_id', $id)->get();
        return view('framework-establishment.edit', ['data'=>$data, 'details'=>$details]);
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'pillar_number' => 'required',
            'pillar_name' => 'required',
            'number' => 'required',
            'statement' => 'required',
        ], [
            'pillar_number' => 'Pillar number is required',
            'pillar_name' => 'Pillar name is required',
            'number' => 'Number is required',
            'statement' => 'Statement is required',
        ]);

        if($validate){
            //Update pillar information
            $pillar = Pillar::findOrFail($id);
            $pillar->name = $request->post('pillar_name');
            $pillar->number = $request->post('pillar_number');
            if($pillar->update()){
                foreach ($request->post('number') as $key=>$number){
                    $pdId = $request->post('id')[$key];
                    if(!empty($pdId)){

                        //Update old pillar details
                        PillarDetails::where("id",$pdId)
                            ->update([
                                "type" => $request->post('type')[$key], //IMPACT, OUTCOME, OUTPUT
                                "statement" => $request->post('statement')[$key],
                                "number" => $number
                            ]);
                    }else{

                        //Add new pillar details
                        $pillarDetails = new PillarDetails();
                        $pillarDetails->type = $request->post('type')[$key]; //IMPACT, OUTCOME, OUTPUT
                        $pillarDetails->statement = $request->post('statement')[$key];
                        $pillarDetails->number = $number;
                        $pillarDetails->user_id = Auth::id();
                        $pillarDetails->pillar_id = $id;
                        $pillarDetails->save();
                    }
                }
                try{
                    if(!empty($request->post('edited_ids'))){
                        PillarDetails::whereIn('id', explode(',', $request->post('edited_ids')))->delete();
                    }
                    if(!empty($request->post('outcome_edit_ids'))){
                        PillarDetails::whereIn('id', explode(',', $request->post('outcome_edit_ids')))->delete();
                    }
                    if(!empty($request->post('output_edit_ids'))){
                        PillarDetails::whereIn('id', explode(',', $request->post('output_edit_ids')))->delete();
                    }
                }catch (\Exception $e){}
                //Delete old pillar details
                try{
                    if(!empty($request->post('deleted_ids'))){
                        PillarDetails::whereIn('id', explode(',', $request->post('deleted_ids')))->delete();
                    }
                }catch (\Exception $e){}
            }
            return redirect(route('framework-establishment.index'))
                ->with(['type'=>'success', 'msg'=>'Framework Establishment is successfully updated.']);
        }
    }

    public function destroy(Request $request, $id)
    {
        try {
            PillarDetails::where('pillar_id', $id)->delete();
            Pillar::findOrFail($id)->delete();
            return redirect(route('framework-establishment.index'))
                ->with(['type'=>'success', 'msg'=>'Framework Establishment is successfully deleted.']);
        } catch (\Exception $e) {
            return redirect(route('framework-establishment.index'))
                ->with(['type' => 'error', 'msg' => 'Failed to delete. Framework Establishment is used by another source.']);
        }
    }
}
