<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class voitures extends Model
{
    protected $fillable = [
        'voiture',
        'color',
        'tyoe',
    ];

    /**
     * Create a new category instance.
     *
     * @param  array  $attributes
     * @return \App\Models\voitures
     */
    public static function createVoitures(array $attributes = [])
    {
        return static::create($attributes);
    }

    /**
     * Create a new category instance and persist it to the database.
     *
     * @param  array  $attributes
     * @return \App\Models\Voitures
     */
    public static function createAndSaVevoitures(array $attributes = [])
    {
        return static::create($attributes);
    }

    /**
     * Create a new category instance but don't persist it to the database.
     *
     * @param  array  $attributes
     * @return \App\Models\Voitures
     */
    public static function makeVoitures(array $attributes = [])
    {
        return new static($attributes);
    }
}