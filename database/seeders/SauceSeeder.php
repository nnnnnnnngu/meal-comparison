<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sauce;

class SauceSeeder extends Seeder
{
    public function run()
    {
        $sauces = ['Ketchup', 'Mayo', 'BBQ', 'Mustard', 'BigMac Sauce'];

        foreach ($sauces as $sauce) {
            Sauce::create(['name' => $sauce]);
        }
    }
}

