<?php
require_once('PHPExcel/Classes/PHPExcel.php');	
ini_set('memory_limit', '2000M'); //for 2GB
 
//For no limits
ini_set('memory_limit', -1);
 
//Usage:
convertXLStoCSV('input.xlsx','output.csv');
 
function convertXLStoCSV($infile,$outfile)
{
    $fileType = PHPExcel_IOFactory::identify($infile);
    $objReader = PHPExcel_IOFactory::createReader($fileType);
 
    $objReader->setReadDataOnly(true);   
    $objPHPExcel = $objReader->load($infile);    
 
    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'CSV');
    $objWriter->save($outfile);
}
 
?>