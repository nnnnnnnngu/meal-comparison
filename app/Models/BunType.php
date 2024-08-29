<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BunType extends Model
{
    protected $fillable = ['name'];

    public function meals()
    {
        return $this->belongsToMany(Meal::class);
    }
}

