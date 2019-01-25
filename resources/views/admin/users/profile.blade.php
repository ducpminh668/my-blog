@extends('layouts.app') 
@section('content')

<div class="card">
  <div class="card-header">
    Edit user profile
  </div>
  <div class="card-body">
  @include('admin.includes.errors')
    <form action="{{ route('user.update')}} " method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="name">Username</label>
        <input type="text" name="name" class="form-control" value="{{$user->name}}">
      </div>
      <div class="form-group">
        <label for="name">Email</label>
        <input type="email" name="email" class="form-control" value="{{$user->email}}">
      </div>
      <div class="form-group">
        <label for="password">New password</label>
        <input type="password" name="password" class="form-control">
      </div>
      <div class="form-group">
        <div>
          <img src="{{asset($user->profile->avatar)}}" alt="" width="80" height="120">
        </div>
        <label for="name">Upload new avatar</label>
        <input type="file" name="avatar" class="form-control">
      </div>
      <div class="form-group">
        <label for="name">Facebook profile</label>
      <input type="text" name="facebook" class="form-control" value="{{$user->profile->facebook}}">
      </div>
      <div class="form-group">
        <label for="name">Youtube profile</label>
      <input type="text" name="youtube" class="form-control" value="{{$user->profile->youtube}}">
      </div>
      <div class="form-group">
        <label for="name">About you</label>
      <textarea name="about" cols="30" rows="3" class="form-control">{{$user->profile->about}}</textarea>
      </div>
      <div class="form-group">
        <div class="text-center">
          <button class="btn btn-success" type="submit">
            Update profile
          </button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection