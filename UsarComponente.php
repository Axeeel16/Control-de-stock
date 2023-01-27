<?php
	session_start();
	include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Usar Componente</title>
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
		<link rel="StyleSheet" type="text/css" href="css/estiloss.css">
	    <link href="css/bootstrap.min.css" rel="stylesheet">	
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		
  </head>
    <body>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
			<script src="js/bootstrap.min.js"></script>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
				<a class="navbar-brand" href="http://www.nexolibre.com/index.php">
					<img src="imagenes/nexooo.jpg" class="rounded mx-auto d-block" alt="Logotipo del local" width="40" height="24">
				</a> 
				<a class="navbar-brand" href="http://www.nexolibre.com/index.php">Nexo Libre</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
						<a class="nav-link" href="principal.php">Principal</a>
						<form class="d-flex" role="search" method="POST" action="">
							
						</form>
                    </div>
                </div>
            </div>
        </nav>
		<?php
error_reporting(E_ALL^E_NOTICE);

/*
		$id_cliente=$_SESSION['id_cliente'];//Carga los datos del usuario obtenidos de la base de datos

    $consulta="SELECT * FROM clientes where id_cliente =  '$id_cliente'"; //selecciona el id_usuario de la base de datos y crea una consulta
	$msql= mysqli_connect("localhost", "root", "","rotiseria"); 

	$resultado=mysqli_query($msql, $consulta);
	
	$filas=mysqli_num_rows($resultado);
    $matriz=mysqli_fetch_array($resultado); //convierte el resultado en una matriz y genera una tabla
  
  
  $id=$matriz['id_cliente'];
  $usuario=$matriz['usuario'];
  $pass=$matriz['pass'];
  $dir=$matriz['dir'];
 */ 
?>	
        <div class="container my-3">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 py-4 bg-none">		<?php
		 error_reporting(E_ALL^E_NOTICE);
			// parametros: host,user,password,database
			  $msql= new mysqli("localhost", "root", "","prueba");
			if($msql->connect_error)
			die("Error de conexión");

			$registro = $msql->query("Select * from componentes")
				or die ($msql->error);
?> 	
			
 <form action='Resultado_busqueda_Usar_Componente.php' method='POST' class='formu_log'>
					
					 <!--<div>
						<img src="imagenes/pizza.webp" class="rounded mx-auto mb-4 d-block" width="100%" alt="Imagen pantalla principal">
					 </div> -->
					 <h4 class="titu_form_login mb-5">Usar Componente</h4>	
							<input class="form-control me-2" name="Busqueda" type="search" placeholder="Codigo de Barras" aria-label="Search">
							<div class="d-grid gap-2 mx-auto mt-4">
							<input class="btn btn-outline-primary" type="submit" name="buscar" value="Enviar">
							</div>
		</form>                
  <!--<table class="table table-dark table-striped">		table table-striped
                        <thead>
                            <tr>
                                <th class="centrado">#</th>
                                <th class="centrado">Lenguaje</th>
                                <th class="centrado">Cantidad de programadores</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="centrado">1</td>
                                <td class="centrado">JavaScript</td>
                                <td class="centrado">21</td>
                            </tr>
                            <tr>
                                <td class="centrado">2</td>
                                <td class="centrado">Python</td>
                                <td class="centrado">110</td>
                            </tr>
                            <tr>
                                <td class="centrado">3</td>
                                <td class="centrado">C#</td>
                                <td class="centrado">45</td>
                            </tr>
                            <tr>
                                <td class="centrado">4</td>
                                <td class="centrado">Ruby</td>
                                <td class="centrado">31</td>
                            </tr>
                        </tbody>
                    </table>-->
                </div>
            </div>
        </div>
			<script src="confirmacion.js"></script>
        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	</body>
</html>