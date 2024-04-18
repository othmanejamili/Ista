<?php

namespace App\Http\Controllers;

use PhpOffice\PhpSpreadsheet\IOFactory;
use Illuminate\Http\Request;
use App\Models\Absence; // Import the Data model if it's located in the App\Models namespace
use Carbon\Carbon;
 

class ExcelToJsonController extends Controller
{
    public function convertExcelToJson(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'file' => 'required|mimes:xlsx,xls',
        ]);
        
        // Get the uploaded file
        $file = $request->file('file');

        // Load Excel file
        $spreadsheet = IOFactory::load($file);

        // Get the first worksheet
        $worksheet = $spreadsheet->getActiveSheet();

        // Initialize an array to store the data
        $data = [];

        // Iterate through each row and store the data
        foreach ($worksheet->getRowIterator() as $row) {
            $rowData = [];
            foreach ($row->getCellIterator() as $cell) {
                $rowData[] = $cell->getValue();
            }
            $data[] = $rowData;
        }

        // Remove the header row
        array_shift($data);

        // Initialize an array to store unique CIN values
        $id = [];

        // Insert the data into the database
        foreach ($data as $row) {
            // Check if the CIN value is unique
            if (!in_array($row[0], $id)) {
                // If unique, add it to the list of unique CINs and insert into the database
                $id[] = $row[0];
                absence::create([
                    'Nom' => $row[0],
                    'Prenom'=> $row[1],
                    'CodeDiplome' => $row[2],

                ]);
            } else {
                // Handle duplicate CIN value (skip, log, or notify)
                // Example: Log a message
                \Log::warning("Duplicate CIN found: {$row[0]}");
            }
        }

        // Optionally, return a response
        return response()->json(['message' => 'Data inserted successfully']);
    }

    public function showConvertForm()
    {
        return view('log.convert');
    }
}
