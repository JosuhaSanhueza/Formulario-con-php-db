<?php
include_once('connect_db.php');
$user=$_POST['user'];
$password=$_POST['password'];
echo "los datos ingresados son: <br>";
echo "$user,$password <br>";
echo "gracias por tus datos ;) <br>";

$connect=conn(); // ejecuta la conexion a la bd
$sql="INSERT INTO login(user, password)
Values('$user', '$password')";
$resul= mysqli_query($connect, $sql)or trigger_error("Query Failed! SQL-Error: ".mysqli_error($connect), E_USER_ERROR);
echo "$sql";
?>