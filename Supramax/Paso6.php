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
    .row.content {height: 1890px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #C0392B;
      height: 215%;
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
        <li   class="">  <a style="color: black"  href="/Supramax/Dispensario.php">Dispensarios</a> </li>
        <li><a style="color: black" href="/supramax/Redes.php">Redes</a></li>
        <li><a style="color: black" href="/supramax/Tothem.php">Tothem</a></li>
        <li><a style="color: black" href="/supramax/Emax.php">Emax</a></li>
         <li><a style="color: black" href="/supramax/index.php">Inicio</a></li>
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
      <h2>Configuracion de BRICK</h2>
      <h5><span class="glyphicon glyphicon-time"></span> Publicado, Marzo 02, 2018.</h5>
      <h5><span class="label label-danger">Supramax</span> <span class="label label-primary">Soporte tecnico</span></h5><br>

 <div class="alert alert-success">
    <strong>Requerimientos:</strong> <br>
  <br> * Un dispositivo BRICK  </br>
  <br> * Red de internet (Contraseña de la red) </br>  
  <br> * IP del Servidor y puerto del servidor a conectar. </br> 
  <br> * Puerta de enlace (GATEWAY) </br> 
  <br> * Mascara de red (NETMASK).  </br>
  <br> * Dirección IP  </br> 
  <br> * Un tag NFC 14.3 MHz.  </br>
  <br> * Computadora o Dispositivo móvil con conexión Wifi (celular, Tableta).   </br>
   </a>.
  </div>

   <div class="alert alert-info">
    <strong>Importante:</strong> <br>
  <br>  Para saber la puerta de enlace y mascara de red en su ordenador teclear  </br>
  <br> * [tecla windows] + [R] escribir cmd y presionar aceptar </br>  
  <br> * Una vez abierta la ventana teclear [ipconfig]+[ENTER] </br> 
   </a>.
  </div>


      <p>  <p><span class="badge">1</span> Posicione su tag NFC, en la etiqueta NFC de su BRICK</p><br>
        <p><span class="badge">2</span> Manteniendo la posición anterior, presione el botón de encendido del BRICK, emitirá dos beep y se encenderán los indicadores verde y rojo juntos</p><br>
              <p><span class="badge">3</span> Visualiza  el video el proceso</p><br>

                   <p>
        
        <video  width="400" controls muted="">
  <source src="../Supramax/Videos/inicio.mp4"" type="video/mp4">
      </p>

          <p><span class="badge">4</span> En un smartphone,tablet o laptop ,buscar una red wifi llamada BRICK_xxxxxx</p><br>
            <p><span class="badge">5</span> Ingresar a la red (WI-FI) del BRICK e ingresar: <br><br> Contraseña: 12345678 </p><br>
            
              <p><span class="badge">6</span> Una vez conectado ala red WI-FI del BRICK, abrir un navegador de internet en nuestro smatphone o laptop e ingresar lo siguiente 192.168.4.1:9991 y se presiona buscar.
              	</p><br>
              <p><span class="badge">7</span> Desplegara una ventana para iniciar sesión e ingresar lo siguiente:  
            
               <br> <br>  usuario: admin </br> 
            
               <br> contraseña: esp8266 </br> </p><br>

              <p><span class="badge">8</span> Presionar  acceder.</p><br>
              <p><span class="badge">9</span> Mostrara la pagina de inicio con las configuraciones del BRICK</p><br>
              <p><span class="badge">10</span> Presionar la pestaña Network Settings</p><br>
              <p><span class="badge">11</span> La configuración solicita lo siguiente: <br> </br>

              <br> Red [WI-FI] donde se conectara el BRICK (SSID) y contraseña</br>
              <br> Tipo de IP (estatica)</br>
              <br> Dirección  IP (Direccion a asignar al BRICK)</br>
              <br> Mascara de Subred (NETMASK)</br>
              <br> Puerta de enlace (GATEWAY)</br>
              <br> Socket type: (Client)</br>
              <br> Dirección IP del servidor (donde están alojados los dispensarios)</br>
              <br> Local port</br>
              </p><br>
              <p><span class="badge">12</span> Presionar el botón GUARDAR en la parte inferior.</p><br>
              <p><span class="badge">13</span> Presionar la pestaña de BRICK Settings y se seleccionar el tipo de aplicación (SIMECOB, ChipRed) y nuevamente se presione GUARDAR</p><br>
              <p><span class="badge">14</span> Para finalizar la operación se presiona la pestaña Reboot, seguido se presiona el botón reboot.</p><br>
              <p><span class="badge">15</span>  Este proceso apaga el BRICK y aplica los cambios realizados.</p><br>
             
      
      <p>
        <video  width="400" controls muted="">
  <source src="../Supramax/Videos/configuracion.mp4"" type="video/mp4">
      </p>

   <hr>

       <h2>Validación de configuración del BRICK</h2>

         <p>  <p><span class="badge">1</span> Presionar el botón de encendido del BRICK</p><br>
        <p><span class="badge">2</span> En el BRICK se encenderán ambos indicadores, seguido de ese proceso solo parpadeara el indicador verde, emitirá un beep y estará estático.</p><br>
              <p><span class="badge">3</span> En el smartphone o tablet, ingresar al navegador web y se ingresa la dirección IP del BRICK+9991<br><br>Ejemplo: 192.168.1.10:9991  </p><br>
              <p><span class="badge">4</span> Despliega una ventana para iniciar sesión <br><br> Usuario: admin <br><br> Contraseña: esp8266</p><br>
              <p><span class="badge">5</span> Presionar acceder y se valida la configuración de red del BRICK </p><br>
      <p> 
        <video  width="400" controls muted="">
  <source src="../Supramax/Videos/validacion.mp4"" type="video/mp4">
      </p>


      <hr>
      <h5><span class="glyphicon glyphicon-time"></span> Publicado, Marzo 02, 2018.</h5>
      <h5><span class="label label-success">Video HD</span></h5><br>


      <hr>

      <h4> Comentarios :</h4>
      <form role="form">
        <div class="form-group">
          <textarea class="form-control" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Enviar</button>
      </form>
      <br><br>
      
      <p><span class="badge">2</span> Publica:</p><br>
      
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
