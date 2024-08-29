<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $location1 = \App\Models\Location::first();

        $burger = \App\Models\Meal::create([
            'name' => 'Classic Burger',
            'description' => 'A classic beef burger with cheddar cheese and crispy lettuce.',
            'meal_type' => 'burger',
            'location_id' => $location1->id,
        ]);

        $burger->ingredients()->attach([\App\Models\Ingredient::where('name', 'Brioche Bun')->first()->id, \App\Models\Ingredient::where('name', '100% Beef')->first()->id, \App\Models\Ingredient::where('name', 'Cheddar Cheese')->first()->id]);
        $burger->attributes()->attach([\App\Models\Attribute::where('name', 'Crispy')->first()->id, \App\Models\Attribute::where('name', 'Juicy')->first()->id]);

        $location2 = \App\Models\Location::latest()->first();

        $pizza = \App\Models\Meal::create([
            'name' => 'Peperoni Pizza',
            'description' => 'A Peperoni Pizza.',
            'meal_type' => 'pizza',
            'location_id' => $location2->id,
        ]);

        $pizza->ingredients()->attach([  \App\Models\Ingredient::where('name', 'Cheddar Cheese')->first()->id]);
        $pizza->attributes()->attach([\App\Models\Attribute::where('name', 'Crispy')->first()->id, \App\Models\Attribute::where('name', 'Juicy')->first()->id]);

        // Add more meals as needed
    }

}
