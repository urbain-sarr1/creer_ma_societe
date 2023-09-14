<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Adding an admin user
        $user = \App\Models\User::factory()
            ->count(1)
            ->create([
                'email' => 'admin@admin.com',
                'password' => \Hash::make('admin'),
            ]);
        $this->call(PermissionsSeeder::class);

        $this->call(AssocieSeeder::class);
        $this->call(ConjointSeeder::class);
        $this->call(GerantSeeder::class);
        $this->call(InfosSeeder::class);
        $this->call(LeveeFondSeeder::class);
        $this->call(ProfileSeeder::class);
        $this->call(SocieteSeeder::class);
        $this->call(UserSeeder::class);
    }
}
