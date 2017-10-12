<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="shortcut icon" type="img/png" href="icon.png">
    <title>QFxS - Contacto</title>

    <style type="text/css">
    /* MARKETING CONTENT
-------------------------------------------------- */

        /* Center align the text within the three columns below the carousel */
        .marketing .col-lg-4 {
          margin-bottom: 20px;
          text-align: center;
        }
        .marketing h2 {
          font-weight: normal;
        }
        .marketing .col-lg-4 p {
          margin-right: 10px;
          margin-left: 10px;
        }
      .featurette-divider {
            margin: 80px 0; /* Space out the Bootstrap <hr> more */
          }

          /* Thin out the marketing headings */
          .featurette-heading {
            font-weight: 300;
            line-height: 1;
            letter-spacing: -1px;
          }

          .pull-right {
            float: right!important;
          }

          .video{
            width: 300px;
            height: 300px;
          }
          .tr{
            width: 475px;
            height: 300px;
          }

          .img{
            width: 50px;
            height: 50px;
            background-color: white;
          }

    </style>
  </head>
  <body>
    <!-- carousel -->
    
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item" style="height: 92vh">
      <img class="d-block w-100" src="img/10.png" alt="First slide">
    </div>
    <div class="carousel-item active" style="height: 92vh">
      <img class="d-block w-100" src="img/11.png" alt="Second slide">
    </div>
    <div class="carousel-item" style="height: 92vh">
      <img class="d-block w-100" src="img/12.png" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
       <div class="container ">
            <div class="carousel-caption text-right">
              <h1>Importante.</h1>
              <p>Cabe señalar que las recomendaciones en negociacion de instrumentos financieros pueden no coumplirse conforme a lo estipulado, las alertas enviadas por Qrrencys solo se basan en analisis tecnicos y los fundamentales pueden ocasionar que no se cumplan, por lo tanto los beneficios y/o perdidas son responsabilidad directa del usuario.</p>
            </div>
          </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    <!-- carousel -->
      
    <!-- navbar -->
    
    <nav class="navbar sticky-top navbar-toggleable-md navbar-inverse bg-inverse">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">QFxS</a>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav mr-auto ml-auto text-center">
          <a class="nav-item nav-link" href="index.html">Inicio</a>
          <a class="nav-item nav-link" href="servicios.html">Servicios</a>
          <a class="nav-item nav-link active" href="#">Contacto</a>
          <a class="nav-item nav-link" href="nosotros.html">Nosotros</a>
        </div>
        <div class="d-flex flex-row justify-content-around">
          <a href="https://www.facebook.com/Qrrencys/" class="mr-2" target="_blank"><img src="img/124010.svg" class="img"></a>
          <a href="https://www.youtube.com/channel/UC9yPtsQNwLC-AvG468-htmA" class="mr-2" target="_blank"><img src="img/youtube.svg" class="img"></a>
          <a href="https://www.instagram.com/qrrency/" class="mr-2" target="_blank"><img src="img/instagram.svg" class="img"></a>
          <a href="https://www.twitter.com/qrrencys" class="" target="_blank"><img src="img/twitter.svg" class="img"></a>
        </div>
        </div>
      </div>
    </nav>
    <!-- navbar -->

    <!-- formulario -->
   
<hr class="featurette-divider">
<?php   
if (isset ($_POST['Nom'])) {
  
    $para      = 'Aqui va tu mail';
            $titulo = 'Info sobre el servicio.';
            $mensaje = $_POST['Nom'].' a enviado el siguiente mensaje: '."\n"."\n".'Nombre:'."\n".$_POST['Nom']."\n"."\n".'Teléfono:'."\n".$_POST['Cel']."\n"."\n".'Correo:'."\n".$_POST['mail']."\n"."\n".'Mensaje:'."\n".$_POST['msg'];
            $cabeceras = 'From: Aqui va tu mail' . "\r\n" .
              'Reply-To: Aqui va tu mail' . "\r\n" .
              'X-Mailer: PHP/' . phpversion();
    
    mail($para, $titulo, $mensaje, $cabeceras);
}
?>
<?php if (!isset ($_POST['Nom'])) {?>
<form name="form" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
<div class="container">
<label for="example-text-input" class="col-2 col-form-label" >Nombre</label>
<input name="Nom" value="" class="form-control" required>
<label for="example-text-input" class="col-2 col-form-label">Telefono</label>
<input name="Cel" value="" class="form-control" required="">
<label for="example-text-input" class="col-2 col-form-label" >Correo</label>
<input name="mail" value="" class="form-control" required="">
<label for="example-text-input" class="col-2 col-form-label" >Mensaje</label>
<textarea name="msg" class="form-control" required=""></textarea>
</br>
<input type="submit" value="Enviar" class="btn btn-danger btn-right">
</div>
</form>
<?php } else echo('
  <hr class="featurette-divider">
  <div class="card card-inverse mt-5 pt-5 container" style="background-color: #333; border-color: #333;">
  <div class="card-block">
    <h3 class="card-title text-center">Gracias</h3>
    <p class="card-text text-center">Su mensaje ha sido enviado</p>
    <p class="card-text text-center">En breve nos contactaremos</p>
    <div class="text-center">
    </div>
  </div>
</div>
<hr class="featurette-divider">') ;?>
<hr class="featurette-divider">
      <!-- formulariofin -->

    <!-- footer -->

      <div class="container">
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017 Qrrency's Forex & Stock's. &middot; <a href="docs/Disclaimer.pdf" target="_blank">Disclaimer</a> &middot; <a href="docs/Politica%20de%20Privacidad.pdf" target="_blank">Politica de Privacidad</a></p>
      </footer>
      </div>

    <!-- footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>
