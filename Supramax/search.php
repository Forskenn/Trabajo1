<?php 
if(!isset($_POST['search'])) exit('No se recibió el valor a buscar');
require_once 'conexion.php';
function search()
{
  $mysqli = getConnexion();
  $search = $mysqli->real_escape_string($_POST['search']);
  $query = "SELECT * FROM buscar WHERE descripcion LIKE '%$search%' ORDER BY descripcion ";
  $res = $mysqli->query($query);
  while ($row = $res->fetch_array(MYSQLI_ASSOC)) {
    echo  "<p><a  href='$row[url]' target=''>$row[descripcion]</a></p>";
  }
}
search();