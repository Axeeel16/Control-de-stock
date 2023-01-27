<?php 
    include("conexion.php");
    $con=conectar();
    $sql="SELECT *  FROM componentes";  
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Control de Stock</title>
		<!--VINCULAR PUSH MIN .JS-->
		<script src="js/push.min.js"></script>
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	   <link rel="StyleSheet" type="text/css" href="css/estiloss.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.13.1/datatables.min.css"/>
 <link href="css/bootstrap.min.css" rel="stylesheet">	
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		
    </head>
    <body>
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
						<a class="nav-link" href="ImportarExcel.php">Importar</a>						
						<a class="nav-link" href="ExportarMySQLaExcel.php">Exportar</a>	
						<a class="nav-link" href="TablaInsumos.php">Insumos</a>						
						<!-- Button trigger modal -->
						<button type="button" class="btn light-bg-subtle" data-bs-toggle="modal" data-bs-target="#exampleModal">
						  Usar Componente
						</button>

					<!-- Modal -->
					<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog">
						<div class="modal-content">
						  <form class="d-flex" role="search" method="POST" action="BusquedaComponente.php">
							<input class="form-control me-2" name="Busqueda" type="search" placeholder="Usar Componente" aria-label="Search">
							<div class="d-grid gap-2 d-md-block">
							<input class="btn btn-outline-primary" type="submit" name="buscar" value="&#128269;">
							</div>
						</form>
						</div>
					  </div>
					</div>
					<!-- Modal -->
					</div>					
                </div>
            </div>
        </nav>
            <div class="container mt-5">
                <div class="row">
					<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 py-1 bg-light">
                   						 <!--PREUNTAR UNA SOLA VEZ LOS PERMISOS PARA MOSTRAR NOTIFICAICONES-->
										 <script type="text/javascript"> 
												window.onload = function(){
													Push.Permission.request();
												}
										</script>       
					<table class="table table-light table-striped table-hover mt-3" id="mitabla">
                                <thead class="" >
                                    <tr>
                                        <th>#</th>
                                        <th text-align="center">Descripcion</th>
                                        <th>Ubicacion</th>
                                        <th>Codigo</th>
                                        <th>Cantidad</th>
                                        <th colspan="">Acciones</th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>

                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['ubicacion']?></th>
                                                <th><?php  echo $row['codigo']?></th>
                                                <th><?php  echo $row['cantidad']?></th>    
                                                <th>
													<a href="validar_comp.php?valor=<?php echo $row['id'] ?>" class="">
														<i class='bi bi-eye-fill' title='Ver detalle'></i>
													</a>
												</th>
                                                <th>
													<a href="mod_com.php?valor=<?php echo $row['id'] ?>" class="">
														<i class='bi bi-pencil-fill' title='Modificar'></i>
													</a>
												</th>                                        
                                            </tr>
                                        <?php  
										if($row['cantidad']>=3 && $row['cantidad']<=5)
												{
													?>
													<script>
													Push.create("¡Poco stock del Componente <?php echo $row['codigo']?>!",{
														body: "!Actualmente tienen en stock <?php echo $row['cantidad']?>!",
														icon:'imagenes/Warning/warningMedio.png',
														timeout:30000,
														vibrate:[100,100,100],
														onClick:function(){
															//window.focus();
															this.close();
														}
													});
													</script>
													<?php 
												}

												if($row['cantidad']>=0 && $row['cantidad']<=2)
													{
														?>
														<script>
																Push.create("¡Poco stock del Componente <?php echo $row['codigo']?>!",{
																body: "!Actualmente tienen en stock <?php echo $row['cantidad']?>!",
																icon:'imagenes/Warning/warningRojo.png',
																timeout:30000,
																onClick:function()
																	{
																		window.location="validar_comp.php?valor=<?php echo $row['id']?>";
																		this.close();
																	}
																});
														</script>
														<?php 
													}
										
                                            }
                                        ?>
                                </tbody>
                            </table>
                    </div> 
				</div>  
            </div>
			<script src="confirmacion.js"></script>
			        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

            <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script> 
            <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.13.1/datatables.min.js"></script>
            <script>
                $(document).ready(function() {
                    $('#mitabla').DataTable( {
                        language: {
                            url: 'https://cdn.datatables.net/plug-ins/1.13.1/i18n/es-ES.json'
                        }
                    } );
                } );
            </script>
    </body>
</html>