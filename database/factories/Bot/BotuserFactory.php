<?php

declare(strict_types=1);

namespace Database\Factories\Bot;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bot\Botuser>
 */
class BotuserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_usuario' => random_int(1000, 9999),
            'first_name' => fake()->name(),
            'username' => fake()->userName(),
            'is_premium' => random_int(0, 1),
            'sw_ban' => random_int(0, 1),
        ];
    }
}
