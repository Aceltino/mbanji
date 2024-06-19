<div>
    @section('title', 'Home')
    <style>
        .btn-primary:focus {
            background-color: #007bff;
            /* Cor de fundo do botão ao ser focado */
            color: #fff;
            /* Cor do texto do botão ao ser focado */
        }

        .btn-primary:active {
            background-color: #0069d9;
            /* Cor de fundo do botão quando ativo */
            color: #fff;
            /* Cor do texto do botão quando ativo */
        }

        .notification {
            position: fixed;
            top: 150px;
            right: 40px;
            background-color: rgba(216, 18, 18, 0.667);
            /* Adiciona transparência ao fundo */
            color: white;
            padding: 15px;
            border-radius: 5px;
            display: none;
            opacity: 10;
            /* Define a opacidade inicial como 0 */
            transition: opacity 0.5s ease;
            /* Adiciona uma transição suave */
            z-index: 9999;
            /* Garante que a notificação esteja acima de outros elementos */
        }

        .notificationAviso {
            position: fixed;
            top: 150px;
            right: 40px;
            background-color: rgba(229, 197, 13, 0.667);
            /* Adiciona transparência ao fundo */
            color: white;
            padding: 15px;
            border-radius: 5px;
            display: none;
            opacity: 10;
            /* Define a opacidade inicial como 0 */
            transition: opacity 0.5s ease;
            /* Adiciona uma transição suave */
            z-index: 9999;
            /* Garante que a notificação esteja acima de outros elementos */
        }

        .notificationCerto {
            position: fixed;
            top: 150px;
            right: 40px;
            background-color: rgba(25, 214, 21, 0.667);
            /* Adiciona transparência ao fundo */
            color: white;
            padding: 15px;
            border-radius: 5px;
            display: none;
            opacity: 10;
            /* Define a opacidade inicial como 0 */
            transition: opacity 0.5s ease;
            /* Adiciona uma transição suave */
            z-index: 9999;
            /* Garante que a notificação esteja acima de outros elementos */
        }

        .bg-darkest-orange:focus,
        .bg-darkest-orange:active {
            background-color: rgba(216, 120, 18, 0.667);
            /* Substitua 'sua-cor' pela cor desejada */
        }
    </style>
    <!--    *Main start    -->
    <main class="w-100">
        <!--    *Search section start    -->
        <section class="container vw-100 pt-3">
            <div class="row">
                <div class="col-10 col-lg-4 offset-1 offset-lg-4">
                    <div class="input-group my-4">
                        <input class="form-control" type="search" name="" id=""
                            placeholder="Procurar alguém">
                        <div class="input-group-append">
                            <span class="input-group-text" id="search-icon">
                                <i class="bi bi-search"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            {{-- erro --}}
            <div class="notification" id="notification" style="display: none;">
                <span style="margin-left: 10px;">Já não pode selecionar esta opção!
                </span>
            </div>
            {{-- aviso --}}

            <div class="notificationCerto" id="notificationCerto" style="display: none;">
                <span style="margin-left: 10px;">Right
                </span>
            </div>

            <!--    *Owner Section start    -->
            <section id="recently-posted-section" class="my-3 py-3">
                <div id="cards-section">
                    <!--    *Carousel-3 start   -->
                    <div id="carouselExampleHouses" class="carousel slide" data-bs-ride="carousel">
                        <!-- Adicione o atributo data-bs-ride="carousel" -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="cards-wrapper">
                                    <!--    *Card-1 start    -->
                                    @for ($i = 1; $i <= 4; $i++)
                                        @if ($i == 1)
                                            <div class="card special-card" style="width: 14rem;">
                                                <img src="../img/photo-round.png" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <div>
                                                        <h6 class="card-title color-darkest-orange text-uppercase">
                                                            Aceltino Kiaku Mateus Quianvo
                                                        </h6>
                                                        <p class="color-darkest-orange">
                                                            cesaltinoquianvo@gmail.com
                                                        </p>
                                                    </div>
                                                    <h6 class="card-text mb-2">
                                                        +244 944 920 439
                                                    </h6>
                                                    <h6 class="card-text mb-2">
                                                        +244 944 920 439
                                                    </h6>
                                                    <div class="d-flex">
                                                        <button class="different-btn btn w-50 me-2 "
                                                            data-bs-toggle="modal" data-bs-target="#ownerSeeMore"
                                                            type="button">Ver mais</button>
                                                        <button class="btn btn-danger text-white w-50"
                                                            data-bs-toggle="modal" data-bs-target="#reportModal"
                                                            type="button">Denunciar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                        @if ($i == 2)
                                            <div class="card special-card d-none d-md-block  d-lg-block"
                                                style="width: 14rem;">
                                                <img src="../img/photo-round.png" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <div>
                                                        <h6 class="card-title color-darkest-orange text-uppercase">
                                                            Aceltino Kiaku Mateus Quianvo
                                                        </h6>
                                                        <p class="color-darkest-orange">
                                                            cesaltinoquianvo@gmail.com
                                                        </p>
                                                    </div>
                                                    <h6 class="card-text mb-2">
                                                        +244 944 920 439
                                                    </h6>
                                                    <h6 class="card-text mb-2">
                                                        +244 944 920 439
                                                    </h6>
                                                    <div class="d-flex">
                                                        <button class="different-btn btn w-50 me-2 "
                                                            data-bs-toggle="modal" data-bs-target="#ownerSeeMore"
                                                            type="button">Ver mais</button>
                                                        <button class="btn btn-danger text-white w-50"
                                                            data-bs-toggle="modal" data-bs-target="#reportModal"
                                                            type="button">Denunciar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                        @if ($i > 2)
                                            <div class="card special-card d-none d-lg-block" style="width: 14rem;">
                                                <img src="../img/photo-round.png" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <div>
                                                        <h6 class="card-title color-darkest-orange text-uppercase">
                                                            Aceltino Kiaku Mateus Quianvo
                                                        </h6>
                                                        <p class="color-darkest-orange">
                                                            cesaltinoquianvo@gmail.com
                                                        </p>
                                                    </div>
                                                    <h6 class="card-text mb-2">
                                                        +244 944 920 439
                                                    </h6>
                                                    <h6 class="card-text mb-2">
                                                        +244 944 920 439
                                                    </h6>
                                                    <div class="d-flex">
                                                        <button class="different-btn btn w-50 me-2 "
                                                            data-bs-toggle="modal" data-bs-target="#ownerSeeMore"
                                                            type="button">Ver mais</button>
                                                        <button class="btn btn-danger text-white w-50"
                                                            data-bs-toggle="modal" data-bs-target="#reportModal"
                                                            type="button">Denunciar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endfor
                                    <!--    *End of card-1    -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--    *End of carousel-3  -->
                </div>
            </section>
            <!--    *End of Owner section    -->
        </section>
        <!--    *End of section between the carousels    -->

        <div class="d-flex justify-content-center mb-4">
            <hr class="w-50 mb-4">
        </div>

        <!--    *Main section start   -->
        <section class="bg-other-cream-color container-fluid mt-3 px-5 py-3">
            <div class="row">
                <div class="col-10 col-lg-7 d-flex justify-content-center offset-1 offset-lg-0">
                    <div class="card" style="width: 20rem;">
                        <div class="d-flex justify-content-center py-4 w-100">
                            <img class="card-img-top mt-3 w-25"
                                src={{ Session::get('img') ?? '../img/photo-round-mini.png' }} alt="...">
                        </div>
                        <div class="card-body container-fluid">
                            <div class="row">
                                <div class="col-4 col-lg-5">
                                    <p class="card-text">Meu perfil</p>
                                    <p class="card-text">Telefone</p>
                                </div>
                                <div class="col-8 col-lg-7 d-flex flex-column">
                                    <p class="card-text fw-bolder">Proprietário/cliente</p>
                                    <p class="card-text fw-bolder">(+244) 944 880 743</p>
                                    <p class="card-text fw-bolder">(+244) 944 880 743</p>
                                </div>
                            </div>
                            <p class="card-text fw-bolder mb-4 mt-3 text-center">{{ Session::get('nome') }}</p>
                            <div class="d-flex justify-content-center">
                                <a href="#" class="btn main-btn-bg px-4 text-white">Atualizar perfil</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-10 col-lg-5 d-flex justify-content-center mt-4 mt-lg-0 offset-1 offset-lg-0">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 d-flex d-lg-block justify-content-center">
                                <!--    *Carousel-1 start   -->
                                <div id="carouselExampleIndicators-1" class="carousel d-none d-md-block slide w-75">
                                    <div
                                        class="carousel-indicators special-positioning
                                position-absolute">
                                        <button type="button" data-bs-target="#carouselExampleIndicators-1"
                                            data-bs-slide-to="0" class="active" aria-current="true"
                                            aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators-1"
                                            data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators-1"
                                            data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    </div>
                                    <div class="carousel-inner rounded-2">
                                        <div class="carousel-item active">
                                            <img src="../img/white-background.jpg" class="d-block w-100"
                                                alt="Advertising-4">
                                            <div
                                                class="carousel-caption position-absolute start-0 text-start top-0 px-1 py-0 w-100">
                                                <div class="align-items-center d-flex justify-content-around w-100">
                                                    <div>
                                                        <h6 class="fs-special fw-bolder mt-3 text-center text-black ">
                                                            Regulamento (Proprietário)</h6>
                                                        <p class="mx-2 my-0 text-black">Lorem ipsum dolor sit, amet
                                                            consectetur adipisicing elit. Fuga mollitia expedita
                                                            perferendis itaque. Repellendus dolorum atque illum libero
                                                            repellat dolore consectetur rem quidem quasi architecto,
                                                            vero quia debitis ipsum natus!</p>
                                                        <div class="d-flex justify-content-center">
                                                            <a href="#"
                                                                class="btn btn-sm  main-btn-bg px-4 text-white">Saber
                                                                mais</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="../img/white-background.jpg" class="d-block w-100"
                                                alt="Advertising-5">
                                            <div
                                                class="carousel-caption position-absolute start-0 text-start top-0 px-1 py-0 w-100">
                                                <div class="align-items-center d-flex justify-content-around w-100">
                                                    <div>
                                                        <h6 class="darkest-brown fs-special fw-bolder">Encontre aqui a
                                                            solução para os seus problemas...</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="../img/white-background.jpg" class="d-block w-100"
                                                alt="Advertising-6">
                                            <div
                                                class="carousel-caption position-absolute start-0 text-start top-0 px-1 py-0 w-100">
                                                <div class="align-items-center d-flex justify-content-around w-100">
                                                    <div>
                                                        <h6 class="darkest-brown fs-special fw-bolder">Sinta-se em
                                                            casa!</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--    *End of carousel-1  -->
                            </div>
                            <div class="col-12 d-flex d-lg-block justify-content-center mt-4">
                                <div class="bg-white py-3 rounded-2 w-75">
                                    <h5 class="darkest-brown fs-special fw-bolder text-center">Solicitações em curso
                                    </h5>
                                    <div class="d-flex justify-content-center align-items-center gap-5 ">
                                        <span class="darkest-brown fw-bolder fs-1 ms-5">0</span>
                                        <i class="bi bi-caret-right-fill color-pink-orange fs-2"></i>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <a href="#" class="btn btn-sm  main-btn-bg px-4 text-white">Solicitar
                                            Propriedades</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--    *End of Main section    -->

        <!--    *Carousel-2 start   -->
        <div id="carouselExampleIndicators-3" class="carousel d-none d-md-block slide vw-100"
            data-bs-ride="carousel">
            <div class="carousel-indicators special-positioning
        position-absolute">
                <button type="button" data-bs-target="#carouselExampleIndicators-3" data-bs-slide-to="0"
                    class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators-3" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators-3" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../img/linear-gradient.png" class="d-block vw-100" alt="Advertising-4">
                    <div class="carousel-caption mt-0 position-absolute start-0 text-start top-0 px-5 w-100">
                        <div class="align-items-center d-flex mt-5 justify-content-around w-100">
                            <div class="w-50">
                                <img src="../img/img-2.png" alt="Young people living together" class="w-75">
                            </div>
                            <div class="w-50">
                                <h2 class="darkest-brown fs-3 fs-special fw-bolder w-75">Precisa de casa para um
                                    convívio entre kambas?</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../img/linear-gradient.png" class="d-block vw-100" alt="Advertising-5">
                    <div class="carousel-caption mt-0 position-absolute start-0 text-start top-0 px-5 w-100">
                        <div class="align-items-center d-flex mt-5 justify-content-around w-100">
                            <div class="w-50">
                                <img src="../img/img-2.png" alt="Young people living together" class="w-75">
                            </div>
                            <div class="w-50">
                                <h2 class="darkest-brown fs-3 fs-special fw-bolder w-75">Encontre aqui a solução para
                                    os seus problemas...</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../img/linear-gradient.png" class="d-block vw-100" alt="Advertising-6">
                    <div class="carousel-caption mt-0 position-absolute start-0 text-start top-0 px-5 w-100">
                        <div class="align-items-center d-flex mt-5 justify-content-around w-100">
                            <div class="w-50">
                                <img src="../img/img-2.png" alt="Young people living together" class="w-75">
                            </div>
                            <div class="w-50">
                                <h2 class="darkest-brown fs-3 fs-special fw-bolder w-75">Sinta-se em casa!</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--    *End of carousel-2  -->

        <!-- Modal-1 -->
        <div class="modal fade" id="ownerSeeMore" tabindex="-1" aria-labelledby="ownerSeeMore" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="d-flex modal-header justify-content-between">
                        <h2>Status</h2>
                        <h2>Proprietário / Cliente</h2>
                    </div>
                    <div class="modal-body">
                        <section class="container-fluid">
                            <div class="py-3 row">
                                <div class="col-12 col-lg-5">
                                    <div class="align-items-center d-flex h-100 justify-content-center">
                                        <img class="rounded-5 w-25" alt="photo"
                                            src={{ $propriedadeOne['propr_img'] ?? '../img/photo-round.png' }}>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-7 mt-3 mt-lg-0">
                                    <div class="bl-2 ps-2">
                                        <strong class="text-uppercase">ACELTINO KIAKU MATEUS QUIANVO</strong>
                                        <p>+244 956 234 112</p>
                                        <p>+244 956 234 112</p>
                                        <p>cesaltinoquianvo@gmail.com</p>
                                        <p class="mb-0">Solicitações bem sucedidas</p>
                                        <button class="btn btn-danger text-white w-50" data-bs-toggle="modal"
                                            data-bs-target="#reportModal" type="button">Denunciar</button>
                                    </div>
                                </div>
                            </div>

                            <div class="py-3 row">
                                <div class="col-12 col-lg-5">
                                    <div class="align-items-center d-flex h-100 justify-content-center">
                                        <h4 class="text-uppercase">Dados bancários</h4>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-7 mt-3 mt-lg-0">
                                    <div class="bl-2">
                                        <div class="mb-4 ps-2">
                                            <strong class="text-uppercase">BAI</strong>
                                            <p class="mb-1">AO06.8793.8364.1334.3231.7</p>
                                            <p class="mb-1">8793.8364.1334.3231.7</p>
                                            <p>ACELTINO KIAKU MATEUS QUIANVO</p>
                                        </div>
                                        <div class="ps-2">
                                            <strong class="text-uppercase">Banco Sol</strong>
                                            <p class="mb-1">AO06.8793.8364.1334.3231.7</p>
                                            <p class="mb-1">8793.8364.1334.3231.7</p>
                                            <p>ACELTINO KIAKU MATEUS QUIANVO</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button type="button" class="btn btn-outline-secondary px-3 w-100"
                                    data-bs-dismiss="modal">
                                    Voltar
                                </button>
                            </div>
                        </section>
                    </div>
                    <div class="d-flex modal-footer justify-content-center">
                        <section class="d-flex gap-3">
                            <button type="button" class="btn btn-warning px-3 text-white" data-bs-dismiss="modal">
                                Editar (ADM / OWN)
                            </button>
                            <button type="button" class="a-main-like-btn-bg btn text-white px-4"
                                data-bs-toggle="modal" data-bs-target="#confirmationModal">
                                Ver propriedades
                            </button>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <!--    End of modal-1   -->

        <!-- Modal-2 -->
        <div class="modal fade" id="reportModal" tabindex="-1" aria-labelledby="reportModal" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="d-flex modal-header justify-content-center">
                        <span class="fs-4 text-uppercase">
                            <strong>Denunciar:</strong>
                            ACELTINO KIAKU MATEUS QUIANVO
                        </span>
                    </div>
                    <div class="modal-body">
                        <section class="container-fluid">
                            <div class="py-3 row">
                                <div>
                                    <div class="px-2">
                                        <p>Escreva abaixo o motivo da denuncia.</p>
                                        <textarea class="form-control w-100" name="" id="" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="d-flex modal-footer justify-content-center">
                        <section class="d-flex gap-3">
                            <button type="button" class="btn btn-warning px-3 text-white" data-bs-dismiss="modal">
                                Voltar
                            </button>
                            <button class="btn btn-danger text-white w-50" data-bs-toggle="modal"
                                data-bs-target="#reportModal" type="button">Denunciar</button>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <!--    End of modal-2   -->

        <!-- Modal-3 -->

        <div wire:ignore.self class="modal fade" id="homeRegistrationModal" tabindex="-1"
            aria-labelledby="homeRegistrationModal" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="d-flex modal-header justify-content-center">
                        <span class="darkest-brown fw-bold fs-4 text-uppercase">
                            Registrar casa
                        </span>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="py-3 row">
                                <div>
                                    <form enctype="multipart/form-data" autocomplete="off" wire:submit.prevent="save"
                                        class="bg-form-orange py-3 px-4 rounded-3" wire:loading.remove>

                                        <h3 class="text-center">Informações gerais</h3>
                                        <div>
                                            <div class="row">
                                                <div class="col-12 col-lg-6">
                                                    <div>
                                                        <span class="form-text">Tipo de propriedade</span>
                                                        <select class="form-select" wire:model="propertyType">
                                                            <option value=>Selecione o tipo de casa</option>
                                                            <option value=1>Apartamento</option>
                                                            <option value=0>Vivenda</option>
                                                            <option value=2>Outro</option>
                                                        </select>
                                                        @error('propertyType')
                                                            <span class="error">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div>
                                                        <div>
                                                            <span class="form-text">Localização</span>

                                                            <div class="d-flex gap-2 justify-content-between">
                                                                <select class="form-select" wire:model="province">
                                                                    <option value=>Selecione a provincia
                                                                    </option>
                                                                    <option value="Luanda">Luanda</option>
                                                                    <option value="Benguela">Benguela</option>
                                                                    <option value="Cabinda">Cabinda</option>
                                                                </select>

                                                                <select class="form-select" wire:model="municipe">
                                                                    <option value=>Selecione o municipio
                                                                    </option>
                                                                    <option value=1>Ingombota</option>
                                                                    <option value=2>Viana</option>
                                                                </select>
                                                            </div>
                                                            @error('province')
                                                                <span class="error">Selecione a provincia</span>
                                                            @enderror
                                                            @error('municipe')
                                                                <span class="error">Selecione o municipio</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div>

                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    {{-- <div>

                                                        <span class="form-text">Documento(s) da
                                                            propriedade(img apenas)</span>
                                                        <input class="form-control" type="file"
                                                            wire:model="photoDoc" name="photoDoc">
                                                        @error('photoDoc')
                                                            <span class="error">{{ $message }}</span>
                                                        @enderror
                                                    </div> --}}
                                                    <div>
                                                        <span class="form-text">Bairro ou rua onde está a casa</span>
                                                        <input class="form-control" type="text" name="street"
                                                            wire:model="street">
                                                        @error('street')
                                                            <span class="error">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    {{-- <div>
                                                        <span class="form-text">Número de quartos</span>
                                                        <select class="form-select" wire:model="numberOfRooms">
                                                            <option value=0>Sem Quartos</option>
                                                            @for ($i = 1; $i <= 30; $i++)
                                                                <option value="{{ $i }}">
                                                                    {{ $i }}</option>
                                                            @endfor
                                                        </select>
                                                        @error('numberOfRooms')
                                                            <span class="error">{{ $message }}</span>
                                                        @enderror
                                                    </div> --}}

                                                    <div >
                                                        <div class="form-text mb-2">Debilidades da casa</div>

                                                        <input class="form-check-input" type="checkbox"
                                                            id="energia" wire:model="energia">
                                                        <label class="form-check-label text-white"
                                                            for="energia" wire:model="energia">
                                                            Sem Energia
                                                        </label>


                                                        <input class="form-check-input" type="checkbox"
                                                            id="agua" wire:model="agua">
                                                        <label class="form-check-label text-white"
                                                            for="agua" wire:model="agua">
                                                            Sem aguá
                                                        </label>


                                                        <input class="form-check-input" type="checkbox"
                                                            id="estrada" wire:model="estrada">
                                                        <label class="form-check-label text-white"
                                                            for="estrada" wire:model="estrada">
                                                            Não localizado ao pé da estrada
                                                        </label>

                                                    </div>
                                                </div>
                                            </div>

                                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                            {{-- 
                                            <div class="row mt-3">
                                                <!-- Descrições -->
                                                <div class="col-lg-6">

                                                    <div class="col-12">
                                                        <span class="form-text">Fale um pouco mais sobre a casa
                                                            (opcional)</span>
                                                        <textarea class="form-control" wire:model="description" cols="30" rows="10"></textarea>
                                                        @error('description')
                                                            <span class="error">{{ $message }}</span>
                                                        @enderror

                                                    </div> --}}
                                            {{-- <div wire:ignore.self>

                                                        <script>
                                                            $(document).ready(function() {
                                                                $('#adicionarDescricao').click(function() {
                                                                    Livewire.emit('adicionarDescricao');
                                                                });

                                                                $(document).on('click', '.removerDesc', function() {
                                                                    var index = $(this).data('index');
                                                                    Livewire.emit('removerDescricao', index);
                                                                });
                                                            });
                                                        </script>

                                                        <div id="descricao">
                                                            <span class="form-text">Descrições da casa (2 salas,
                                                                1WC...)</span>
                                                            @foreach ($descInput as $index => $value)
                                                                <div class="mb-2">
                                                                    <input class="form-control" type="text"
                                                                        wire:model="descInput.{{ $index }}">
                                                                    @error('descInput.*')
                                                                        <span class="error">Este campo deve ser
                                                                            preenchido</span>
                                                                    @enderror
                                                                    <button type="button"
                                                                        class="btn btn-danger mb-2 mt-2 mx-2 removerDesc"
                                                                        data-index="{{ $index }}">Remover</button>
                                                                </div>
                                                            @endforeach
                                                        </div>


                                                        <div class="mb-3">
                                                            <button id="adicionarDescricao" type="button"
                                                                class="btn btn-primary">Adicionar Descrição</button>
                                                        </div>
                                                    </div> --}}

                                            {{-- </div> --}}

                                            <!-- Debilidades -->
                                            {{-- <div class="col-lg-6 text-lg-right">


                                                    <div wire:ignore.self>
                                                        <script>
                                                            $(document).ready(function() {
                                                                $('#adicionarDebilidade').click(function() {
                                                                    Livewire.emit('adicionarDebilidade');
                                                                });

                                                                $(document).on('click', '.removerDeb', function() {
                                                                    var index = $(this).data('index');
                                                                    Livewire.emit('removerDebilidade', index);
                                                                });
                                                            });
                                                        </script>

                                                        <div id="debilidade">
                                                            <span class="form-text">Debilidades da casa (Sem
                                                                energia...)</span>
                                                            @foreach ($debInput as $index => $value)
                                                                <div class="mb-2">
                                                                    <input class="form-control" type="text"
                                                                        wire:model="debInput.{{ $index }}">
                                                                    @error('debInput.*')
                                                                        <span class="error">Este campo deve ser
                                                                            preenchido</span>
                                                                    @enderror
                                                                    <button type="button"
                                                                        class="btn btn-danger mb-2 mt-2 mx-2 removerDeb"
                                                                        data-index="{{ $index }}">Remover</button>
                                                                </div>
                                                            @endforeach
                                                        </div>

                                                        <div class="mb-3">
                                                            <button id="adicionarDebilidade" type="button"
                                                                class="btn btn-primary">Adicionar Debilidade</button>
                                                        </div>
                                                    </div>

                                                </div> --}}
                                            {{-- </div> --}}
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-12 col-lg-6">
                                                <span class="form-text">Imagem principal da propriedade
                                                    (capa)</span>
                                                <input class="form-control mb-2" type="file"
                                                    wire:model="mainImage">
                                                @error('mainImage')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <span class="form-text">Outras imagens da casa</span>
                                                <input class="form-control mb-2" type="file"
                                                    wire:model="otherPics" multiple>
                                                @error('otherPics')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <span class="form-text">Fale um pouco mais sobre a casa (compartimentos e outros...)</span>
                                                <textarea class="form-control" wire:model="description" cols="30" rows="10"></textarea>
                                                @error('description')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror

                                            </div>
                                        </div>

                                        <h3 class="text-center my-3">Informações do preçário</h3>

                                        <script>
                                            $(document).ready(function() {
                                                $('#adicionarPreco').click(function() {
                                                    Livewire.emit('adicionarPrecario');

                                                    // Após adicionar um novo preço, forçar o Livewire a atualizar os elementos do DOM
                                                    // Livewire.hook('message.sent', () => {
                                                    console.log('tttt');
                                                    //     Livewire.emit('refreshLivewire');
                                                    // });
                                                });

                                                $(document).on('click', '.removerPreco', function() {
                                                    var index = $(this).data('index');
                                                    Livewire.emit('removerPrecario', index);
                                                });
                                            });
                                        </script>

                                        <div id="preco">
                                            @foreach ($precario as $index => $value)
                                                <div class="row">
                                                    <div class="col-12 col-lg-6">
                                                        <span class="form-text">O que pretende com a sua
                                                            casa?</span>
                                                        <select class="form-select opcao-select"
                                                            wire:model="precario.{{ $index }}.contract"
                                                            wire:change="contractFunction({{ $index }})">
                                                            <option value=>Selecione o que pretende
                                                                Alugar/Vender</option>
                                                            <option value=0>Alugar</option>
                                                            <option value=1>Vender</option>
                                                        </select>
                                                        @error("precario.$index.contract")
                                                            <span class="error">Este campo deve ser preenchido</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <span class="form-text">Preço (em kwanzas)</span>
                                                        <input class="form-control" type="number" min="500"
                                                            placeholder="Digite apenas a quantia (ex:20000)"
                                                            wire:model="precario.{{ $index }}.money"
                                                            wire:blur="validarMoney({{ $index }})">
                                                        @error("precario.$index.money")
                                                            <span class="error">Este campo deve ser preenchido</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                @if ($precario[$index]['contract'] != 1)
                                                    <div class="row">
                                                        <div class="col-12 col-lg-6">
                                                            <span class="form-text">Duração</span>
                                                            <select class="form-select"
                                                                wire:model="precario.{{ $index }}.time">
                                                                <option value=>Selecione o tempo
                                                                </option>
                                                                @for ($i = 1; $i <= 30; $i++)
                                                                    <option value={{ $i }}>
                                                                        {{ $i }}
                                                                    </option>
                                                                @endfor
                                                            </select>
                                                            @error("precario.$index.time")
                                                                <span class="error">Este campo deve ser preenchido</span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <span class="form-text">Unidade de medida</span>
                                                            <select class="form-select"
                                                                wire:model="precario.{{ $index }}.unity"
                                                                wire:change="unitytFunction({{ $index }})">
                                                                <option value=>Selecione a unidade de
                                                                    tempo</option>
                                                                <option value=5>Hora(s)</option>
                                                                <option value=1>Dia(s)</option>
                                                                <option value=2>Semana(s)</option>
                                                                <option value=3>Mes(es)</option>
                                                                <option value=4>Ano(s)</option>
                                                            </select>
                                                            @error("precario.$index.unity")
                                                                <span class="error">Este campo deve ser preenchido</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                @endif

                                                <button type="button"
                                                    class="btn btn-danger mb-2 mt-2 mx-2 removerPreco"
                                                    data-index="{{ $index }}">Remover</button>
                                            @endforeach
                                        </div>

                                        <div class="mb-3 d-flex justify-content-center">
                                            <button id="adicionarPreco" type="button"
                                                class="btn btn-primary">Adicionar preçário
                                            </button>
                                        </div>

                                        <div class="form-check my-3">
                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault"
                                                wire:model="check">
                                            <label class="form-check-label text-white" for="flexCheckDefault"
                                                wire:model="check">
                                                Li e concordo com os vossos termos e privacidade
                                            </label>
                                            @error('check')
                                                <span class="error">Deve concordar com os nossos termos e
                                                    privacidade!</span>
                                            @enderror
                                        </div>

                                        <div class="mb-3 d-flex justify-content-center">
                                            <button type="submit" class="btn btn-success px-3 text-white">
                                                Cadastrar propriedade
                                            </button>
                                        </div>
                                    </form>
                                    <div wire:loading wire:target="save">
                                        <i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw"></i>
                                        <h2>Carregando as imagens, aguarde um pouco!...</h2>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex modal-footer justify-content-center">
                    <section class="d-flex gap-3">
                        <button class="btn btn-danger text-white" data-bs-dismiss="modal" type="button">
                            Voltar
                        </button>

                    </section>
                </div>
            </div>
        </div>
