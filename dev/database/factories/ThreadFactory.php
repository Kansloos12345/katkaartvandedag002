<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Thread>
 */
class ThreadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->words(5, true),
            'content' => $this->faker->paragraphs(1, true),
            'user_id' => $this->faker->numberBetween(1, 5),
            'img' => $this->faker->imageUrl(480, 640, 'gay', true),
            'date' => $this->faker->date('d-m-Y'),
        ];
    }
}
