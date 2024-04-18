<?php

namespace App\Http\Controllers;

use App\Models\voitures;
use Illuminate\Http\Request;

class VoitureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


  
     public function store(Request $request)
     {
         // Validate the incoming request
         $request->validate([
             'voiture' => 'required|max:25|string', // Ensure that the 'voiture' field is required
             'tyoe' => 'required|max:25|string', // Ensure 'type' to be nullable or empty
             'color' => 'required|max:25|string', // Ensure 'color' is either boolean or nullable
         ]);
     
         // Create a new Voiture instance
         $voitures = new voitures();
         $voitures->voiture = $request->input('voiture');
         $voitures->tyoe = $request->input('tyoe');
         $voitures->color = $request->input('color');
                 
         $voitures->save();
     

         return redirect()->route('voitures.create')->with('success', 'voitures created successfully');;        
        }
     

public function create()
{
    return view('voitures.create');
}


public function show()
{
    $voitures = Voitures::all(); // Fetch all voitures using the Voiture model

    return view('voitures.show', compact('voitures')); // Pass voitures data to the view
}


public function edit($id)
{
    $voitures = voitures::findOrFail($id);
    return view('voitures.edite', ['voitures' => $voitures]);
}
    public function update(Request $request, $id)
    {
        $voitures = voitures::findOrFail($id);
        $voitures->voiture = $request->input('voiture');
        $voitures->color = $request->input('color');
        $voitures->tyoe = $request->input('tyoe');
        $voitures->save();

        return redirect()->route('voitures.edite', $id)->with('success', 'voitures updated successfully');
    }
    public function destroy($id)
    {
        $voitures = voitures::findOrFail($id);
        $voitures ->delete();
     
        return redirect()->route('voitures.show', $id)->with('success', 'voitures deleted successfully');

    }
}

  


