<?php

namespace App\Http\Controllers\Sdg;

use App\Models\Pillar;
use App\Models\PillarDetails;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class IndicatorEstablishmentController extends Controller
{
    public function create()
    {
        return view('sdg.indicator-establishment.create');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'pillar_number' => 'required|max:255',
            'pillar_name' => 'required|max:255',
            'number' => 'required|max:255',
            'statement' => 'required|max:255',
        ], [
            'pillar_number' => 'Pillar number is required',
            'pillar_name' => 'Pillar name is required',
            'number' => 'Pillar name is required',
            'statement' => 'Pillar name is required',
        ]);
        if($validate){
            DB::beginTransaction();
            $p = new Pillar();
            $p->name = $request->post('pillar_number');
            $p->number = $request->post('pillar_name');
            $p->user_id = Auth::id();
            $p->save();

            $pd = [];
            foreach ($request->post('number') as $key=>$number){
                $d = new PillarDetails();
                $d->user_id = Auth::id();
                $d->statement = $request->post('statement')[$key];
                $d->number = $number;
                $pd[] = $d;
            }
            $p->pillarDetails()->saveMany($pd);
            return redirect(route('sdg.indicator-establishment.create'))
                ->with(['type'=>'success', 'msg'=>'Pillar is successfully added.']);
        }

    }
}