</div>


<script>
    //Erro
    document.addEventListener('livewire:load', function() {
        window.addEventListener('error', function(event) {
            var notification = document.getElementById('notification');
            var mensagemErro = event.detail.mensagemErro; // Acessando a mensagem de erro dinâmica
            notification.querySelector('span').innerText = mensagemErro;

            notification.style.display = 'flex';
            // Atualiza a opacidade para 1 após um curto atraso para acionar a transição
            setTimeout(function() {
                notification.style.opacity = '1';
            }, 10);

            // Oculta a mensagem após 3 segundos
            setTimeout(function() {
                notification.style.opacity = '0';
                setTimeout(function() {
                    notification.style.display = 'none';
                    // Dispara o método Livewire.emit('mount') após 3 segundos
                    // Livewire.emit('client');
                }, 500); // Tempo igual à duração da transição para garantir uma transição suave
            }, 3000);
        });
    });
</script>

<script>
    //Aviso
    document.addEventListener('livewire:load', function() {
        window.addEventListener('aviso', function(event) {
            var notification = document.getElementById('notificationAviso');
            var mensagemErro = event.detail.mensagemErro; // Acessando a mensagem de erro dinâmica
            notification.querySelector('span').innerText = mensagemErro;
            $('#homeRegistrationModal').modal('hide');

            console.log
            notification.style.display = 'flex';
            // Atualiza a opacidade para 1 após um curto atraso para acionar a transição
            setTimeout(function() {
                notification.style.opacity = '1';
            }, 10);

            // Oculta a mensagem após 3 segundos
            setTimeout(function() {
                notification.style.opacity = '0';
                setTimeout(function() {
                    Livewire.emit('refresh');
                    notification.style.display = 'none';
                }, 500); // Tempo igual à duração da transição para garantir uma transição suave
            }, 3000);
        });
    });
</script>

<script>
    //Certo
    document.addEventListener('livewire:load', function() {
        window.addEventListener('certo', function(event) {
            var notification = document.getElementById('notificationCerto');
            var mensagemErro = event.detail.mensagemErro; // Acessando a mensagem de erro dinâmica
            notification.querySelector('span').innerText = mensagemErro;

            notification.style.display = 'flex';
            // Atualiza a opacidade para 1 após um curto atraso para acionar a transição
            setTimeout(function() {
                notification.style.opacity = '1';
            }, 10);

            // Oculta a mensagem após 3 segundos
            setTimeout(function() {
                notification.style.opacity = '0';
                setTimeout(function() {
                    notification.style.display = 'none';
                }, 900); // Tempo igual à duração da transição para garantir uma transição suave
            }, 5000);
        });
    });
</script>



</main>
<!--    *End of main    -->
</div>
