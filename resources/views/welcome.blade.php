@extends('layouts.main')
@section('title', 'GCC Évennements')
    
@section('content')
    <H1>Amigos de {{$nome}}</H1>
   
    <img src="/img/banner.webp" alt="Banner">
      @for($i = 0; $i < count($pessoas); $i++)

      <p>{{ $pessoas[$i]}}</p>

      @endfor

@endsection