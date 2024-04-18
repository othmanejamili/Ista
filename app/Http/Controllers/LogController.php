<?php

namespace App\Http\Controllers;
use App\Models\user; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; // Import the Hash facade
use Illuminate\Support\Facades\Session; // Import the Hash facade


class LogController extends Controller
{

    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'Nom' => 'required|min:3',
            'Prenom' => 'required|min:3',
            
            'password' => 'required|min:4|max:9|confirmed|unique:users', // Corrected 'confirmed' rule
        ]);
        
        // Hash the password
        $hashedPassword = Hash::make($request->password);

        // Create and save the log
        $log = new user();
        $log->Nom = $request->Nom;
        $log->Prenom = $request->Prenom;
        $log->password = $hashedPassword; // Save the hashed password
        $log->CodeDiplome = 'default_value'; // Provide a default value for CodeDiplome
        $log->save();

        // Redirect with success message
        return redirect()->route('log.create')->with('success', 'log created successfully');
    }

    public function create()
    {
        return view('log.create');
    }
    public function show()
    {
        return view('log.show');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('password','Nom');
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
    
            // Check the role of the authenticated user
            if (Auth::user()->role === 'admin') {
                return redirect('/ista')->with('success', 'Vous êtes connecté  Admine avec succès.');
            } else {
                return redirect('/Accueil')->with('success', 'Vous êtes connecté avec succès.');
            }
        } else {
            return back()->withErrors(['password','Nom' => 'Invalid password'])->withInput($request->only('password','Nom'));
        }
    }
    
    public function drop()
    {
        Session::flush();
        Auth::logout();
        return redirect('/Accueil')->with('success', 'Vous êtes deconnecté avec succès.');
    }
    

    }

 

