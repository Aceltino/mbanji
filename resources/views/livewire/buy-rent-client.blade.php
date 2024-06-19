<div>
    @section('title', 'Alugar ou Comprar casa')
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
            right: 20px;
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

        .image-carousel {
            object-fit: contain;
            height: 400px;
            /* Defina a altura desejada para todas as imagens no carousel */
        }

        .carousel-control-prev,
        .carousel-control-next {
            /* Outros estilos... */
            background-color: rgba(153, 142, 142, 0.5);
            /* Cor de fundo dos botões (branco com 50% de opacidade) */
        }

        /* Estilo para os botões de navegação quando hover (opcional) */
        .carousel-control-prev:hover,
        .carousel-control-next:hover {
            /* Outros estilos... */
            background-color: rgba(255, 255, 255, 0.7);
            /* Cor de fundo dos botões ao passar o mouse (branco com 70% de opacidade) */
        }
    </style>
    {{-- @if (!empty($propriedades['properties'])) --}}

    <main>

        <div class="notificationCerto" id="notificationCerto" style="display: none;">
            <span style="margin-left: 10px;">Right
            </span>
        </div>

        <div class="notificationAviso" id="notificationAviso" style="display: none;">
            <span style="margin-left: 10px;">Right
            </span>
        </div>

        <section class="container-fluid mt-1 py-4">
            <div class="row justify-content-center mb-4">
                <div class="col-md-3 d-flex justify-content-center mb-2 mb-md-0">
                    <select class="bg-darkest-orange border-0 form-select text-center text-white" name="contrato"
                        id="contrato" wire:model="contrato">
                        <option class="bg-transparent-orange color-darkest-orange text-center" value="">O que está
                            querendo?</option>
                        <option class="bg-transparent-orange color-darkest-orange text-center" value=0>Alugar uma casa
                        </option>
                        <option class="bg-transparent-orange color-darkest-orange text-center" value=1>Comprar uma casa
                        </option>
                    </select>
                </div>
            </div>

            <div class="px-2 row w-100">
                <div class="col-md-3 d-flex justify-content-center mb-2 mb-md-0">
                    <select class="bg-darkest-orange border-0 form-select text-center text-white" name="tipo"
                        id="tipo" wire:model="tipo">>
                        <option class="bg-transparent-orange color-darkest-orange text-center" value="">Tipo de
                            casa</option>
                        <option class="bg-transparent-orange color-darkest-orange text-center" value=1>Apartamento
                        </option>
                        <option class="bg-transparent-orange color-darkest-orange text-center" value=0>Vivenda</option>
                        <option class="bg-transparent-orange color-darkest-orange text-center" value=2>Outras</option>
                    </select>
                </div>

                <div class="col-md-3 d-flex justify-content-center mb-2 mb-md-0">
                    <select class="bg-darkest-orange border-0 form-select text-center text-white" name="provincia"
                        id="provincia" wire:model="provincia">
                        <option class="bg-transparent-orange color-darkest-orange text-center" value="">Província
                        </option>
                        <option class="bg-transparent-orange color-darkest-orange text-center" value=1>Luanda</option>
                        <option class="bg-transparent-orange color-darkest-orange text-center" value=2>Benguela</option>
                        <option class="bg-transparent-orange color-darkest-orange text-center" value=3>Uige</option>
                    </select>
                </div>

                <div class="col-md-3 d-flex justify-content-center mb-2 mb-md-0">
                    <select class="bg-darkest-orange border-0 form-select text-center text-white" name="municipio"
                        id="municipio" wire:model="municipio">
                        <option class="bg-transparent-orange color-darkest-orange text-center" value="">Município
                        </option>
                        <option class="bg-transparent-orange color-darkest-orange text-center" value=1>Viana</option>
                        <option class="bg-transparent-orange color-darkest-orange text-center" value=2>Casenga</option>
                        <option class="bg-transparent-orange color-darkest-orange text-center" value=3>Kilamba kiaxi
                        </option>
                        <option class="bg-transparent-orange color-darkest-orange text-center" value=4>Benguela1
                        </option>
                        <option class="bg-transparent-orange color-darkest-orange text-center" value=5>Benguela2
                        </option>
                        <option class="bg-transparent-orange color-darkest-orange text-center" value=6>Uige1</option>
                        <option class="bg-transparent-orange color-darkest-orange text-center" value=7>Uige2</option>
                    </select>
                </div>

                <div class="col-md-3 d-flex justify-content-center mb-2 mb-md-0">
                    <select class="bg-darkest-orange border-0 form-select text-center text-white" name="preco"
                        id="preco" wire:model="preco">
                        <option class="bg-transparent-orange color-darkest-orange text-center" value="">Preçário
                        </option>
                        <option class="bg-transparent-orange color-darkest-orange text-center" value=2000>2.000,00 Kzs
                        </option>
                        <option class="bg-transparent-orange color-darkest-orange text-center" value=3000>3.000,00 Kzs
                        </option>
                    </select>
                </div>
            </div>

            <div class="d-flex justify-content-center px-2 py-0 py-md-3 row w-100">
                <div class="col-md-3 d-flex justify-content-center mb-2 mb-md-0">
                    <select class="bg-darkest-orange border-0 form-select text-center text-white" name="tempo"
                        id="tempo" wire:model="tempo">
                        <option class="bg-transparent-orange color-darkest-orange text-center" value="">Quanto
                            tempo?</option>
                        <option class="bg-transparent-orange color-darkest-orange text-center" value=5>Hora</option>
                        <option class="bg-transparent-orange color-darkest-orange text-center" value=1>Diário</option>
                        <option class="bg-transparent-orange color-darkest-orange text-center" value=2>Semanal</option>
                        <option class="bg-transparent-orange color-darkest-orange text-center" value=3>Mensal</option>
                        <option class="bg-transparent-orange color-darkest-orange text-center" value=4>Anual</option>
                    </select>
                </div>

                <div class="col-md-3 d-flex justify-content-center mb-2 mb-md-0">
                    <button class="btn btn-primary form-control text-center text-white w-100" wire:click="filtro">
                        <i class="fa fa-search" aria-hidden="true"></i> Buscar
                    </button>
                </div>
            </div>
        </section>


        <!--    *End of search section   -->

        <!--    *Samples section   -->
        <section class="container">
            <div class="row">
                <div>
                    @if ($propriedades != [])
                        <div wire:loading wire:target="mount" class="text-center">
                            <div class="d-flex justify-content-center">
                                <i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw"></i>
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                        <div wire:loading wire:target="filtro" class="text-center">
                            <div class="d-flex justify-content-center">
                                <i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw"></i>
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>

                        <div wire:loading.remove wire:target="filtro">
                            @foreach (array_chunk($propriedades['properties'], 4) as $row)
                                <div class="d-flex justify-content-evenly py-3 row">
                                    @foreach ($row as $propriedade)
                                        <div class="card d-none d-sm-block p-0 special-card" style="width: 14rem;">
                                            @if (array_key_exists('imgProperty', $propriedade))
                                                <div style="height: 200px; overflow: hidden;">
                                                    <img src="{{ $propriedade['imgProperty'] }}"
                                                        class="card-img-top img-fluid" alt="Imagem do Imóvel">
                                                </div>
                                            @else
                                                <div style="height: 200px; overflow: hidden;">
                                                    <img src="imagem_padrao.jpg" class="card-img-top img-fluid"
                                                        alt="Imagem do Imóvel">
                                                </div>
                                            @endif
                                            <div class="card-body">
                                                <div>
                                                    <h6 class="card-title color-darkest-orange">
                                                        {{ $propriedade['lowestPrice'] ?? 'Carregando preço...' }}
                                                    </h6>
                                                    <p class="color-darkest-orange">
                                                        {{ $propriedade['province'] ?? 'Província desconhecida' }}
                                                    </p>
                                                </div>
                                                <h6 class="card-text mb-4">
                                                    {{ $propriedade['municipio'] ?? 'Município desconhecido' }},
                                                    {{ $propriedade['location'] ?? 'Localização desconhecida' }}
                                                </h6>
                                                <button class="a-main-like-btn-bg btn text-white w-100"
                                                    data-bs-toggle="modal" data-bs-target="#seeMoreModal"
                                                    wire:click.prevent="pegarPropriedade({{ $propriedade['propertyID'] ?? '' }})"
                                                    type="button">Ver mais</button>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="notification" id="notification" style="display: none;">
                            <span style="margin-left: 10px;">Sem resultado para esta filtragem!</span>
                        </div>
                    @endif
                    <script>
                        document.addEventListener('livewire:load', function() {
                            window.addEventListener('error', function() {
                                var notification = document.getElementById('notification');
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
                                        Livewire.emit('mount');
                                    }, 500); // Tempo igual à duração da transição para garantir uma transição suave
                                }, 3000);
                            });
                        });
                    </script>
                    @if (!empty($propriedades['properties']) && $page < $propriedades['pagination']['last_page'])
                        <div wire:loading.remove wire:target="loadMore"
                            class="d-flex justify-content-center pt-4 text-center">
                            <button class="bg-darkest-orange form-control text-center text-white w-50"
                                wire:click="loadMore">Carregar Mais</button>
                        </div>
                        <div wire:loading wire:target="loadMore" class="text-center">
                            <div class="d-flex justify-content-center">
                                <i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw"></i>
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                    @endif



                </div>
            </div>


        </section>


        <!--    Modal-1 start    -->
        <div wire:ignore.self class="modal fade" id="seeMoreModal" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Mais informações</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div wire:loading wire:target="pegarPropriedade">
                            <i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw"></i>
                            <span class="sr-only">Loading...</span>
                        </div>

                        <div wire:loading.remove>

                            <section class="container-fluid">

                                <div class="row">
                                    <div class="col-12">
                                        <!-- Carousel principal -->
                                        <div id="carouselPrincipal" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <!-- Imagens principais -->
                                                <div class="carousel-item active">
                                                    <img src="{{ $propriedadeOne['property_img'] ?? '../img/buildings.png' }}"
                                                        class="d-block w-100 image-carousel" alt="Imagem principal">
                                                </div>
                                                <!-- Imagens adicionais -->
                                                @if (isset($propriedadeOne['images']) && $propriedadeOne['images'] !== [])
                                                    @foreach ($propriedadeOne['images'] as $index => $image)
                                                        <div class="carousel-item">
                                                            <img src="{{ $image['img'] }}"
                                                                class="d-block w-100 image-carousel"
                                                                alt="Imagem adicional {{ $image['imgId'] }}">
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                            <!-- Botões de navegação -->
                                            <button class="carousel-control-prev" type="button"
                                                data-bs-target="#carouselPrincipal" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button"
                                                data-bs-target="#carouselPrincipal" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Restante do conteúdo da modal -->
                                <!-- ... -->
                            </section>


                            <section class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-lg-6 fs-2">
                                        <i class="bi bi-house-fill"></i>
                                        <span>
                                            @if (isset($propriedadeOne['property_type']) && $propriedadeOne['property_type'] == 1)
                                                Apartamento
                                            @elseif (isset($propriedadeOne['property_type']) && $propriedadeOne['property_type'] == 0)
                                                Vivenda
                                            @else
                                                Tipo de casa: N/D
                                            @endif
                                        </span>
                                    </div>
                                    <div class="col-12 col-lg-6 fs-2 text-start text-lg-end">
                                        <i class="bi bi-house-fill"></i>
                                        <span>
                                            @if (isset($propriedadeOne['property_location']))
                                                {{ $propriedadeOne['province'] }},
                                                {{ $propriedadeOne['municipe'] }},
                                                {{ $propriedadeOne['property_location'] }}
                                            @endif
                                        </span>
                                    </div>
                                </div>
                                <div class="py-3 row">
                                    <div class="align-items-center col-12 col-lg-6 d-flex flex-column mb-2 w-100">
                                        <div class="d-flex gap-3">
                                            <h5>SELECIONE A OPÇÃO PARA VER O PREÇO, CONSIDERE QUE O PREÇO PODE MUDAR
                                                SE
                                                AUMENTAR
                                                O TEMPO DE ESTADIA</h5>

                                            <select class="form-control" name="precoPropriedade"
                                                id="precoPropriedade" wire:model="precoPropriedade">
                                                <option value="">CONTRATO</option>
                                                @if (isset($propriedadeOne['prices']))
                                                    @foreach ($propriedadeOne['prices'] as $price)
                                                        <option
                                                            value={{ $price['price'] . '!' . $price['unity_time'] . '?' . $price['time'] }}>
                                                            @if ($price['contract'] == 0)
                                                                {{ $price['time'] ?? 'N/D' }}
                                                            @endif
                                                            @if ($price['contract'] == 0)
                                                                @if ($price['unity_time'] == 5)
                                                                    Hora(s) -
                                                                @elseif($price['unity_time'] == 1)
                                                                    Dias(s) -
                                                                @elseif($price['unity_time'] == 2)
                                                                    Semana(s) -
                                                                @elseif($price['unity_time'] == 3)
                                                                    Mes(es) -
                                                                @elseif($price['unity_time'] == 4)
                                                                    Ano(s) -
                                                                @endif
                                                            @endif
                                                            @if ($price['contract'] == 0)
                                                                Alugar
                                                            @else
                                                                Comprar
                                                            @endif
                                                        </option>
                                                    @endforeach
                                                @endif
                                            </select>

                                        </div>
                                    </div>
                                    @php
                                        $priceParts = explode('!', $precoPropriedade);
                                        $valueBeforeExclamation = $priceParts[0];
                                        $secondPart = isset($priceParts[1]) ? $priceParts[1] : '';
                                        $secondParts = explode('?', $secondPart);
                                        $unityTime = $secondParts[0] ?? '';
                                        $time = $secondParts[1] ?? '';
                                        $this->contrato = 1;
                                    @endphp
                                    <div class="color-darkest-orange fs-2 mt-4 text-center">
                                        <p>{{ $valueBeforeExclamation ?? 'Preço ainda não carregado!' }}
                                        </p>
                                    </div>

                                </div>
                            </section>
                            <section class="container-fluid">
                                <div class="row">
                                    <div class="col-12">
                                        <h2 class="text-uppercase">Detalhes da casa</h2>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <h3 class="darkest-brown">Agua</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <ul class="list-group text-center w-100">
                                            @if (isset($propriedadeOne['agua']))

                                                @if ($propriedadeOne['agua'] == 0)
                                                    <li class="list-group-item">Casa sem canalização (Sem água
                                                        corrente)</li>
                                                @else
                                                    <li class="list-group-item">Casa canalizada (Com água corrente)
                                                    </li>
                                                @endif
                                            @endif

                                        </ul>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <h3 class="darkest-brown">Energia</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <ul class="list-group text-center w-100">
                                            @if (isset($propriedadeOne['energia']))

                                                @if ($propriedadeOne['energia'] == 0)
                                                    <li class="list-group-item">Casa sem energia da rede!</li>
                                                @else
                                                    <li class="list-group-item">Casa com energia da rede!</li>
                                                @endif
                                            @endif

                                        </ul>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <h3 class="darkest-brown">Localidade</h3>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-12">
                                        <ul class="list-group text-center w-100">
                                            @if (isset($propriedadeOne['estrada']))

                                                @if ($propriedadeOne['estrada'] == 0)
                                                    <li class="list-group-item">Casa ao pé da estrada principal!
                                                    </li>
                                                @else
                                                    <li class="list-group-item">Casa não muito próxima da estrada!
                                                    </li>
                                                @endif
                                            @endif

                                        </ul>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <h3 class="darkest-brown">Compartimento e outros detalhes da casa</h3>
                                    </div>
                                </div>
                                <div class="py-3 row">
                                    <div class="align-items-center col-12 col-lg-6 d-flex flex-column w-100">
                                        <div>
                                            <p>
                                                {{ $propriedadeOne['property_description'] ?? 'Sem descrição!' }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-lg-5">
                                        <h2 class="text-center text-uppercase">O proprietário</h2>
                                    </div>
                                </div>
                                <div class="py-3 row">
                                    <div class="col-12 col-lg-5">
                                        <div class="align-items-center d-flex h-100 justify-content-center">
                                            <img class="w-25" alt="photo"
                                                src={{ $propriedadeOne['propr_img'] ?? '../img/photo-round.png' }}>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-7 mt-3 mt-lg-0">
                                        <div class="bl-2 ps-2">
                                            <strong
                                                class="text-uppercase">{{ $propriedadeOne['proprietary_name'] ?? 'Carregando' }}</strong>
                                            <p>{{ $propriedadeOne['proprietary_bi'] ?? 'Carregando' }}</p>

                                            @if (isset($propriedadeOne['proprietary_phones']))
                                                @foreach ($propriedadeOne['proprietary_phones'] as $telefone)
                                                    {{ $telefone['number'] }}
                                                @endforeach
                                            @endif
                                            <p>cesaltinoquianvo@gmail.com</p>
                                            <p class="mb-0">Poderá ter mais informações do proprietário caso
                                                avançar com a
                                                negociação</p>
                                        </div>
                                    </div>

                                </div>
                            </section>
                        </div>
                        <div class="d-flex modal-footer justify-content-center">
                            <section class="d-flex gap-3">
                                <button type="button" class="btn btn-warning px-5 text-white"
                                    data-bs-dismiss="modal">Voltar</button>
                                <button type="button" class="a-main-like-btn-bg btn text-white px-4"
                                    data-bs-toggle="modal" data-bs-target="#confirmationModal"
                                    wire:click="solicitarCasa()">Solicitar
                                    casa</button>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--    End of modal-1    -->

        <!-- Modal-2 -->
        <div wire:ignore.self class="modal fade" id="confirmationModal" tabindex="-1"
            aria-labelledby="confirmationModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="d-flex modal-header justify-content-center">
                        <h2 class="darkest-brown">Solicitação</h2>
                    </div>
                    <div class="modal-body">
                        <section>
                            <form wire:submit.prevent="save">
                                <div class="row mb-3 align-items-center">
                                    <div class="col-lg-6 col-sm-10 offset-sm-1 offset-lg-0">
                                        <img class="w-100 p-3"
                                            src="{{ $propriedadeOne['property_img'] ?? '../img/buildings.png' }}"
                                            style="object-fit: contain; max-height: 250px;" alt="">
                                    </div>

                                    <div class="col-lg-6 col-sm-10 offset-sm-1 offset-lg-0">
                                        <div class="w-100 p-lg-3 ps-lg-0 px-sm-3">
                                            <span class="fs-3">
                                                @if (isset($propriedadeOne['property_location']))
                                                    {{ $propriedadeOne['province'] }},
                                                    {{ $propriedadeOne['municipe'] }}
                                            </span>
                                            <span class="fs-3">
                                                <p>{{ $propriedadeOne['property_location'] }}</p>
                                            </span>
                                            @endif

                                            <span class="color-form-orange fs-3">
                                                <p>{{ $valueBeforeExclamation ?? 'Preço ainda não carregado!' }}</p>
                                            </span>

                                            @if ($time != '')
                                                <span class="color-form-orange fs-3">
                                                    <p>Alugar</p>
                                                </span>
                                            @else
                                                <span class="color-form-orange fs-3">
                                                    <p>Comprar</p>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                @if ($time != '')
                                    <div class="row my-5">
                                        <div class="col-lg-6 col-sm-10 offset-sm-1 offset-lg-0">
                                            <div class="p-3">
                                                <strong class="d-block mb-3">
                                                    Por quanto tempo pretende alugar a casa?
                                                </strong>
                                                <strong class="d-block mb-4">
                                                    Quando pretende entrar?
                                                </strong>
                                                <strong class="d-block">
                                                    Sairá da casa na data de:
                                                </strong>
                                            </div>
                                        </div>
                                @endif

                                {{-- $valueBeforeExclamation . '|' . $unityTime . '|' . $time --}}

                                <div
                                    class="bl-2 border-color-form-orange col-lg-6 col-sm-10 offset-sm-1 offset-lg-0 ps-2">
                                    <div class="p-lg-3 ps-lg-0 ps-sm-3">
                                        <section>
                                            @if ($time != '')
                                                <select class="form-select mb-3" wire:model="quantity"
                                                    wire:change="setEstadia()">
                                                    <option value="">Selecione o tempo de estadia</option>
                                                    @php
                                                        $this->contrato = 0;
                                                        $maxIterations = 10; // Número máximo de iterações
                                                        $value = $time; // Valor inicial
                                                    @endphp
                                                    @for ($i = 1; $i <= $maxIterations; $i++)
                                                        <option
                                                            value={{ $value . '!' . $i . '!' . $valueBeforeExclamation }}>
                                                            {{ $value }}</option>
                                                        @php
                                                            $value += $time; // Incrementa o valor para a próxima iteração
                                                        @endphp
                                                    @endfor
                                                </select>
                                            @endif

                                            @if ($time != '')
                                                <select class="form-select mb-3" name="unityOfMeasurement"
                                                    id="unityOfMeasurement" disabled readonly>
                                                    <option value="{{ $unityTime }}">
                                                        @if ($unityTime == 5)
                                                            Hora(s)
                                                        @elseif($unityTime == 1)
                                                            Dias(s)
                                                        @elseif($unityTime == 2)
                                                            Semana(s)
                                                        @elseif($unityTime == 3)
                                                            Mês(es)
                                                        @elseif($unityTime == 4)
                                                            Ano(s)
                                                        @endif
                                                    </option>
                                                </select>
                                            @endif
                                        </section>

                                        @php
                                            $userDateAndTime = $this->dateAndTime; // Assumindo que você está dentro de um componente Livewire
                                            $dateAndTime = \Carbon\Carbon::parse($userDateAndTime);
                                        @endphp

                                        <section>
                                            @if ($time != '')
                                                <input class="form-control mb-3" type="datetime-local"
                                                    wire:model="dateAndTime">
                                                @if ($unityTime == 5)
                                                    @php
                                                        $this->unityTime = $unityTime;
                                                        $data = $this->dateAndTimeOut = $dateAndTime->addHours(
                                                            $time1 ?? $time,
                                                        );
                                                    @endphp
                                                    @if ($quantity == '')
                                                        Selecione a data de entrada
                                                    @else
                                                        {{ $data->format('d/m/Y H:i:s') }}
                                                    @endif
                                                @elseif($unityTime == 1)
                                                    @php
                                                        $this->unityTime = $unityTime;
                                                        $data = $this->dateAndTimeOut = $dateAndTime->addDays(
                                                            $time1 ?? $time,
                                                        );
                                                    @endphp
                                                    @if ($quantity == '')
                                                        Selecione a data de entrada
                                                    @else
                                                        {{ $data->format('d/m/Y H:i:s') }}
                                                    @endif
                                                @elseif($unityTime == 2)
                                                    @php
                                                        $this->unityTime = $unityTime;
                                                        $data = $this->dateAndTimeOut = $dateAndTime->addWeeks(
                                                            $time1 ?? $time,
                                                        );
                                                    @endphp
                                                    @if ($quantity == '')
                                                        Selecione a data de entrada
                                                    @else
                                                        {{ $data->format('d/m/Y H:i:s') }}
                                                    @endif
                                                @elseif($unityTime == 3)
                                                    @php
                                                        $this->unityTime = $unityTime;
                                                        $data = $this->dateAndTimeOut = $dateAndTime->addMonths(
                                                            $time1 ?? $time,
                                                        );
                                                    @endphp
                                                    @if ($quantity == '')
                                                        Selecione a data de entrada
                                                    @else
                                                        {{ $data->format('d/m/Y H:i:s') }}
                                                    @endif
                                                @elseif($unityTime == 4)
                                                    @php
                                                        $this->unityTime = $unityTime;
                                                        $data = $this->dateAndTimeOut = $dateAndTime->addYears(
                                                            $time1 ?? $time,
                                                        );
                                                    @endphp
                                                    @if ($quantity == '')
                                                        Selecione a data de entrada
                                                    @else
                                                        {{ $data->format('d/m/Y H:i:s') }}
                                                    @endif
                                                @endif
                                            @endif
                                        </section>
                                    </div>
                                </div>

                    </div>
                    <div class="row mt-3">
                        <strong class="fs-4 mb-3 text-center">
                            Obs: Caso a casa estiver disponível, você deverá pagar o montante abaixo ao
                            proprietário da
                            casa:
                        </strong>
                        <strong class="color-form-orange fs-3 text-center">
                            @if ($unityTime != '' && $total != '')
                                {{ $total }}
                            @else
                                @php
                                    $this->total = $valueBeforeExclamation;
                                @endphp
                                {{ $valueBeforeExclamation }}
                        </strong>
                        @endif
                    </div>

                    <div class="d-flex modal-footer justify-content-center">
                        <section class="d-flex gap-3">
                            <button type="button" class="btn btn-warning px-3 text-white" data-bs-dismiss="modal">
                                Cancelar solicitação
                            </button>
                            <button type="submit" class="a-main-like-btn-bg btn text-white px-4">
                                Confirmar solicitação
                            </button>
                        </section>
                    </div>
                    </form>
                    </section>
                </div>

            </div>
        </div>
</div>
</main>

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
            // $('#homeRegistrationModal').modal('hide');

            notification.style.display = 'flex';
            // Atualiza a opacidade para 1 após um curto atraso para acionar a transição
            setTimeout(function() {
                notification.style.opacity = '1';
            }, 10);

            // console.log('rrrrr');

            // Oculta a mensagem após 3 segundos
            setTimeout(function() {
                notification.style.opacity = '0';
                setTimeout(function() {
                    Livewire.emit('refresh');
                    notification.style.display = 'none';
                }, 500); // Tempo igual à duração da transição para garantir uma transição suave
            }, 5000);
        });
    });
</script>

<script>
    //Certo
    document.addEventListener('livewire:load', function() {
        window.addEventListener('certo', function(event) {
            var notification = document.getElementById('notificationCerto');
            var mensagemErro1 = event.detail.mensagemErro1; // Acessando a mensagem de erro dinâmica
            notification.querySelector('span').innerText = mensagemErro1;

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
                    window.location.href = '{{ route('buyrent.client') }}';
                }, 900); // Tempo igual à duração da transição para garantir uma transição suave
            }, 5000);
        });
    });
</script>

</div>
