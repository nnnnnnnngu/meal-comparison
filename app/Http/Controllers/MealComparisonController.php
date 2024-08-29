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
        // Get the IDs from the request
        $ids = explode(',', $request->query('ids'));

        // Fetch meals based on the IDs
        $meals = Meal::whereIn('id', $ids)->with(['ingredients', 'attributes', 'preparationMethods', 'sauces', 'bunTypes', 'meatOptions'])->get();

        // Pass the meals to the view
        return view('meals.compare', compact('meals'));
    }
}
