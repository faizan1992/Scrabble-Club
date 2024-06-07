<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Member;
use App\Models\Score;

class MemberTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_calculates_the_average_score_correctly()
    {
        // Create a member
        $member = Member::factory()->create();

        // Create scores for the member
        Score::factory()->create(['member_id' => $member->id, 'score' => 100]);
        Score::factory()->create(['member_id' => $member->id, 'score' => 200]);
        Score::factory()->create(['member_id' => $member->id, 'score' => 300]);

        // Calculate the average score
        $averageScore = $member->scores->avg('score');

        // Assert that the average score is calculated correctly
        $this->assertEquals(200, $averageScore);
    }
}
