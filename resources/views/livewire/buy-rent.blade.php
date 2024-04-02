<div>
    @section('title', 'Alugar ou Comprar casa')

    <main>
        <!--    *Main img start   -->
        <section class="bg-about-main-img mb-3">
            <div class="d-flex justify-content-center align-items-center vw-100" id="bg-image-section-about">
                <div class="d-flex flex-column align-items-center">
                    <h1 class="py-3 text-center text-white">O que procura?</h1>
                    <select class="bg-transparent border-2 border-white form-select text-center text-white w-75"
                        name="contrato" id="contrato" wire:model="contrato" wire:change="filtro">
                        <option class="bg-transparent-orange color-darkest-orange text-center" value="">O que está
                            querendo?</option>
                        <option class="color-darkest-orange text-center" value=0>Alugar uma casa</option>
                        <option class="color-darkest-orange text-center" value=1>Comprar uma casa</option>
                    </select>
                </div>
            </div>
        </section>
        <!--    *End of main img   -->

        <!--    *Search section start   -->
        <section class="container-fluid me-3 ms-2 mt-1 py-4">
            <div class="py-4 row">
                <h2 class="darkest-brown text-center">Procure as casas segundo a sua preferência...</h2>
            </div>
            <div class="px-2 row w-100">
                <div class="col-md-3 d-flex justify-content-center mb-2 mb-md-0">
                    <select class="bg-darkest-orange border-0 form-select text-center text-white" name="tipo"
                        id="tipo" wire:model="tipo" wire:change="filtro">>
                        <option class="bg-transparent-orange color-darkest-orange text-center" value="">Tipo de
                            casa
                        </option>
                        <option class="bg-transparent-orange color-darkest-orange text-center" value=1>Apartamento
                        </option>
                        <option class="bg-transparent-orange color-darkest-orange text-center" value=0>Vivenda
                        </option>
                    </select>
                </div>

                <div class="col-md-3 d-flex justify-content-center mb-2 mb-md-0">
                    <select class="bg-darkest-orange border-0 form-select text-center text-white" name="provincia"
                        id="provincia" wire:model="provincia" wire:change="filtro">
                        <option class="bg-transparent-orange color-darkest-orange text-center" value="">Província
                        </option>
                        <option class="bg-transparent-orange color-darkest-orange text-center" value=1>Luanda
                        </option>
                        <option class="bg-transparent-orange color-darkest-orange text-center" value=2>Benguela
                        </option>
                        <option class="bg-transparent-orange color-darkest-orange text-center" value=3>Uige
                        </option>
                    </select>
                </div>

                <div class="col-md-3 d-flex justify-content-center mb-2 mb-md-0">
                    <select class="bg-darkest-orange border-0 form-select text-center text-white" name="municipio"
                        id="municipio" wire:model="municipio" wire:change="filtro">
                        <option class="bg-transparent-orange color-darkest-orange text-center" value="">Município
                        </option>
                        <option class="bg-transparent-orange color-darkest-orange text-center" value=1>Viana
                        </option>
                        <option class="bg-transparent-orange color-darkest-orange text-center" value=2>Casenga
                        </option>
                        <option class="bg-transparent-orange color-darkest-orange text-center" value=3>Kilamba kiaxi
                        </option>
                        <option class="bg-transparent-orange color-darkest-orange text-center" value=4>Benguela1
                        </option>
                        <option class="bg-transparent-orange color-darkest-orange text-center" value=5>Benguela2
                        </option>
                        <option class="bg-transparent-orange color-darkest-orange text-center" value=6>Uige1
                        </option>
                        <option class="bg-transparent-orange color-darkest-orange text-center" value=7>Uige2
                        </option>
                    </select>
                </div>

                <div class="col-md-3 d-flex justify-content-center mb-2 mb-md-0">
                    <select class="bg-darkest-orange border-0 form-select text-center text-white" name="preco"
                        id="preco" wire:model="preco" wire:change="filtro">
                        <option class="bg-transparent-orange color-darkest-orange text-center" value="">Preçário
                        </option>
                        <option class="bg-transparent-orange color-darkest-orange text-center" value=2000>2.000,00
                            Kzs</option>
                        <option class="bg-transparent-orange color-darkest-orange text-center" value=3000>3.000,00
                            Kzs</option>
                    </select>
                </div>
            </div>

            <div class="d-flex justify-content-center px-2 py-0 py-md-3 row w-100">
                <div class="col-md-3 d-flex justify-content-center mb-2 mb-md-0">
                    <select class="bg-darkest-orange border-0 form-select text-center text-white" name="quarto"
                        id="quarto" wire:model="quarto" wire:change="filtro">>
                        <option class="bg-transparent-orange color-darkest-orange text-center" value="">Nº de
                            quartos</option>
                        <option class="bg-transparent-orange color-darkest-orange text-center" value=2>2</option>
                        <option class="bg-transparent-orange color-darkest-orange text-center" value=5>5</option>
                        <option class="bg-transparent-orange color-darkest-orange text-center" value=9>9</option>
                    </select>
                </div>

                <div class="col-md-3 d-flex justify-content-center mb-2 mb-md-0">
                    <select class="bg-darkest-orange border-0 form-select text-center text-white" name="tempo"
                        id="tempo" wire:model="tempo" wire:change="filtro">>
                        <option class="bg-transparent-orange color-darkest-orange text-center" value="">Quanto
                            tempo?</option>
                        <option class="bg-transparent-orange color-darkest-orange text-center" value=5>Hora
                        </option>
                        <option class="bg-transparent-orange color-darkest-orange text-center" value=1>Diário
                        </option>
                        <option class="bg-transparent-orange color-darkest-orange text-center" value=2>Semanal
                        </option>
                        <option class="bg-transparent-orange color-darkest-orange text-center" value=3>Mensal
                        </option>
                        <option class="bg-transparent-orange color-darkest-orange text-center" value=4>Anual
                        </option>
                    </select>
                </div>
            </div>
        </section>

        <!--    *End of search section   -->

        <!--    *Samples section   -->
        <section class="container">
            <div class="row">
                <div>
                    @if ($propriedades !== 0)
                        @foreach (array_chunk($propriedades['properties'], 4) as $row)
                            <div class="d-flex justify-content-evenly py-3 row">
                                @foreach ($row as $propriedade)
                                    <div class="card d-none d-sm-block p-0 special-card" style="width: 14rem;">
                                        @if (array_key_exists('imgProperty', $propriedade))
                                            <img src="{{ $propriedade['imgProperty'] }}" class="card-img-top"
                                                alt="...">
                                        @else
                                            <img src="imagem_padrao.jpg" class="card-img-top" alt="...">
                                        @endif
                                        <div class="card-body">
                                            <div>
                                                <h6 class="card-title color-darkest-orange">
                                                    {{ $propriedade['lowestPrice'] ?? 'Carregando preço...' }}
                                                </h6>
                                                <p class="color-darkest-orange">
                                                    {{ $propriedade['province'] ?? 'Província desconhecida' }}</p>
                                            </div>
                                            <h6 class="card-text mb-4">
                                                {{ $propriedade['municipio'] ?? 'Município desconhecido' }},
                                                {{ $propriedade['location'] ?? 'Localização desconhecida' }}</h6>
                                            <button class="a-main-like-btn-bg btn text-white w-100"
                                                data-bs-toggle="modal" data-bs-target="#seeMoreModal"
                                                wire:click.prevent="pegarPropriedade({{ $propriedade['propertyID'] ?? '' }})"
                                                type="button">Ver mais</button>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    @else
                        @if (session()->has('error'))
                            <div id="ErrorAlert" class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                    @endif

                    @if (!empty($propriedades['properties']) && $page < $propriedades['pagination']['last_page'] && $in == 0)
                        <div wire:loading.remove wire:target="loadMore" class="d-flex justify-content-center pt-4 text-center">
                            <button class="bg-darkest-orange form-control text-center text-white w-50" wire:click="loadMore">Carregar Mais</button>
                        </div>
                        <div wire:loading wire:target="loadMore" class="text-center">
                            <div class="d-flex justify-content-center">
                                <img src="https://media.giphy.com/media/3oEjI6SIIHBdRxXI40/giphy.gif"
                                    alt="Loading...">
                            </div>
                        </div>
                    @elseif (!empty($propriedades['properties']) && $page < $propriedades['pagination']['last_page'] && $in == 1)
                    <div wire:loading.remove wire:target="filtro" class="text-center">
                        <button class="btn btn-primary" wire:click="filtro">Ver Mais</button>
                    </div>
                    <div wire:loading wire:target="filtro" class="text-center">
                        <div class="d-flex justify-content-center">
                            <img src="https://media.giphy.com/media/3oEjI6SIIHBdRxXI40/giphy.gif"
                                alt="Loading...">
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
                        <img src="https://media.giphy.com/media/3oEjI6SIIHBdRxXI40/giphy.gif" alt="Loading...">
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
                                                    class="d-block w-100" alt="Imagem principal">
                                            </div>
                                            <!-- Imagens adicionais -->
                                            @if (isset($propriedadeOne['images']) && $propriedadeOne['images'] !== [])
                                                @foreach ($propriedadeOne['images'] as $index => $image)
                                                    <div class="carousel-item">
                                                        <img src="{{ $image['img'] }}" class="d-block w-100"
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
                                        @else
                                            Vivenda
                                        @endif
                                    </span>
                                </div>
                                <div class="col-12 col-lg-6 fs-2 text-start text-lg-end">
                                    <i class="bi bi-house-fill"></i>
                                    <span>
                                        @if (isset($propriedadeOne['property_location']))
                                            {{ $propriedadeOne['province'] }}, {{ $propriedadeOne['municipe'] }},
                                            {{ $propriedadeOne['property_location'] }}
                                        @endif
                                    </span>
                                </div>
                            </div>
                            <div class="py-3 row">
                                <div class="align-items-center col-12 col-lg-6 d-flex flex-column mb-2 w-100">
                                    <div class="d-flex gap-3">
                                        <h5>SELECIONE A OPÇÃO PARA VER O PREÇO, CONSIDERE QUE O PREÇO PODE MUDAR SE
                                            AUMENTAR
                                            O TEMPO DE ESTADIA</h5>

                                        <select class="form-control" name="precoPropriedade"
                                            id="precoPropriedade" wire:model="precoPropriedade">
                                            <option value="">CONTRATO</option>
                                            @if (isset($propriedadeOne['prices']))
                                                @foreach ($propriedadeOne['prices'] as $price)
                                                    <option value={{ $price['price'] }}>
                                                        @if ($price['contract'] == 0)
                                                            {{ $price['time'] ?? 'N/D' }}
                                                            @endif @if ($price['contract'] == 0)
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
                                                                @endif @if ($price['contract'] == 0)
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
                                <div class="color-darkest-orange fs-2 mt-4 text-center">
                                    <p>{{ $precoPropriedade ?? 'Preço ainda não carregado!' }}</p>
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
                                    <h3 class="darkest-brown">Descrição da casa</h3>
                                </div>
                            </div>

                            @if (isset($propriedadeOne['descriptions']) && count($propriedadeOne['descriptions']) > 0)
                                @php $hasDescription1 = false; @endphp
                                @foreach (array_chunk($propriedadeOne['descriptions'], 4) as $chunk)
                                    <div class="row">
                                        @foreach ($chunk as $index => $descricao)
                                            @if ($index % 4 == 0)
                                    </div>
                                    <div class="row">
                                @endif
                                @if ($descricao['descType'] == 1)
                                    @php $hasDescription1 = true; @endphp
                                    <div class="col-3">
                                        <ul class="list-group text-center w-100">
                                            <li class="list-group-item">{{ $descricao['desc'] }}</li>
                                        </ul>
                                    </div>
                                @endif
                            @endforeach
                    </div>
                    @endforeach
                    @if (!$hasDescription1)
                        <div class="row">
                            <div class="col-12">
                                <ul class="list-group text-center w-100">
                                    <li class="list-group-item">Sem descrições descritas</li>
                                </ul>
                            </div>
                        </div>
                    @endif
                @else
                    <div class="row">
                        <div class="col-12">
                            <ul class="list-group text-center w-100">
                                <li class="list-group-item">Sem descrições descritas</li>
                            </ul>
                        </div>
                    </div>
                    @endif

                    <div class="row">
                        <div class="col-12">
                            <h3 class="darkest-brown">Debilidades da casa</h3>
                        </div>
                    </div>

                    @if (isset($propriedadeOne['descriptions']) && count($propriedadeOne['descriptions']) > 0)
                        @php $hasDescription0 = false; @endphp
                        @foreach (array_chunk($propriedadeOne['descriptions'], 4) as $chunk)
                            <div class="row">
                                @foreach ($chunk as $index => $descricao)
                                    @if ($index % 4 == 0)
                            </div>
                            <div class="row">
                        @endif
                        @if ($descricao['descType'] == 0)
                            @php $hasDescription0 = true; @endphp
                            <div class="col-3">
                                <ul class="list-group text-center w-100">
                                    <li class="list-group-item">{{ $descricao['desc'] }}</li>
                                </ul>
                            </div>
                        @endif
                    @endforeach
                </div>
                @endforeach
                @if (!$hasDescription0)
                    <div class="row">
                        <div class="col-12">
                            <ul class="list-group text-center w-100">
                                <li class="list-group-item">Sem debilidades descritas</li>
                            </ul>
                        </div>
                    </div>
                @endif
            @else
                <div class="row">
                    <div class="col-12">
                        <ul class="list-group text-center w-100">
                            <li class="list-group-item">Sem debilidades descritas</li>
                        </ul>
                    </div>
                </div>
                @endif

                <div class="row">
                    <div class="col-12">
                        <h3 class="darkest-brown">Um pouco mais sobre a casa...</h3>
                    </div>
                </div>
                <div class="py-3 row">
                    <div class="align-items-center col-12 col-lg-6 d-flex flex-column mb-2 w-100">
                        <div>
                            <p>
                                @if (isset($propriedadeOne['property_description']) && $propriedadeOne['property_description'] == 0)
                                    Sem descrição adicional!
                                @else
                                    {{ $propriedadeOne['property_description'] ?? 'Sem descrição adicional!' }}
                                @endif
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
                                <p class="mb-0">Poderá ter mais informações do proprietário caso avançar com a
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
                    <button type="button" class="a-main-like-btn-bg btn text-white px-4" data-bs-toggle="modal"
                        data-bs-target="#confirmationModal">Solicitar casa</button>
                </section>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!--    End of modal-1    -->

    <!-- Modal-2 -->
    <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="d-flex modal-header justify-content-center">
                    <h2 class="darkest-brown">Solicitação</h2>
                </div>
                <div class="modal-body">
                    <section>
                        <div class="row mb-3">
                            <div class="col-lg-6 col-sm-10 offset-sm-1 offset-lg-0">
                                <img class="w-100 p-3"  src="../img/sample-house.png" alt="">
                            </div>
                            <div class="col-lg-6 col-sm-10 offset-sm-1 offset-lg-0">
                                <div class="w-100 p-lg-3 ps-lg-0 px-sm-3">
                                    <span class="fs-3">
                                        Luanda, Viana, Luanda-Sul, Rua da Samba, Palácio do Ministério                                     
                                    </span>
                                    <button class="a-main-like-btn-bg btn my-3 text-white w-100" type="button">
                                        Ver mais
                                    </button>
                                    <span class="color-form-orange fs-3">
                                        120.000.000.000 Kzs
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row my-5">
                            <div class="col-lg-6 col-sm-10 offset-sm-1 offset-lg-0">
                                <div class="p-3">
                                    <strong class="d-block mb-5">
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
                            <div class="bl-2 border-color-form-orange col-lg-6 col-sm-10 offset-sm-1 offset-lg-0 ps-2">
                                <div class="p-lg-3 ps-lg-0 ps-sm-3">
                                    <section>
                                        <select class="form-select mb-3" name="quantity" id="quantity">
                                            @for ($i = 1; $i <= 30; $i++)
                                                <option value="{{ $i }}">{{ $i }}</option>
                                            @endfor
                                        </select>
                                        <select class="form-select mb-3" name="unityOfMeasurement" id="unityOfMeasurement" disabled readonly>
                                            <option value="months">Meses</option>
                                        </select>
                                    </section>
                                    <section>
                                        <input class="form-control mb-3" type="datetime-local" name="dateAndTime" id="dateAndTime">
                                        <strong class="d-block text-center">2024-10-12</strong>
                                    </section>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <strong class="fs-4 mb-3 text-center">
                                Obs: Caso a casa estiver disponível, você deverá pagar o montante abaixo ao proprietário da casa:
                            </strong>
                            <strong class="color-form-orange fs-3 text-center">120.000.000.000 Kzs</strong>
                        </div>
                    </section>
                </div>
                <div class="d-flex modal-footer justify-content-center">
                    <section class="d-flex gap-3">
                        <button type="button" class="btn btn-warning px-3 text-white" data-bs-dismiss="modal">
                            Cancelar solicitação
                        </button>
                        <button type="button" class="a-main-like-btn-bg btn text-white px-4" data-bs-toggle="modal"
                            data-bs-target="#confirmationModal">
                            Confirmar solicitação
                        </button>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <!--    End of modal-2   -->
</main>
</div>
