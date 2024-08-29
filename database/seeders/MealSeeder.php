<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Meal;
use App\Models\PreparationMethod;
use App\Models\Sauce;
use App\Models\BunType;
use App\Models\MeatOption;
use App\Models\Location;

class MealSeeder extends Seeder
{
    public function run()
    {

        // Create some sample PreparationMethods, Sauces, BunTypes, and MeatOptions
        $preparationMethods = PreparationMethod::factory()->count(5)->create();
        $sauces = Sauce::factory()->count(5)->create();
        $bunTypes = BunType::factory()->count(5)->create();
        $meatOptions = MeatOption::factory()->count(5)->create();

        // Create some sample Meals and associate them with PreparationMethods, Sauces, BunTypes, MeatOptions, and Locations
        Meal::factory()->count(10)->create()->each(function ($meal) use ($preparationMethods, $sauces, $bunTypes, $meatOptions) {
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

            $meal->save();
        });
    }
}
