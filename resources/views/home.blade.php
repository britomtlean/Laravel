@extends('layouts.main')

@section('title', 'Project Laravel')

@section('content')

    <div id="search-container" class="col-md-12">
        <h1>Busque um evento</h1>
        <form action="">
            <input type="text" name="" id="search" class="form-control" placeholder="Procurar...">
        </form>
    </div>

    <div id="events-conteiner" class="col-md-12">
        <h2>Próximos eventos</h2>
        <p>Veja os eventos dos próximos dias</p>

        <div id="divcards-container" class="row">
            @foreach ($events as $array)
                <div class="card col-md-3">
                    <img style="height: 180px" src="/img/events/{{ !empty($array->image) ? $array->image : 'DefaultImage.jpeg' }}" alt="{{ $array->title }}">
                    <div class="card-body">
                        <div class="card-date">10/10/2020</div>
                        <h5 class="card-title">{{ $array->title }}</h5>
                        <p class="card-partipants">X Participantes</p>
                        <a href="/events/{{$array->id}}" class="btn btn-primary">Saber mais</a>
                    </div>
                    <p>{{ $array->title }} -- {{ $array->description }}</p>
                </div>
            @endforeach
        </div>

    </div>




@endsection
