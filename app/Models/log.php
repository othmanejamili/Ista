<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class log extends Model
{
    protected $fillable = [
        'password',


    ];

    /**
     * Create a new category instance.
     *
     * @param  array  $attributes
     * @return \App\Models\log
     */
    public static function createlog(array $attributes = [])
    {
        return static::create($attributes);
    }

    /**
     * Create a new category instance and persist it to the database.
     *
     * @param  array  $attributes
     * @return \App\Models\log
     */
    public static function createAndSaVelog(array $attributes = [])
    {
        return static::create($attributes);
    }

    /**
     * Create a new category instance but don't persist it to the database.
     *
     * @param  array  $attributes
     * @return \App\Models\log
     */
    public static function makelog(array $attributes = [])
    {
        return new static($attributes);
    }
}
