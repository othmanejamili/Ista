<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    protected $table = 'absences';

    protected $fillable = [     
        'Nom',
        'Prenom',
        'CodeDiplome',
        'date_absence',
        'heur_absence',
    ];

    protected $dates = ['date_absence']; // Cast date_absence to a Carbon instance
}
