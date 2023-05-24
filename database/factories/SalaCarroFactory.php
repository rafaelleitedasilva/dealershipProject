<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SalaCarro>
 */
class SalaCarroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'sala_id' => $this->faker->numberBetween(1, 11), // Substitua pelos valores adequados
            'carro_id' => $this->faker->numberBetween(1, 500), // Substitua pelos valores adequados
        ];
    }
}
