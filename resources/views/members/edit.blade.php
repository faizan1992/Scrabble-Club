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
                <label for="phone" class="form-label">Phone Number (UK):</label>
                <input type="text" id="phone" name="phone" value="{{ $member->phone }}" class="form-control" pattern="\+447\d{9}|\+44\s7\d{3}\s\d{6}|\+44\s7\d{9}" title="Phone number must be in the format +44 7XXX XXXXXX" required>
                @error('phone')
                   <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" id="email" name="email" value="{{ $member->email }}" class="form-control" required>
                @error('email')
                   <p>{{ $message }}</p>
                @enderror
            </div>


            <div class="mb-3">
                <label for="address" class="form-label">Address:</label>
                <textarea id="address" name="address" class="form-control" required>{{ $member->address }}</textarea>
                @error('address')
                   <p>{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
