<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') - Site de Eventos | por @wagneramaro</title>

        <!-- CSS BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

        <!-- FONTE DO GOOGLE -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">

        <!-- CSS DA APLICAÇÃO -->
        <link rel="stylesheet" href="/css/style.css">

    </head>
    <body>

        <header>
            <nav class="navbar navbar-expand-md navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/img/logo.png" alt="Logo">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Início</a>
                        </li>

                        <li class="nav-item">
                            <a href="/contato"  class="nav-link">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a href="/events/create"  class="nav-link">Criar Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a href="/"  class="nav-link">Entrar</a>
                        </li>
                        <li class="nav-item">
                            <a href="/"  class="nav-link">Cadastrar</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <main>
            <div class="containerfluid">
                <div class="row">
                    @if (session('msg'))
                        <p class="msg">{{session('msg')}}</p>
                    @endif
                    @yield('content')
                </div>
            </div>
        </main>


        <footer>Site de Eventos @copy - Feito com Laravel.</footer>
        <script src="\js\script.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>
