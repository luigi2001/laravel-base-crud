@extends('layouts.app')

@section('title','modifica fumetto')

@section('content')
<h2>Inserisci un nuovo fumetto</h2>
<form action="{{ route('admin.update',$comic->id) }}" method="post">
    @method('PATCH')
    @csrf
  <div class="mb-3">
    <label for="titolo" class="form-label">titolo</label>
    <input type="text" class="form-control" name="title" id="titolo" value="{{$comic->title}}">
  </div>
  <div class="mb-3">
    <label for="immagine" class="form-label">Copertina (url immagine)</label>
    <input type="text" class="form-control" id="immagine" name="immage" value="{{$comic->immage}}">
  </div>
  <div class="mb-3">
    <label for="prezzo" class="form-label">Prezzo</label>
    <input type="text" class="form-control" id="prezzo" name="price" value="{{$comic->price}}">
  </div>
  <div class="mb-3">
    <label for="serie" class="form-label">Tipo di serie</label>
    <input type="text" class="form-control" id="serie" name="series" value="{{$comic->series}}">
  </div>
  <div class="mb-3">
    <label for="data" class="form-label">Data di uscita (aa-mm-gg)</label>
    <input type="text" class="form-control" id="data" name="sale_date" value="{{$comic->sale_date}}">
  </div>
  <div class="mb-3">
    <select id="tipo" class="form-select" name="type">
        <option value="book" {{ $comic->type == 'book' ? 'selected' : '' }}>comic book</option>
        <option value="novel" {{ $comic->type == 'novel' ? 'selected' : '' }}>graphic novel</option>
    </select>
    <div class="mb-3">
        <label for="descrizione" class="form-label">Descrizione</label>
        <textarea name="description" class="form-control" id="descrizione" cols="30" rows="10">{{$comic->description}}</textarea>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection