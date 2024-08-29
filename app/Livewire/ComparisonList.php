<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Meal;

class ComparisonList extends Component
{
    public $comparisonList = [];
    public $comparisonCount = 0;

    protected $listeners = ['addToCompare' => 'addToCompare'];

    public function mount()
    {
        // Load the comparison list from session on component mount
        $this->comparisonList = session()->get('comparison_list', []);
        $this->comparisonCount = count($this->comparisonList);
    }

    public function addToCompare($mealId)
    {
        if (!in_array($mealId, $this->comparisonList)) {
            $this->comparisonList[] = $mealId;
            $this->comparisonCount = count($this->comparisonList);

            // Save the updated list to session
            session()->put('comparison_list', $this->comparisonList);
        }
    }

    public function clearComparisonList()
    {
        $this->comparisonList = [];
        $this->comparisonCount = 0;

        // Clear the comparison list from session
        session()->forget('comparison_list');
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
