<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CVFile;
use Illuminate\Support\Facades\Storage;
use DB;

class CVController extends Controller
{
    public function showUploadForm()
    {
        return view('cv.upload_cv');
    }

    public function uploadCVFile(Request $request)
    {
        $rules = [
            'pdf_file' => 'required|file',
            'nom' => 'required',
            'prenom' => 'required',
            'filier' => 'required',
            'year' => 'required',
        ];
    
        // Validate the request
        $validatedData = $request->validate($rules);
    
        // Proceed with file upload and other operations if validation passes
        if ($request->hasFile('pdf_file')) {
            $file = $request->file('pdf_file');
            $fileName = time() . '_' . $file->getClientOriginalName();
    
            // Store the file using Laravel's file storage
            $file->storeAs('public/cvfiles', $fileName);
    
            // Store CV file record in the database
            $CVFile = new CVFile();
            $CVFile->file_name = $fileName;
            $CVFile->file_path = $fileName;
            $CVFile->filier = $request->input('filier');
            $CVFile->year = $request->input('year');
            $CVFile->nom = $request->input('nom');
            $CVFile->prenom = $request->input('prenom');
            $CVFile->save();
    
            return redirect()->back()->with('success', 'CV uploaded successfully.');
        } else {
            return redirect()->back()->with('error', 'No file uploaded.');
        }
    }

    public function show()
    {
        $CVFiles = CVFile::all(); // Correct variable name
        return view('cv.download', ['CVFiles' => $CVFiles]); // Pass the correct variable name to the view
    }
    

    public function downloadPDF($id)
    {
        // Find the CVFile by its ID
        $CVFile = CVFile::find($id);
        
        if ($CVFile) {
            // Retrieve the file path
            $filePath = storage_path('app/public/cvfiles/' . $CVFile->file_name);
            
            // Check if the file exists
            if (file_exists($filePath)) {
                // Read the file contents
                $fileContent = file_get_contents($filePath);
                
                // Provide the file for download with appropriate headers
                return response()->make($fileContent, 200, [
                    'Content-Type' => 'application/pdf',
                    'Content-Disposition' => 'attachment; filename="' . $CVFile->file_name . '"',
                ]);
            } else {
                // If the file doesn't exist, redirect back with an error message
                return redirect()->back()->with('error', 'PDF file not found.');
            }
        } else {
            // If the CVFile with the given ID doesn't exist, redirect back with an error message
            return redirect()->back()->with('error', 'CVFile not found.');
        }
    }
}
