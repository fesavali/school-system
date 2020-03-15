<?php
//include connection file 
include_once("connection.php");
require('fpdf17/fpdf.php');
class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    
    $this->SetFont('Arial','B',20);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(80,10,'Sample random pdf',0,0,'R');
    // Line break
    $this->Ln(20);
}
 
// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
date_default_timezone_set("Africa/Nairobi");
$time = date("h:i:sa");
$day= date("l");
$currentdate = date("d/m/Y");
 
$db = new dbObj();
$connString =  $db->getConnstring();
// $display_heading = array('id'=>'ID', 'employee_name'=> 'Name',  'employee_age'=> 'Age','employee_salary'=> 'Salary');
 
// $result = mysqli_query($connString, "SELECT id, employee_name, employee_salary, employee_age FROM employee") or die("database error:". mysqli_error($connString));
// $header = mysqli_query($connString, "SHOW columns FROM employee");
 
$pdf = new PDF();
//header
$pdf->AddPage();
//foter page
// $pdf->AliasNbPages();
// $pdf->SetFont('Arial','B',12);
// foreach($header as $heading) {
// $pdf->Cell(40,12,$display_heading[$heading['Field']],1);
// }
// foreach($result as $row) {
// $pdf->Ln();
// foreach($row as $column)
// $pdf->Cell(40,12,$column,1);
// }
// $pdf->SetFont('Arial','',12);
// $pdf->SetX(45);
// $pdf->MultiCell(30,6,'JGDVH',1,'L');
// $pdf->SetX(45);
// $pdf->MultiCell(30,6,'GADSGVJHY',1,'C');
// $pdf->SetX(135);
// $pdf->MultiCell(30,6,'hgjugfe',1,'R');
// $pdf->SetX(135);
// $pdf->MultiCell(30,6,'$GG',1,'R');
// $pdf->Output();
include("../config.php");
$year = trim($_POST['ddlacyear']);
$term = trim($_POST['ddlterms']);

if ($year == '1' && $term == 'Term1') {
  $cat1 = 'c111';
  $cat2 = 'c211';
  $cat3 = 'c311';
  $exams = 'e11';
}
else if ($year == '1' && $term == 'Term2') {
  $cat1 = 'c112';
  $cat2 = 'c212';
  $cat3 = 'c312';
  $exams = 'e12';
}
else if ($year == '1' && $term == 'Term3') {
  $cat1 = 'c113';
  $cat2 = 'c213';
  $cat3 = 'c313';
  $exams = 'e13';
}
else if ($year == '2' && $term == 'Term1') {
  $cat1 = 'c121';
  $cat2 = 'c221';
  $cat3 = 'c321';
  $exams = 'e21';
}
else if ($year == '2' && $term == 'Term2') {
  $cat1 = 'c122';
  $cat2 = 'c222';
  $cat3 = 'c322';
  $exams = 'e22';
}
else if ($year == '2' && $term == 'Term3') {
  $cat1 = 'c123';
  $cat2 = 'c223';
  $cat3 = 'c323';
  $exams = 'e23';
}
else if ($year == '3' && $term == 'Term1') {
  $cat1 = 'c131';
  $cat2 = 'c231';
  $cat3 = 'c331';
  $exams = 'e31';
}
else if ($year == '3' && $term == 'Term2') {
  $cat1 = 'c132';
  $cat2 = 'c232';
  $cat3 = 'c332';
  $exams = 'e32';
}
else if ($year == '3' && $term == 'Term3') {
  $cat1 = 'c133';
  $cat2 = 'c233';
  $cat3 = 'c333';
  $exams = 'e33';
}
else if ($year == '4' && $term == 'Term1') {
  $cat1 = 'c141';
  $cat2 = 'c241';
  $cat3 = 'c341';
  $exams = 'e41';
}
else if ($year == '4' && $term == 'Term2') {
  $cat1 = 'c142';
  $cat2 = 'c242';
  $cat3 = 'c342';
  $exams = 'e42';
}
else if ($year == '4' && $term == 'Term3') {
  $cat1 = 'c143';
  $cat2 = 'c243';
  $cat3 = 'c343';
  $exams = 'e43';
}
else if ($year == '5' && $term == 'Term1') {
  $cat1 = 'c151';
  $cat2 = 'c251';
  $cat3 = 'c351';
  $exams = 'e51';
}
else if ($year == '5' && $term == 'Term2') {
  $cat1 = 'c152';
  $cat2 = 'c252';
  $cat3 = 'c352';
  $exams = 'e52';
}
else if ($year == '5' && $term == 'Term3') {
  $cat1 = 'c153';
  $cat2 = 'c253';
  $cat3 = 'c353';
  $exams = 'e53';
}
else if ($year == '6' && $term == 'Term1') {
  $cat1 = 'c161';
  $cat2 = 'c261';
  $cat3 = 'c361';
  $exams = 'e61';
}
else if ($year == '6' && $term == 'Term2') {
  $cat1 = 'c162';
  $cat2 = 'c262';
  $cat3 = 'c362';
  $exams = 'e62';
}
else if ($year == '6' && $term == 'Term3') {
  $cat1 = 'c163';
  $cat2 = 'c263';
  $cat3 = 'c363';
  $exams = 'e63';
}
else if ($year == '7' && $term == 'Term1') {
  $cat1 = 'c171';
  $cat2 = 'c271';
  $cat3 = 'c371';
  $exams = 'e71';
}
else if ($year == '7' && $term == 'Term2') {
  $cat1 = 'c172';
  $cat2 = 'c272';
  $cat3 = 'c372';
  $exams = 'e72';
}
else if ($year == '7' && $term == 'Term3') {
  $cat1 = 'c173';
  $cat2 = 'c273';
  $cat3 = 'c373';
  $exams = 'e73';
}
else if ($year == '8' && $term == 'Term1') {
  $cat1 = 'c181';
  $cat2 = 'c281';
  $cat3 = 'c381';
  $exams = 'e81';
}
else if ($year == '8' && $term == 'Term2') {
  $cat1 = 'c182';
  $cat2 = 'c282';
  $cat3 = 'c382';
  $exams = 'e82';
}
else if ($year == '8' && $term == 'Term3') {
  $cat1 = 'c183';
  $cat2 = 'c283';
  $cat3 = 'c383';
  $exams = 'e83';
}

$catOne    = $cat1;
$catTwo    = $cat2;
$catThree    = $cat3;
$mainExams = $exams;

include '../userSignup.php';
$user_id = $_SESSION['from_user_id'];





