@extends('layouts.app') 
@section('content')
<table class="table table-hover">
  <thead>
    <th>Image</th>
    <th>Title</th>
    <th>Edit</th>
    <th>Restore</th>
    <th>Delete</th>
  </thead>
  <tbody>
    @if ($posts->count() > 0) @foreach ($posts as $post)
    <tr>
      <td><img src="{{$post->featured}}" alt="{{$post->title}}" width="50px" height="50px" /></td>
      <td>{{ $post->title}}</td>
      <td>Edit</td>
      <td><a href="{{route('post.restore',['id' => $post->id])}}" class="btn btn-success">Restore</a></td>
      <td><a href="{{route('post.kill',['id' => $post->id])}}" class="btn btn-danger">Delete</a></td>
      @endforeach @else
      <tr>
        <td class="text-center" colspan="5">No trashed post</td>
      </tr>
      @endif
  </tbody>
</table>
@endsection