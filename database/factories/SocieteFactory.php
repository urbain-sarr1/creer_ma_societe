<?php

namespace Database\Factories;

use App\Models\Societe;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class SocieteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Societe::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Type' => $this->faker->text(255),
            'Denomination' => $this->faker->text(255),
            'Adresse' => $this->faker->text(255),
            'MontantCapital' => $this->faker->randomNumber(),
            'gerant_id' => \App\Models\Gerant::factory(),
        ];
    }
}
