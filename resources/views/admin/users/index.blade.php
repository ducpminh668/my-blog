@extends('layouts.app') 
@section('content')
<table class="table table-hover">
  <thead>
    <th>Image</th>
    <th>Name</th>
    <th>Permissions</th>
    <th>Delete</th>
  </thead>
  <tbody>
    @foreach ($users as $user)
    <tr>
      <td><img src="{{asset($user->profile->avatar)}}" alt="" width="60" height="60" style="border-radius: 50%"></td>
      <td>{{$user->name}}</td>
      <td>
        @if($user->admin)
        <a href="{{route('user.toogleAdmin',['id' => $user->id])}}">Admin</a> @else
        <a href="{{route('user.toogleAdmin',['id' => $user->id])}}">Not admin</a> @endif
      </td>
      <td>Delete</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection