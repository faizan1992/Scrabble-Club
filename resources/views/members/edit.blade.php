@extends('layout')

@section('content')
<div class="card card-custom">
    <div class="card-body">
        <h1 class="card-title">Edit {{ $member->name }}</h1>

        <!-- Form to update member details -->
        <form method="POST" action="{{ route('members.update', $member->id) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" id="name" name="name" value="{{ $member->name }}" class="form-control" required>
                @error('name')
                  <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="contact_details" class="form-label">Contact Details:</label>
                <textarea id="contact_details" name="contact_details" class="form-control" required>{{ $member->contact_details }}</textarea>
                @error('contact_details')
                   <p>{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
