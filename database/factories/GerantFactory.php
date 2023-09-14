<?php

namespace Database\Factories;

use App\Models\Gerant;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class GerantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Gerant::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Nom' => $this->faker->text(255),
            'Prenom' => $this->faker->text(255),
            'Nationalite' => $this->faker->text(255),
            'Profession' => $this->faker->text(255),
            'Email' => $this->faker->email(),
            'Telephone' => $this->faker->text(255),
        ];
    }
}
