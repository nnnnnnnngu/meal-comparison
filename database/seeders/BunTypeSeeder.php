<?php

namespace Database\Seeders;

use App\Models\BunType;
use Illuminate\Database\Seeder;

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
