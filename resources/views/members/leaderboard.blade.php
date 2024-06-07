@extends('layout')

@section('content')
<div class="card card-custom">
    <div class="card-body">
        <h1 class="card-title">Leaderboard</h1>
        <ul class="list-group list-group-flush">
            @forelse($members as $member)
                <li class="list-group-item">
                    <a href="{{ route('members.show', $member->id) }}" class="text-primary">{{ $member->name }}</a> - Average Score: {{ number_format($member->scores->avg('score'), 2) }}
                </li>
                @empty
                <p>No data found</p>
            @endforelse
        </ul>
    </div>
</div>
@endsection
