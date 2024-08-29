<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PreparationMethod;

class PreparationMethodSeeder extends Seeder
{
    public function run()
    {
        $methods = ['SousVide', 'Hot and Fast', 'Smashed', 'Normal', 'Smoked'];

        foreach ($methods as $method) {
            PreparationMethod::create(['name' => $method]);
        }
    }
}

