<?php
		session_start();
		 error_reporting(E_ALL^E_NOTICE);
		 
		 $id=$_GET['valor'];

			  $msql= new mysqli("localhost", "root", "","prueba");
			  if($msql->connect_error)
				 die("Error de conexión");
				
				$consulta=("delete from componentes where id='$id'");
			
				$ejecutar=mysqli_query($msql,$consulta);
				
				if($ejecutar){
					header("Location:principal.php");
				}else{
					echo "No se pudo eliminar el registro";
					header("Location:principal.php");
				}
				
				$msql->close();
?>