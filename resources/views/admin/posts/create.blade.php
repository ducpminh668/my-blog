@extends('layouts.app') 
@section('content')

<div class="card">
  <div class="card-header">
    Create a new post

  </div>
  <div class="card-body">
    @if(count($errors) > 0)
    <ul>
      @foreach ($errors->all() as $error)
      <li class="text-danger">{{$error}}</li>
      @endforeach
    </ul>
    @endif
    <form action="{{ route('post.store')}} " method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control">
      </div>
      <div class="form-group">
        <label for="featured">Featured Image</label>
        <input type="file" name="featured" class="form-control">
      </div>
      <div class="form-group">
        <label for="category">Select a Category</label>
        <select name="category_id" class="form-control">
          @foreach ($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="tags">Select tags</label> @foreach ($tags as $tag)
        <div class="checkbox">
          <label for="">
                <input type="checkbox" name="tags[]" value="{{$tag->id}}">
                {{$tag->tag}}
                </label>
        </div>
        @endforeach
      </div>
      <div class="form-group">
        <label for="content">Content</label>
        <textarea id="summernote" name="content"></textarea>
      </div>
      <div class="form-group">
        <div class="text-center">
          <button class="btn btn-success" type="submit">
            Store post
          </button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection
 
@section('styles')
<link href="{{ asset('libs/summernote/summernote-bs4.css') }}" rel="stylesheet">
@endsection
 
@section('scripts')
<!-- include summernote css/js -->
<script src="{{ asset('libs/summernote/summernote.js') }}"></script>
<script>
  $(document).ready(function() {
    $('#summernote').summernote({
      height: 150
    });
  })

</script>
@endsection