@extends('layouts.app') 
@section('content')

<div class="card">
  <div class="card-header">
    Create a new user
  </div>
  <div class="card-body">
  @include('admin.includes.errors')
    <form action="{{ route('user.store')}} " method="post">
      @csrf
      <div class="form-group">
        <label for="name">User</label>
        <input type="text" name="name" class="form-control">
      </div>
      <div class="form-group">
        <label for="name">Email</label>
        <input type="email" name="email" class="form-control">
      </div>
      <div class="form-group">
        <div class="text-center">
          <button class="btn btn-success" type="submit">
            Add user
          </button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection