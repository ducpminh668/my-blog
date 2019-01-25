@extends('layouts.app') 
@section('content')
<table class="table table-hover">
  <thead>
    <th>
      Category name
    </th>
    <th>
      Editing
    </th>
    <th>Deleting</th>
  </thead>
  <tbody>
    @foreach ($categories as $category)
    <tr>
      <td>{{ $category->name}}</td>
      <td>
        <a href="{{ route('category.edit', ['id' => $category->id]) }}" class="btn btn-sm btn-info">
            <i class="fas fa-pencil-alt"></i>
        </a>
      </td>
      <td>
        <a href="{{ route('category.destroy', ['id' => $category->id]) }}" class="btn btn-sm btn-danger">
            <i class="fas fa-trash-alt"></i>
        </a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection