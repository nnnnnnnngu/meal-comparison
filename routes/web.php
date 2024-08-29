<?php

use App\Http\Controllers\MealComparisonController;
use App\Livewire\MealDetail;
use App\Livewire\MealList;
use Illuminate\Support\Facades\Route;


Route::get('/', MealList::class)->name('meals.index');
Route::get('/compare', MealComparisonController::class)->name('meals.compare');
Route::get('/meals/{mealId}', MealDetail::class)->name('meals.show');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
