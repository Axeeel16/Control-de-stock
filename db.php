<?php
function mostrar_tabla_productos_con_paginacion(){

 $Enlace=new mysqli("localhost","root","","stocknexolibre");
 
 $registro = $Enlace->query("Select * from componentes")
				or die ($Enlace->error);

// maximo por pagina
$limit = 7;

// pagina pedida


if (isset($_GET["pag"])) {
$pag = (int) $_GET["pag"];
} else {
$pag= "";
}
if ($pag < 1)
{
   $pag = 1;
}
$offset = ($pag-1) * $limit;


$sql = "SELECT SQL_CALC_FOUND_ROWS * FROM componentes LIMIT $offset, $limit";
$sqlTotal = "SELECT FOUND_ROWS() as total";

$resultado= mysqli_query($Enlace,$sql);
$rsTotal = mysqli_query($Enlace,$sqlTotal);

$rowTotal = mysqli_fetch_assoc($rsTotal);
// Total de registros sin limit
$total = $rowTotal["total"];

?>

<?php
 
echo "<div class='col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 py-1 bg-light'>";
echo "<table class='table table-light table-striped table-hover' id='mitabla'> 
<thead>       
          <th>#</th>
		  <th>Descripcion</th>
		  <th>Ubicacion</th>
		  <th>Codigo</th>
		  <th>Cantidad</th>
		  <th colspan='3'>Acciones</th>
 </thead>     

        <tbody>";

while ($fila=mysqli_fetch_assoc($resultado)){ 
  // <link rel='stylesheet' href='css/estilos1.css'/> 		colspan='5'   																		 <img width='23px' src='imagenes/carrito.jpg' title='Vista'>
														

	$id=$fila['id']; 
	$nombre=$fila['nombre']; 
	$ubicacion=$fila['ubicacion']; 
	$codigo=$fila['codigo']; 
	$cantidad=$fila['cantidad']; 

   


  echo "<tr>
           <td>$id</td>
           <td>$nombre</td>
           <td>$ubicacion</td>
           <td>$codigo</td>     
           <td>$cantidad</td>     
         
          
			<td> 
				<div  class='' align='center'>
<!--VER A DETALLE-->		<a href='validar_comp.php?valor=$id' class='' >
						<i class='bi bi-eye-fill' title='Ver detalle'></i>
					</a>
				</div>
			</td>
			<td>
				<div  class='' align='center'>
<!--MODIFICAR-->		<a href='mod_com.php?valor=$id' class='' >
						<i class='bi bi-pencil-fill' title='Modificar'></i>
					</a>
				</div>
			</td>
			<td>
				<div  class='' align='center'>
<!--ELIMINAR-->			<a href='eliminar_comp.php?valor=$id' class='eliminar_registro'>
						<i class='bi bi-trash-fill' title='Eliminar'></i>
					</a>
				</div>
			</td>
        </tr>";
}
echo "</tbody>  ";
?>

   </table>

	
</div>
<br>
	<div class="hola">
		<nav aria-label="Page navigation example">
		  <ul class="pagination ">
			<?php
			  
				 $totalPag = ceil($total/$limit);
				 $links = array();
				 for( $i=1; $i<=$totalPag ; $i++)
				 {
					$links[] = "<li class='page-item'><a href=\"?pag=$i\" class='page-link'>$i</a></li>";
				 }
				 echo implode("", $links);
			  ?>
		  </ul>
		</nav>
	</div>
   <?php
}

/*////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////									FUNCION MOSTRAR FOTO														//////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////*/
function foto($imagen){			//

?>
<div class="">
<img src="imagenes/<?php echo $imagen;?>" class="rounded mx-auto mb-4 d-block" width="100%" height="200px">
</div>
<?php
}








/*////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////									FUNCION MOSTRAR FOTO														//////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////*/

function modificar($nombre, $ubicacion, $cantidad, $idOculto){

	$consulta="UPDATE componentes SET id='$idOculto', nombre='$nombre', ubicacion='$ubicacion', cantidad='$cantidad' WHERE id= '$idOculto'"; 
	$msql=mysqli_connect("localhost", "root", "","stocknexolibre"); 
	$R= mysqli_query($msql, $consulta);
	if($R){
	  ?>
	  <script language='javascript'>
		  alert('La consulta se ejecuto correctamente');
		  location.href='index.php';
	  </script>
	  <?php
	}
	  else{
		?>
		<script language='javascript'>
			alert('No se pudo modificar el componente');
			location.href='index.php';
		</script>
		<?php
	  }?>
	  <?php
}







/*////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////									INICIO DE ADMINISTRADOR														//////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////*/

