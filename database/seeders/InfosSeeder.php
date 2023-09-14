<?php

namespace Database\Seeders;

use App\Models\Infos;
use Illuminate\Database\Seeder;

class InfosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Infos::factory()
            ->count(5)
            ->create();
    }
}
