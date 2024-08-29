<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'meal_type', 'location_id', 'image_url'];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class);
    }

    public function attributes()
    {
        return $this->belongsToMany(Attribute::class);
    }

    public function preparationMethods()
    {
        return $this->belongsToMany(PreparationMethod::class);
    }

    public function sauces()
    {
        return $this->belongsToMany(Sauce::class);
    }

    public function bunTypes()
    {
        return $this->belongsToMany(BunType::class);
    }

    public function meatOptions()
    {
        return $this->belongsToMany(MeatOption::class);
    }
}

