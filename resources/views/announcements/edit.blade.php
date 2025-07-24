@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Announcement</h1>

    <form action="{{ route('announcements.update', $announcement->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $announcement->title }}" required>
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <textarea name="body" class="form-control" rows="5" required>{{ $announcement->body }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update Announcement</button>
    </form>
</div>
@endsection
