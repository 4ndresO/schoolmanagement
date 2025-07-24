@extends('admin.admin_master')

@section('admin')

<div class="content-wrapper">
  <div class="container-full">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">

          <div class="box">
            <div class="box-header with-border">
              <h4 class="box-title">My Child’s Grades</h4>
            </div>
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-border table-striped table-hover">
                  <thead class="bg-dark">
                    <tr class="text-white">
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
                        <td colspan="5" class="text-center">No grades found yet.</td>
                      </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
  </div>
</div>

@endsection