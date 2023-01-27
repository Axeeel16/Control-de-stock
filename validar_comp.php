<?php
session_start();
 //error_reporting(E_ALL^E_NOTICE);
 $id=$_GET['valor'];

		//conectar con la base de datos
	  $mysql= new mysqli("localhost", "root", "","stocknexolibre");
	if($mysql->connect_error)
	die("Error de conexión");
	//consulta para productos

	$consulta="SELECT * FROM componentes WHERE id='$id'";
	$resultado=mysqli_query($mysql, $consulta);

			$filas=mysqli_num_rows($resultado);
					 //$sql = "select usuarios.nombre, logineventos.Fecha_Acceso from usuarios inner join logineventos on\n"."logineventos.DNI_Accedido=usuarios.dni";
	
	if($filas>0)
	{
	 while($reg = mysqli_fetch_array($resultado))
		{
			$_SESSION['id']=$reg['id'];//con la variable creo la variable de session
			$_SESSION['nombre']=$reg['nombre'];
			$_SESSION['ubicacion']=$reg['ubicacion'];
			$_SESSION['codigo']=$reg['codigo'];
			$_SESSION['cantidad']=$reg['cantidad'];
			$_SESSION['imagen']=$reg['imagen'];
		}
	 header("location:vista_detalle_comp.php");
	}
	else {?>
			<script language='javascript'>
				alert('Oh no, ha currio un error.');
				location.href='principal.html';
			</script>
					<?php
			/*header("location:form_login.html");*/
		}
?>