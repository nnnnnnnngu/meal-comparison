<?php

namespace Database\Factories;

use App\Models\BunType;
use Illuminate\Database\Eloquent\Factories\Factory;

class BunTypeFactory extends Factory
{
    protected $model = BunType::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
        ];
    }
}

