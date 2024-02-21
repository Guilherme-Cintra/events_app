@extends('layouts.main')
@section('title', 'Produits')
    
@section('content')
    <H1>Produits</H1>
   
    @if($recherche != '')
    <p>L'utilisateur recherche {{$recherche}}</p>

    @endif

@endsection