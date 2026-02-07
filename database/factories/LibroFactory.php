<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Libro>
 */
class LibroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo' => $this->faker->sentence(3),
            'paginas' => $this->faker->numberBetween(50, 1000),
            'disponible' => $this->faker->boolean(),
            'publicado' => $this->faker->date(),
        ];
    }
}
