<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DonorController extends Controller
{
    public function index()
    {
        $donors = Donor::orderBy('id', 'desc')->paginate(5);
        return view('donor.index',['donors' => $donors]);
    }

    public function create()
    {
        return view('donor.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
        ]);
        //$show = Donor::create($validatedData);
        if($validatedData){
            $donor = new Donor();
            $donor->name = $request->post('name');
            $donor->description = $request->post('description');
            $donor->user_id = Auth::id();
            $donor->save();
            return redirect('/donor')->with(['type'=>'success', 'msg'=>'Donor is successfully added.']);
        }

    }

    public function edit($id)
    {
        $donor = Donor::findOrFail($id);
        return view('donor.edit', compact('donor'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255'
        ]);
        Donor::findOrFail($id)->update($validatedData);
        return redirect('/donor')->with(['type'=>'success', 'msg'=>'Donor is successfully updated.']);
    }

    public function destroy(Request $request, $id)
    {
        Donor::findOrFail($id)->delete();
        return redirect('/donor')->with(['type'=>'success', 'msg'=>'Donor is successfully deleted.']);
    }
}
