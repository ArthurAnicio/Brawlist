<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brawler>
 */
class BrawlerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => $this->faker->name,
            'titulo' => $this->faker->sentence(2),
            'imagem' => $this->faker->imageUrl(),
            'categoria' => $this->faker->word,
            'raridade' => $this->faker->word,
        ];
    }
}
