<div class="container-fluid xs-remove-fixed fixed-top pt-3" id="navbar">
    <nav class="navbar container navbar-toggleable-md navbar-light bg-transparent flex-row flex-sm-block justify-content-center align-items-center">
        <a class="navbar-brand d-none d-sm-inline" href="#"><img src="/store/images/logo-branco.png" srcset="/store/images/logo-branco@2x.png 2x, /store/images/logo-branco@3x.png 3x" class="logo"></a>
        <a class="navbar-brand d-inline d-sm-none" href="#"><img src="/store/images/logo.png" srcset="/store/images/logo@2x.png 2x, /store/images/logo@3x.png 3x" class="logo"></a>

        <div class="navbar-content d-flex w-100 justify-content-end align-items-sm-center">
            <form class="form-inline my-2 my-lg-0">
                <a class="btn btn-primary my-2 my-sm-0" href="app.php?page=login_trial">Voltar</a>
            </form>
        </div>
    </nav>
</div>

<div class="container-fluid h-100-vh">
    <div class="row h-100">
        <div class="d-none d-sm-flex col-sm-5 pt-15 bg-internal">
            <div class="row w-100">
                <div class="col-auto ml-auto">
                    <h6 class="color-white pb-3">PLANO ESCOLHIDO</h6>
                    <div class="card-price text-xs-center h-normal mx-auto">
                        <div class="card-block">
                            <h4 class="card-title">Bronze</h4>
                            <p class="card-subtitle">Plano para pequenas igrejas com poucos visitantes.</p>
                        </div>
                        <div class="col-12 px-0">
                            <hr/>
                        </div>
                        <div class="card-block">
                            <ul class="list-group">
                                <li class="list-group-item py-2"><i class="fas fa-check mr-2"></i> 100 Usuários ativos</li>
                                <li class="list-group-item py-2"><i class="fas fa-check mr-2"></i> 2 administradores</li>
                            </ul>
                        </div>
                        <div class="card-header">
                            <h3 class="display-2"><span class="currency">R$</span>29<span class="period">MENSAIS</span></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-7 pt-15 h-100-vh">
            <div class="row">
                <div class="col-sm-7 mr-sm-auto ml-sm-5">
                    <h6 class="color-grape">CONFIRME SUA ASSINATURA</h6>
                    <p class="inner-text">Você já escolheu seu plano, agora é só confirmar</p>

                    <div class="row hidden-sm-up mb-3">
                        <div class="col">
                            <div class="card-price card-mini text-xs-center h-normal">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="card-block">
                                            <h4 class="card-title">Bronze</h4>
                                            <a href="#" class="btn btn-primary">ALTERAR PLANO</a>
                                        </div>
                                    </div>
                                    <div class="col-auto ml-auto">
                                        <div class="card-header">
                                            <h3 class="display-2"><span class="currency">R$</span>29<span class="period">MENSAIS</span></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form class="form-dark">
                        <div class="form-group d-flex justify-content-between align-items-center border-bottom">
                            <select class="form-control w-normal border-0" name="periodo">
                                <option>Cobrança mensal</option>
                            </select>
                            <span class="font-weight-bold fs-22">R$ 24,00  /  MÊS</span>
                        </div>

                        <div class="form-group">
                            <label class="has-float-label" aria-label="Nome no cartão">
                                <input class="form-control" type="text" placeholder="Nome no cartão" name="cartao_nome"/>
                                <span>Nome no cartão</span>
                            </label>
                        </div>

                        <div class="form-group">
                            <label class="has-float-label" aria-label="Número do cartão de crédito">
                                <input class="form-control" type="text" placeholder="Número do cartão de crédito" name="cartao_numero"/>
                                <span>Número do cartão de crédito</span>
                            </label>
                        </div>

                        <div class="row">
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <label class="has-float-label" aria-label="Data de expiração">
                                        <input class="form-control" type="text" placeholder="Data de expiração" name="cartao_expira"/>
                                        <span>Data de expiração</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="has-float-label" aria-label="CVC">
                                        <input class="form-control" type="text" placeholder="CVC" name="cartao_cvc"/>
                                        <span>CVC</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group d-flex flex-column flex-sm-row justify-content-between align-items-sm-center border-bottom">
                            <span class="fs-22">Total no primeiro mês</span>
                            <span class="font-weight-bold fs-22">R$ 0,00</span>
                        </div>

                        <div class="form-group pt-3 d-flex justify-content-between align-items-baseline">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-indicator"><i class="fas fa-check"></i></span>
                                <span class="custom-control-description"><a href="#">Li e aceito os termos de uso</a></span>
                            </label>

                            <button type="submit" class="btn btn-secondary float-right hidden-xs-down">CONFIRMAR ASSINATURA</button>
                        </div>

                        <div class="form-group text-center hidden-sm-up">
                            <button type="submit" class="btn btn-secondary px-5">CONFIRMAR ASSINATURA</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="hidden-sm-up col-12 transparent-grape pb-5">
            <div class="row text-center">
                <div class="col">
                    <h6 class="color-white mt-5 pb-3 text-center">JÁ TEM UMA CONTA?</h6>
                    <a href="#" class="btn btn-primary">FAZER LOGIN</a>
                </div>
            </div>
        </div>
    </div>
</div>