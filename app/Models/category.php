<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'description',
        'is_active',
    ];

    /**
     * Create a new category instance.
     *
     * @param  array  $attributes
     * @return \App\Models\Category
     */
    public static function createCategory(array $attributes = [])
    {
        return static::create($attributes);
    }

    /**
     * Create a new category instance and persist it to the database.
     *
     * @param  array  $attributes
     * @return \App\Models\Category
     */
    public static function createAndSaveCategory(array $attributes = [])
    {
        return static::create($attributes);
    }

    /**
     * Create a new category instance but don't persist it to the database.
     *
     * @param  array  $attributes
     * @return \App\Models\Category
     */
    public static function makeCategory(array $attributes = [])
    {
        return new static($attributes);
    }
}