function mostrar_tabla_productos_con_paginacion_admin(){

 $Enlace=new mysqli("localhost","root","","rotiseria");
 
 $registro = $Enlace->query("Select * from productos")
				or die ($Enlace->error);

// maximo por pagina
$limit = 4;

// pagina pedida


if (isset($_GET["pag"])) {
$pag = (int) $_GET["pag"];
} else {
$pag= "";
}
if ($pag < 1)
{
   $pag = 1;
}
$offset = ($pag-1) * $limit;


$sql = "SELECT SQL_CALC_FOUND_ROWS * FROM productos LIMIT $offset, $limit";
$sqlTotal = "SELECT FOUND_ROWS() as total";

$resultado= mysqli_query($Enlace,$sql);
$rsTotal = mysqli_query($Enlace,$sqlTotal);

$rowTotal = mysqli_fetch_assoc($rsTotal);
// Total de registros sin limit
$total = $rowTotal["total"];

?>

<?php
 
//echo "<div class='col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 py-1 bg-light'>";
echo "<table class='table table-dark table-striped table-hover'> 
<thead>       
          <th>#</th>
		  <th>Nombre</th>
		  <th>Descripcion</th>
		  <th>Precio</th>
		  <th>Imagen</th>
		  <th>Acciones</th>
 </thead>     

        <tbody>";

while ($fila=mysqli_fetch_assoc($resultado)){ 
  // <link rel='stylesheet' href='css/estilos1.css'/> 		colspan='5'   																		 <img width='23px' src='imagenes/carrito.jpg' title='Vista'>
														

	$id_producto=$fila['id_producto']; 
	$nombre=$fila['nombre']; 
	$descripcion=$fila['descripcion']; 
	$precio=$fila['precio'];
	$imagen=$fila['imagen'];
   


  echo "<tr>
           <td>$id_producto</td>
           <td>$nombre</td>
           <td>$descripcion</td>
           <td>$precio</td>
           <td>$imagen</td>
         
          
           <td> 
				<div  class='' align='center'>
					<a href='insertar_foto.php?valor=$id_producto' class='' >
						<img width='18px' src='imagenes/usuario.png' title='Foto de Perfil'>
					</a>
				</div>
			</td>
			
        </tr>";
}
echo "</tbody>  ";
?>

   </table>
</div>
<br><br><br><br>
	<div class="hola"><br>
		<nav aria-label="Page navigation example">
		  <ul class="pagination ">
			<?php
			  
				 $totalPag = ceil($total/$limit);
				 $links = array();
				 for( $i=1; $i<=$totalPag ; $i++)
				 {
					$links[] = "<li class='page-item'> <a href=\"?pag=$i\" class='page-link'>$i</a></li>";
				 }
				 echo implode("", $links);
			  ?>
		  </ul>
		</nav>
	</div>
   <?php
}










function mostrar_tabla_pedidos_con_paginacion_sup(){

 $Enlace=new mysqli("localhost","root","","rotiseria");
 
 $registro = $Enlace->query("Select * from pedidos")
				or die ($Enlace->error);

// maximo por pagina
$limit = 4;

// pagina pedida


if (isset($_GET["pag"])) {
$pag = (int) $_GET["pag"];
} else {
$pag= "";
}
if ($pag < 1)
{
   $pag = 1;
}
$offset = ($pag-1) * $limit;


$sql = "SELECT SQL_CALC_FOUND_ROWS * FROM pedidos LIMIT $offset, $limit";
$sqlTotal = "SELECT FOUND_ROWS() as total";

$resultado= mysqli_query($Enlace,$sql);
$rsTotal = mysqli_query($Enlace,$sqlTotal);

$rowTotal = mysqli_fetch_assoc($rsTotal);
// Total de registros sin limit
$total = $rowTotal["total"];

?>

<?php
 
//echo "<div class='col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 py-1 bg-light'>";
echo "<table class='table table-dark table-striped table-hover'> 
<thead>       
          <th>#</th>
		  <th>Nombre</th>
		  <th>Cantidad</th>
		  <th>Precio</th>
		  <th>Direccion</th>
 </thead>     

        <tbody>";

while ($fila=mysqli_fetch_assoc($resultado)){ 
  // <link rel='stylesheet' href='css/estilos1.css'/> 		colspan='5'   																		 <img width='23px' src='imagenes/carrito.jpg' title='Vista'>
														

	$id=$fila['id_pedido']; 
	$nombre=$fila['nombre']; 
	$cantidad=$fila['cantidad']; 
	$precio=$fila['precio'];
	$direccion=$fila['dir'];
   


  echo "<tr>
           <td>$id</td>
           <td>$nombre</td>
           <td>$cantidad</td>
           <td>$precio</td>
           <td>$direccion</td>
        </tr>";
}
echo "</tbody>  ";
?>

   </table>
</div>
<br><br><br><br>
	<div class="hola"><br>
		<nav aria-label="Page navigation example">
		  <ul class="pagination ">
			<?php
			  
				 $totalPag = ceil($total/$limit);
				 $links = array();
				 for( $i=1; $i<=$totalPag ; $i++)
				 {
					$links[] = "<li class='page-item'> <a href=\"?pag=$i\" class='page-link'>$i</a></li>";
				 }
				 echo implode("", $links);
			  ?>
		  </ul>
		</nav>
	</div>
   <?php
}