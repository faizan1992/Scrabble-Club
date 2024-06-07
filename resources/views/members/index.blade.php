@extends('layout')

@section('content')
<div class="card card-custom">
    <div class="card-body">
        <h1 class="card-title">Members</h1>
        <ul class="list-group list-group-flush">
            @foreach($members as $member)
                <li class="list-group-item">
                 <!-- Link to the member's detail page -->
                    <a href="{{ route('members.show', $member->id) }}" class="text-primary">{{ $member->name }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
