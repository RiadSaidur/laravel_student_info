@extends('master')

@section('title')
  Update
@endsection

@section('main')

<div class="row my-2">
  <div class="col">
    
    <div class="card">
      <div class="card-header">
        <div class="card-title">
          <h2>Update Student</h2>
        </div>
      </div>
      <div class="card-body">
        <form method="post" class="form">
          @csrf
          <div class="my-2">
            <label for="name" class="form-label text-capitalize">name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $student->name }}">
          </div>
          <div class="my-2">
            <label for="email" class="form-label text-capitalize">email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $student->email }}">
          </div>
          <div class="my-2">
            <label for="department" class="form-label text-capitalize">department</label>
            <input type="text" name="department" id="department" class="form-control" value="{{ $student->department }}">
          </div>
          <div class="my-3">
            <button class="btn btn-primary">Save</button>
          </div>
        </form>
      </div>
    </div>

  </div>
</div>

@endsection