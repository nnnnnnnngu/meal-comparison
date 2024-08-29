<?php

namespace Database\Seeders;

use App\Models\Attribute;
use App\Models\BunType;
use App\Models\Ingredient;
use App\Models\Location;
use App\Models\Meal;
use App\Models\MeatOption;
use App\Models\PreparationMethod;
use App\Models\Sauce;
use Illuminate\Database\Seeder;

class MealSeeder extends Seeder
{
    public function run()
    {
        // Fetch existing records from the database
        $preparationMethods = PreparationMethod::all();
        $sauces = Sauce::all();
        $bunTypes = BunType::all();
        $meatOptions = MeatOption::all();
        $locations = Location::all();
        $ingredients = Ingredient::all();
        $attributes = Attribute::all();

        // Create some sample Meals and associate them with PreparationMethods, Sauces, BunTypes, MeatOptions, Locations, Ingredients, and Attributes
        Meal::factory()->count(10)->create()->each(function ($meal) use ($preparationMethods, $sauces, $bunTypes, $meatOptions, $locations, $ingredients, $attributes) {
            // Attach random preparation methods
            $meal->preparationMethods()->attach(
                $preparationMethods->random(2)->pluck('id')
            );

            // Attach random sauces
            $meal->sauces()->attach(
                $sauces->random(2)->pluck('id')
            );

            // Attach random bun types
            $meal->bunTypes()->attach(
                $bunTypes->random(1)->pluck('id')
            );

            // Attach random meat options
            $meal->meatOptions()->attach(
                $meatOptions->random(1)->pluck('id')
            );

            // Attach random ingredients
            $meal->ingredients()->attach(
                $ingredients->random(3)->pluck('id')
            );

            // Attach random attributes
            $meal->attributes()->attach(
                $attributes->random(2)->pluck('id')
            );

            // Assign a random location
            $meal->location_id = $locations->random()->id;
            $meal->save();
        });
    }
}
