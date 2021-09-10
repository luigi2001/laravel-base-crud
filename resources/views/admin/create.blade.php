@extends('layouts.app')

@section('title','aggiunta fumetto')

@section('content')
<h2>Inserisci un nuovo fumetto</h2>
<form action="{{ route('admin.store') }}" method="post">
    @csrf
  <div class="mb-3">
    <label for="titolo" class="form-label">titolo</label>
    <input type="text" class="form-control" name="title" id="titolo">
  </div>
  <div class="mb-3">
    <label for="immagine" class="form-label">Copertina (url immagine)</label>
    <input type="text" class="form-control" id="immagine" name="immage">
  </div>
  <div class="mb-3">
    <label for="prezzo" class="form-label">Prezzo</label>
    <input type="text" class="form-control" id="prezzo" name="price">
  </div>
  <div class="mb-3">
    <label for="serie" class="form-label">Tipo di serie</label>
    <input type="text" class="form-control" id="serie" name="series">
  </div>
  <div class="mb-3">
    <label for="data" class="form-label">Data di uscita (aa-mm-gg)</label>
    <input type="text" class="form-control" id="data" name="sale_date">
  </div>
  <div class="mb-3">
    <label for="tipo" class="form-label">Tipo di fumetto</label>
    <input type="text" class="form-control" id="tipo" name="type">
  </div>
  <div class="mb-3">
    <select id="tipo" class="form-select" name="type">
        <option value="book">comic book</option>
        <option value="novel">graphic novel</option>
    </select>
    <div class="mb-3">
        <label for="descrizione" class="form-label">Descrizione</label>
        <textarea name="description" class="form-control" id="descrizione" cols="30" rows="10"></textarea>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection