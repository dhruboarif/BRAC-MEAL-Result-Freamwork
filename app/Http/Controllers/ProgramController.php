<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::orderBy('created_at', 'desc')->paginate(5);
        return view('program.index',['programs' => $programs]);
    }

    public function create()
    {
        return view('program.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'type' => 'required|max:255',
            'category' => 'required|max:255',
            'description' => 'required|max:255',
        ], [
            'category' => 'Is Support Function field is required. ',
            'type' => 'Program Type field is required.'
        ]);
        //$show = Program::create($validatedData);
        if($validatedData){
            $program = new Program();
            $program->name = $request->post('name');
            $program->type = $request->post('type');
            $program->category = $request->post('category');
            $program->description = $request->post('description');
            $program->user_id = Auth::id();
            $program->save();
            return redirect('/program')->with(['type'=>'success', 'msg'=>'Program is successfully added.']);
        }

    }

    public function edit($id)
    {
        $program = Program::findOrFail($id);
        return view('program.edit', compact('program'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'type' => 'required|max:255',
            'category' => 'required|max:255',
            'description' => 'required|max:255'
        ], [
        'category' => 'Is Support Function field is required. ',
            'type' => 'Program Type field is required.'
        ]);
        Program::findOrFail($id)->update($validatedData);
        return redirect('/program')->with(['type'=>'success', 'msg'=>'Program is successfully updated.']);
    }

    public function destroy(Request $request, $id)
    {
        Program::findOrFail($id)->delete();
        return redirect('/program')->with(['type'=>'success', 'msg'=>'Program    is successfully deleted.']);
    }
}
