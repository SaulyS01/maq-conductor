<?php

namespace Database\Factories;

use App\Models\Maquinaria;
use Illuminate\Database\Eloquent\Factories\Factory;

class ConductorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->firstName('male'|'female'),
            'ap_paterno' => $this->faker->lastName,
            'ap_materno' => $this->faker->lastName,
            'especialidad' => $this->faker->sentence(),
            'edad' => $this->faker->numberBetween(18, 50),
            'estado' => $this->faker->randomElement([1, 2]),
        ];
    }
}
