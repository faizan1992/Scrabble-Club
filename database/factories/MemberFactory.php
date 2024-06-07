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
            'join_date' => $this->faker->date,
            'contact_details' => $this->faker->address,
        ];
    }
}
