@extends('layouts.main')

@section('title', 'Formulario')

@section('content')

    <div id="create-event-container" class="col-md-6 offset-md-3">
        <h1>Crie o seu evento</h1>

        <form action="/events" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="tite">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento">
            </div>

            <div class="form-group">
                <label for="tite">Cidade:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Local do Evento">
            </div>

            <div class="form-group">
                <label for="tite">O evento é privado?</label>
                <select name="private" id="private" class="form-control">
                    <option value="1">Sim</option>
                    <option value="0">Não</option>
                </select>
            </div>

            <div class="form-group">
                <label for="tite">Descrião:</label>
                <textarea type="text" class="form-control" id="description" name="description"
                    placeholder="O que vai acontecer no evento?">
                </textarea>
                </div>

                <div class="form-group">
                    <label for="image">Imagem do Evento:</label>
                    <input type="file" class="for-control-file" id="image", name="image">
                </div>


                <input type="submit" class="btn btn-primary" value="Criar Evento">
            </form>
        </div>

@endsection
