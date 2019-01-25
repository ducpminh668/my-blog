@extends('layouts.app') 
@section('content')
<table class="table table-hover">
  <thead>
    <th>Image</th>
    <th>Title</th>
    <th>Edit</th>
    <th>
      Delete
    </th>
  </thead>
  <tbody>
    @foreach ($posts as $post)
    <tr>
      <td><img src="{{$post->featured}}" alt="{{$post->title}}" width="50px" height="50px" /></td>
      <td>{{ $post->title}}</td>
      <td><a href="{{route('post.edit', ['id'=>$post->id])}}" class="btn btn-info">Edit</a></td>
      <td><a href="{{route('post.delete',['id' => $post->id])}}" class="btn btn-danger">Delete</a></td>
      @endforeach
  </tbody>
</table>
@endsection