$stmt1 = $connect->prepare("SELECT * FROM `{$catOne}`
  WHERE AdmNo = '$user_id' AND Subject = 101 LIMIT 1"); 
$stmt1->execute(); 
$cat_one_eng = $stmt1->fetch();

$stmt2 = $connect->prepare("SELECT * FROM `{$catTwo}`
  WHERE AdmNo = '$user_id' AND Subject = 101 LIMIT 1");
$stmt2->execute(); 
$cat_two_eng = $stmt2->fetch();


$stmt3 = $connect->prepare("SELECT * FROM `{$catThree}`
  WHERE AdmNo = '$user_id' AND Subject = 101 LIMIT 1");
$stmt3->execute(); 
$cat_three_eng = $stmt3->fetch();


$stmt4 = $connect->prepare("SELECT * FROM `{$mainExams}`
  WHERE AdmNo = '$user_id' AND Subject = 101 LIMIT 1");
$stmt4->execute(); 
$main_exams_eng = $stmt4->fetch();


$stmt5 = $connect->prepare("SELECT * FROM `{$catOne}`
  WHERE AdmNo = '$user_id' AND Subject = 102 LIMIT 1");
$stmt5->execute(); 
$cat_one_kis = $stmt5->fetch();


$stmt6 = $connect->prepare("SELECT * FROM `{$catTwo}`
  WHERE AdmNo = '$user_id' AND Subject = 102 LIMIT 1");
$stmt6->execute(); 
$cat_two_kis = $stmt6->fetch();


$stmt7 = $connect->prepare("SELECT * FROM `{$catThree}`
  WHERE AdmNo = '$user_id' AND Subject = 102 LIMIT 1");
$stmt7->execute(); 
$cat_three_kis = $stmt7->fetch();


$stmt8 = $connect->prepare("SELECT * FROM `{$mainExams}`
  WHERE AdmNo = '$user_id' AND Subject = 102 LIMIT 1");
$stmt8->execute(); 
$main_exams_kis = $stmt8->fetch();


$stmt9 = $connect->prepare("SELECT * FROM `{$catOne}`
  WHERE AdmNo = '$user_id' AND Subject = 121 LIMIT 1");
$stmt9->execute(); 
$cat_one_mat = $stmt9->fetch();


$stmt10 = $connect->prepare("SELECT * FROM `{$catTwo}`
  WHERE AdmNo = '$user_id' AND Subject = 121 LIMIT 1");
$stmt10->execute(); 
$cat_two_mat = $stmt10->fetch();


$stmt11 = $connect->prepare("SELECT * FROM `{$catThree}`
  WHERE AdmNo = '$user_id' AND Subject = 121 LIMIT 1");
$stmt11->execute(); 
$cat_three_mat = $stmt11->fetch();


$stmt12 = $connect->prepare("SELECT * FROM `{$mainExams}`
  WHERE AdmNo = '$user_id' AND Subject = 121 LIMIT 1");
$stmt12->execute(); 
$main_exams_mat = $stmt12->fetch();

$stmt13 = $connect->prepare("SELECT * FROM `{$catOne}`
  WHERE AdmNo = '$user_id' AND Subject = 231 LIMIT 1");
$stmt13->execute(); 
$cat_one_bio = $stmt13->fetch();


$stmt14 = $connect->prepare("SELECT * FROM `{$catTwo}`
  WHERE AdmNo = '$user_id' AND Subject = 231 LIMIT 1");
$stmt14->execute(); 
$cat_two_bio = $stmt14->fetch();


$stmt15 = $connect->prepare("SELECT * FROM `{$catThree}`
  WHERE AdmNo = '$user_id' AND Subject = 231 LIMIT 1");
$stmt15->execute(); 
$cat_three_bio = $stmt15->fetch();


$stmt16 = $connect->prepare("SELECT * FROM `{$mainExams}`
  WHERE AdmNo = '$user_id' AND Subject = 231 LIMIT 1");
$stmt16->execute(); 
$main_exams_bio = $stmt16->fetch();


$stmt17 = $connect->prepare("SELECT * FROM `{$catOne}`
  WHERE AdmNo = '$user_id' AND Subject = 232 LIMIT 1");
$stmt17->execute(); 
$cat_one_phy = $stmt17->fetch();


$stmt18 = $connect->prepare("SELECT * FROM `{$catTwo}`
  WHERE AdmNo = '$user_id' AND Subject = 232 LIMIT 1");
$stmt18->execute(); 
$cat_two_phy = $stmt18->fetch();


$stmt19 = $connect->prepare("SELECT * FROM `{$catThree}`
  WHERE AdmNo = '$user_id' AND Subject = 232 LIMIT 1");
$stmt19->execute(); 
$cat_three_phy = $stmt19->fetch();


$stmt20 = $connect->prepare("SELECT * FROM `{$mainExams}`
  WHERE AdmNo = '$user_id' AND Subject = 232 LIMIT 1");
$stmt20->execute(); 
$main_exams_phy = $stmt20->fetch();


$stmt21 = $connect->prepare("SELECT * FROM `{$catOne}`
  WHERE AdmNo = '$user_id' AND Subject = 233 LIMIT 1");
$stmt21->execute(); 
$cat_one_che = $stmt21->fetch();


$stmt22 = $connect->prepare("SELECT * FROM `{$catTwo}`
  WHERE AdmNo = '$user_id' AND Subject = 233 LIMIT 1");
$stmt22->execute(); 
$cat_two_che = $stmt22->fetch();


$stmt23 = $connect->prepare("SELECT * FROM `{$catThree}`
  WHERE AdmNo = '$user_id' AND Subject = 233 LIMIT 1");
$stmt23->execute(); 
$cat_three_che = $stmt23->fetch();


$stmt24 = $connect->prepare("SELECT * FROM `{$mainExams}`
  WHERE AdmNo = '$user_id' AND Subject = 233 LIMIT 1");
$stmt24->execute(); 
$main_exams_che = $stmt24->fetch();


$stmt25 = $connect->prepare("SELECT * FROM `{$catOne}`
  WHERE AdmNo = '$user_id' AND Subject = 311 LIMIT 1");
$stmt25->execute(); 
$cat_one_his = $stmt25->fetch();


$stmt26 = $connect->prepare("SELECT * FROM `{$catTwo}`
  WHERE AdmNo = '$user_id' AND Subject = 311 LIMIT 1");
$stmt26->execute(); 
$cat_two_his = $stmt26->fetch();


$stmt27 = $connect->prepare("SELECT * FROM `{$catThree}`
  WHERE AdmNo = '$user_id' AND Subject = 311 LIMIT 1");
$stmt27->execute(); 
$cat_three_his = $stmt27->fetch();


$stmt28 = $connect->prepare("SELECT * FROM `{$mainExams}`
  WHERE AdmNo = '$user_id' AND Subject = 311 LIMIT 1");
$stmt28->execute(); 
$main_exams_his = $stmt28->fetch();


$stmt29 = $connect->prepare("SELECT * FROM `{$catOne}`
  WHERE AdmNo = '$user_id' AND Subject = 312 LIMIT 1");
$stmt29->execute(); 
$cat_one_geo = $stmt29->fetch();


$stmt30 = $connect->prepare("SELECT * FROM `{$catTwo}`
  WHERE AdmNo = '$user_id' AND Subject = 312 LIMIT 1");
$stmt30->execute(); 
$cat_two_geo = $stmt30->fetch();


$stmt31 = $connect->prepare("SELECT * FROM `{$catThree}`
  WHERE AdmNo = '$user_id' AND Subject = 312 LIMIT 1");
$stmt31->execute(); 
$cat_three_geo = $stmt31->fetch();


$stmt32 = $connect->prepare("SELECT * FROM `{$mainExams}`
  WHERE AdmNo = '$user_id' AND Subject = 312 LIMIT 1");
$stmt32->execute(); 
$main_exams_geo = $stmt32->fetch();


$stmt33 = $connect->prepare("SELECT * FROM `{$catOne}`
  WHERE AdmNo = '$user_id' AND Subject = 314 LIMIT 1");
$stmt33->execute(); 
$cat_one_ire = $stmt33->fetch();


$stmt34 = $connect->prepare("SELECT * FROM `{$catTwo}`
  WHERE AdmNo = '$user_id' AND Subject = 314 LIMIT 1");
$stmt34->execute(); 
$cat_two_ire = $stmt34->fetch();


$stmt35 = $connect->prepare("SELECT * FROM `{$catThree}`
  WHERE AdmNo = '$user_id' AND Subject = 314 LIMIT 1");
$stmt35->execute(); 
$cat_three_ire = $stmt35->fetch();


$stmt36 = $connect->prepare("SELECT * FROM `{$mainExams}`
  WHERE AdmNo = '$user_id' AND Subject = 313 LIMIT 1");
$stmt36->execute(); 
$main_exams_ire = $stmt36->fetch();

$stmt68 = $connect->prepare("SELECT * FROM `{$catOne}`
  WHERE AdmNo = '$user_id' AND Subject = 313 LIMIT 1");
$stmt68->execute(); 
$cat_one_cre = $stmt68->fetch();


$stmt67 = $connect->prepare("SELECT * FROM `{$catTwo}`
  WHERE AdmNo = '$user_id' AND Subject = 313 LIMIT 1");
$stmt67->execute(); 
$cat_two_cre = $stmt67->fetch();


$stmt66 = $connect->prepare("SELECT * FROM `{$catThree}`
  WHERE AdmNo = '$user_id' AND Subject = 313 LIMIT 1");
$stmt66->execute(); 
$cat_three_cre = $stmt66->fetch();


$stmt65 = $connect->prepare("SELECT * FROM `{$mainExams}`
  WHERE AdmNo = '$user_id' AND Subject = 314 LIMIT 1");
$stmt65->execute(); 
$main_exams_cre = $stmt65->fetch();

$stmt37 = $connect->prepare("SELECT * FROM `{$catOne}`
  WHERE AdmNo = '$user_id' AND Subject = 441 LIMIT 1");
$stmt37->execute(); 
$cat_one_hom = $stmt37->fetch();


$stmt38 = $connect->prepare("SELECT * FROM `{$catTwo}`
  WHERE AdmNo = '$user_id' AND Subject = 441 LIMIT 1");
$stmt38->execute(); 
$cat_two_hom = $stmt38->fetch();


$stmt39 = $connect->prepare("SELECT * FROM `{$catThree}`
  WHERE AdmNo = '$user_id' AND Subject = 441 LIMIT 1");
$stmt39->execute(); 
$cat_three_hom = $stmt39->fetch();


$stmt40 = $connect->prepare("SELECT * FROM `{$mainExams}`
  WHERE AdmNo = '$user_id' AND Subject = 441 LIMIT 1");
$stmt40->execute(); 
$main_exams_hom = $stmt40->fetch();


$stmt41 = $connect->prepare("SELECT * FROM `{$catOne}`
  WHERE AdmNo = '$user_id' AND Subject = 443 LIMIT 1");
$stmt41->execute(); 
$cat_one_agr = $stmt41->fetch();


$stmt42 = $connect->prepare("SELECT * FROM `{$catTwo}`
  WHERE AdmNo = '$user_id' AND Subject = 443 LIMIT 1");
$stmt42->execute(); 
$cat_two_agr = $stmt42->fetch();


$stmt43 = $connect->prepare("SELECT * FROM `{$catThree}`
  WHERE AdmNo = '$user_id' AND Subject = 443 LIMIT 1");
$stmt43->execute(); 
$cat_three_agr = $stmt43->fetch();


$stmt44 = $connect->prepare("SELECT * FROM `{$mainExams}`
  WHERE AdmNo = '$user_id' AND Subject = 443 LIMIT 1");
$stmt44->execute(); 
$main_exams_agr = $stmt44->fetch();


$stmt45 = $connect->prepare("SELECT * FROM `{$catOne}`
  WHERE AdmNo = '$user_id' AND Subject = 451 LIMIT 1");
$stmt45->execute(); 
$cat_one_com = $stmt45->fetch();


$stmt46 = $connect->prepare("SELECT * FROM `{$catTwo}`
  WHERE AdmNo = '$user_id' AND Subject = 451 LIMIT 1");
$stmt46->execute(); 
$cat_two_com = $stmt46->fetch();


$stmt47 = $connect->prepare("SELECT * FROM `{$catThree}`
  WHERE AdmNo = '$user_id' AND Subject = 451 LIMIT 1");
$stmt47->execute(); 
$cat_three_com = $stmt47->fetch();


$stmt48 = $connect->prepare("SELECT * FROM `{$mainExams}`
  WHERE AdmNo = '$user_id' AND Subject = 451 LIMIT 1");
$stmt48->execute(); 
$main_exams_com = $stmt48->fetch();


$stmt49 = $connect->prepare("SELECT * FROM `{$catOne}`
  WHERE AdmNo = '$user_id' AND Subject = 503 LIMIT 1");
$stmt49->execute(); 
$cat_one_ara = $stmt49->fetch();


$stmt50 = $connect->prepare("SELECT * FROM `{$catTwo}`
  WHERE AdmNo = '$user_id' AND Subject = 503 LIMIT 1");
$stmt50->execute(); 
$cat_two_ara = $stmt50->fetch();


$stmt51 = $connect->prepare("SELECT * FROM `{$catThree}`
  WHERE AdmNo = '$user_id' AND Subject = 503 LIMIT 1");
$stmt51->execute(); 
$cat_three_ara = $stmt51->fetch();


$stmt52 = $connect->prepare("SELECT * FROM `{$mainExams}`
  WHERE AdmNo = '$user_id' AND Subject = 503 LIMIT 1");
$stmt52->execute(); 
$main_exams_ara = $stmt52->fetch();


$stmt53 = $connect->prepare("SELECT * FROM `{$catOne}`
  WHERE AdmNo = '$user_id' AND Subject = 565 LIMIT 1");
$stmt53->execute(); 
$cat_one_bus = $stmt53->fetch();


$stmt54 = $connect->prepare("SELECT * FROM `{$catTwo}`
  WHERE AdmNo = '$user_id' AND Subject = 565 LIMIT 1");
$stmt54->execute(); 
$cat_two_bus = $stmt54->fetch();


$stmt55 = $connect->prepare("SELECT * FROM `{$catThree}`
  WHERE AdmNo = '$user_id' AND Subject = 565 LIMIT 1");
$stmt55->execute(); 
$cat_three_bus = $stmt55->fetch();


$stmt56 = $connect->prepare("SELECT * FROM `{$mainExams}`
  WHERE AdmNo = '$user_id' AND Subject = 565 LIMIT 1");
$stmt56->execute(); 
$main_exams_bus = $stmt56->fetch();

/*
$stmt57 = $connect->prepare("SELECT * FROM `{$catOne}`
  WHERE AdmNo = '$user_id' AND Subject = NE1 LIMIT 1");
$stmt57->execute(); 
$cat_one_Ped = $stmt57->fetch();


$stmt58 = $connect->prepare("SELECT * FROM `{$catTwo}`
  WHERE AdmNo = '$user_id' AND Subject = NE1 LIMIT 1");
$stmt58->execute(); 
$cat_two_Ped = $stmt58->fetch();


$stmt59 = $connect->prepare("SELECT * FROM `{$catThree}`
  WHERE AdmNo = '$user_id' AND Subject = NE1 LIMIT 1");
$stmt59->execute(); 
$cat_three_Ped = $stmt59->fetch();


$stmt60 = $connect->prepare("SELECT * FROM `{$mainExams}`
  WHERE AdmNo = '$user_id' AND Subject = NE1 LIMIT 1");
$stmt60->execute(); 
$main_exams_Ped = $stmt60->fetch();


$stmt61 = $connect->prepare("SELECT * FROM `{$catOne}`
  WHERE AdmNo = '$user_id' AND Subject = NE2 LIMIT 1");
$stmt61->execute(); 
$cat_one_Lsk = $stmt61->fetch();


$stmt62 = $connect->prepare("SELECT * FROM `{$catTwo}`
  WHERE AdmNo = '$user_id' AND Subject = NE2 LIMIT 1");
$stmt62->execute(); 
$cat_two_Lsk = $stmt62->fetch();


$stmt63 = $connect->prepare("SELECT * FROM `{$catThree}`
  WHERE AdmNo = '$user_id' AND Subject = NE2 LIMIT 1");
$stmt63->execute(); 
$cat_three_Lsk = $stmt63->fetch();


$stmt64 = $connect->prepare("SELECT * FROM `{$mainExams}`
  WHERE AdmNo = '$user_id' AND Subject = NE2 LIMIT 1");
$stmt64->execute(); 
$main_exams_Lsk = $stmt64->fetch();
*/



$query69 = mysqli_query($conn,"SELECT * FROM registration
  WHERE AdmNo = '".$user_id."'");
$name = mysqli_fetch_array($query69);

$pdf=new FPDF('P', 'mm', 'A4' );
$pdf->AddPage();
$pdf->SetFont("Times","B",17);
$pdf->Cell(190,10,"SHEIKH KHALIFA BIN ZAYED AL-NAHYAN",0,1,'C');
$pdf->Ln(-3);
$pdf->SetFont("Times","B",17);
$pdf->Cell(190,10,"SEC. AND TECH. SCHOOL",0,1,'C');
$pdf->Ln(-1);
$pdf->SetFont("Times","",10);
$pdf->Cell(190,10,"P. O. BOX 90419   MOMBASA    TEL: 0725 685563",0,1,'C');
$pdf->Ln(-3);
$pdf->SetFont("Times","B",13);
$pdf->Cell(190,10,"ACADEMIC PROGRESS REPORT - TERM 2, 2018",0,1,'C');
$pdf->Ln(2);
$pdf->SetFont("Times","B",10);
$pdf->Cell(22,6,"NAME:",0,0,'L');
$pdf->SetFont("Arial","U",11);
$pdf->Cell(75,6,$name['Name'],0,0,'L');
$pdf->SetFont("Times","B",10);
$pdf->Cell(20,6,"ADM. NO.",0,0,'C');
$pdf->SetFont("Arial","U",11);
$pdf->Cell(16,6,$user_id,0,0,'L');
$pdf->SetFont("Times","B",10);
$pdf->Cell(20,6,"FORM:",0,0,'C');
$pdf->Cell(14,6,$name['CurrentClass'],0,0,'C');
$pdf->SetFont("Times","B",10);
$pdf->Cell(5,6,"Stream:",0,0,'C');
$pdf->SetFont("Arial","U",11);
$pdf->Cell(16,6,$name['Stream'],0,0,'C');
$pdf->Ln(7);
$pdf->SetFont("Times","B",10);
$pdf->Cell(22,6,"HOUSE:",0,0,'L');
$pdf->SetFont("Arial","U",11);
$pdf->Cell(76,6,$name['House'],0,0,'L');
$pdf->SetFont("Times","B",10);
$pdf->Cell(19,6,"CLUB:",0,0,'C');
$pdf->SetFont("Arial","U",11);
$pdf->Cell(70,6,$name['Club'],0,0,'L');
$pdf->Ln(6);
$pdf->Ln(7);
$pdf->SetFont("Arial","B",11);
$pdf->Cell(70,12,"SUBJECTS",1,0,'C');
$pdf->Cell(10, 6, 'CAT', 1, 0, 'C');
$pdf->Cell(12, 6, 'EXAM', 1, 0, 'C');
$pdf->Cell(10, 6, 'TOT', 1, 0, 'C');
$pdf->Cell(10, 12, 'GRD', 1, 0, 'C');
$pdf->Cell(10, 12, 'PTS', 1, 0, 'C');
$pdf->Cell(13, 12, 'POS.', 1, 0, 'C');
$pdf->Cell(33, 12, 'REMARKS', 1, 0, 'C');
$pdf->MultiCell(22, 6, 'INITIALS/ SIGN', 1,'L');
$pdf->Ln(-6);
$pdf->SetX(80); 
$pdf->Cell(10, 6, 'X/50', 1, 0, 'C');
$pdf->Cell(12, 6, 'X/50', 1, 0, 'C');
$pdf->Cell(10, 6, '(%)', 1, 0, 'C');
$pdf->Ln(6);
$pdf->SetFont("Arial","",9);
$pdf->Cell(70,5,"ENGLISH",1,0,'L');
$pdf->SetX(80);
$pdf->Cell(10, 5, $cat_one_eng['Score'], 1, 0, 'C');
$pdf->Cell(12, 5, $main_exams_eng['CAT1'], 1, 0, 'C');
$pdf->Cell(10, 5, $main_exams_eng['CAT1'], 1, 0, 'C');
$pdf->Cell(10, 5, 'A', 1, 0, 'C');
$pdf->Cell(10, 5, '84', 1, 0, 'C');
$pdf->Cell(13, 5, '22/48', 1, 0, 'C');
$pdf->Cell(33, 5, 'EXCELLENT', 1, 0, 'C');
$pdf->Cell(22, 5, 'H.A.C', 1, 0, 'C');
$pdf->Ln(5);
$pdf->SetFont("Arial","",9);
$pdf->Cell(70,5,"KISWAHILI",1,0,'L');
$pdf->SetX(80);
$pdf->Cell(10, 5, $cat_one_kis['Score'], 1, 0, 'C');
$pdf->Cell(12, 5, $main_exams_kis['CAT1'], 1, 0, 'C');
$pdf->Cell(10, 5, $main_exams_kis['CAT1'], 1, 0, 'C');
$pdf->Cell(10, 5, 'A', 1, 0, 'C');
$pdf->Cell(10, 5, '84', 1, 0, 'C');
$pdf->Cell(13, 5, '22/48', 1, 0, 'C');
$pdf->Cell(33, 5, 'EXCELLENT', 1, 0, 'C');
$pdf->Cell(22, 5, 'H.A.C', 1, 0, 'C');
$pdf->Ln(5);
$pdf->SetFont("Arial","",9);
$pdf->Cell(70,5,"MATHEMATICS",1,0,'L');
$pdf->SetX(80);
$pdf->Cell(10, 5, $cat_one_mat['Score'], 1, 0, 'C');
$pdf->Cell(12, 5, $main_exams_mat['CAT1'], 1, 0, 'C');
$pdf->Cell(10, 5, $main_exams_mat['CAT1'], 1, 0, 'C');
$pdf->Cell(10, 5, 'A', 1, 0, 'C');
$pdf->Cell(10, 5, '84', 1, 0, 'C');
$pdf->Cell(13, 5, '22/48', 1, 0, 'C');
$pdf->Cell(33, 5, 'EXCELLENT', 1, 0, 'C');
$pdf->Cell(22, 5, 'H.A.C', 1, 0, 'C');
$pdf->Ln(5);
$pdf->SetFont("Arial","",9);
$pdf->Cell(70,5,"BIOLOGY",1,0,'L');
$pdf->SetX(80);
$pdf->Cell(10, 5, $cat_one_bio['Score'], 1, 0, 'C');
$pdf->Cell(12, 5, $main_exams_bio['CAT1'], 1, 0, 'C');
$pdf->Cell(10, 5, $main_exams_bio['CAT1'], 1, 0, 'C');
$pdf->Cell(10, 5, 'A', 1, 0, 'C');
$pdf->Cell(10, 5, '84', 1, 0, 'C');
$pdf->Cell(13, 5, '22/48', 1, 0, 'C');
$pdf->Cell(33, 5, 'EXCELLENT', 1, 0, 'C');
$pdf->Cell(22, 5, 'H.A.C', 1, 0, 'C');
$pdf->Ln(5);
$pdf->SetFont("Arial","",9);
$pdf->Cell(70,5,"PHYSICS",1,0,'L');
$pdf->SetX(80);
$pdf->Cell(10, 5, $cat_one_phy['Score'], 1, 0, 'C');
$pdf->Cell(12, 5, $main_exams_phy['CAT1'], 1, 0, 'C');
$pdf->Cell(10, 5, $main_exams_phy['CAT1'], 1, 0, 'C');
$pdf->Cell(10, 5, 'A', 1, 0, 'C');
$pdf->Cell(10, 5, '84', 1, 0, 'C');
$pdf->Cell(13, 5, '22/48', 1, 0, 'C');
$pdf->Cell(33, 5, 'EXCELLENT', 1, 0, 'C');
$pdf->Cell(22, 5, 'H.A.C', 1, 0, 'C');
$pdf->Ln(5);
$pdf->SetFont("Arial","",9);
$pdf->Cell(70,5,"CHEMISTRY",1,0,'L');
$pdf->SetX(80);
$pdf->Cell(10, 5, $cat_one_che['Score'], 1, 0, 'C');
$pdf->Cell(12, 5, $main_exams_che['CAT1'], 1, 0, 'C');
$pdf->Cell(10, 5, $main_exams_che['CAT1'], 1, 0, 'C');
$pdf->Cell(10, 5, 'A', 1, 0, 'C');
$pdf->Cell(10, 5, '84', 1, 0, 'C');
$pdf->Cell(13, 5, '22/48', 1, 0, 'C');
$pdf->Cell(33, 5, 'EXCELLENT', 1, 0, 'C');
$pdf->Cell(22, 5, 'H.A.C', 1, 0, 'C');
$pdf->Ln(5);
$pdf->SetFont("Arial","",9);
$pdf->Cell(70,5,"HISTORY AND GOVERNMENT",1,0,'L');
$pdf->SetX(80);
$pdf->Cell(10, 5, $cat_one_his['Score'], 1, 0, 'C');
$pdf->Cell(12, 5, $main_exams_his['CAT1'], 1, 0, 'C');
$pdf->Cell(10, 5, $main_exams_his['CAT1'], 1, 0, 'C');
$pdf->Cell(10, 5, 'A', 1, 0, 'C');
$pdf->Cell(10, 5, '84', 1, 0, 'C');
$pdf->Cell(13, 5, '22/48', 1, 0, 'C');
$pdf->Cell(33, 5, 'EXCELLENT', 1, 0, 'C');
$pdf->Cell(22, 5, 'H.A.C', 1, 0, 'C');
$pdf->Ln(5);
$pdf->SetFont("Arial","",9);
$pdf->Cell(70,5,"GEOGRAPHY",1,0,'L');
$pdf->SetX(80);
$pdf->Cell(10, 5, $cat_one_geo['Score'], 1, 0, 'C');
$pdf->Cell(12, 5, $main_exams_geo['CAT1'], 1, 0, 'C');
$pdf->Cell(10, 5, $main_exams_geo['CAT1'], 1, 0, 'C');
$pdf->Cell(10, 5, 'A', 1, 0, 'C');
$pdf->Cell(10, 5, '84', 1, 0, 'C');
$pdf->Cell(13, 5, '22/48', 1, 0, 'C');
$pdf->Cell(33, 5, 'EXCELLENT', 1, 0, 'C');
$pdf->Cell(22, 5, 'H.A.C', 1, 0, 'C');
$pdf->Ln(5);
$pdf->SetFont("Arial","",9);
$pdf->Cell(70,5,"ISLAMIC R. E.",1,0,'L');
$pdf->SetX(80);
$pdf->Cell(10, 5, $cat_one_ire['Score'], 1, 0, 'C');
$pdf->Cell(12, 5, $main_exams_ire['CAT1'], 1, 0, 'C');
$pdf->Cell(10, 5, $main_exams_ire['CAT1'], 1, 0, 'C');
$pdf->Cell(10, 5, 'A', 1, 0, 'C');
$pdf->Cell(10, 5, '84', 1, 0, 'C');
$pdf->Cell(13, 5, '22/48', 1, 0, 'C');
$pdf->Cell(33, 5, 'EXCELLENT', 1, 0, 'C');
$pdf->Cell(22, 5, 'H.A.C', 1, 0, 'C');
$pdf->Ln(5);
$pdf->SetFont("Arial","",9);
$pdf->Cell(70,5,"HOME SCIENCE",1,0,'L');
$pdf->SetX(80);
$pdf->Cell(10, 5, $cat_one_hom['Score'], 1, 0, 'C');
$pdf->Cell(12, 5, $main_exams_hom['CAT1'], 1, 0, 'C');
$pdf->Cell(10, 5, $main_exams_hom['CAT1'], 1, 0, 'C');
$pdf->Cell(10, 5, 'A', 1, 0, 'C');
$pdf->Cell(10, 5, '84', 1, 0, 'C');
$pdf->Cell(13, 5, '22/48', 1, 0, 'C');
$pdf->Cell(33, 5, 'EXCELLENT', 1, 0, 'C');
$pdf->Cell(22, 5, 'H.A.C', 1, 0, 'C');
$pdf->Ln(5);
$pdf->SetFont("Arial","",9);
$pdf->Cell(70,5,"ARABIC",1,0,'L');
$pdf->SetX(80);
$pdf->Cell(10, 5, $cat_one_ara['Score'], 1, 0, 'C');
$pdf->Cell(12, 5, $main_exams_ara['CAT1'], 1, 0, 'C');
$pdf->Cell(10, 5, $main_exams_ara['CAT1'], 1, 0, 'C');
$pdf->Cell(10, 5, 'A', 1, 0, 'C');
$pdf->Cell(10, 5, '84', 1, 0, 'C');
$pdf->Cell(13, 5, '22/48', 1, 0, 'C');
$pdf->Cell(33, 5, 'EXCELLENT', 1, 0, 'C');
$pdf->Cell(22, 5, 'H.A.C', 1, 0, 'C');
$pdf->Ln(5);
$pdf->SetFont("Arial","",9);
$pdf->Cell(70,5,"BUSSINESS STUDIES",1,0,'L');
$pdf->SetX(80);
$pdf->Cell(10, 5, $cat_one_bus['Score'], 1, 0, 'C');
$pdf->Cell(12, 5, $main_exams_bus['CAT1'], 1, 0, 'C');
$pdf->Cell(10, 5, $main_exams_bus['CAT1'], 1, 0, 'C');
$pdf->Cell(10, 5, 'A', 1, 0, 'C');
$pdf->Cell(10, 5, '84', 1, 0, 'C');
$pdf->Cell(13, 5, '22/48', 1, 0, 'C');
$pdf->Cell(33, 5, 'EXCELLENT', 1, 0, 'C');
$pdf->Cell(22, 5, 'H.A.C', 1, 0, 'C');
$pdf->Ln(5);
$pdf->SetFont("Arial","",9);
$pdf->Cell(70,5,"COMPUTER STUDIES",1,0,'L');
$pdf->SetX(80);
$pdf->Cell(10, 5, $cat_one_com['Score'], 1, 0, 'C');
$pdf->Cell(12, 5, $main_exams_com['CAT1'], 1, 0, 'C');
$pdf->Cell(10, 5, $main_exams_com['CAT1'], 1, 0, 'C');
$pdf->Cell(10, 5, 'A', 1, 0, 'C');
$pdf->Cell(10, 5, '84', 1, 0, 'C');
$pdf->Cell(13, 5, '22/48', 1, 0, 'C');
$pdf->Cell(33, 5, 'EXCELLENT', 1, 0, 'C');
$pdf->Cell(22, 5, 'H.A.C', 1, 0, 'C');
$pdf->Ln(5);
$pdf->SetFont("Arial","",9);
$pdf->Cell(70,5,"",1,0,'C');
$pdf->SetX(80);
$pdf->Cell(10, 5, '', 1, 0, 'L');
$pdf->Cell(12, 5, '', 1, 0, 'C');
$pdf->Cell(10, 5, '', 1, 0, 'C');
$pdf->Cell(10, 5, '', 1, 0, 'C');
$pdf->Cell(10, 5, '', 1, 0, 'C');
$pdf->Cell(13, 5, '', 1, 0, 'C');
$pdf->Cell(33, 5, '', 1, 0, 'C');
$pdf->Cell(22, 5, '', 1, 0, 'C');
$pdf->Ln(5);
$pdf->SetFont("Arial","",9);
$pdf->Cell(70,5,"",1,0,'C');
$pdf->SetX(80);
$pdf->Cell(10, 5, '', 1, 0, 'L');
$pdf->Cell(12, 5, '', 1, 0, 'C');
$pdf->Cell(10, 5, '', 1, 0, 'C');
$pdf->Cell(10, 5, '', 1, 0, 'C');
$pdf->Cell(10, 5, '', 1, 0, 'C');
$pdf->Cell(13, 5, '', 1, 0, 'C');
$pdf->Cell(33, 5, '', 1, 0, 'C');
$pdf->Cell(22, 5, '', 1, 0, 'C');
$pdf->Ln(5);
$pdf->SetFont("Arial","",9);
$pdf->Cell(70,5,"",1,0,'C');
$pdf->SetX(80);
$pdf->Cell(10, 5, '', 1, 0, 'L');
$pdf->Cell(12, 5, '', 1, 0, 'C');
$pdf->Cell(10, 5, '', 1, 0, 'C');
$pdf->Cell(10, 5, '', 1, 0, 'C');
$pdf->Cell(10, 5, '', 1, 0, 'C');
$pdf->Cell(13, 5, '', 1, 0, 'C');
$pdf->Cell(33, 5, '', 1, 0, 'C');
$pdf->Cell(22, 5, '', 1, 0, 'C');
$pdf->Ln(5);
$x = $pdf->GetX();
$y = $pdf->GetY();
$out = "OUT OF";
$col1="TOTAL\n".$out;
$pdf->MultiCell(92, 6, $col1, 1,'R');
$pdf->SetXY($x + 92, $y);
$pdf->Cell(10, 6, 'tmar', 1);
$pdf->SetXY($x + 92, $y + 6);
$pdf->Cell(10, 6, '1300', 1);
$pdf->SetXY($x + 102, $y);
$pdf->Cell(10, 12, '', 1);
$pdf->SetXY($x + 112, $y);
$pdf->Cell(10, 6, 'tpnts', 1);
$pdf->SetXY($x + 112, $y + 6);
$pdf->Cell(10, 6, '132', 1);
$pdf->SetFont("Arial","",7);
$pdf->SetXY($x + 122, $y);
$x = "X-MISSING SCORE\n";
$y = "Y-IRREGULARRITY\n";
$z = "Z-NOT GRADED";
$pdf->MultiCell(68, 4, $x.$y.$z, 1,'C');
$pdf->Ln(0);
$pdf->SetFont("Arial","B",9);
$pdf->Cell(16, 6, '', 1, 0, 'C');
$pdf->Cell(26, 6, 'TOTAL SCORE', 1, 0, 'C');
$pdf->Cell(19, 6, 'AVERAGE', 1, 0, 'C');
$pdf->Cell(18, 6, 'IMPR. (+/-)', 1, 0, 'C');
$pdf->Cell(14, 6, 'POINTS', 1, 0, 'C');
$pdf->Cell(14, 6, 'GRADE', 1, 0, 'C');
$pdf->Cell(25, 6, 'STREAM POS.', 1, 0, 'C');
$pdf->Cell(28, 6, 'OVERALL POS.', 1, 0, 'C');
$pdf->Cell(30, 6, '', 1, 0, 'C');
$pdf->Ln(6);
$pdf->SetFont("Arial","B",6);
$pdf->Cell(16, 4, 'TERM 1', 1, 0, 'C');
$pdf->SetFont("Arial","",6);
$pdf->Cell(26, 4, 'TOTAL SCORE', 1, 0, 'C');
$pdf->Cell(19, 4, 'AVERAGE', 1, 0, 'C');
$pdf->Cell(18, 4, 'IMPR. (+/-)', 1, 0, 'C');
$pdf->Cell(14, 4, 'POINTS', 1, 0, 'C');
$pdf->Cell(14, 4, 'GRADE', 1, 0, 'C');
$pdf->Cell(25, 4, 'STREAM POS.', 1, 0, 'C');
$pdf->Cell(28, 4, 'OVERALL POS.', 1, 0, 'C');
$pdf->Cell(30, 4, '', 1, 0, 'C');
$pdf->Ln(4);
$pdf->SetFont("Arial","B",6);
$pdf->Cell(16, 4, 'TERM 2', 1, 0, 'C');
$pdf->SetFont("Arial","",6);
$pdf->Cell(26, 4, 'TOTAL SCORE', 1, 0, 'C');
$pdf->Cell(19, 4, 'AVERAGE', 1, 0, 'C');
$pdf->Cell(18, 4, 'IMPR. (+/-)', 1, 0, 'C');
$pdf->Cell(14, 4, 'POINTS', 1, 0, 'C');
$pdf->Cell(14, 4, 'GRADE', 1, 0, 'C');
$pdf->Cell(25, 4, 'STREAM POS.', 1, 0, 'C');
$pdf->Cell(28, 4, 'OVERALL POS.', 1, 0, 'C');
$pdf->Cell(30, 4, '', 1, 0, 'C');
$pdf->Ln(4);
$pdf->SetFont("Arial","B",6);
$pdf->Cell(16, 4, 'TERM 3', 1, 0, 'C');
$pdf->SetFont("Arial","",6);
$pdf->Cell(26, 4, 'TOTAL SCORE', 1, 0, 'C');
$pdf->Cell(19, 4, 'AVERAGE', 1, 0, 'C');
$pdf->Cell(18, 4, 'IMPR. (+/-)', 1, 0, 'C');
$pdf->Cell(14, 4, 'POINTS', 1, 0, 'C');
$pdf->Cell(14, 4, 'GRADE', 1, 0, 'C');
$pdf->Cell(25, 4, 'STREAM POS.', 1, 0, 'C');
$pdf->Cell(28, 4, 'OVERALL POS.', 1, 0, 'C');
$pdf->Cell(30, 4, '', 1, 0, 'C');
$pdf->Ln(4);
$pdf->SetFont("Times","B",9);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(190, 28,'', 1,'L');
$pdf->SetXY($x + 0, $y +2);
$pdf->Cell(80, 5, "CLASS TEACHER'S REMARKS", 0);
$pdf->Ln(5);
$pdf->SetFont("Times","BI",9);
$pdf->Cell(30, 5, 'ACADEMIC:', 0);
$pdf->SetFont("Arial","",9);
$pdf->Cell(160, 5, 'comments here', 0);
$pdf->Ln(5);
$pdf->SetFont("Times","BI",9);
$pdf->Cell(30, 5, 'ACTIVITIES:', 0);
$pdf->SetFont("Arial","",9);
$pdf->Cell(160, 5, 'comments here', 0);
$pdf->Ln(5);
$pdf->SetFont("Times","BI",9);
$pdf->Cell(30, 5, 'CONDUCT:', 0);
$pdf->SetFont("Arial","",9);
$pdf->Cell(160, 5, 'comments here', 0);
$pdf->Ln(6);
$pdf->SetFont("Times","B",9);
$pdf->Cell(40, 5, "CLASS TEACHER:", 0);
$pdf->SetFont("Times","",9);
$pdf->Cell(60, 5, "Name", 0);
$pdf->SetFont("Times","B",9);
$pdf->Cell(12, 5, 'SIGN:', 0);
$pdf->SetFont("Times","",9);
$pdf->Cell(28, 5, 'Sign here', 0);
$pdf->SetFont("Times","B",9);
$pdf->Cell(12, 5, 'DATE:', 0);
$pdf->SetFont("Times","",9);
$pdf->Cell(28, 5, 'date', 0);
$pdf->Ln(5);
$pdf->SetFont("Times","B",9);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(95, 26, "", 1,'R');
$pdf->SetXY($x, $y);
$pdf->Cell(95, 5, "PRINCIPAL'S REMARKS", 0);
$pdf->Ln(5);
$pdf->SetFont("Times","",9);
$pdf->Cell(95, 5, "comments here", 0);
$pdf->Ln(11);
$pdf->SetFont("Times","B",9);
$pdf->Cell(35, 5, "PRINCIPAL:", 0);
$pdf->SetFont("Times","",9);
$pdf->Cell(60, 5, "Name", 0);
$pdf->Ln(5);
$pdf->SetFont("Times","B",9);
$pdf->Cell(12, 5, "SIGN:", 0);
$pdf->SetFont("Times","",9);
$pdf->Cell(43, 5, "comments here", 0);
$pdf->SetFont("Times","B",9);
$pdf->Cell(12, 5, "DATE:", 0);
$pdf->SetFont("Times","",9);
$pdf->Cell(28, 5, "comments here", 0);
$pdf->SetFont("Times","B",9);
$pdf->SetXY($x + 95, $y);
$pdf->Cell(95, 26, '', 1);
$pdf->SetXY($x + 95, $y+1);
$pdf->SetFont("Times","B",9);
$pdf->Cell(41, 5, "NEXT TERM RUNS FROM:", 0,"L");
$pdf->SetFont("Times","",9);
$pdf->Cell(23, 5, "date", 0);
$pdf->SetFont("Times","B",9);
$pdf->Cell(8, 5, "TO:", 0);
$pdf->SetFont("Times","",9);
$pdf->Cell(23, 5, "date", 0);
$pdf->SetFont("Times","B",9);
$pdf->SetXY($x + 95, $y+21);
$pdf->SetFont("Times","B",9);
$pdf->Cell(35, 5, "REPORT SEEN BY:", 0,"L");
$pdf->SetFont("Times","",9);
$pdf->Cell(60, 5, "name here", 0,"L");
$pdf->Ln(5);
$pdf->SetFont("Times","",9);
$pdf->Cell(190, 3.5, "ALL FEES SHOULD BE PAID ON OPENING DAY", 1,0, 'C');
$pdf->Ln(3.5);
$pdf->SetFont("Times","B",9);
$pdf->Cell(190, 4, "GRADING", 1,0, 'C');
$pdf->Ln(4);
$pdf->SetFont("Times","B",7);
$pdf->Cell(20, 4, "RANGE", 1,0, 'C');
$pdf->SetFont("Times","",7);
$pdf->Cell(14.2, 4, "0 - 29", 1,0, 'C');
$pdf->Cell(14, 4, "30 - 34", 1,0, 'C');
$pdf->Cell(14, 4, "35 - 39", 1,0, 'C');
$pdf->Cell(14, 4, "40 - 44", 1,0, 'C');
$pdf->Cell(14, 4, "45 - 49", 1,0, 'C');
$pdf->Cell(14, 4, "50 - 54", 1,0, 'C');
$pdf->Cell(14, 4, "55 - 59", 1,0, 'C');
$pdf->Cell(14, 4, "60 - 64", 1,0, 'C');
$pdf->Cell(14, 4, "65 - 69", 1,0, 'C');
$pdf->Cell(14, 4, "70 - 74", 1,0, 'C');
$pdf->Cell(14, 4, "75 - 79", 1,0, 'C');
$pdf->Cell(15.8, 4, "80 - 100", 1,0, 'C');
$pdf->Ln(4);
$pdf->SetFont("Times","B",7);
$pdf->Cell(20, 4, "GRADE", 1,0, 'C');
$pdf->SetFont("Times","",7);
$pdf->Cell(14.2, 4, "E", 1,0, 'C');
$pdf->Cell(14, 4, "D-", 1,0, 'C');
$pdf->Cell(14, 4, "D", 1,0, 'C');
$pdf->Cell(14, 4, "D+", 1,0, 'C');
$pdf->Cell(14, 4, "C-", 1,0, 'C');
$pdf->Cell(14, 4, "C", 1,0, 'C');
$pdf->Cell(14, 4, "C+", 1,0, 'C');
$pdf->Cell(14, 4, "B-", 1,0, 'C');
$pdf->Cell(14, 4, "B", 1,0, 'C');
$pdf->Cell(14, 4, "B+", 1,0, 'C');
$pdf->Cell(14, 4, "A-", 1,0, 'C');
$pdf->Cell(15.8, 4, "A", 1,0, 'C');
$pdf->Ln(4);
$pdf->SetFont("Times","B",7);
$pdf->Cell(20, 4, "POINTS", 1,0, 'C');
$pdf->SetFont("Times","",7);
$pdf->Cell(14.2, 4, "1", 1,0, 'C');
$pdf->Cell(14, 4, "2", 1,0, 'C');
$pdf->Cell(14, 4, "3", 1,0, 'C');
$pdf->Cell(14, 4, "4", 1,0, 'C');
$pdf->Cell(14, 4, "5", 1,0, 'C');
$pdf->Cell(14, 4, "6", 1,0, 'C');
$pdf->Cell(14, 4, "7", 1,0, 'C');
$pdf->Cell(14, 4, "8", 1,0, 'C');
$pdf->Cell(14, 4, "9", 1,0, 'C');
$pdf->Cell(14, 4, "10", 1,0, 'C');
$pdf->Cell(14, 4, "11", 1,0, 'C');
$pdf->Cell(15.8, 4, "12", 1,0, 'C');
$pdf->Ln(4);

// while($row = mysql_fetch_array($run))
// {

$pdf->SetFont("Times","B",10);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->Cell(190,16,'',1,0,'C');
$pdf->SetXY($x, $y+5);
$pdf->SetFont("Arial","UI",11);
$pdf->Cell(190,4,"Printed On: ".$day.", ".$currentdate.", ".$time,0,0,'C');
$pdf->SetFont("Arial","BI",10);
// }

$pdf->Output(); 
?>