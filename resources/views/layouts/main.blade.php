<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <header>
        <h1>LOGO</h1>

        <ul>
            <li>Home</li>
            <li>About</li>
            <li>Contact</li>
        </ul>
    </header>
    <section>
        @yield('content')
    </section>

    <div id="create-event-container" class="col-md-6 offset-md-3">
        <h1>Crie o seu evento</h1>
        <form action="/events" method="POST">
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
                <input type="text" class="form-control" id="description" name="description"
                    placeholder="O que vai acontecer no evento?">
            </div>
            <input type="submit" class="btn btn-primary" value="Criar Evento">
        </form>
    </div>

    <footer>
        <p>Project Laravel</p>
    </footer>
</body>

</html>
