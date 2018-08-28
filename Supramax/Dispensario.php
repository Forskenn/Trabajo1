<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="shortcut icon" href="Red.png" />
  <title>SUPRAMAX</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
.dropdown-submenu {
    position: relative;
   
}

.dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: -1px;
    -webkit-border-radius: 0 6px 6px 6px;
    -moz-border-radius: 0 6px 6px;
    border-radius: 0 6px 6px 6px;
  
}

.dropdown-submenu:hover>.dropdown-menu {
    display: block;

}

.dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: right;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    border-left-color: #C0392B;
    margin-top: 5px;
    margin-right: -10px;

}

.dropdown-submenu:hover>a:after {
    border-left-color: #fff;

}

.dropdown-submenu.pull-left {
    float: none;

}


.dropdown-submenu.pull-left>.dropdown-menu {
    left: -100%;
    margin-left: 10px;
    -webkit-border-radius: 6px 0 6px 6px;
    -moz-border-radius: 6px 0 6px 6px;
    border-radius: 6px 0 6px 6px;
}
input[type=text]:focus {
    width: 100%;
}
img {

    filter: alpha(opacity=50); /* For IE8 and earlier imagenes con movimineto naranja */
}

img:hover {
    opacity: 0.5;
    filter: alpha(opacity=100); /* For IE8 and earlier imagebnes con movimiento naranja */
}

</style>
<body>
	<nav>
<center>
<div style="background-color: #302829" style="text-indent: white" class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div  class="container">
        <div class="navbar-header">
            <button type="button"  class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

            </button>
            <a> <img src="/Supramax/img/Supramax.png"  style="width:20%"> </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a style="color: white" href="http://www.supramax.com.mx/beta/index.php/refacciones/refacciones_evo3" target="_blank">Refaciones</a></li>
            </ul>
            <ul class="nav navbar-nav">
                <li class=""><a style="color: white" href="/Supramax/index.php/"> Inicio</a></li>
                <li>
                    <a  style="color: white" href="#" class="dropdown-toggle" data-toggle="dropdown">Evo 3 <b class="caret"></b></a>
                    <ul class="dropdown-menu multi-level">
                        <li><a href="#">Hidraulico Mecanico</a></li>
                        <li><a href="#">Chasis</a></li>
                        <li><a href="#">Gabinete</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Electronico</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Consumibles</a></li>
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sistema Interno</a>
                            <ul class="dropdown-menu">
                                <li><a href="/Supramax/Paso1.php">Prueba de pulsador</a></li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ajuste de calibracion</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Errores Comunes</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Dirrecion Ip</a></li>
                                                <li><a href="#">Ventas</a></li>
                                                <li><a href="#">Contraste</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Version</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Dispensario Fuera de red</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a  style="color: white" href="#" class="dropdown-toggle" data-toggle="dropdown">Evo 5 <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Hidrailico Mecanico</a></li>
                        <li><a href="#">Chasis</a></li>
                        <li><a href="#">Gabinete</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Electronico</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Consumible</a></li>
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sistema Interno</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Dirrecion de IP</a></li>
                                <li><a href="#">Ventas</a></li>
                                <li><a href="/Supramax/Paso3.php">Contraste</a></li>
                                <li class="divider"></li>
                                <li><a href="/Supramax/Paso2.php">Totalizadores</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Errores comunes</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Detalles </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">4</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">5</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
 <a  style="color: white" href="#" class="dropdown-toggle" data-toggle="dropdown">Evo 6 <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Hidrailico Mecanico</a></li>
                        <li><a href="#">Chasis</a></li>
                        <li><a href="#">Gabinete</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Electronico</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Consumible</a></li>
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sistema Interno</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Dirrecion de IP</a></li>
                                <li><a href="#">Ventas</a></li>
                                <li><a href="">Contraste</a></li>
                                <li class="divider"></li>
                                <li><a href="">Totalizadores</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Errores comunes</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Configuraciones Brick </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="/Supramax/Paso6.php">Configuracion inicial</a></li>
                                                <li><a href="/Supramax/Paso7.php">Revision de bateria</a></li>
                                                <li><a href="">3</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">4</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">5</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>
</center>
</nav>
</div>




</div>
<!-- LAS IMAGENES DE DISPENSARIOS CON DIRECCION ALOS ARTICULOS -->
<div class="col-sm-6">
<div class="container-fluid bg-3 text-center">    
  <h3>Complementos del dispensario</h3><br>
  <div class="row">


<div class="container-fluid bg-3 text-center">    
  <h3>Complementos del dispensario</h3><br>
  <div class="row">

   <!-- <a href="/Supramax/Dispensario.php"><img src="/img/dispensario.png" width="150" height="150"></a>   imagenes con botton de click-->

    <div class="col-sm-3">
      <p>Bateria</p>
       <a href="/Supramax/.php"><img src="/Supramax/img/b.svg" width="50" height="100"></a> 
    </div>
    <div class="col-sm-3"> 
      <p>Chasis</p>
   <a href="/Supramax/.php"><img src="/Supramax/img/cha.svg" width="50" height="100"></a> 
    </div>
   
    <div class="col-sm-3"> 
      <p>Hidraulico Mecanico</p>
   <a href="/Supramax/.php"><img src="/Supramax/img/h.svg" width="50" height="100"></a> 
    </div>
    <div class="col-sm-3">
      <p>Gabinete</p>
   <a href="/Supramax/.php"><img src="/Supramax/img/g.svg" width="50" height="100"></a>
    </div>
     <div class="col-sm-3">
      <p>Electronico</p>
   <a href="/Supramax/.php"><img src="/Supramax/img/ele.svg" width="50" height="100"></a>
    </div>
     <div class="col-sm-3">
      <p>Consumible</p>
     <a href="/Supramax/.php"><img src="/Supramax/img/consu.svg" width="50" height="100"></a>
    </div>
     <div class="col-sm-3">
      <p>Informacion </p>
   <a href="/Supramax/info.php"><img src="/Supramax/img/na.svg" width="50" height="100"></a>
    </div>
     <div class="col-sm-3">
      <p>Tecnologias</p>
    
     <a href="/Supramax/Disponible.php"><img src="/Supramax/img/tec.svg" width="50" height="100"></a>
   
    </div>


</body>
</html>

