<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_CORREO', 'root');
define('DB_PASSWORD', '1234');
define('DB_NAME', 'Soporte');
 
/* Attempt to connect to MySQL database */
$mysqli = new mysqli(DB_SERVER, DB_CORREO, DB_PASSWORD, DB_NAME);
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
?>


