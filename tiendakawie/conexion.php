<?php
function conectar(){

$user="root";
$pass="";
$server="localhost";
$db="index.php";
$con=mysql_conncert($server,$user,$pass) or die ("Error al conectar a la base de datos".mysql_error());
mysql_select_db($db,$con);

return $con;

}


?>