<?php

use Illuminate\Database\Seeder;
use App\Models\User; // Import the User model if it's located in the App\Models namespace

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Read and decode JSON file
        $jsonFile = storage_path('app/users.json'); // Replace 'users.json' with the path to your JSON file
        $jsonData = json_decode(file_get_contents($jsonFile), true);

        // Insert each user into the database
        foreach ($jsonData as $user) {
            User::create([
                'cin' => $user['CIN'], // Assuming 'CIN' is the key for the user's CIN in your JSON data
                // Add other fields as needed
            ]);
        }
    }
}

