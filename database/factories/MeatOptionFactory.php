<?php

namespace Database\Factories;

use App\Models\MeatOption;
use Illuminate\Database\Eloquent\Factories\Factory;

class MeatOptionFactory extends Factory
{
    protected $model = MeatOption::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
        ];
    }
}

