@extends('layouts.app') 
@section('content')

<div class="card">
  <div class="card-header">
    Update category: {{$category->name}}
  </div>
  <div class="card-body">
  @include('admin.includes.errors')
    <form action="{{ route('category.update', ['id' => $category->id])}} " method="post">
      @csrf
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" value="{{$category->name}}">
      </div>
      <div class="form-group">
        <div class="text-center">
          <button class="btn btn-success" type="submit">
            Update category
          </button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection