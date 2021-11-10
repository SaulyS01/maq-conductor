<?php

namespace Database\Factories;

use App\Models\Conductor;
use Illuminate\Database\Eloquent\Factories\Factory;

class MaquinariaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->sentence(),
            'marca' => $this->faker->sentence(),
            'modelo' => $this->faker->sentence(),
            'estado' => $this->faker->randomElement([1, 2]),
            'conductor_id' => Conductor::all()->random()->id
        ];
    }
}
