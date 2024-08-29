<?php

namespace Database\Seeders;

use App\Models\PreparationMethod;
use Illuminate\Database\Seeder;

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
