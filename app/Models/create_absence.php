<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class create_absence extends Model
{
    protected $table = 'create_absence'; // Specify the table name

    protected $fillable = [     
        'file_name',
        'file_path',

    ];
  /**
     * Create a new create_absence instance.
     *
     * @param  array  $attributes
     * @return \App\Models\create_absence
     */
    public static function createcreate_absence(array $attributes = [])
    {
        return static::create($attributes);
    }

    /**
     * Create a new create_absence instance and persist it to the database.
     *
     * @param  array  $attributes
     * @return \App\Models\create_absence
     */
    public static function createAndSavecreate_absence(array $attributes = [])
    {
        return static::create($attributes);
    }

    /**
     * Create a new create_absence instance but don't persist it to the database.
     *
     * @param  array  $attributes
     * @return \App\Models\create_absence
     */
    public static function makecreate_absence(array $attributes = [])
    {
        return new static($attributes);
    }
}
