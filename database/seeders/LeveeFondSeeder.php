<?php

namespace Database\Seeders;

use App\Models\LeveeFond;
use Illuminate\Database\Seeder;

class LeveeFondSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LeveeFond::factory()
            ->count(5)
            ->create();
    }
}
