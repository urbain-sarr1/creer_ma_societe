<?php

namespace Database\Seeders;

use App\Models\Gerant;
use Illuminate\Database\Seeder;

class GerantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gerant::factory()
            ->count(5)
            ->create();
    }
}
