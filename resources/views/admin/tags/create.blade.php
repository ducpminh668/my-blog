@extends('layouts.app') 
@section('content')

<div class="card">
  <div class="card-header">
    Create a new tag

  </div>
  <div class="card-body">
    @if(count($errors) > 0)
    <ul>
      @foreach ($errors->all() as $error)
      <li class="text-danger">{{$error}}</li>
      @endforeach
    </ul>
    @endif
    <form action="{{ route('tags.store')}} " method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="featured">Tags</label>
        <input type="text" name="tag" class="form-control">
      </div>
      <div class="form-group">
        <div class="text-center">
          <button class="btn btn-success" type="submit">
            Store Tag
          </button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection