<?php

namespace App\Livewire;

use App\Models\Meal;
use Livewire\Component;

class MealDetail extends Component
{
    public $meal;

    public $recommendations = [];

    public function mount($mealId)
    {
        $this->meal = Meal::with(['ingredients', 'attributes', 'preparationMethods', 'sauces', 'bunTypes', 'meatOptions'])
            ->findOrFail($mealId);

        $this->recommendations = Meal::where('location_id', $this->meal->location_id)
            ->where('id', '!=', $this->meal->id)
            ->limit(3)
            ->get();
    }
}
