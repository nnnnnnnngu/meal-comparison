<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use Illuminate\Http\Request;

class MealComparisonController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // Get the comparison list from the session
        $mealIds = session()->get('comparison_list', []);

        // Fetch the meals from the database
        $meals = Meal::whereIn('id', $mealIds)->get();

        // Pass the meals to the comparison view
        return view('compare', compact('meals'));
    }
}
