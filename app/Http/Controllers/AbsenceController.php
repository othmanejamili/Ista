<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absence;
use Illuminate\Support\Carbon;

class AbsenceController extends Controller
{
    public function show()
    {
        // Fetch all absences
        $absences = Absence::all();
    
        // Pass the absences data to the view
        return view('absences.calendar', ['absences' => $absences]);
    }

    public function find($CodeDiplome)
    {
        $absences = Absence::where('CodeDiplome', $CodeDiplome)->get();
        return $absences;
    }
    public function fetchAbsence()
    {
        $today = Carbon::today();
        $absences = Absence::whereDate('date_absence', $today)->get();
    
        return view('absences.find', ['absences' => $absences]);
    }
    

    public function edit($id)
    {
        $absence = Absence::findOrFail($id);
        return view('absences.edit', ['absence' => $absence]);
    }


    public function update(Request $request, $id)
    {
        $absence = Absence::findOrFail($id);
        $absence->Nom = $request->input('Nom');
        $absence->Prenom = $request->input('Prenom');
        $absence->CodeDiplome = $request->input('CodeDiplome');
        $absence->date_absence = $request->input('date_absence');
        $absence->heur_absence = $request->input('heur_absence');
        $absence->save();

        return redirect()->route('absences.edit', $id)->with('success', 'Absence updated successfully');
    }
}
