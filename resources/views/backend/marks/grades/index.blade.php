@extends('layouts.app')

@section('header')
  <h2 class="font-semibold text-xl text-gray-800 leading-tight">
    My Child’s Grades
  </h2>
@endsection

@section('content')
<div class="container mt-4">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Subject</th>
        <th>Exam</th>
        <th>Marks Obtained</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @forelse($grades as $grade)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $grade->subject->name }}</td>
          <td>{{ $grade->examType->name }}</td>
          <td>{{ $grade->marks_obtained }}</td>
          <td>
            <a href="{{ route('grades.show', $grade) }}" class="btn btn-sm btn-info">
              View Details
            </a>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="5">No grades found yet.</td>
        </tr>
      @endforelse
    </tbody>
  </table>
</div>
@endsection