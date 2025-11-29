@extends('layouts.main')

@section('title', 'Formulario')

@section('content')

    <div id="create-event-container" class="col-md-6 offset-md-3">
        <h1>Crie o seu evento</h1>

        <form action="/events" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="title">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento">
            </div>

            <div class="form-group">
                <label for="city">Cidade:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Local do Evento">
            </div>

            <div class="form-group">
                <label for="date">Data do evento:</label>
                <input type="date" class="form-control" id="date" name="date">
            </div>

            <div class="form-group">
                <label for="private">O evento é privado?</label>
                <select name="private" id="private" class="form-control">
                    <option value="1">Sim</option>
                    <option value="0">Não</option>
                </select>
            </div>

            <div class="form-group">
                <label for="description">Descrião:</label>
                <textarea type="text" class="form-control" id="description" name="description"
                    placeholder="O que vai acontecer no evento?">
                </textarea>
            </div>

            <div class="form-group">
                <label for="items">Adicione items de infraestrutura:</label>
                <div style="display: flex; flex-direction: column; gap 1rem" class="form-group">
                    <input type="checkbox" name="items[]" id="items" value="Cadeiras">Cadeiras
                    <input type="checkbox" name="items[]" id="items" value="Palco">Palco
                    <input type="checkbox" name="items[]" id="items" value="Cerveja grátis">Cerveja grátis
                    <input type="checkbox" name="items[]" id="items" value="Open Food">Open Food
                    <input type="checkbox" name="items[]" id="items" value="Brinde">Brinde
                </div>
            </div>

            <div class="form-group">
                <label for="image">Imagem do Evento:</label>
                <input type="file" class="for-control-file" id="image", name="image">
            </div>


            <input type="submit" class="btn btn-primary" value="Criar Evento">
        </form>
    </div>

@endsection
