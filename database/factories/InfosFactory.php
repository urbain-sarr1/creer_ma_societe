<?php

namespace Database\Factories;

use App\Models\Infos;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class InfosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Infos::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'TitreSite' => $this->faker->text(255),
            'adresseSite' => $this->faker->text(255),
            'TelephoneSite' => $this->faker->text(255),
            'EmailSite' => $this->faker->email(),
            'Localisation' => $this->faker->text(),
        ];
    }
}
