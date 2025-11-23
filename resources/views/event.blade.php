@extends('layouts.main')

@section('title', 'Detalhes do Evento')

@section('content')
    <div class="col-md10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-5">
                <img src="/img/events/{{ !empty($event->image) ? $event->image : 'DefaultImage.jpeg' }}" class="img-fluid"
                    alt="{{ $event->title }}" alt="">
            </div>

            <div class="info-container">
                <h1>{{ $event->title }}</h1>

                <p class="event-city">
                    <ion-icon style="font-size: 1.5rem" name="location-outline"></ion-icon>{{ $event->city }}
                </p>

                <p class="event-partipants">
                    <ion-icon style="font-size: 1.5rem" name="people-outline"></ion-icon> X Participantes
                </p>

                <p class="event-owner">
                    <ion-icon style="font-size: 1.5rem" name="star-outline"></ion-icon> Dono do evento
                </p>

                <a class="btn btn-primary" href="">Confirmar Presença</a>
            </div>

            <div class="col-md-12" id="description-container">
                <h3>Sobre o evento:</h3>
                <p class="event-description"> <ion-icon style="font-size: 1.5rem"
                        name="document-outline"></ion-icon>{{ $event->description }}</p>
            </div>
        </div>
    </div>
    </div>
@endsection
