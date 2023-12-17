<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Database\Seeders\postsSeeder;
use App\Models\posts;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\posts>
 */
class postsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = postsSeeder::class;

    public function definition()
    {
        return [
            'title' => $this->faker->word,
            'type' => $this->faker->word,
            'content' => $this->faker->sentence,
            'image' => $this->faker->word,
            'status' => $this->faker->word,
        ];
    }
}
