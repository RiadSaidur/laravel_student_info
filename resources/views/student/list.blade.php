@extends('master')

@section('title')
  Read
@endsection

@section('main')

  <div class="row my-2">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h2 class="card-title">Student List</h2>
        </div>
        <div class="card-body">
          <table class="table table-striped">
            <tr>
              <th>sl</th>
              <th>Name</th>
              <th>Email</th>
              <th>Department</th>
              <th>Actions</th>
            </tr>
            @foreach ($students as $student)
              <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->department }}</td>
                <td class="d-flex align-items-center gap-2">
                  <a href="{{ route('update', ['id' => $student->id ]) }}" class="btn btn-primary">Update</a>
                  <form method="post" action="{{ route('removeStudent') }}" class="form">
                    @csrf
                    <input type="hidden" name="id" value="{{ $student->id }}">
                    <button class="btn btn-danger">Delete</button>
                  </form>
                </td>
              </tr>
            @endforeach
          </table>
        </div>
      </div>
    </div>
  </div>

@endsection