@extends('layouts.app') 
@section('content')

<div class="card">
  <div class="card-header">
    Edit post: {{$post->title}}
  </div>
  <div class="card-body">
    @if(count($errors) > 0)
    <ul>
      @foreach ($errors->all() as $error)
      <li class="text-danger">{{$error}}</li>
      @endforeach
    </ul>
    @endif
    <form action="{{ route('post.update',['id' => $post->id])}} " method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" value="{{$post->title}}">
      </div>
      <div class="form-group">
        <label for="featured">Featured Image</label>
        <input type="file" name="featured" class="form-control">
      </div>
      <div class="form-group">
        <label for="category">Select a Category</label>
        <select name="category_id" class="form-control">
          @foreach ($categories as $category)
        <option value="{{$category->id}}" @if($category->id == $post->category_id) selected @endif>{{$category->name}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="tags">Select tags</label> @foreach ($tags as $tag)
        <div class="checkbox">
          <label for="">
                <input type="checkbox" name="tags[]" value="{{$tag->id}}" @foreach ($post->tags as $t)
                    @if($tag->id == $t->id) checked @endif
                @endforeach>
                {{$tag->tag}}
                </label>
        </div>
        @endforeach
      </div>
      <div class="form-group">
        <label for="content">Content</label>
        <textarea name="content" cols="30" rows="5" class="form-control">{{$post->content}}</textarea>
      </div>
      <div class="form-group">
        <div class="text-center">
          <button class="btn btn-success" type="submit">
            Update post
          </button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection