<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User; // Import your User model

class HashPasswords extends Command
{
    protected $signature = 'passwords:hash';
    
    protected $description = 'Hash all passwords in the database';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // Retrieve all users (or other model) from the database
        $users = User::all();
        
        // Loop through each user and hash their password
        foreach ($users as $user) {
            $user->password = bcrypt($user->password);
            $user->save();
        }

        $this->info('Passwords hashed successfully.');
    }
}
