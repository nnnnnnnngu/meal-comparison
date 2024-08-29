<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MeatOption;

class MeatOptionSeeder extends Seeder
{
    public function run()
    {
        $meatOptions = ['100% Beef', 'Beef and Pork', 'Halloumi Cheese', 'Pear', 'Goat Cheese'];

        foreach ($meatOptions as $option) {
            MeatOption::create(['name' => $option]);
        }
    }
}

