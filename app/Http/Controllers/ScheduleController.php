<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\create_absence; // Correct class name convention

class ScheduleController extends Controller
{
    public function showUploadForm()
    {
        return view('Schedule.upload');
    }

    public function uploadImage(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'image_file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);

        if ($request->hasFile('image_file')) {
            $file = $request->file('image_file');
            $fileName = time() . '_' . $file->getClientOriginalName();
    
            // Store the file using Laravel's file storage
            $file->storeAs('public/create_absences', $fileName);
    
            // Store CV file record in the database
            $create_absence = new create_absence(); // Correct class name
            $create_absence->file_name = $fileName;
            $create_absence->file_path = $fileName;
            $create_absence->save();
    
            return redirect()->back()->with('success', 'Image uploaded successfully.');
        } else {
            return redirect()->back()->with('error', 'No file uploaded.');
        }
    }

    public function show_pic()
    {
        $create_absences = create_absence::all(); // Retrieve all image records
        return view('Schedule.show', ['create_absences' => $create_absences]);
    }
}
