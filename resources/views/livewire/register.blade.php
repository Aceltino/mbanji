<div>
    @section('title', 'Cadastre-se')

<main class="container py-5">
    <!--    *Register div start   -->
    <section class="align-items-center d-flex justify-content-center">
        <form class="bg-form-orange px-4 py-4 rounded-3 w-75" action="">
            <div class="w-50">
                <img alt="logo" class="w-25 " src="../img/footer-logo.png">
            </div>
            <div>
                <h1 class="fs-3 text-center">Cadastro</h1>
            </div>
            <fieldset>
                <legend>Dados Pessoais</legend>
                <section class="row">
                    <div class="col-12 col-lg-6">
                        <div class="mb-3">
                            <label class="form-text" for="fullname">Nome completo</label>
                            <input class="form-control" id="fullname" required type="text">
                        </div>
                        <div class="mb-3">
                            <label class="form-text" for="telephone-contact">Contacto telefônico</label>
                            <input class="form-control" id="telephone-contact" required type="tel">
                        </div>
                        <div>
                            <label class="form-text" for="email">E-mail</label>
                            <input class="form-control" id="email" required type="email">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 mb-2">
                        <div class="mb-3">
                            <label class="form-text" for="bi-number">Número do BI</label>
                            <input class="form-control" id="bi-number" required type="number">
                        </div>
                        <div class="mb-3">
                            <label class="form-text" for="password">Senha</label>
                            <input class="form-control" id="password" required type="password">
                        </div>
                        <div>
                            <label class="form-text" for="password-confirm">Confirme a senha</label>
                            <input class="form-control" id="password-confirm" required type="password">
                        </div>
                    </div>
                </section>
            </fieldset>

            <section class="d-flex justify-content-center">
                <div class="col-12 col-lg-4 d-flex flex-column justify-content-center">
                    <button class="btn btn-form mb-4 mt-4 text-white w-100" type="button">Cadastrar</button>
                    <a class="color-darkest-orange mb-4 text-center text-decoration-none" href="{{route('register.user')}}">Já tem uma conta?</a>
                    <hr class="bg-darkest-orange color-darkest-orange mb-4 mt-1">
                    <a class="btn btn-form-outline mt-2 w-100" href="{{route('home')}}">Página inicial</a>
                </div>
            </section>
        </form>
    </section>
</main>
</div>
