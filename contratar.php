<?php require_once 'php/planos.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plano: </title>
    <link rel="icon" href="ico/1/favicon.png"  sizes="16x16">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style/flex.css">
    <link rel="stylesheet" href="style/pallet.css">
    <link rel="stylesheet" href="style/style-contratar.css">
    <script src="https://kit.fontawesome.com/55fcd42dc6.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <section id='head'>
        <nav class='nav-bar'>
        <div class='container-nav row'>
                <a href="#head" class='nav-scroll' class='nav-logo'>
                    <img src="image/logo-preto.png" alt="Show Mobile" class='logo'>
                </a>
              
                <div class='tel-comercial row'>
                    <p class=''><span class='tel-span'>0800-2003581</span><br>Atendimento comercial</p>
                    <ul class='nav-redes' id='navredes'>
                        <li><a href="#!"><img src="ico/instagram.png" alt="" class='img-ico'></a></li>
                        <li><a href="#!"><img src="ico/facebook.png" alt="" class='img-ico'></a></li>
                        <!-- <li><a href="#!"><img src="ico/youtube.png" alt="" class='img-ico-youtube'></a></li> -->
                    </ul>
                </div>
                
            </div>
        </nav>
    </section>
    <section id='body'>
        <div class='corpo-contratacao'>
            <div class='head-contratacao'>
                <h3>Contratação</h3>
                <?php 
                  $planoControle = new planoControle();
                  $planoId = $_GET['plano'];
                  $plano = $planoControle->assinatura($planoId);
                  $plano = json_decode($plano);

                  //echo $plano->plano;
                ?>
            </div>
            <div class='row'>
                <div class='plano'>
                    <img src="image/simcard-show.png" alt="" class='simcard'>
                    <h3><?php echo $plano->plano; ?></h3>
                    <h4><?php echo 'R$ ' . $plano->preco; ?></h4>
                    <hr>
                    <ul class='list-plano'>
                        <li><i class='fa fa-plus'></i> Internet <span class='font-color-orange'>sem cortes</span></li>
                        <li><i class='fa fa-plus'></i> Sms <span class='font-color-orange'>ilimitado</span></li>
                        <li><i class='fa fa-plus'></i> <span class='font-color-orange'>Ligações ilimitadas</span> para todo o brasil</li>
                    </ul>
                </div>
                <div class='form'>
                    <form name="planoRecorr" enctype="multipart/form-data" action="<?php $planoControle->contratar($planoId) ?>" method="post">
                        <input type="hidden" name="plano" value="<?php ?>" />
                        <input type="hidden" name="assunto" value="<?php ?>" />
                        <div class="row">
                            <div class="col-md-12">
                                <h3 style="color:red"><?php 0?></h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="btn-group justified-content">
                                    <label class="u-check">
                                        <input class="" name="tipoCliente" type="radio" id="PessoaFísica" checked>
                                        <span class="">Pessoa Física</span>
                                    </label>
                                    <label class="u-check">
                                        <input class="" name="tipoCliente" type="radio" id="PessoaJurídica">
                                        <span class="">Pessoa Jurídica</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="col-md-10"><span id="spnNome">*Nome</span> <span style="color:red; font-size:9pt" id="msgNomeAss"></span></label>
                                <input id="txtNomeAss" name="nomeAss" class="input-orange" type="text" required />

                            </div>
                            <div class="col-md-3">
                                <label class="col-md-10"><span id="spnDoc">*CPF</span> <span style="color:red; font-size:9pt" id="msgCPFAss"></span></label>
                                <input id="txtCPFAss" name="cpfAss" class="input-orange" type="text" required />

                            </div>
                            <div class="col-md-3">
                                <label class="col-md-10">*RG <span style="color:red; font-size:9pt" id="msgRGAss"></span></label>
                                <input id="txtRGAss" name="rgAss" class="input-orange" type="text" required />

                            </div>
                            <div class="col-md-6">
                                <label class="col-md-10">*E-mail <span style="color:red; font-size:9pt" id="msgEmailAss"></span></label>
                                <input id="txtEmailAss" name="emailAss" class="input-orange" type="text" required />

                            </div>
                            <div class="col-md-6">
                                <label class="col-md-10">*Número do Telefone<span style="color:red; font-size:9pt" id="msgFoneAss"></span></label>
                                <div class="input-group">
                                    <input id="txtDDDAss" name="numDDDAss" class="input-ddd" type="text" placeholder="DDD" required />
                                    <input id="txtTelAss" name="numTelAss" class="input-tel" type="text" placeholder="Nº Tel" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="col-md-10">*CEP <span style="color:red; font-size:9pt" id="msgCEPAss"></span></label>
                                <div class="input-group">
                                    <input id="txtCEPAss" name="cepAss" class="input-cep" type="text" placeholder="Preencha com o CEP e click na lupa..." required />
                                    <button type="button" class="btn-cep" id='btnConsultacep'><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="col-md-10">*Bairro <span style="color:red; font-size:9pt" id="msgBairroAss"></span></label>
                                <input id="txtBairroAss" name="bairroAss" class="input-orange" type="text" required />
                            </div>
                            <div class="col-md-6">
                                <label class="col-md-10">*Logradouro <span style="color:red; font-size:9pt" id="msgLogradouroAss"></span></label>
                                <input id="txtLogrAss" name="logradouroAss" class="input-orange" type="text" required />
                            </div>
                            <div class="col-md-6">
                                <label class="col-md-10">*Número <span style="color:red; font-size:9pt" id="msgNumeroAss"></span></label>
                                <input id="txtNumerAss" name="numeroAss" class="input-orange" type="text" required />
                            </div>
                            <div class="col-md-12">
                                <label class="col-md-10">Complemento </label>
                                <input id="txtCompleAss" name="complementoAss" class="input-orange" type="text" />
                            </div>
                            <div class="col-md-6">
                                <label class="col-md-10">*Cidade <span style="color:red; font-size:9pt" id="msgCidadeAss"></span></label>
                                <input id="txtCidadeAss" name="cidadeAss" class="input-orange" type="text" required />
                            </div>
                            <div class="col-md-6">
                                <label class="col-md-10">*Estado <span style="color:red; font-size:9pt" id="msgEstadoAss"></span></label>
                                <input id="txtEstadoAss" name="estadoAss" class="input-orange" type="text" required />
                            </div>
                            <div class="col-md-6">
                                <!--
                                <label class="col-md-10">*Tipo do número <span style="color:red; font-size:9pt" id="msgCell3"></span></label>
                                <div class="btn-group justified-content">
                                    <label class="u-check">
                                        <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radGroupBtn1_1" type="radio" checked="" id="Novo Numero">
                                        <span class="btn btn-md btn-block u-btn-outline-white g-brd-gray-light-v3 g-brd-primary--checked g-color-main g-color-primary--checked g-font-size-default rounded-0 g-py-13">Novo</span>
                                    </label>
                                    <label class="u-check">
                                        <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radGroupBtn1_1" type="radio" id="Portabilidade">
                                        <span class="btn btn-md btn-block u-btn-outline-white g-brd-gray-light-v3 g-brd-primary--checked g-color-main g-color-primary--checked g-font-size-default rounded-0 g-py-13">Portabilidade</span>
                                    </label>
                                </div>-->
                                <label class="col-md-10" id="lblDDDesc">*Escolha o DDD Desejado.</label>
                                <div class="input-group">
                                    <!--  <input id="txtcellDDD" name="cellDDD" class="form-control u-form-control-lg" type="text" placeholder="DDD" style="width:15px" />-->
                                    <select class="input-orange" name="cellDDD" id="txtcellDDD">
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="19">19</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="24">24</option>

                                    </select>
                                    <!--   <input id="txtCell" name="numCell" class="form-control u-form-control-lg" type="text" placeholder="Nº Cell" style="width:120px; display:none" />-->
                                </div>
                            </div>


                            <div class="col-md-6">
                                <label class="col-md-10">*ICCID <a href="#!" id="linkHelp"><i class="fa fa-question-circle"></i></a><span style="color:red; font-size:9pt" id="msgICCIDAss"></span></label>
                                <div id="myTooltip" style="" class="div_iccid">
                                    <div style="margin:5px; padding:5px; width:auto; height:auto">
                                        <h4>Cod. ICCID</h4>
                                        <p style="text-align:justify">
                                            O ICCID é o número que está atrás do seu chip próximo ao código de barras
                                        </p>
                                        <p>
                                            <img src="~/assets/img/Helpchip2.jpg" style="width:250px; height:150px" />
                                        </p>
                                    </div>
                                </div>
                                <input id="txtICCID" name="iccidAss" class="input-orange" type="text" />
                            </div>
                            <div class="col-md-12" id="divNumeroCell" style="">
                                <label>*Anexar Doc. identidade com foto *.pdf ou *.jpg</label>
                                <div class="input-group">
                                    <input class="input-orange" type="file" name="pdfFile" id="input-pdfFile" accept=".pdf,.jpg" required />
                                </div>
                                <span id="spnArquivo" style="font-weight:bold; text-align:center"></span>

                            </div>
                            <div class="col-md-12">
                                <br />
                                <input type="checkbox" name="newsletter" /> Deseja receber mensagens e promoções da SHOW? <br />
                                <input type="checkbox" name="aceite" id="chkAceite" /> Li e concordo com os <a href="#!" target="_blank">termos de uso</a>!
                            </div>
                            <div class="col-md-12">
                                <hr />
                                <!--<button type="button" class="btn u-btn-black g-brd-main g-brd-primary--hover g-bg-main g-bg-primary--hover g-font-weight-600 g-font-size-12 text-uppercase g-px-25 g-py-13" onclick="formAssinar(@ViewBag.Plano)">Assinar <i class="fa fa-send"></i></button>
                                <button type="button" class="btn u-btn-black g-brd-main g-brd-primary--hover g-bg-main g-bg-primary--hover g-font-weight-600 g-font-size-12 text-uppercase g-px-25 g-py-13" onclick="CriarPlanoRest()">Assinar <i class="fa fa-send"></i></button>
                                <button type="button" class="btn u-btn-black g-brd-main g-brd-primary--hover g-bg-main g-bg-primary--hover g-font-weight-600 g-font-size-12 text-uppercase g-px-25 g-py-13" onclick="formAssinar()">Contratar <i class="fa fa-send"></i></button>-->
                                <button type="submit" id="btnEnviarContrato" class="btn-enviar">Contratar <i class="fa fa-send"></i></button>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>

    </section>
    <section id='footer'>
        <div class='footer-nav row'>
            <div class='logo-footer'>
                <a href="#head" class='nav-scroll'>
                    <img src="image/logo-branco.png" alt="">
                </a>
            </div>
            <div class='mapa-site'>
                <p><span>MAPA DO SITE</span></p>
                <ul class='rodape-list'>
                    <li><a href="#!">Home</a></li>
                    <li><a href="#!">Tarifas móveis</a></li>
                    <li><a href="#!">Nossos artistas</a></li>
                    <li><a href="#!">Sobre nós</a></li>
                    <li><a href="#!">Contato</a></li>
                </ul>

            </div>
            <div class='contato-footer'>
                <p><span>CONTATO</span></p>
                <ul class='rodape-list'>
                    <li>Email: <span>contato@operadorashow.com.br</span></li>
                    <li>Telefone: <span>+55(19)3201-2636</span></li>
                    <li>Comercial: <span>0800-2003581</span></li>
                    <li>Endereço: <span>Rua Coronel Quirino, 2159</span><br><span>Cambuí - Campinas-SP - 13025-033</span></li>
                    
                </ul>
            </div>
            <div class='politica-info'>
                <p><span>POLÍTICA DE INFORMAÇÕES</span></p>
                <br>
                <p><a href="https://www.uniglobaltelecom.com/web/files/politica-de-privacidad.pdf" target='_blank'>POLÍTICA DE PRIVACIDADE</a></p>
                <p><a href="#!">CONDIÇÕES DE DEVOLUÇÃO</a></p>
                <p><a href="#!">AVISO LEGAL</a></p>
            </div>

        </div>

    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!-- Requisições ajax -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script src="javascript/scroll.js"></script>
    <script src='javascript/consultaCEP.js'></script>
    <script src='javascript/validacpf.js'></script>

</body>
</html>