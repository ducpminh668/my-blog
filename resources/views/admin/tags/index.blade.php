@extends('layouts.app') 
@section('content')
<table class="table table-hover">
  <thead>
    <th>Id</th>
    <th>Tag</th>
    <th>Edit</th>
    <th>
      Delete
    </th>
  </thead>
  <tbody>
    @foreach ($tags as $tag)
    <tr>
      <td>{{ $tag->id}}</td>
      <td>{{ $tag->tag}}</td>
      <td><a href="{{route('tag.edit', ['id'=>$tag->id])}}" class="btn btn-info">Edit</a></td>
      <td><a href="{{route('tag.delete',['id' => $tag->id])}}" class="btn btn-danger">Delete</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection