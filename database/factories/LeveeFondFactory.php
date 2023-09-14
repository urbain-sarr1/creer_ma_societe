<?php

namespace Database\Factories;

use App\Models\LeveeFond;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class LeveeFondFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LeveeFond::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'DescriptionProjet' => $this->faker->text(),
            'EtatAvancement' => $this->faker->text(),
            'BesoinFinancement' => $this->faker->text(),
            'ModaliteRemboursement' => $this->faker->text(),
            'Garanties' => $this->faker->text(),
        ];
    }
}
