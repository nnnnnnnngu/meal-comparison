<?php

namespace Database\Seeders;

use App\Models\Sauce;
use Illuminate\Database\Seeder;

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
