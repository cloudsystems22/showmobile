<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Operadora Show</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" href="favicon.png"  sizes="16x16">
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

          <div class="col-md-12 col-lg-7 mb-5">


<br><br><br>
            <form action="contato2.php" class="contact-form" method="POST">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">

                  <input type="text" id="fullname" class="form-control" placeholder="Nome *" name="nome" required>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">

                  <input type="email" id="email" class="form-control" placeholder="Email *" name="email" required>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">

                  <input type="text" id="movil" class="form-control" placeholder="Telefone *" name="telefone" required>
                </div>
              </div>


              <div class="row form-group">
                <div class="col-md-12">

                  <textarea name="message" id="message" cols="30" rows="5" class="form-control"
                    placeholder="Sua Mesagem *" required></textarea>
                </div>
              </div>
<span style="color: red;">*</span> Campos obrigatórios<br><br>
              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Enviar" class="btn btn-primary py-3 px-4" style="background-color: #c65030;">
                </div>
              </div>


            </form>
          </div>

          <div class="col-lg-4 ml-auto">
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Contato</h3>
              <p class="mb-0 font-weight-bold text-black">Endereço</p>
              <p class="mb-4 text-black">Rua Coronel Quirino 2159, Campinas-SP </p>

              <p class="mb-0 font-weight-bold text-black">Telefone</p>
              <p class="mb-4" style="color: #c65030;">0800 200 35 81</p>
              <p class="mb-0  text-black">Segunda a sexta feiras<br>  das 8:00 às 20 :00<br>
Sábados<br> das 8:00 às 12:00</p>


            </div>


          </div>
        </div>
      </div>
    </div>



    <?php include 'footer.php';?>
