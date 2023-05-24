<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Carro>
 */
class CarroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $valor = $this->faker->numberBetween(100000, 500000);

        return [
            'nome' => $this->faker->randomElement(['Ford', 'Chevrolet', 'Toyota', 'Honda', 'Ferrari', 'Mercedes', 'Fiat']),
            'modelo' => $this->faker->word,
            'valor' => 'R$ ' . number_format($valor, 2, ',', '.'),
        ];
    }
}
