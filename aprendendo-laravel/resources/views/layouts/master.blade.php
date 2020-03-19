<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="title" content="UNFRAMED">
    <meta name="description" content="Venda de quadros online">
    <meta name="abstract" content="Loja online de arte">
    <meta property="og:site_name" content="UNFRAMED - Loja Online">
    <meta property="og:locale" content="pt-BR">
    <meta name="og:locality" content="São Paulo">
    <meta name="og:region" content="SP">
    <meta name="og:country-name" content="BR">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{asset('img/logo.png')}}">

    <title>{{ config('app.name', 'Unframed') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Estilo FontAweomse -->
    <link async rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  
    <!-- Nosso estilo -->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">

</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top navbar-light">
            <a class="ml-5 navbar-brand" href="#">
                <img src="{{ asset('img/logo-escuro-1.png') }}" class="d-inline-block align-top" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
        
                <ul class="ml-5 navbar-nav mr-auto navbar-items">
                    <li class="ml-5 nav-item ">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('quem_somos') }}">Quem somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('obras') }}">Obras de arte</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('artistas') }}">Artistas</a>
                   
                        
                    </li>
                </ul>
                <a class="nav-link" href="{{ route('cadastro') }}">CADASTRE-SE</a>
                
                <button id="btn-buscar" type="button" class="mr-5 btn btn-padrao">buscar<i class="fa fa-search"></i></button>
        
            </div>
        </nav>
    </header>
    
    <main>
        @yield('content')
    </main>

    <footer class="container-fluid">
        <div class="row p-5 mx-2">
            <div class="col-9 p-0">
                <!-- ICONES SOCIAL MEDIA -->
                <div id="icones-footer">
                    <i class="fab fa-instagram"></i>
                    <i class="mx-3 fab fa-facebook-square"></i>
                    <i class="fab fa-twitter"></i>
                </div>
                <!-- SITEMAP -->
                <ul class="my-5">
                    <li><a href="#">Produtos</a></li>
                    <li><a href="#">Sobre A Loja</a></li>
                    <li><a href="#">Contato</a></li>
                    <li><a href="#">Minha Conta</a></li>
                    <li><a href="#">Carrinho</a></li>
                </ul>
                <!-- DISCLAIMER -->
                <p id="disclaimer">Copyright © 2020 UNFRAMED - Todos os direitos reservados Política de Privacidade</p>
            </div>
            <div class="col-3 p-0 d-flex align-items-center justify-content-center logo-footer">
                <!-- LOGO -->
                <img class="img-fluid" src="{{ asset('img/logo-claro-1.png') }}" alt="Logo">
            </div>
        </div>
    </footer>

</body>
</html>

