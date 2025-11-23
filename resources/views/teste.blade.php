@extends('layouts.main')

@section('title', 'Blade')

@section('content')

        @if($nome == "leaN")
            <p>Nome: leaN</p>
        @else
            <p>Outro nome</p>
        @endif


        @foreach($array as $arr)
            <h3>{{$arr}}</h3>
        @endforeach


        @php
            echo "Hello Blade";
        @endphp

@endsection