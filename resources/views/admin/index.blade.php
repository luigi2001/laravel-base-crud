@extends('layouts.app')

@section('title','area amministrativa')

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">title</th>
      <th scope="col">price</th>
      <th scope="col">actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($comics as $comic)
    <tr>
      <th scope="row">{{ $comic->id }}</th>
      <td>{{ $comic->title }}</td>
      <td>{{ $comic->price }}</td>
      <td>
          <a href="{{ route('admin.show', $comic->id)}}" class="btn-primary p-2 rounded-3">Show</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection