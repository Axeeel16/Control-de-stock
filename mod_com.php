<?php
session_start();//Inicio de sesion
error_reporting(E_ALL^E_NOTICE);


$id=$_GET['valor'];
$ID_auxiliar=$_GET['valor'];
		//$apellido=$_SESSION['apellido'];//Carga los datos del usuario obtenidos de la base de datos

    $consulta="SELECT * FROM componentes where id='$id'"; //selecciona el id_usuario de la base de datos y crea una consulta
	$msql= mysqli_connect("localhost", "root", "","stocknexolibre"); 

	$resultado=mysqli_query($msql, $consulta);
	
	$filas=mysqli_num_rows($resultado);
    $matriz=mysqli_fetch_array($resultado); //convierte el resultado en una matriz y genera una tabla
  
  
  $id=$matriz['id'];
  $nombre=$matriz['nombre'];
  $ubicacion=$matriz['ubicacion'];
  $codigo=$matriz['codigo'];
  $cantidad=$matriz['cantidad'];
 
?>
<html>
	<head>
		<title>Modificacion del Componente</title>
		<meta charset="UTF-8">    
		<link rel="StyleSheet" type="text/css" href="css/estiloss.css">
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	<head>
		<body>
		    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
			<script src="js/bootstrap.min.js"></script>
			
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
				<a class="navbar-brand" href="#">
					<img src="imagenes/nexo1.jpg" class="rounded mx-auto d-block" alt="Logotipo del local" width="40" height="24">
				</a> 
				<a class="navbar-brand" href="#">Nexo Libre</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
						<a class="nav-link" href="index.php">Principal</a>
                    </div>
                </div>
            </div>
        </nav>
		
			<div class="cont_gen">	
					<form class="formu_log" action='modificar_comp_funcion.php' method='POST'>
					 <h3 class="titu_form_login mb-5">Datos del Componente</h3>
							<div class="form-floating mb-3">
							  <input type="text" name="ID" class="form-control" disabled="" id="floatingInput" placeholder="" value='<?php echo $id?>'>
								<input type="hidden" name="idOculto" class="form-control" id="floatingInput" placeholder="" value='<?php echo $ID_auxiliar?>'>
							  <label for="floatingInput" class="label">#</label>
							</div>
							<div class="form-floating mb-3">
							  <input type="text" name="nombre" class="form-control" id="floatingInput" placeholder="name@example.com" value='<?php echo $nombre?>'>
							  <label for="floatingInput" class="label">Nombre</label>
							</div>
							<div class="form-floating mb-3">
							  <input type="text" name="ubicacion" class="form-control" id="floatingInput" placeholder="name@example.com" value='<?php echo $ubicacion?>'>
							  <label for="floatingInput" class="label">Ubicacion</label>
							</div>
							<div class="form-floating mb-3">
							  <input type="text" name="codigo" class="form-control" disabled=""id="floatingInput" placeholder="name@example.com" value='<?php echo $codigo?>'>
							  <label for="floatingInput" class="label">Codigo</label>
							</div>
							<div class="form-floating mb-3">
							  <input type="text" name="cantidad" class="form-control" id="floatingInput" placeholder="name@example.com" value='<?php echo $cantidad?>'>
							  <label for="floatingInput" class="label">Cantidad</label>
							</div>
							
							<div class="d-grid gap-2 col-6 mx-auto">
								<button type="submit" class="btn btn-OUTLINE-Primary">Enviar</button>
							</div>
					</form>
					

			</div>
		</body>
</html>