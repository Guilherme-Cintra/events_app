@extends('layouts.main')
@section('title', $event->title)
    
@section('content')

<div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="image-container" class="col-md-6">
                <img src="/img/events/{{$event->image}}" class="img-fluid" alt="${{$event->title}}">
             </div>
             <div id="info-container" class = "col-md-6">
                <H1>{{$event->Title}}</H1>
                <p class="event-city" >
                    <ion-icon name="location-outline"></ion-icon>
                {{$event->City}}
                </p>
                <p class="events-participants">
                    <ion-icon name="people-outline">
                     
                    </ion-icon>
                    X participants
                </p>
                <p class="event-owner">
                    <ion-icon name = "star-outline"></ion-icon>
                    Event owner
                </p>
                <a href="#" class="btn btn-primary" id="event-submit">Confirmar presença</a>
             </div>
             <div class="col-md-12" id="description-container">
                <h3>à propos de cet évennement</h3>
                <p class="event-description">{{$event->Description}}</p>
             </div>
        </div>
    </div>
</div>

@endsection