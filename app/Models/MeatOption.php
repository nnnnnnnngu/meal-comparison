<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MeatOption extends Model
{
    protected $fillable = ['name'];

    public function meals()
    {
        return $this->belongsToMany(Meal::class);
    }
}

