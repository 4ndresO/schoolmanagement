@extends('layouts.app')

@section('header')
  <h2 class="font-semibold text-xl text-gray-800 leading-tight">
    Grade Details
  </h2>
@endsection

@section('content')
<div class="container mt-4">
  <ul class="list-group">
    <li class="list-group-item"><strong>Subject:</strong> {{ $grade->subject->name }}</li>
    <li class="list-group-item"><strong>Exam:</strong> {{ $grade->examType->name }}</li>
    <li class="list-group-item"><strong>Marks Obtained:</strong> {{ $grade->marks_obtained }}</li>
    <li class="list-group-item"><strong>Total Marks:</strong> {{ $grade->total_marks }}</li>
    <li class="list-group-item"><strong>Exam Date:</strong> {{ $grade->exam_date }}</li>
    @if($grade->remarks)
      <li class="list-group-item"><strong>Remarks:</strong> {{ $grade->remarks }}</li>
    @endif
  </ul>
  <a href="{{ route('grades.index') }}" class="btn btn-secondary mt-3">Back to list</a>
</div>
@endsection