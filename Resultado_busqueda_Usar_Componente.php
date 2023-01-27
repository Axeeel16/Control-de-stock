<html>
<head>
	<title>Tabla</title>
	       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<meta charset="UTF-8">
	<link rel="StyleSheet" type="text/css" href="CSS/estilo.css">
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
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
					<div class="mx-auto">
                        <a class="nav-link" href="principal.php">Principal</a>
                    </div>
					<div class="mx-auto">
                        <a class="nav-link" href="CodigoBarras/views/index.php">Generar Cod de Barras</a>
                    </div>
                </div>
            </div>
        </nav>
<div class="container">
<?php
session_start();
 error_reporting(E_ALL^E_NOTICE);
  
 
 
 if($_POST['buscar']!="")
	{
		$buscar = $_POST["Busqueda"];

		 $consulta = ("SELECT * FROM componentes WHERE codigo='$buscar'");
		  $mysql= new mysqli("localhost", "root", "","prueba");
		if($mysql->connect_error)
		die("Error de conexión");
		$resultado=mysqli_query($mysql, $consulta);
			$filas=mysqli_num_rows($resultado);
			
			if($buscar=="")
			{?>
				<br><br><br><br><br>
				<div class="alert alert-danger w-70px" role="alert">
					No ha ingresado una Descripcion o Codigo del componente a buscar.
				</div><?php
				//header("location:bienvenido.php");
			}else if($filas>=1)
				{
					$mysql->query("UPDATE `componentes` SET `cantidad` =(`cantidad`-1) WHERE `componentes`.`codigo` = $buscar")
						or die($mysql->error);

					?>
					<script language='javascript'>
						alert('¡Un componenete usado!');
						location.href='principal.php';
					</script>
					<?php
					
					
				}else if($filas==0)
					{?>
						<br><br><br><br><br>
						<div class="alert alert-danger" role="alert">
							No existe el componente solicitado.
						</div><?php
							 //header("location:bienvenido.php");
					}
	} 
?>
</div>
<script src="confirmacion.js"></script>
</body>
</html>