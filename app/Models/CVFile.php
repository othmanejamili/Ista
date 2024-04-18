<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CVFile extends Model
{
    protected $table = 'cv_files'; // Specify the table name

    protected $fillable = ['file_name', 'file_path','filier','year','nom','prenom'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
