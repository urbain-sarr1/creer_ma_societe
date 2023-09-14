<?php

namespace Database\Seeders;

use App\Models\Societe;
use Illuminate\Database\Seeder;

class SocieteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Societe::factory()
            ->count(5)
            ->create();
    }
}
