<!DOCTYPE html>
<html lang="en">
<head>
  <title>Supramax</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #C0392B  ;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
    video{
     position: absolute-center;
  top: 800px;
  right: 10;
  width: 300px;
  height: 300px;
    }
  </style>
</head>

<nav> 
  <div class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
    <ul class="nav navbar-nav" >
      </ul>
    <ul class="nav navbar-nav navbar-right">  
</div>
</ul>
      

  </div>

  <img src="/Supramax/img/Supramax.png"  style="width:20%">
</nav>




<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <h4>Categorias</h4>
      <ul class="nav nav-pills nav-stacked">
       <li class=""><a  style="color: black" href="/Supramax/dispensario.php">Dispensarios</a></li>
        <li><a style="color: black" href="/Supramax/Redes.php">Redes</a></li>
        <li><a style="color: black" href="/Supramax/Redes.php">Redes</a></li>
        <li><a style="color: black" href="/Supramax/Tothem.php">Tothem</a></li>
        <li><a  style="color: black" href="/Supramax/Emax.php">Emax</a></li>
        <li><a  style="color: black" href="/Supramax/index.php">Inicio</a></li>
      </ul><br>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search Blog..">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>
    </div>

    <div class="col-sm-9">
      <h4><small>Solucion</small></h4>
      <hr>
      <h2>Totalizadores</h2>
      <h5><span class="glyphicon glyphicon-time"></span> Publicado, Marzo 02, 2018.</h5>
      <h5><span class="label label-danger">Supramax</span> <span class="label label-primary">Soporte tecnico</span></h5><br>

       <div class="alert alert-success">
    <strong>Nota:</strong> <br>
  <br> * Colocar las pistolas en el porta pistolas. </br> 
  <br> * Revisar que el teclado se encuente funcional. </br> 
   </a>.
  </div>
      <p>  <p><span class="badge">1</span> Preciona la tecla [5] despues [Enter]</p><br>
        <p><span class="badge">2</span> Al realizarlo se mostraran los totalizadores</p><br>
          <p><span class="badge">3</span> Como proceso final, Se muestra video de ejemplo</p><br>
          
      <br><br>
      
 
      <hr>
      <h2>Video Ejemplo</h2>
      <h5><span class="glyphicon glyphicon-time"></span> Publicado, Marzo 02, 2018.</h5>
      <h5><span class="label label-success">Video HD</span></h5><br>
      <p>
        
        <video  width="400" controls muted="">
  <source src="../Supramax/Videos/totalizadores.mp4"" type="video/mp4">
      </p>
      <hr>

      <h4> Comentarios:</h4>
      <form role="form">
        <div class="form-group">
          <textarea class="form-control" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Enviar</button>
      </form>
      <br><br>
      
      <p>  Publica:</p><br>
      
      <div class="row">
        <div class="col-sm-2 text-center">
          <img src="/Supramax/img/dispensario.png" class="img-circle" height="65" width="65" alt="Avatar">
        </div>
        <div class="col-sm-10">
          <h4>Marlon Rivas <small>Marzo 02, 2018, 9:12 PM</small></h4>
        
          <br>
        </div>
        <div class="col-sm-2 text-center">
          <img src="/Supramax/img/dispensario.png" class="img-circle" height="65" width="65" alt="Avatar">
        </div>
        <div class="col-sm-10">
          <h4>Jorge Ayala <small>Marzo 02, 2018, 8:25 PM</small></h4>
       
          <br>
          
            <div class="col-sm-2 text-center">
              <img src="/Supramax/img/dispensario.png" class="img-circle" height="65" width="65" alt="Avatar">
            </div>
            <div class="col-xs-10">
              <h4>Gracias por tu preferencia  <small>Marzo 02, 2018, 8:28 PM</small></h4>
              <p>Soporte Tecnico Supramax</p>
              <br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid">
  <p>Supramax</p>
</footer>

</body>
</html>
