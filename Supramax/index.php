
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Supramax</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #C0392B;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #C0392B;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
  .jumbotron {
      background-color: #C0392B;;
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }
  .container-fluid {
      padding: 70px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #C0392B;
      font-size: 50px;
  }
  .logo {
      color: #C0392B;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 50%;
      height: 50%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #C0392B;
  }
  .carousel-indicators li {
      border-color: #C0392B;
  }
  .carousel-indicators li.active {
      background-color: #C0392B;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #C0392B; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #C0392B;
      background-color: #fff !important;
      color: #C0392B;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #C0392B !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #C0392B;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #3B3738;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #f4511e !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
     <img src="/Supramax/img/Supramax.png"  style="width:20%">
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        
        <li><a href="#services">SERVICIOS</a></li>
        <li><a href="#portfolio">SOPORTE</a></li>
        <li><a href="#pricing">DISPENSARIOS</a></li>
        <li><a href="#contact">CONTACTO</a></li>
        <li><a href="/Supramax/login.php">LOGIN</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>Soporte Técnico</h1> 
  <p>La solucion a tus dudas</p> 
  <form>

     <center> 
  <span   aria-hidden="true"> </span>

        <input type="text"  class="form-control" id="search" placeholder="Search  ">
        
</center>

<!-- LA BUSQUEDA de boton -->
<body>
<div class="container">
 
    <div class="col-md-3 col-md-offset-3" id="result">
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
</script>
<script type="text/javascript" src="index.js"></script>
  </form>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>Información de la página</h2><br>
      <h4>Esta página esta diseñada para solucionar dudas frecuentes que existen dentro de las estaciones de gasolina.</h4><br>
      <p>Aqui se encotrar la solucion a las dudas exiustentes complejas y basicas de los dispensarios de gasolina, los tipos y modelos de dispensarios, toda la información critica de un dispensario y las mejoras para su correcta funcionalidad dando como resultado un servicio en linea de soporte técnico gracias a Binarium Tecnologías S.A de C.V .</p>
    
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Valores</h2><br>
      <h4><strong>Mision: </strong> Informar a todos los clientes con dispensarios de gasolina supramax acerca del uso de los equipos de gasolina y su correcto manejo para tener un mejor desempeño en la labor dia a dia .</h4><br>
      <p><strong>Vision:</strong> El cumplir con los requerimientos a nustros clientes ayudara a mejorar la partel del desarrollo, implementando los requerimientos dirigidos al area de soporte para mejoras continuas.</p>
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>Servicios</h2>
  <h4>Como podemos ayudarte</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-off logo-small"></span>
      <h4>Problemas con dispensarios</h4>
      <p>Dudas a tus problemas..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <h4>Emax</h4>
      <p>Solucuion a facturas..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4>Trabajo en equipo</h4>
      <p>Ingenieros altamente capacitados trabajando juntos para mejoras continuas..</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>Modelos inteligentes</h4>
      <p>La evolucion de la tecnologia implementada en los dispensartios..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4>Certificados por profeco</h4>
      <p>Modelos verificados por la autoridad.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;">Agenda tu visita</h4>
      <p>Llamanos nos pondremos en contacto contigo.</p>
    </div>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Selecciona tu duda</h2><br>
  <h4>Selecciona tu una opcion</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
       <a href="/Supramax/Dispensario.php"><img src="/Supramax/img/dis.png" width="400" height="300"></a> 
        <p><strong>Dispensarios</strong></p>
        <p>Soluciona tu duda dando clic</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <a href="/Supramax/Dispensario.php"><img src="/Supramax/img/dis.png" width="400" height="300"></a> 
        <p><strong>Redes</strong></p>
        <p>Soluciona tu duda dando clic</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <a href="/Supramax/Dispensario.php"><img src="/Supramax/img/dis.png" width="400" height="300"></a> 
        <p><strong>Emax</strong></p>
        <p>Soluciona tu duda dando clic</p>
      </div>
    </div>
  </div><br>
  
  <h2>¿Que es lo que estas buscando?</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"Aqui encontraras errores comunes!"<br><span>La solucion mas cerca de ti</span></h4>
      </div>
      <div class="item">
        <h4>"Soporte esta muy ocupado y no contestan !!"<br><span>Resuelve tus dudas con un solo clic</span></h4>
      </div>
      <div class="item">
        <h4>"Como mejoras tu conocimiento "<br><span>Aqui mismo encontraras todas tus dudas referentes a dispensarios o sistema</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2>Dispensarios en campo</h2>
    
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Evo 3</h1>
        </div>
        <div class="panel-body">
          <p><strong>20</strong> Altura</p>
          <p><strong>15</strong> Diametro</p>
          <p><strong>5</strong> Peso</p>
          <p><strong>2</strong> Material</p>
          <p><strong>Diseño</strong> dispensario</p>
        </div>
        <div class="panel-footer">

          <a href="/Supramax/imagen.php" class="btn btn-default">Vizualizalo</a>
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Evo 5</h1>
        </div>
        <div class="panel-body">
          <p><strong>50</strong> Altura</p>
          <p><strong>25</strong> Diametro</p>
          <p><strong>10</strong> Peso</p>
          <p><strong>5</strong> Material</p>
          <p><strong>Diseño</strong> dispensarios</p>
        </div>
        <div class="panel-footer">

        <a href="/Supramax/imagen.php" class="btn btn-default">Vizualizalo</a>
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Evo 6</h1>
        </div>
        <div class="panel-body">
          <p><strong>100</strong> Altura</p>
          <p><strong>50</strong> Diametro</p>
          <p><strong>25</strong> Peso</p>
          <p><strong>10</strong> Material</p>
          <p><strong>Diseño</strong> dispensarios</p>
        </div>
        <div class="panel-footer">
       
        <a href="/Supramax/imagen.php" class="btn btn-default">Vizualizalo</a>
        </div>
      </div>      
    </div>    
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACTO</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contactanos disponibles las 24 hrs.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Zapopan Jalisco , Mexico</p>
      <p><span class="glyphicon glyphicon-phone"></span> +01 (33) 36285433 - 01(33) 36205186</p>
      <p><span class="glyphicon glyphicon-envelope"></span> soporte@supramax.com.mx</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Nombre Estacion" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Correo" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comentarios" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <a href="/Supramax/correo.php" class="btn btn-default pull-right"> Enviar</a>

        </div>
      </div>
    </div>
  </div>
</div>

<!-- Add Google Maps -->
<div id="googleMap" style="height:400px;width:100%;"></div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Pagina oficial  <a href="http://www.supramax.com.mx/beta/" target="_blank">www.supramax.com.mx</a></p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
