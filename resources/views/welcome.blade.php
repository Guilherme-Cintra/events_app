@extends('layouts.main')
@section('title', 'GCC Évennements')
    
@section('content')



<div id="search-container" class="col-md-12">
  <h1>
    Recherche
  </h1>
  <form action="">
    <input type="text" id="search" name="search" class="form-control" placeholder="Rechercher...">
  </form>
</div>
<div id="events-container" class="col-md-12">
  <h2>
    Prochains Évennements
  </h2>
  <p class= "subtitle">Voir les évennements à venir!</p>
  <div id="cards-container" class="row">
    @foreach($events as $event)
    <div class="card col-md-3">
      <img src="/img/evento.webp" alt="{{ $event->title }}">
      <div class="card-body">
        <p class="card-date">
          10-12-2024
        </p>
        <h5 class="card-title">
          {{$event->Title}}
        </h5>
        <p class="card-participants">
          Julia Zelhulber
        </p>
        <a href="#" class="btn btn-primary">voir plus</a>
      </div>
    </div>
    @endforeach
  </div>
</div>

@endsection