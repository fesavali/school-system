<?php

if(isset($_REQUEST['sub']))
{


 include 'Excel/reader.php';    // here add Excel reader file
 
 $excel = new PhpExcelReader;

 $fl=$_FILES['fl']['name'];

 $excel->read($fl);



 function sheetData($sheet) {

 $conn=new mysqli("localhost","root","","user-accounts");



 $x = 1;
 while($x <= $sheet['numRows']) {

 $sq="insert into Details(Dname,Email_Id,DOB) values('".$sheet['cells'][$x][2]."','".$sheet['cells'][$x][3]."','".$sheet['cells'][$x][4]."')";
 $result = $conn->query($sq);
 $x++;
 }

 
}



$nr_sheets = count($excel->sheets); 
$excel_data = ''; 



for($i=0; $i<$nr_sheets; $i++)
{
 $excel_data .= '<h4>Sheet '. ($i + 1) .' (<em>'. $excel->boundsheets[$i]['name'] .'</em>)</h4>'. sheetData($excel->sheets[$i]) .'<br/>'; 
}


}

?>