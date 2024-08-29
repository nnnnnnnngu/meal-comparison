<?php

namespace App\Livewire;

use App\Models\BunType;
use App\Models\MeatOption;
use App\Models\PreparationMethod;
use App\Models\Sauce;
use Livewire\Component;
use App\Models\Meal;
use App\Models\Ingredient;
use App\Models\Attribute;

class MealList extends Component
{
    public $selectedIngredients = [];
    public $selectedAttributes = [];
    public $selectedPreparationMethods = [];
    public $selectedSauces = [];
    public $selectedBunTypes = [];
    public $selectedMeatOptions = [];
//    public $mealType;

    public function render()
    {
        // Fetch meals based on filters
        $meals = Meal::with('ingredients', 'attributes', 'preparationMethods', 'sauces', 'bunTypes', 'meatOptions')
//            ->when($this->mealType, function($query) {
//                $query->where('meal_type', $this->mealType);
//            })
            ->when($this->selectedIngredients, function($query) {
                $query->whereHas('ingredients', function($query) {
                    $query->whereIn('ingredients.id', $this->selectedIngredients);
                });
            })
            ->when($this->selectedAttributes, function($query) {
                $query->whereHas('attributes', function($query) {
                    $query->whereIn('attributes.id', $this->selectedAttributes);
                });
            })
            ->when($this->selectedPreparationMethods, function($query) {
                $query->whereHas('preparationMethods', function($query) {
                    $query->whereIn('preparation_methods.id', $this->selectedPreparationMethods);
                });
            })
            ->when($this->selectedSauces, function($query) {
                $query->whereHas('sauces', function($query) {
                    $query->whereIn('sauces.id', $this->selectedSauces);
                });
            })
            ->when($this->selectedBunTypes, function($query) {
                $query->whereHas('bunTypes', function($query) {
                    $query->whereIn('bun_types.id', $this->selectedBunTypes);
                });
            })
            ->when($this->selectedMeatOptions, function($query) {
                $query->whereHas('meatOptions', function($query) {
                    $query->whereIn('meat_options.id', $this->selectedMeatOptions);
                });
            })
            ->get();

        // Fetch all ingredients, attributes, and other filtering options
        $ingredients = Ingredient::all();
        $attributes = Attribute::all();
        $preparationMethods = PreparationMethod::all();
        $sauces = Sauce::all();
        $bunTypes = BunType::all();
        $meatOptions = MeatOption::all();

        return view('livewire.meal-list', compact(
            'meals',
            'ingredients',
            'attributes',
            'preparationMethods',
            'sauces',
            'bunTypes',
            'meatOptions'
        ));
    }
}
