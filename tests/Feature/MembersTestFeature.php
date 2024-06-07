<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MembersTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_displays_the_members_index_page()
    {
        // Create some members
        \App\Models\Member::factory()->count(5)->create();

        // Make a GET request to the members index page
        $response = $this->get(route('members.index'));

        // Assert that the response status is 200
        $response->assertStatus(200);

        // Assert that the view contains the members
        $response->assertViewHas('members');
    }
}