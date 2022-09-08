<?php

namespace App\Http\Controllers;

use App\Models\DocumentType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DocumentTypeController extends Controller
{
    public function index()
    {
        $documentTypes = DocumentType::paginate(5);
        return view('document-type.index',['documentTypes' => $documentTypes]);
    }

    public function create()
    {
        return view('document-type.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
        ]);
        //$show = DocumentType::create($validatedData);
        if($validatedData){
            $documentType = new DocumentType();
            $documentType->name = $request->post('name');
            $documentType->description = $request->post('description');
            $documentType->user_id = Auth::id();
            $documentType->save();
            return redirect('/document-type')->with(['type'=>'success', 'msg'=>'Document type is successfully added.']);
        }

    }

    public function edit($id)
    {
        $documentType = DocumentType::findOrFail($id);
        return view('document-type.edit', compact('documentType'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255'
        ]);
        DocumentType::findOrFail($id)->update($validatedData);
        return redirect('/document-type')->with(['type'=>'success', 'msg'=>'Document type is successfully updated.']);
    }

    public function destroy(Request $request, $id)
    {
        DocumentType::findOrFail($id)->delete();
        return redirect('/document-type')->with(['type'=>'success', 'msg'=>'Document type is successfully deleted.']);
    }
}
