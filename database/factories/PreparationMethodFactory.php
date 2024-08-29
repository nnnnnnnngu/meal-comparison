<?php

namespace Database\Factories;

use App\Models\PreparationMethod;
use Illuminate\Database\Eloquent\Factories\Factory;

class PreparationMethodFactory extends Factory
{
    protected $model = PreparationMethod::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
        ];
    }
}

