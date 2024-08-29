<?php

namespace Database\Seeders;

use App\Models\MeatOption;
use Illuminate\Database\Seeder;

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
