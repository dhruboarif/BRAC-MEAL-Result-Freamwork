<?php

namespace App\Http\Controllers;

use App\Models\Thematic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ThematicController extends Controller
{
    public function index()
    {
        $thematics = Thematic::orderBy('id', 'desc')->paginate(5);
        return view('thematic.index',['thematics' => $thematics]);
    }

    public function create()
    {
        return view('thematic.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
        ]);
        //$show = Thematic::create($validatedData);
        if($validatedData){
            $thematic = new Thematic();
            $thematic->name = $request->post('name');
            $thematic->description = $request->post('description');
            $thematic->user_id = Auth::id();
            $thematic->save();
            return redirect('/thematic')->with(['type'=>'success', 'msg'=>'Thematic area is successfully added.']);
        }

    }

    public function edit($id)
    {
        $thematic = Thematic::findOrFail($id);
        return view('thematic.edit', compact('thematic'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255'
        ]);
        Thematic::findOrFail($id)->update($validatedData);
        return redirect('/thematic')->with(['type'=>'success', 'msg'=>'Thematic area is successfully updated.']);
    }

    public function destroy(Request $request, $id)
    {
        Thematic::findOrFail($id)->delete();
        return redirect('/thematic')->with(['type'=>'success', 'msg'=>'Thematic area is successfully deleted.']);
    }
}
