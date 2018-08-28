<!DOCTYPE html>
<html lang="en">
<head>
  <title>SUPRAMAX</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<body>
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
      <li><a href="/Supramax/login.php" style="float:right; " > <span class="glyphicon glyphicon-log-in"> </span> Login </a></li>

  </div>

  <img src="/Supramax/img/Supramax.png"  style="width:20%">
</nav>


<style> 
input[type=text] {

    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}
  /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
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

<center> 
<h3>Busqueda avanzada</h3><br>
 <input type="text" id="bus" name="bus" onkeyup="loadXMLDoc()" required />

<div id="myDiv"></div>

</center>



<div class="container-fluid bg-3 text-center">    
  <h3>Servicios</h3><br>
  <div class="row">

   <!-- <a href="/Supramax/Dispensario.php"><img src="/img/dispensario.png" width="150" height="150"></a>   imagenes con botton de click-->

    <div class="col-sm-3">
      <p>Dispensarios</p>
       <a href="/Supramax/Dispensario.php"><img src="/Supramax/img/dispensario.png" width="150" height="200"></a> 
    </div>
    <div class="col-sm-3"> 
      <p>Redes</p>
   <a href="/Supramax/Redes.php"><img src="/Supramax/img/dispensario.png" width="150" height="200"></a> 
    </div>
   
    <div class="col-sm-3"> 
      <p>Tothem</p>
   <a href="/Supramax/Tothem.php"><img src="/Supramax/img/dispensario.png" width="150" height="200"></a> 
    </div>
    <div class="col-sm-3">
      <p>Servicio</p>
   <a href="/Supramax/Servicio.php"><img src="/Supramax/img/dispensario.png" width="150" height="200"></a>
    </div>
     <div class="col-sm-3">
      <p>Disponible</p>
   <a href="/Supramax/Disponible.php"><img src="/Supramax/img/dispensario.png" width="150" height="200"></a>
    </div>
     <div class="col-sm-3">
      <p>Disponible</p>
     <a href="/Supramax/Disponible.php"><img src="/Supramax/img/dispensario.png" width="150" height="200"></a>
    </div>
     <div class="col-sm-3">
      <p>Disponible</p>
   <a href="/Supramax/Disponible.php"><img src="/Supramax/img/dispensario.png" width="150" height="200"></a>
    </div>
     <div class="col-sm-3">
      <p>Disponible</p>
     <a href="/Supramax/Disponible.php"><img src="/Supramax/img/dispensario.png" width="150" height="200"></a>
    </div>
  
</div><br>

<footer class="container-fluid text-center" style="background-color: rgba(204, 0, 0,0.9);color: white;">
  <p>Gracias por tu preferencia</p>
</footer>

<!-- AQUI SE ENCUENTRA LA FUNCCION Y EL BOTON DE BUSQUEDA-->

<script type="text/javascript" src="ajax.js"></script>
<link rel="stylesheet" type="text/css" href="estilos.css" />


<script >
    
    function loadXMLDoc()
{
var xmlhttp;

var n=document.getElementById('bus').value;

if(n==''){
document.getElementById("myDiv").innerHTML="";
return;
}

if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("POST","pro.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("q="+n);
}

</script>
