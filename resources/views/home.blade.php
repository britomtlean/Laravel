@extends('layouts.main')

@section('title', 'Project Laravel')

@section('content')


    <div id="search-container" class="col-md-12">
        <h1>Busque um evento</h1>
        <form action="/" method="GET">
            <input type="text" name="search" id="search" class="form-control" placeholder="Procurar...">
        </form>
    </div>

    <div id="events-conteiner" class="col-md-12">

        @if (count($events) == 0)
            <p>Não há eventos disponíveis</p>
        @else

        @if ($search)
            <h2>Buscando por: {{$search}}</h2>
        @else
            <h2>Próximos eventos</h2>
            <p>Veja os eventos dos próximos dias</p>
        @endif
            <div id="divcards-container" class="row">
                @foreach ($events as $array)
                    <div class="card col-md-3">
                        <img style="height: 180px"
                            src="/img/events/{{ !empty($array->image) ? $array->image : 'DefaultImage.jpeg' }}"
                            alt="{{ $array->title }}">
                        <div class="card-body">
                            <div class="card-date">{{ date('d/m/Y', strToTime($array->date)) }}</div>
                            <h5 class="card-title">{{ $array->title }}</h5>
                            <p class="card-partipants">X Participantes</p>
                            <a href="/events/{{ $array->id }}" class="btn btn-primary">Saber mais</a>
                        </div>
                        <p>{{ $array->title }} -- {{ $array->description }}</p>
                    </div>
                @endforeach

        @endif
    </div>

    </div>




@endsection
