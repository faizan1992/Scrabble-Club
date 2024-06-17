<?php

namespace Database\Factories;
use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Member::class;
    
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'phone' => $this->faker->regexify('\+44 7\d{3} \d{6}'),// Generates a UK phone number
            'email' => $this->faker->unique()->safeEmail,
            'join_date' => $this->faker->date,
            'address' => $this->faker->address,
        ];
    }
}
