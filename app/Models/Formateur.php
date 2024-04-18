<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formateur extends Model
{
    protected $fillable = [
        'filier',
        'formateur',
        'model',
        'ista',
    ];

    /**
     * Create a new Formateur instance.
     *
     * @param  array  $attributes
     * @return \App\Models\Formateur
     */
    public static function createFormateur(array $attributes = [])
    {
        return static::create($attributes);
    }

    /**
     * Create a new Formateur instance and persist it to the database.
     *
     * @param  array  $attributes
     * @return \App\Models\Formateur
     */
    public static function createAndSaveFormateur(array $attributes = [])
    {
        return static::create($attributes);
    }

    /**
     * Create a new Formateur instance but don't persist it to the database.
     *
     * @param  array  $attributes
     * @return \App\Models\Formateur
     */
    public static function makeFormateur(array $attributes = [])
    {
        return new static($attributes);
    }
}
