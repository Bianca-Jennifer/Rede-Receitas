<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Receita>
 */
class ReceitaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            'descricao' => $this->faker->paragraph(),
            'ingredientes' => $this->faker->paragraph(),
            'modo_preparo' => $this->faker->paragraphs(3, true),
            'tempo_preparo' => $this->faker->numberBetween(10, 120),
            'rendimento' => $this->faker->numberBetween(1, 10) . ' porções',
            'categoria' => $this->faker->randomElement(['Entrada', 'Prato Principal', 'Sobremesa', 'Massas', 'Bebida']),
            'user_id' => \App\Models\User::factory(),
        ];
    }
}
