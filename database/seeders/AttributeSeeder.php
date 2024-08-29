<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \App\Models\Attribute::create(['name' => 'Crispy']);
        \App\Models\Attribute::create(['name' => 'Juicy']);
        \App\Models\Attribute::create(['name' => 'Cheesy']);
        // Add more attributes as needed
    }
}
