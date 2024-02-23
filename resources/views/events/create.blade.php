@extends('layouts.main')
@section('title', 'Créer évennement')
    
@section('content')


<div class="col-md-6 offset-md-3" id="event-create-container">
<h1>Créer évennement</h1>
<form action="/events" method="POST" enctype ="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="image">Image de l'évennement</label>
       <input type="file" id="image" name="image" class="form-control-file">
    </div>
    <div class="form-group">
        <label for="title">Évennement</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Nom de l'évennement">
        
    </div>

    <div class="form-group">
        <label for="city">Ville</label>
        <input type="text" class="form-control" id="city" name="city" placeholder="Nom de l'évennement">

    </div>
    <div class="form-group">
        <label for="private">Est-ce un évennement privé?</label>
        <select class="form-control" id="private" name="private"> 
            <option value="0">Non</option>
            <option value="1">Oui</option>
        </select>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
       <textarea name="description" id="description" class="form-control" placeholder="Décrivez votre évennement..."></textarea>
    </div>

    <input type="submit" class="btn btn-primary" value ="créer l'évennement">
</form>
</div>
@endsection