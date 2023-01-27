<?php
require 'vendor/autoload.php';
require 'conexion.php';

use PhpOffice\PhpSpreadsheet\SpreadSheet;
use \PhpOffice\PhpSpreadsheet\IOFactory;

	$sql = "select * from componentes";
	$resultado = $mysqli->query($sql);

	$excel = new SpreadSheet();
	$hojaActiva = $excel->getActiveSheet();
	$hojaActiva->setTitle("Componentes");

	//$hojaActiva->getColumnDimension('A')->setWidth(10);
	$hojaActiva->setCellValue('A1', 'ID');
	$hojaActiva->setCellValue('B1', 'NOMBRE');
	$hojaActiva->setCellValue('C1', 'UBICACION');
	$hojaActiva->setCellValue('D1', 'CODIGO');
	$hojaActiva->setCellValue('E1', 'CANTIDAD');

	$fila =2;

	while($rows = $resultado->fetch_assoc()){
		$hojaActiva->setCellValue('A'.$fila, $rows['id']);
		$hojaActiva->setCellValue('B'.$fila, $rows['nombre']);
		$hojaActiva->setCellValue('C'.$fila, $rows['ubicacion']);
		$hojaActiva->setCellValue('D'.$fila, $rows['codigo']);
		$hojaActiva->setCellValue('E'.$fila, $rows['cantidad']);
		$fila++;
	}

	header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	header('Content-Disposition: attachment;filename="componentes.xlsx"');
	header('Cache-Control: max-age=0');

	$writer = IOFactory::createWriter($excel, 'Xlsx');
	$writer->save('php://output');
	exit;
?>