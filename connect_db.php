<?php
//configuracion
function conn(){
$hostname = "localhost";
$userdb = "root";
$passworddb = "";
$dbname = "login";

//Generar la conexion con el servidor
$connect = mysqli_connect($hostname, $userdb, $passworddb, $dbname);
return $connect;
}
?>