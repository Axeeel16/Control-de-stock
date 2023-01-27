<?php
	session_start();//Inicio de sesion
	include 'db.php';
	error_reporting(E_ALL^E_NOTICE);
	$nombre=$_SESSION['nombre']; // Carga los datos del usuario 
	$ubicacion=$_SESSION['ubicacion'];
	$codigo=$_SESSION['codigo'];
	$cantidad=$_SESSION['cantidad'];
	$imagen=$_SESSION['imagen'];
?>
<html>
	<head>
		<title>Ver detalle del componente</title>
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
			<div class="container">	

			
		<form action='index.php' method='POST' class='formu_log'>
					<?php
					foto($imagen);
					?>
					 <!--<div>
						<img src="imagenes/pizza.webp" class="rounded mx-auto mb-4 d-block" width="100%" alt="Imagen pantalla principal">
					 </div> -->
					 <h4 class="titu_form_login mb-5"><?php echo $nombre?></h4>	
							<div class="form-floating mb-3">
							  <input type="text" name="cod" class="form-control" id="floatingInput" disabled="" value='<?php echo $ubicacion?>'>
							  <label for="floatingInput" class="label">Ubicacion</label>
							</div>
							<div class="form-floating mb-3">
							  <input type="text" name="cod" class="form-control" id="floatingInput" disabled="" value='<?php echo $codigo?>'>
							  <label for="floatingInput" class="label">Codigo</label>
							</div>
							<div class="form-floating mb-3">
							  <input type="text" name="cod" class="form-control" id="floatingInput" disabled="" value='<?php echo $cantidad?>'>
							  <label for="floatingInput" class="label">Cantidad</label>
							</div>
									<div class="d-grid gap-2 col-6 mx-auto">
										<input type="submit" name="enviar" class="btn btn-outline-Primary" value="Volver"></input>
									</div>
		</form>

				
<?php
 //error_reporting(0); //E_ALL^E_NOTICE
 error_reporting(0);//desactiva todos los reportes de errores
    if($_POST['enviar']!=""){ //si el boton no está vacio, se hace lo siguiente
    $msql= new mysqli("localhost", "root", "","rotiseria");
    if($msql->connect_error)
		 die("Error de conexión");
	 
		$msql->query("insert into pedidos(nombre,cantidad,precio,dir)values('$nombre','$_POST[cantidad]','$precio','$dir')")
		or die($msql->error);

		?>
		<script language='javascript'>
			alert('El pedido se ha realizado correctamente.');
			location.href='pedido.php';
		</script>
		<?php 
		$msql->close();
	}/*else{
		echo"error";
	}*/
?>

		
				<footer>
		   <div class="container-fluid">
			<div class="row p-5 pb-2 bg-light text-black">
				<div class="col-xs-12 col-md-6 col-lg-3">
					<p class="h3">Codigo AV</p>
					<p class="text-secondary">Argentina, Buenos Aires</p>
				</div>
				<div class="col-xs-12 col-md-6 col-lg-3">
					<p class="h5 mb-3">Codigos</p>
					<div class="mb-2">
						<a class="text-secondary text-decoration-none" href="#">html</a>
					</div>
					<div class="mb-2">
						<a class="text-secondary text-decoration-none" href="#">css</a>
					</div>
					<div class="mb-2">
						<a class="text-secondary text-decoration-none" href="#">php</a>
					</div>
					<div class="mb-2">
						<a class="text-secondary text-decoration-none" href="#">JavaScript</a>
					</div>
				</div>
				<div class="col-xs-12 col-md-6 col-lg-3">
					<p class="h5 mb-3">Links</p>
					<div class="mb-2">
						<a class="text-secondary text-decoration-none" href="#">Torms & conditions</a>
					</div>
					<div class="mb-2">
						<a class="text-secondary text-decoration-none" href="#">Privacy Policy</a>
					</div>
				</div>
				<div class="col-xs-12 col-md-6 col-lg-3">
					<p class="h5 mb-3">Contactos</p>
					<div class="mb-2">
						<a class="text-secondary text-decoration-none" href="#">Instagram</a>
					</div>
					<div class="mb-2">
						<a class="text-secondary text-decoration-none" href="#">Facebook</a>
					</div>
					<div class="mb-2">
								<a class="text-secondary text-decoration-none" href="#">Youtube</a>
							</div>
							<div class="mb-2">
								<a class="text-secondary text-decoration-none" href="#">Twitter</a>
							</div>
				</div>
				<div class="col-xs-12 pt-4">
					<p class="text-secondary text-center">Copyright - All rights reserved &copy; 2022</p>
				</div>
				
			</div>
		
		</div>
	</footer>
			</div>
		</body>
</html>