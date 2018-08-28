<?php

if(isset($_GET['cerrar'])) {

  //Vaciamos y destruimos las variables de sesión
  $_SESSION['correo'] = NULL;
  $_SESSION['password'] = NULL;
  unset($_SESSION['correo']);
  unset($_SESSION['password']);

  //Redireccionamos a la pagina index.php
  header('Location: index.php');
}

?>