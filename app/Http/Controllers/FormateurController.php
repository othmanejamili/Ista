<?php

namespace App\Http\Controllers;

use App\Models\Formateur;
use Illuminate\Http\Request;

class FormateurController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'filier' => 'required|max:25|string',
            'formateur' => 'required|max:25|string',
            'model' => 'required|max:25|string',
            'ista' => 'required|max:25|string',
        ]);
    
        // Create a new Formateur instance
        $formateur = new Formateur();
        $formateur->filier = $request->filier;
        $formateur->formateur = $request->formateur;
        $formateur->model = $request->model;
        $formateur->ista = $request->ista;
        $formateur->save();
    
        // Redirect back with success message
        return redirect()->route('formateur.create')->with('success', 'Formateur created successfully');
    }
    

    public function create()
    {
        return view('formateur.create');
    }
    public function show()
    {
        $formateur=formateur::all();
        return view('formateur.show',['formateur'=>$formateur]);
    }
    public function show_user()
    {
        $formateur=formateur::all();
        return view('formateur.show_user',['formateur'=>$formateur]);
    }
    public function edit($id)
{
    $formateur = formateur::findOrFail($id);
    return view('formateur.edit', ['formateur' => $formateur]);
}
    public function update(Request $request, $id)
    {
        $formateur = formateur::findOrFail($id);
        $formateur->filier = $request->input('filier');
        $formateur->formateur = $request->input('formateur');
        $formateur->model = $request->input('model');
        $formateur->ista = $request->input('ista');
        $formateur->save();

        return redirect()->route('formateur.edit', $id)->with('success', 'Formateur updated successfully');
    }
    public function destroy($id)
    {
        $formateur = formateur::findOrFail($id);
        $formateur ->delete();
     
        return redirect()->route('formateur.show', $id)->with('success', 'Formateur deleted successfully');

    }
}
