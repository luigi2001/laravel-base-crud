@extends('layouts.app')

@section('title','area amministrativa')

@section('content')
<h2><a href="{{ route('admin.create') }}">Inserisci un nuovo fumetto</a></h2>
<p>
  @if(session('modifica'))
  <div class="btn-success p-2 rounded-3">
    {{session('modifica')}}
  </div>
  @endif
</p>
<p>
  @if(session('delete'))
  <div class="btn-danger p-2 rounded-3">
    {{session('delete')}}
  </div>
  @endif
</p>
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
          <a href="{{ route('admin.edit', $comic->id)}}" class="btn-warning p-2 rounded-3">Edit</a>
          <form action="{{ route('admin.destroy', $comic->id)}}" method="post" class="d-inline-block">
            @method('DELETE')
            @csrf
            <input class="btn-danger p-2 rounded-3" type="submit" value="delete">
          </form>
      </td>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection