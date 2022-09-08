<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use App\Models\Support;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SupportController extends Controller
{
    public function index()
    {
        $supports = Support::all();
        return view('support.index',['supports' => $supports]);
    }

    public function create()
    {
        return view('support.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
        ]);
        //$show = Donor::create($validatedData);
        if($validatedData){
            $support = new Support();
            $support->name = $request->post('name');
            $support->description = $request->post('description');
            $support->user_id = Auth::id();
            $support->save();
            return redirect('/support')->with(['type'=>'success', 'msg'=>'Support function is successfully added.']);
        }

    }

    public function edit($id)
    {
        $support = Support::findOrFail($id);
        return view('support.edit', compact('support'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255'
        ]);
        Support::findOrFail($id)->update($validatedData);
        return redirect('/support')->with(['type'=>'success', 'msg'=>'Support function is successfully updated.']);
    }

    public function destroy(Request $request, $id)
    {
        Support::findOrFail($id)->delete();
        return redirect('/support')->with(['type'=>'success', 'msg'=>'Support function is successfully deleted.']);
    }
}
