<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \App\Models\Location::create([
            'name' => 'Downtown Grill',
            'postal_code' => '12345'
        ]);

        \App\Models\Location::create([
            'name' => 'Burger Place',
            'postal_code' => '67890'
        ]);
    }

}
