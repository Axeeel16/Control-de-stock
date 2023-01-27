<?php
require 'vendor/autoload.php';
require 'conexion.php';


use \PhpOffice\PhpSpreadsheet\IOFactory;
use \PhpOffice\PhpSpreadsheet\Cell\Coordinate;

$nombreArchivo = 'STOCK NEXO.xlsx';
$documento = IOFactory::load($nombreArchivo);
$totalHojas = $documento->getSheetCount();
 
for($indiceHoja = 0; $indiceHoja < $totalHojas; $indiceHoja++){
	$hojaActual = $documento->getSheet($indiceHoja);
}
$numeroFilas = $hojaActual->getHighestDataRow();
$letra = $hojaActual->getHighestColumn();

$numeroLetra = Coordinate::columnIndexFromString($letra);

for($indiceFila= 2; $indiceFila<=$numeroFilas; $indiceFila++)
{
		$valorA = $hojaActual->getCellByColumnAndRow(1, $indiceFila);
		$valorB = $hojaActual->getCellByColumnAndRow(2, $indiceFila);
		$valorC = $hojaActual->getCellByColumnAndRow(3, $indiceFila);
		$valorD = $hojaActual->getCellByColumnAndRow(4, $indiceFila);
		$valorE = $hojaActual->getCellByColumnAndRow(5, $indiceFila);
		$valorF = $hojaActual->getCellByColumnAndRow(6, $indiceFila);
		$valorG = $hojaActual->getCellByColumnAndRow(7, $indiceFila);
		$valorH = $hojaActual->getCellByColumnAndRow(8, $indiceFila);
		$valorI = $hojaActual->getCellByColumnAndRow(9, $indiceFila);
		$valorJ = $hojaActual->getCellByColumnAndRow(10, $indiceFila);
		
		$sql = "INSERT INTO codigobarras (codigo, categoria, detalle, envase, cantidad, precio, tasa_iva, iva, importe_final, total) 
		VALUES('$valorA', '$valorB', '$valorC', '$valorD', '$valorE', '$valorF', '$valorG', '$valorH', '$valorI', '$valorJ')";
		$mysqli->query($sql);
}
?>
		<script language='javascript'>
			alert('La importacion se realizo correctamente.');
			location.href='index.php';
		</script>
<?php
?>