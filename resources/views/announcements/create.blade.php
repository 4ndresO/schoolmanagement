@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Create Announcement</h1>

    <form action="{{ route('announcements.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <textarea name="body" class="form-control" rows="5" required></textarea>
        </div>

        <button type="submit" class="btn btn-success">Post Announcement</button>
    </form>
</div>
@endsection
