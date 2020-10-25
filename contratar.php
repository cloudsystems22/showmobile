<!DOCTYPE html>
<?php
$redireccion="<meta http-equiv='refresh' content='0; url=index.php'>";
if(isset($_GET['tar'])) {
    $tar = $_GET['tar'];
    switch ($tar)
    {
      case "3gb":
          $texttar = "3 GB";$redireccion="";$texttar2 = "3 GB";
          break;
      case "5gb":
          $texttar = "5 GB";$redireccion="";$texttar2 = "5 GB";
          break;
      case "10gb":
          $texttar = "10 GB";$redireccion="";$texttar2 = "10 GB";
          break;
      case "15gb":
          $texttar = "15 GB";$redireccion="";$texttar2 = "15 GB";
          break;
      case "20gb":
          $texttar = "20 GB";$redireccion="";$texttar2 = "20 GB";
          break;
      case "30gb":
          $texttar = "30 GB";$redireccion="";$texttar2 = "30 GB";
          break;
      case "40gb":
          $texttar = "40 GB";$redireccion="";$texttar2 = "40 GB";
          break;
      case "f4x5gb":
          $texttar = "Plano Familia";$redireccion="";$texttar2 = "4 linhas 5 GB cada";
          break;
    }
}
echo $redireccion;
 ?>
 <!DOCTYPE html>
 <html lang="br">
   <head>
     <title>Show Mobile </title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link rel="icon" href="../favicon.png"  sizes="16x16">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Oswald:400,700">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/mediaelementplayer.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <!-- Facebook Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '2385551981749720');
      fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=2385551981749720&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->
  </head>
  <body>



  <div class="site-wrap">

    <div class="site-navbar mt-4">
        <div class="container py-1">
          <div class="row align-items-center">
            <div class="col-8 col-md-8 col-lg-4">
              <h1 class="mb-0"><a href="index.php" class="text-white h2 mb-0"><strong><img src="logob.png" width="150px"></strong></a></h1>
            </div>
            <div class="col-4 col-md-4 col-lg-8">
              <nav class="site-navigation text-right text-md-right" role="navigation">

                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li class="active">
                    <a href="index.php">Home</a>
                  </li>
                  <li><a href="index.php#artistas">Nossos Artistas</a></li>
                  <li><a href="index.php#planos">Planos Controle</a></li>
                  <li><a href="index.php#novedades">Novidades</a></li>
                  <li><a href="contato.php">Contato</a></li>
                </ul>
              </nav>
            </div>


          </div>
        </div>
      </div>
    </div>

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->



<!-- empieza contacto -->


    <div class="site-section" style="background-color: black;">
      <div class="container">
        <div class="row">
<br><br><br>
          <div class="col-lg-4 ml-auto">
            <div class="p-4 mb-3"><br><br><h1 style="color: #fff;">Pré venda</h1>
<p style="color: #c65030;font-size: 24px;">Show <span style="font-weight: bold;font-size: 28px;"><?php echo $texttar ?></span></p>
<p style="color: #fff;">Adquira agora seu SIM Card e receba em casa. Após o recebimento baixe nosso APP e escolha o plano adequado para você e desfrute do melhor 4G+ do Brasil.
            <img src="images/card.png" width="100%">
            </div>
<div class="p-4 mb-3">
            <ul style="color: white;">
   <li>Show <?php echo $texttar2 ?> para navegar</li>
   <li>Internet sem cortes</li>
   <li>4G+ mais rápido do Brasil</li>
   <li>Apps Ilimitadas (exceto vídeos): Show, Whatsapp, Instagram, Facebook e Telegram.</li>
   <li>Ligações ilimitadas para todo Brasil (fixo e celular)</li>
   <li>SMS ilimitado</li>
   <li>Sem Fidelidade</li>
   <li>Aplicativo Controle exclusivo</li>
 </ul>
</div>
          </div>



          <div class="col-md-12 col-lg-7 mb-5">



            <form action="php/contratar.php" class="contact-form" method="POST">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
<label class="font-weight-bold" for="message" style="color: white;">Nome <span style="color: red;">*</span></label>
                  <input type="text" id="fullname" class="form-control" placeholder="Nome" name="nomeAss" required>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
<label class="font-weight-bold" for="email" style="color: white;">Email <span style="color: red;">*</span></label>
                  <input type="email" id="email" class="form-control" placeholder="Email" name="emailAss" required>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-6">
<label class="font-weight-bold" for="message" style="color: white;">Telefone <span style="color: red;">*</span></label>
                  <input type="text" id="movil" class="form-control" placeholder="Telefone" name="numTelAss" required>
                </div>

                <div class="col-md-6">
              <label class="font-weight-bold" for="message" style="color: white;">CPF <span style="color: red;">*</span></label>
                  <input type="text" id="cpf" class="form-control" placeholder="CPF" name="cpfAss" required>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
              <label class="font-weight-bold" for="message" style="color: white;">Endereço <span style="color: red;">*</span></label>
                  <input type="text" id="logradouroAss" class="form-control" placeholder="Endereço" name="logradouroAss" required>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-6">
              <label class="font-weight-bold" for="message" style="color: white;">Complemento</label>
                  <input type="text" id="movil" class="form-control" placeholder="Complemento" name="complementoAss">
                </div>

                <div class="col-md-6">
              <label class="font-weight-bold" for="message" style="color: white;">Cep <span style="color: red;">*</span></label>
                  <input type="text" id="cpf" class="form-control" placeholder="Cep" name="cepAss" required>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
              <label class="font-weight-bold" for="message" style="color: white;">Bairro <span style="color: red;">*</span></label>
                  <input type="text" id="bairroAss" class="form-control" placeholder="Bairro" name="bairroAss" required>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-6">
              <label class="font-weight-bold" for="message" style="color: white;">Cidade <span style="color: red;">*</span></label>
                  <input type="text" id="cidadeAss" class="form-control" placeholder="Cidade" name="cidadeAss" required>
                </div>

                <div class="col-md-6">
              <label class="font-weight-bold" for="message" style="color: white;">Estado <span style="color: red;">*</span></label>
                  <input type="text" id="estadoAss" class="form-control" placeholder="Estado" name="estadoAss" required>
                </div>
              </div>
<span style="color: red;">*</span> Campos obrigatórios<br><br>
<input type="hidden" id="tarAss" name="tarAss" value="<?php echo $tar; ?>">

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Comprar" class="btn btn-primary py-3 px-4" style="background-color: #c65030;">
                </div>
              </div>


            </form>
          </div>





        </div>
      </div>
    </div>



  <?php include 'footer.php';?>
