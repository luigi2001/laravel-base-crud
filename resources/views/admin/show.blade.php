@extends('layouts.app')

@section('title','dettaglio fumetto')

@section('content')
<p>
  @if(session('Inserisci'))
  <div class="btn-success p-2 rounded-3">
    {{session('Inserisci')}}
  </div>
  @endif
</p>
<div class="card m-5" style="width: 18rem;">
  <img src="{{$comic->immage}}" class="card-img-top" alt="{{$comic->title}}">
  <div class="card-body">
    <h5 class="card-title">{{$comic->title}}</h5>
    <p class="card-text">{{$comic->description}}</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">{{$comic->price}} Euro </li>
    <li class="list-group-item"> data di uscita: {{$comic->sale_date}}</li>
    <li class="list-group-item">{{$comic->series}}</li>
    <li class="list-group-item">{{$comic->type}}</li>
  </ul>
</div>
@endsection