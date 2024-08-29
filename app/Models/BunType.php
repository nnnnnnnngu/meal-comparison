<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BunType extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function meals()
    {
        return $this->belongsToMany(Meal::class);
    }
}

