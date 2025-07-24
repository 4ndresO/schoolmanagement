@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Announcements</h1>

    <a href="{{ route('announcements.create') }}" class="btn btn-primary mb-3">Create New Announcement</a>

    {{-- ✅ Success message --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- ✅ Show announcements if there are any --}}
    @if($announcements->count())
        @foreach ($announcements as $announcement)
            <div class="card mb-3">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <h5 class="card-title">{{ $announcement->title }}</h5>
                            <p class="card-text">{{ $announcement->body }}</p>
                        </div>

                        {{-- 3-dot dropdown menu --}}
                        <div class="dropdown">
                            <button class="btn btn-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                &#x22EE;
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="{{ route('announcements.edit', $announcement->id) }}">Edit</a>
                                </li>
                                <li>
                                    <form action="{{ route('announcements.destroy', $announcement->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="dropdown-item text-danger" type="submit">Delete</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p class="text-muted">No announcements yet. Be the first to post one!</p>
    @endif
</div>
@endsection
