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
    <section class="align-items-center bg-other-cream-color d-flex justify-content-between pe-4 ps-4 py-2">
        <div class="d-flex w-50">
            <img alt="logo" class="w-25" src="../img/footer-logo.png">
        </div>
        <div class="d-flex align-items-center"> <!-- Div envolvendo os itens -->
            <section class="bg-white d-flex align-items-center justify-content-evenly px-3 py-1 rounded-5 me-3"> <!-- Item 1 -->
                <img alt="user" class="w-25" src="{{ Session::get('img') ?? "../img/photo-round-mini.png" }}"> <!-- Ajuste da largura da imagem -->
                <p class="m-0" style="white-space: nowrap;">{{ Session::get('nome') }}</p> <!-- Adicionando margem à direita -->
            </section>
            <a class="dropdown-item me-2" href="{{ route('logout') }}" data-toggle="modal" data-target="#logoutModal"> <!-- Adicionando margem à direita -->
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
            </a>
        </div>
    </section>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pronto para sair?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">eleciona "Sair" se deseja terminar a sessão</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="{{ route('logout') }}">Sair</a>
                </div>
            </div>
        </div>
    </div>



    <!--    *Nav start  -->
    <nav class="navbar navbar-expand-lg bg-white px-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link " aria-current="page" href="#">Alugar/Comprar casa</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Minhas propriedades</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Solicitações</a>
                </li>
            </ul>
            <div class="align-items-center d-flex gap-2">

                <a class="a-main-bg py-1 px-3 rounded-2 text-center text-white w-100" href="#">Registrar Casa</a>
                <div class="bg-darkest-orange d-flex justify-content-center align-items-center  rounded-5" id="ico-bell-div">
                    <i class="bi bi-bell-fill text-white"></i>
                </div>
            </div>
            </div>
        </div>
    </nav>
    <!--    *End of nav-->
</header>
<!--    *End of header    -->

    {{$slot}}

   <!--    *Footer start    -->
<footer class="main-footer">
    <div class="container-fluid py-2 w-100" id="img-main-footer">
        <div class="d-flex align-items-center mt-5 row" id="div-1-footer">
            <div class="align-items-center col-md-6 d-flex flex-column" id="div-1-1-footer">
                <img class="w-50" src="../img/footer-logo.png" alt="logo">
                <p class="fs-4 text-white w-50">Encontre seu lar, seu espaço, seu lugar!</p>
            </div>
            <div class="col-md-6 d-flex justify-content-center" id="div-1-2-footer">
                <div class="w-75">
                    <h2 class="darkest-brown fs-1">Links utéis</h2>
                    <ul class="mb-0 list-unstyled">
                        <li>
                            <a class="darkest-brown nav-link d-inline" href="#">Solicitar propriedade</a>
                        </li>
                        <li>
                            <a class="darkest-brown nav-link d-inline" href="{{route('home')}}">Registrar sua propriedade no portal</a>
                        </li>
                        <li>
                            <a class="darkest-brown fw-bold nav-link d-inline" href="#">Termos e Politicas de Privacidade</a>
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
    <!--    *End of footer    -->



    <!-- /  Link dos js do bootstrap-->
    <script src={{{URL::asset("bootstrap/js/bootstrap.min.js")}}}></script>
    @livewireScripts
</body>
</html>

