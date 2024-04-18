<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ista extends Model
{
    protected $fillable = [
        'niveau_form',
        'filier',
        'type_form',
        'mode_form',
        'group',
        'annee_form',
    ];

    /**
     * Create a new ista instance.
     *
     * @param  array  $attributes
     * @return \App\Models\ista
     */
    public static function createista(array $attributes = [])
    {
        return static::create($attributes);
    }

    /**
     * Create a new ista instance and persist it to the database.
     *
     * @param  array  $attributes
     * @return \App\Models\ista
     */
    public static function createAndSaveista(array $attributes = [])
    {
        return static::create($attributes);
    }

    /**
     * Create a new ista instance but don't persist it to the database.
     *
     * @param  array  $attributes
     * @return \App\Models\ista
     */
    public static function makeista(array $attributes = [])
    {
        return new static($attributes);
    }
}
