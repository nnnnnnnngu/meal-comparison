<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \App\Models\Ingredient::create(['name' => 'Brioche Bun', 'type' => 'bun']);
        \App\Models\Ingredient::create(['name' => '100% Beef', 'type' => 'meat']);
        \App\Models\Ingredient::create(['name' => 'Cheddar Cheese', 'type' => 'cheese']);
        // Add more ingredients as needed
    }
}
