<?php

namespace Database\Factories;

use App\Models\Sauce;
use Illuminate\Database\Eloquent\Factories\Factory;

class SauceFactory extends Factory
{
    protected $model = Sauce::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
        ];
    }
}
