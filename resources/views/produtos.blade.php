@extends('layouts.main')

@section('title', 'Produtos')

@section('content')

@if($id != null)
<h3>ID do produto:{{$id}}</h3>
@endif


@endsection