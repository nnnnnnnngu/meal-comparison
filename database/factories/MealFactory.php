<?php

namespace Database\Factories;

use App\Models\Location;
use App\Models\Meal;
use Illuminate\Database\Eloquent\Factories\Factory;

class MealFactory extends Factory
{
    protected $model = Meal::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'location_id' => Location::factory(),
            'description' => $this->faker->sentence,
            'meal_type' => $this->faker->randomElement(['burger', 'pizza']),
        ];
    }
}
