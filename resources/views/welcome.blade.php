@extends('layouts.main')

@section('title', 'Project Laravel')

@section('content')

        <h1>Hello World</h1>

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