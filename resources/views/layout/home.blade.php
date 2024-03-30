<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portal de venda e aluguel de casas">

    <title>@yield('title')</title>

    <!-- /	Link dos Css do Bootstrap -->
    <link href={{URL::asset("bootstrap/css/bootstrap.min.css")}} rel="stylesheet">

    <!-- /	Link do Css do projecto -->
    <link href={{{URL::asset("css/config.css")}}} rel="stylesheet">
    <link href={{{URL::asset("css/main.css")}}} rel="stylesheet">

    @livewireStyles
</head>
<body class="vw-100 overflow-x-hidden">

    <!--    *Header start    -->
<header class="w-100">
    <section class="align-items-center d-flex justify-content-center py-2" id="header-logo-section">
        <div class="d-flex justify-content-center w-50">
            <img alt="logo" class="w-25 " src="../img/logo-with-an-orange-bg.png">
        </div>
    </section>

    <!--    *Nav start  -->
    <nav class="navbar navbar-expand-lg px-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link " aria-current="page" href="{{route('buyrent')}}">Alugar/Comprar casa</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{route('register.user')}}">Cadastrar propriedade</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{route('about')}}">Sobre</a>
                </li>
            </ul>
            <div class="d-flex">
                <a class="a-main-bg py-1 px-5 rounded-2 text-center text-white w-100" href="{{route('login.user')}}">Login</a>
            </div>
            </div>
        </div>
    </nav>
    <!--    *End of nav-->
</header>
<!--    *End of header    -->

    {{-- @yield('conteudo') --}}
    {{$slot}}

    <!--    *Footer start    -->
<footer class="main-footer mt-5">
    <div class="container-fluid py-2 w-100" id="img-main-footer">
        <div class="d-flex align-items-center mt-5 row" id="div-1-footer">
            <div class="align-items-center col-md-6 d-flex flex-column mt-5" id="div-1-1-footer">
                <img class="w-50" src="../img/footer-logo.png" alt="logo">
                <p class="fs-4 text-white w-50">Encontre seu lar, seu espaço, seu lugar!</p>
            </div>
            <div class="col-md-6 d-flex justify-content-center mt-5" id="div-1-2-footer">
                <div class="w-75">
                    <h2 class="darkest-brown fs-1">Links utéis</h2>
                    <ul class="mb-0 list-unstyled">
                        <li>
                            <a class="darkest-brown nav-link" href="{{route('about')}}">Sobre o U-MBANJI</a>
                        </li>
                        <li>
                            <a class="darkest-brown nav-link" href="#">Alugar/Comprar uma casa</a>
                        </li>
                        <li>
                            <a class="darkest-brown nav-link" href="{{route('register.user')}}">Registrar sua propriedade no portal</a>
                        </li>
                        <li>
                            <a class="darkest-brown nav-link" href="#">Termos e Politicas de Privacidade</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 mt-5 text-center text-white" id="copy-rights">
                <p>&copy; Copyright, todos os direitos reservados, 2024</p>
            </div>
        </div>
    </div>
</footer>

    <!-- /  Link dos js do bootstrap-->
    <script src={{{URL::asset("bootstrap/js/bootstrap.min.js")}}}></script>
    @livewireScripts
</body>
</html>
