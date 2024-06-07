@extends('layout')

@section('content')
<div class="card card-custom">
    <div class="card-body">
        <h1 class="card-title">{{ $member->name }}</h1>
        <p class="card-text"><strong>Joined on:</strong> {{ $member->join_date }}</p>
        <p class="card-text"><strong>Contact Details:</strong> {{ $member->contact_details }}</p>
        <p class="card-text"><strong>Average Score:</strong> {{ $averageScore }}</p>
        <p class="card-text"><strong>Highest Score:</strong> {{ $highestScore }} (Game on {{ $highestScoreGame->game->date }})</p>

        <h2 class="mt-4">Recent Games</h2>
        <ul class="list-group list-group-flush">
            @foreach($member->scores as $score)
                <li class="list-group-item">{{ $score->game->date }}: {{ $score->score }}</li>
            @endforeach
        </ul>

        <a href="{{ route('members.edit', $member->id) }}" class="btn btn-primary mt-4">Edit</a>
    </div>
</div>
@endsection
