@extends('layouts.app') 
@section('content')

<div class="card">
  <div class="card-header">
    Create a new category
  </div>
  <div class="card-body">
  @include('admin.includes.errors')
    <form action="{{ route('category.store')}} " method="post">
      @csrf
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control">
      </div>
      <div class="form-group">
        <div class="text-center">
          <button class="btn btn-success" type="submit">
            Store category
          </button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection