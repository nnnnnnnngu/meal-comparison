<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Meal;

class ComparisonList extends Component
{
    public $comparisonList = [];
    public $comparisonCount = 0;

    protected $listeners = ['addToCompare' => 'addToCompare'];

    public function addToCompare($mealId)
    {
        if (!in_array($mealId, $this->comparisonList)) {
            $this->comparisonList[] = $mealId;
            $this->comparisonCount = count($this->comparisonList);
        }
    }

    public function clearComparisonList()
    {
        $this->comparisonList = [];
        $this->comparisonCount = 0;
    }

    public function getComparisonMealsProperty()
    {
        return Meal::whereIn('id', $this->comparisonList)->get();
    }

    public function render()
    {
        return view('livewire.comparison-list', [
            'comparisonMeals' => $this->comparisonMeals,
        ]);
    }
}
