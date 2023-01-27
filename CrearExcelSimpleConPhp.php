<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\SpreadSheet;
//use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use \PhpOffice\PhpSpreadsheet\IOFactory;

$spreadsheet = new SpreadSheet();
$spreadsheet->getProperties()->setCreator("Axel Garita")->setTitle("My Excel");

$spreadsheet->setActiveSheetIndex(0);
$hojaActiva = $spreadsheet->getActiveSheet();

$hojaActiva->setCellValue('A1', 'CODIGO');
$hojaActiva->setCellValue('B2', 12345.4321 );

$hojaActiva->setCellValue('C1', 'Axel Garita')->setCellValue('D1','CDP');

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="componentes.xlsx"');
header('Cache-Control: max-age=0');

$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
$writer->save('php://output');

/*
$writer = new Xlsx($spreadsheet);
$writer->save(".xlsx");*/
?>