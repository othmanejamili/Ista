<?php

namespace App\Http\Controllers;

use App\Models\ista;
use Illuminate\Http\Request;

class IstaController extends Controller
{
    public function store(Request $request)
    {
            // Validate the incoming request
    $request->validate([
        'niveau_form' => 'required|max:25|string', // Ensure that the 'filier' field is required
        'filier' => 'required', // Allow 'ista' to be nullable or empty
        'type_form' => 'required|max:25|string',
        'mode_form' => 'required|max:25|string',
        'group' => 'required|max:25|string',
        'annee_form' => 'required|max:25|string',


    ]);
        $ista = new ista();
        $ista->niveau_form = $request->niveau_form;
        $ista->filier = $request->filier;
        $ista->type_form = $request->type_form;
        $ista->mode_form = $request->mode_form;
        $ista->group = $request->group;
        $ista->annee_form = $request->annee_form;

        $ista->save(); // Removed unnecessary argument

        return redirect()->route('ista.create')->with('success', 'ista created successfully');
    }

    public function create()
    {
        return view('ista.create');
    }
    public function show()
    {
        $ista=ista::all();
        return view('ista.show',['ista'=>$ista]);
    }
    public function show_user()
    {
        $ista=ista::all();
        return view('ista.show_user',['ista'=>$ista]);
    }
    public function edit($id)
{
    $ista = ista::findOrFail($id);
    return view('ista.edit', ['ista' => $ista]);
}
    public function update(Request $request, $id)
    {
        $ista = ista::findOrFail($id);
        $ista->niveau_form = $request->input('niveau_form');
        $ista->filier = $request->input('filier');
        $ista->type_form = $request->input('type_form');
        $ista->mode_form = $request->input('mode_form');
        $ista->group = $request->input('group');
        $ista->annee_form = $request->input('annee_form');
        $ista->save();

        return redirect()->route('ista.edit', $id)->with('success', 'ista updated successfully');
    }
    public function destroy($id)
    {
        $ista = ista::findOrFail($id);
        $ista ->delete();
     
        return redirect()->route('ista.show', $id)->with('success', 'ista deleted successfully');

    }
}
