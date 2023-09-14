<?php

namespace Database\Factories;

use App\Models\Conjoint;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ConjointFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Conjoint::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'PrenomNom' => $this->faker->text(),
            'DateNaissance' => $this->faker->date(),
            'LieuNaissance' => $this->faker->text(255),
            'Nationalite' => $this->faker->text(255),
            'DateMariage' => $this->faker->date(),
            'LieuMariage' => $this->faker->text(255),
            'DateContratMariage' => $this->faker->date(),
            'NomResidentNotaire' => $this->faker->text(),
            'RegimeMatrimoniale' => $this->faker->text(255),
            'associe_id' => \App\Models\Associe::factory(),
        ];
    }
}
