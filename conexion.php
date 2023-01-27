<?php
function conectar(){
    $host="localhost";
    $user="root";
    $pass="";

    $bd="stocknexolibre";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}

$mysqli = new mysqli('localhost', 'root', '', 'stocknexolibre');

if($mysqli->connect_errno){
	echo'Error de Conexion.' . $mysqli->conect_error;
	die();
}
?>