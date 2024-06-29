<?php

namespace Database\Factories;

use App\Models\Want;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'body' => fake()->sentence(28),
            'comentable_id' => rand(1, 2000),
            'comentable_type' => Want::class,
            'user_id' => rand(1, 30),
        ];
    }
}
