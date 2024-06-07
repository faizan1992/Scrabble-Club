<?php

namespace Database\Factories;
use App\Models\Score;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Score>
 */
class ScoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'game_id' => \App\Models\Game::factory(),
            'member_id' => \App\Models\Member::factory(),
            'score' => $this->faker->numberBetween(0, 300),
        ];
    }
}
