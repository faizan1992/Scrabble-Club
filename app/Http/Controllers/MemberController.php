<?php

namespace App\Http\Controllers;

use App\Models\Member; // Import the Member model
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the members.
     */

    public function index()
    {
        // Fetch all members from the database
        $members = Member::all();
        // Return the index view with the members data
        return view('members.index', compact('members'));
    }

    /**
     * Display the specified member.
     */

    public function show($id)
    {
        // Find the member by ID and include their game scores
        $member = Member::with('scores.game')->findOrFail($id);

        // Calculate the average score for the member
        $averageScore = $member->scores->avg('score');

        // Find the highest score for the member
        $highestScore = $member->scores->max('score');

        // Find the game where the member achieved the highest score
        $highestScoreGame = $member->scores->where('score', $highestScore)->first();

        // Return the show view with the member data
        return view('members.show', compact('member', 'averageScore', 'highestScore', 'highestScoreGame'));
    }

    /**
     * Show the form for editing the specified member.
     */
    public function edit($id)
    {
        // Find the member by ID
        $member = Member::findOrFail($id);
        // Return the edit view with the member data
        return view('members.edit', compact('member'));
    }

    /**
     * Update the specified member in the database.se
     */
    public function update(Request $request, $id)
    {   
        // Validate the request data
        $request->validate([
            'name' => 'required',
            'contact_details' => 'required',
        ]);

        // Find the member by ID and update their details
        $member = Member::findOrFail($id);
        $member->update($request->all());

        // Redirect to the show view for the updated member
        return redirect()->route('members.show', $member->id);
    }

    /**
     * Display the leaderboard.
     */
    public function leaderboard()
    {
        // Fetch all members with their scores
        $members = Member::with('scores')
            ->get()// Get all members
            ->sortByDesc(function ($member) { // Sort members by their average score in descending order
                return $member->scores->avg('score');
            })
            ->take(10);// Take the top 10 members

        // Return the leaderboard view with the members data
        return view('members.leaderboard', compact('members'));
    }
}
