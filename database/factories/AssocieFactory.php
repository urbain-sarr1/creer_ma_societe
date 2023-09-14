<?php

namespace Database\Factories;

use App\Models\Associe;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class AssocieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Associe::class;

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
            'DateNaissance' => $this->faker->date(),
            'LieuNaissance' => $this->faker->text(255),
            'Nationalite' => $this->faker->text(255),
            'Profession' => $this->faker->text(255),
            'CNI' => $this->faker->text(255),
            'DateDelivrance' => $this->faker->date(),
            'DateExpiration' => $this->faker->date(),
            'Adresse' => $this->faker->text(255),
            'Telephone' => $this->faker->text(255),
            'PieceIdentite' => $this->faker->text(255),
            'SituationMatrimoniale' => $this->faker->text(255),
            'societe_id' => \App\Models\Societe::factory(),
        ];
    }
}
