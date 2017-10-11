<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <link href="https://fonts.googleapis.com/css?family=Anton|Poiret+One" rel="stylesheet">
  <title>Chiwiwiche: Diseño y Programación Web.</title>
  <link rel="icon" href="img/favicon.ico" sizes="16x16">
  <meta name="description" content="Diseño a la medida de páginas Web, Asesoría tecnológica, Branding y Marketing Digital.">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/chiwistyle.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <meta property="og:url" content="https://chiwiwiche.com/" />
  <meta property="og:title" content="Chiwiwiche Web Design" />
  <meta property="og:site_name" content="chiwiwiche.com" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="https://aleduque.github.io/Backup/img/cards/chiwiwiwche-logo-share.jpg/" />
  <meta property="og:image:url" content="https://aleduque.github.io/Backup/img/cards/chiwiwiwche-logo-share.jpg/" />
  <meta property="og:description" content="Aquí, programamos tu imaginación!" />
  <meta itemprop="description" content="Aquí, programamos tu imaginación!" />
  
  <!--TWITTER CARDS -->
  <meta property="twitter:account_id" content="880088813267189761" />
  <meta name="twitter:url" content="https://chiwiwiche.com/" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:image" content="https://chiwiwiche.com/img/cards/TWITTER-card-1.png/" />
  <meta name="twitter:image:src" content="https://chiwiwiche.com/img/cards/TWITTER-card-1.png/" />
  <meta name="twitter:description" content="Aquí, programamos tu imaginación!" />
  <meta name="twitter:site" content="@chiwiwiche" />
  <meta name="twitter:title" content="Chiwiwiche Web Design" />
  <meta name="twitter:creator" content="@chiwiwiche" />
  <meta name="twitter:domain" content="chiwiwiche.com" />
  <!-- <link rel="canonical" href="https://chiwiwiche.com/servicios/" /> -->
  
  <style>
  h3{
    text-align: center;
    font-size: 4em;
    /*font-family: 'Anton', sans-serif;*/
    margin:50px 15px 0 15px;
  }
  .emoji-thanx{
    /*background: red;*/
    margin: 0 auto;
    /*text-align: center;*/
    display: block;
    margin-top: 35px;
  }
  @media (max-width: 470px) {
    h3{
      /*font-size: 1em;*/
      font-size:12vw; 
    }
    .emoji-thanx{
      width: 95%;
      height: auto;
    }
  }
  </style>

  <!-- Google Analytics-->
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-102064556-1', 'auto');
  ga('send', 'pageview');

  </script>
</head>

<body>
<div>
<header>
  <nav id="header-nav" class="navbar navbar-default">
    <div>
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.html" id="bt-a">HOLA</a></li>
          <li><a href="servicios" id="bt-b">SERVICIOS</a></li>
          <li><a href="cuates" id="bt-c">CUATES</a></li>
          <li><a href="somos" id="bt-d">SOMOS</a></li>
          <li class="dropdown"><a href="#" id="bt-e" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">APRENDE<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="technews" id="sbt-a">Tech News</a></li>
              <li><a href="videos" id="sbt-b">Videos</a></li>
              <li><a href="notas" id="sbt-c">¿Sabías Que?</a></li>
            </ul>
          </li>
          <li><a href="buscanos" id="bt-f">BUSCANOS</a></li>
        </ul> 
      </div>
    </div>
  </nav>
</header>


<?php
$servername = "localhost";
$dbusername = "chiwiwic";
$dbpassword = "26j17@28c23m";
$dbname   = "chiwiwic_contact_form";

$fname  = $_POST['firstandlastname'];
$tel  = $_POST['phone'];
$email  = $_POST['mail'];
$msg  = $_POST['message'];

$to = "chiwiwiche@gmail.com";
$subject = "Nuevo Comentario";
$nombre = $_REQUEST['firstandlastname'];
$telefono = $_REQUEST['phone'];
$correo = $_REQUEST['mail'];
$texto = $_REQUEST['message'];
$headers = "Chiwiwiche: $nombre";
$headertel = "Telefono: $telefono, Email: $correo";
$sent = mail($to, $headers, $headertel, $texto);

/*
if ($sent) {
  echo "nitido";
}
else{
  echo "la cagaste";
}
*/

//connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

//check connect
if ($conn->connect_error) {
  die("Fallo la conexion: " . $conn->connect_error);
}

$sql = "INSERT INTO contactanos (nombre, telefono, email, mensaje) VALUES ('$fname', '$tel', '$email', '$msg')";

if ($conn->query($sql) === TRUE) {
  echo "<h3>GRACIAS POR TUS COMENTARIOS</h3>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>
<img src="img/emoji.svg" alt="Emoji de guiño" width="300" height="300" class="emoji-thanx">

<footer>
  <aside>
    <a href="https://www.facebook.com/chiwiwiche/" target="_blank"><i class="fa fa-facebook fa-2x facebook-icon" aria-hidden="true"></i></a>
    <a href="https://www.instagram.com/chiwiwiche/" target="_blank"><i class="fa fa-instagram fa-2x instagram-icon" aria-hidden="true"></i></a>
    <a href="https://twitter.com/chiwiwiche" target="_blank"><i class="fa fa-twitter fa-2x twitter-icon" aria-hidden="true"></i></a>
    <a href="https://plus.google.com/u/1/108093044768892691651" target="_blank"><i class="fa fa-google-plus fa-2x google-icon" aria-hidden="true"></i></a>
    <a href="https://www.youtube.com/channel/UC4maA1SS1RN10fNhl7K0k6Q" target="_blank"><i class="fa fa-youtube-play fa-2x youtube-icon" aria-hidden="true"></i></a>
    <a href="whatsapp://send?text=https://chiwiwiche.com/ Mira esta sitio web, aquí programan las mejores páginas web!" data-action="share/whatsapp/share" class="whatsapp"><i class="fa fa-whatsapp fa-2x whatsapp-icon" aria-hidden="true"></i></a>
  </aside>
  <div class="personal-info footer-menu">
    <p>MENU</p>
    <ul>
      <li><a href="index.html">Hola</a></li>
      <li><a href="servicios">Servicios</a></li>
      <li><a href="cuates">Cuates</a></li>
      <li><a href="somos">Somos</a></li>
      <li><a href="technews">Tech News</a></li>
      <li><a href="videos">Videos</a></li>
      <li><a href="notas">¿Sabías Que?</a></li>
      <li><a href="buscanos">Buscanos</a></li>
    </ul> 
  </div>
  <div class="personal-info buscanos">
    <p>SÍGUENOS</p> 
  </div>
  <div class="personal-info contact-info">
    <a href="tel:+50231951814" class="phone"><i class="fa fa-volume-control-phone fa-1x" aria-hidden="true"></i> (502) 3195-1814</a>
    <p class="mail">Escríbenos<br> <a href="mailto:info@chiwiwiche.com"><i class="fa fa-envelope-o fa-1x" aria-hidden="true"></i> info@chiwiwiche.com</a></p>
    <!-- <p class="direccion">Oficinas:<br>Cualquier lugar con Wifi.</p> --> 
  </div>
  
</footer>
  <p class="copyright">&copy; 2017 all rights reserved to Chiwiwiche</p>
</div> <!-- END OF CONTEINER -->





<script src="js/jquery-3.1.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/chiwiscript.js"></script>
</body>
</html>