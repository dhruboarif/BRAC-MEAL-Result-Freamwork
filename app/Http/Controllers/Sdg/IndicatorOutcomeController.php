<?php

namespace App\Http\Controllers\Sdg;

use App\Models\IndicatorOutcome;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class IndicatorOutcomeController extends Controller
{

    public function index()
    {
        $data = IndicatorOutcome::orderBy('id', 'desc')->paginate(5);
        return view('sdg.indicator-outcome.index',['data' => $data]);
    }
    public function create()
    {
        return view('sdg.indicator-outcome.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'indicator_no' => 'required|max:255',
            'indicator_description' => 'required|max:255',
            'outcome_no' => 'required|max:255',
            'outcome_description' => 'required|max:255',
        ]);

        if($validatedData){
            $objData = new IndicatorOutcome();
            $objData->indicator_no = $request->post('indicator_no');
            $objData->indicator_description = $request->post('indicator_description');
            $objData->outcome_no = $request->post('outcome_no');
            $objData->outcome_description = $request->post('outcome_description');
            $objData->user_id = Auth::id();
            $objData->save();
            return redirect(route('sdg.indicator-outcome.index'))
                ->with(['type'=>'success', 'msg'=>'Indicator & Outcome is successfully added.']);
        }

    }

    public function edit($id)
    {
        $data = IndicatorOutcome::findOrFail($id);
        return view('sdg.indicator-outcome.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'indicator_no' => 'required|max:255',
            'indicator_description' => 'required|max:255',
            'outcome_no' => 'required|max:255',
            'outcome_description' => 'required|max:255',
        ]);
        IndicatorOutcome::findOrFail($id)->update($validatedData);
        return redirect(route('sdg.indicator-outcome.index'))
            ->with(['type'=>'success', 'msg'=>'Indicator and Outcome  is successfully updated.']);
    }

    public function destroy(Request $request, $id)
    {
        IndicatorOutcome::findOrFail($id)->delete();
        return redirect(route('sdg.indicator-outcome.index'))
            ->with(['type'=>'success', 'msg'=>'Indicator and Outcome is successfully deleted.']);
    }
}
