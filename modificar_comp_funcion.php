<?php
session_start();
include 'db.php'; //enlaza al archivo db.php
error_reporting(E_ALL^E_NOTICE);
	//$_SESSION['dni']=$DNI;     	location.href='bienvenido.php';     location.href='mod_usuar.php';			 location.href='bienvenido.php';

	 //$id=$_POST['ID']; //guarda una variable.					 id_usuario='id_usuario',
	 
	$idOculto=$_POST['idOculto'];
	$nombre=$_POST['nombre'];
	$ubicacion=$_POST['ubicacion'];
	//$codigo=$_POST['codigo'];
	$cantidad=$_POST['cantidad'];
	 
	modificar($nombre, $ubicacion, $cantidad, $idOculto);
 ?>
