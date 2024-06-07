<?php

namespace Database\Seeders;

use App\Models\User; // Import the User model
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Member; // Import the Member model
use App\Models\Game; // Import the Game model
use App\Models\Score; // Import the Score model

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {   
        // Create 10 members using the factory
        Member::factory(10)->create()->each(function ($member) {
            // For each member, create 5 games using the factory
            Game::factory(5)->create()->each(function ($game) use ($member) {
                // For each game, create a score entry associating the member and the game
                Score::factory()->create([
                    'game_id' => $game->id, // Associate with the game's ID
                    'member_id' => $member->id, // Associate with the member's ID
                ]);
            });
        });
    }
}
