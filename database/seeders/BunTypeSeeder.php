<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BunType;

class BunTypeSeeder extends Seeder
{
    public function run()
    {
        $bunTypes = ['Brioche Bun', 'Potato Bun', 'Black Bun', 'Sesame Bun', 'Low Carb Bun'];

        foreach ($bunTypes as $bunType) {
            BunType::create(['name' => $bunType]);
        }
    }
}

