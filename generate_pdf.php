<?php
ini_set('display_startup_errors', true);
error_reporting(E_ALL);
ini_set('display_errors', true);
set_time_limit(0);
include 'userSignup.php';

if(isset($_POST['examinations']) AND !(empty($_SESSION['username']))) {
$examinations = trim($_POST['examinations']);
$user_id = $_SESSION['from_user_id'];
$cat1 = 'CAT1';
$cat2 = 'CAT2';
$cat3 = 'CAT3';
$sco1 = 'SCO1';
$sco2 = 'SCO2';
$tot = 'TOT';
}
else if(isset($_POST['examination']) AND !(empty($_SESSION['username']))) {
$examinations = trim($_POST['examination']);
$user_id = $_SESSION['from_user_id'];
$cat1 = 'Score';
$cat2 = 'Score';
$cat3 = 'Score';
$sco1 = 'CAT';
$sco2 = 'EXAM';
$tot  = 'TOT';
}
else {
  header('location: index.php');
}

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

$stmt1 = $connect->prepare("SELECT * FROM `{$examinations}`
  WHERE AdmNo = '$user_id' AND Subject = 101 LIMIT 1"); 
$stmt1->execute(); 
$cat_one_eng = $stmt1->fetch();

$stmt5 = $connect->prepare("SELECT * FROM `{$examinations}`
  WHERE AdmNo = '$user_id' AND Subject = 102 LIMIT 1");
$stmt5->execute(); 
$cat_one_kis = $stmt5->fetch();

$stmt9 = $connect->prepare("SELECT * FROM `{$examinations}`
  WHERE AdmNo = '$user_id' AND Subject = 121 LIMIT 1");
$stmt9->execute(); 
$cat_one_mat = $stmt9->fetch();

$stmt13 = $connect->prepare("SELECT * FROM `{$examinations}`
  WHERE AdmNo = '$user_id' AND Subject = 231 LIMIT 1");
$stmt13->execute(); 
$cat_one_bio = $stmt13->fetch();

$stmt17 = $connect->prepare("SELECT * FROM `{$examinations}`
  WHERE AdmNo = '$user_id' AND Subject = 232 LIMIT 1");
$stmt17->execute(); 
$cat_one_phy = $stmt17->fetch();

$stmt21 = $connect->prepare("SELECT * FROM `{$examinations}`
  WHERE AdmNo = '$user_id' AND Subject = 233 LIMIT 1");
$stmt21->execute(); 
$cat_one_che = $stmt21->fetch();

$stmt25 = $connect->prepare("SELECT * FROM `{$examinations}`
  WHERE AdmNo = '$user_id' AND Subject = 311 LIMIT 1");
$stmt25->execute(); 
$cat_one_his = $stmt25->fetch();

$stmt29 = $connect->prepare("SELECT * FROM `{$examinations}`
  WHERE AdmNo = '$user_id' AND Subject = 312 LIMIT 1");
$stmt29->execute(); 
$cat_one_geo = $stmt29->fetch();

$stmt33 = $connect->prepare("SELECT * FROM `{$examinations}`
  WHERE AdmNo = '$user_id' AND Subject = 314 LIMIT 1");
$stmt33->execute(); 
$cat_one_ire = $stmt33->fetch();

$stmt68 = $connect->prepare("SELECT * FROM `{$examinations}`
  WHERE AdmNo = '$user_id' AND Subject = 313 LIMIT 1");
$stmt68->execute(); 
$cat_one_cre = $stmt68->fetch();

$stmt37 = $connect->prepare("SELECT * FROM `{$examinations}`
  WHERE AdmNo = '$user_id' AND Subject = 441 LIMIT 1");
$stmt37->execute(); 
$cat_one_hom = $stmt37->fetch();

$stmt41 = $connect->prepare("SELECT * FROM `{$examinations}`
  WHERE AdmNo = '$user_id' AND Subject = 443 LIMIT 1");
$stmt41->execute(); 
$cat_one_agr = $stmt41->fetch();

$stmt45 = $connect->prepare("SELECT * FROM `{$examinations}`
  WHERE AdmNo = '$user_id' AND Subject = 451 LIMIT 1");
$stmt45->execute(); 
$cat_one_com = $stmt45->fetch();

$stmt49 = $connect->prepare("SELECT * FROM `{$examinations}`
  WHERE AdmNo = '$user_id' AND Subject = 503 LIMIT 1");
$stmt49->execute(); 
$cat_one_ara = $stmt49->fetch();

$stmt53 = $connect->prepare("SELECT * FROM `{$examinations}`
  WHERE AdmNo = '$user_id' AND Subject = 565 LIMIT 1");
$stmt53->execute(); 
$cat_one_bus = $stmt53->fetch();

/*
$stmt57 = $connect->prepare("SELECT * FROM `{$examinations}`
  WHERE AdmNo = '$user_id' AND Subject = NE1 LIMIT 1");
$stmt57->execute(); 
$cat_one_Ped = $stmt57->fetch();

$stmt61 = $connect->prepare("SELECT * FROM `{$examinations}`
  WHERE AdmNo = '$user_id' AND Subject = NE2 LIMIT 1");
$stmt61->execute(); 
$cat_one_Lsk = $stmt61->fetch();
*/

$que = "SELECT * FROM registration WHERE CurrentClass = (SELECT CurrentClass FROM registration WHERE AdmNo = '$user_id')";
$statemen = $connect->prepare($que);
$statemen->execute();
$res = $statemen->fetchAll();
foreach($res as $rowww)
{
$resu1= mysqli_query($conn, "SELECT AdmNo, rank, total_score
FROM (SELECT *,  IF(@marks=(@marks:=total_score), @auto, @auto:=@auto+1) AS rank 
FROM (SELECT * FROM 
  (SELECT AdmNo, SUM(Score) AS total_score 
    FROM `{$examination}`, 
    (SELECT @auto:=0, @marks:=0) as init 
     GROUP BY AdmNo) sub ORDER BY total_score DESC)t) as result
WHERE AdmNo = '$user_id'");
$row1 = mysqli_fetch_assoc($resu1); 
$sum       = $row1['total_score'];
$position  = $row1['rank'];
$totalMarks = round($sum, 0);
}

foreach ( $exams_eng as $idx => $val ) {
    $result[] = [ $exams_eng[$idx], $exams_kis[$idx], $exams_mat[$idx], $exams_bio[$idx], $exams_phy[$idx], $exams_che[$idx], $exams_his[$idx], $exams_geo[$idx], $exams_ire[$idx], $exams_cre[$idx], $exams_hom[$idx], $exams_agr[$idx], $exams_com[$idx], $exams_ara[$idx], $exams_bus[$idx] ];
}

//switch grading system
$gradies     = array();
$remarkies   = array();
$remarkables = array();
$pointies    = array();
foreach ($result[6] as $key => $workScore){
switch($workScore) {
case round($workScore, 0) == 0:
    $grade = "N/A";
    $points = "N/A";
    $remark = "N/A";
    $trmark = "N/A";
    break;
case round($workScore, 0) >= 80 and round($workScore, 0) <= 100:
    $grade = "A";
    $points = 12;
    $remark = "EXCELLENT";
    $trmark = "EXCELLENT PERFOMANCE KEEP IT UP.";
    break;
case round($workScore, 0) >= 75 and round($workScore, 0) <= 79:
    $grade = "A-";
     $points = 11;
     $remark = "V.GOOD";
      $trmark = "VERY GOOD PERFOMANCE. KEEP IT UP.";
    break;
case round($workScore, 0) >= 70 and round($workScore, 0) <= 74:
    $grade = "B+";
     $points = 10;
     $remark = "V.GOOD";
     $trmark = "VERY GOOD PERFOMANCE. KEEP IT UP.";
    break;
 case round($workScore, 0) >= 65 and round($workScore, 0) <= 69:
    $grade = "B";
     $points = 9;
     $remark = "V.GOOD";
     $trmark = "GOOD PERFOMANCE. YOU CAN IMPROVE.";
    break;
 case round($workScore, 0) >= 60 and round($workScore, 0) <= 64:
    $grade = "B-";
     $points = 8;
     $remark = "GOOD";
        $trmark = "GOOD PERFOMANCE. YOU CAN IMPROVE.";
    break;
 case round($workScore, 0) >= 55 and round($workScore, 0) <= 59:
    $grade = "C+";
     $points = 7;
     $remark = "GOOD";
      $trmark = "FAIR PERFOMANCE. IMPROVE IN THE WEAK GRADES.";
    break;
 case round($workScore, 0) >= 50 and round($workScore, 0) <= 54:
    $grade = "C";
     $points = 6;
      $remark = "AVERAGE";
       $trmark = "FAIR PERFOMANCE. IMPROVE IN THE WEAK GRADES.";
    break;                
 case round($workScore, 0) >= 45 and round($workScore, 0) <= 49:
    $grade = "C-";
     $points = 5;
      $remark = "FAIR";
       $trmark = "QUITE FAIR. WORK HARDER.";
    break;     
 case round($workScore, 0) >= 40 and round($workScore, 0) <= 44:
    $grade = "D+";
     $points = 4;
      $remark = "CAN DO BETTER";
      $trmark = "WEAK PERFOMANCE. GET RID OF THE WEAK GRADES.";
    break;
 case round($workScore, 0) >= 35 and round($workScore, 0) <= 39:
    $grade = "D";
    $points = 3;
    $remark = "WORK HARDER";
    $trmark = "WEAK PERFOMANCE. GET RID OF THE WEAK GRADES.";
    break;
 case round($workScore, 0) >= 30 and round($workScore, 0) <= 34:
    $grade = "D-";
     $points = 2;
      $remark = "BELOW AVERAGE, WORK HARD";
      $trmark = "POOR PERFOMANCE. GET RID OF THE D'S AND E'S.";
    break;
  case round($workScore, 0) <= 29:
     $grade = "E";
     $points = 1;
     $remark = "BELOW AVERAGE, WORK HARD";
    $trmark = "VERY POOR. YOU NEED TO BE SERIOUS WITH YOUR STUDIES. ";
    break;               
default:
$grade = "Z";
    $points = 0;
    $remark = "AVOID MISSING EXAMS.";
    $trmark = "AVOID MISSING EXAMS.";
  }

$gradies[]     = $grade;
$remarkies[]   = $remark;
$remarkables[] = $trmark;
$pointies[]    = $points;
}



$query69 = mysqli_query($conn,"SELECT * FROM registration
  WHERE AdmNo = '".$user_id."'");
$name = mysqli_fetch_array($query69);

$user_group = array(
    'users.online'      => True,
    'users.location'    => True,
    'users.featured'    => True,
    'users.new'         => True,
    'users.browse'      => True,
    'users.search'      => True,
    'users.staff'       => True,
);


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
$pdf->Cell(10, 6, $sco1, 1, 0, 'C');
$pdf->Cell(12, 6, $sco2, 1, 0, 'C');
$pdf->Cell(10, 6, $tot, 1, 0, 'C');
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
$pdf->Cell(10, 5, round($cat_one_eng[$cat1], 0), 1, 0, 'C');
$pdf->Cell(12, 5, round($cat_one_eng[$cat2], 0), 1, 0, 'C');
$pdf->Cell(10, 5, round($cat_one_eng[$cat3], 0), 1, 0, 'C');
$pdf->Cell(10, 5, $gradies[0], 1, 0, 'C');
$pdf->Cell(10, 5, $pointies[0], 1, 0, 'C');
$pdf->Cell(13, 5, '22/48', 1, 0, 'C');
$pdf->Cell(33, 5, $remarkies[0], 1, 0, 'C');
$pdf->Cell(22, 5, 'H.A.C', 1, 0, 'C');
$pdf->Ln(5);
$pdf->SetFont("Arial","",9);
$pdf->Cell(70,5,"KISWAHILI",1,0,'L');
$pdf->SetX(80);
$pdf->Cell(10, 5, round($cat_one_kis[$cat1], 0), 1, 0, 'C');
$pdf->Cell(12, 5, round($cat_one_kis[$cat2], 0), 1, 0, 'C');
$pdf->Cell(10, 5, round($cat_one_kis[$cat3], 0), 1, 0, 'C');
$pdf->Cell(10, 5, $gradies[1], 1, 0, 'C');
$pdf->Cell(10, 5, $pointies[1], 1, 0, 'C');
$pdf->Cell(13, 5, '22/48', 1, 0, 'C');
$pdf->Cell(33, 5, $remarkies[1], 1, 0, 'C');
$pdf->Cell(22, 5, 'H.A.C', 1, 0, 'C');
$pdf->Ln(5);
$pdf->SetFont("Arial","",9);
$pdf->Cell(70,5,"MATHEMATICS",1,0,'L');
$pdf->SetX(80);
$pdf->Cell(10, 5, round($cat_one_mat[$cat1], 0), 1, 0, 'C');
$pdf->Cell(12, 5, round($cat_one_mat[$cat2], 0), 1, 0, 'C');
$pdf->Cell(10, 5, round($cat_one_mat[$cat3], 0), 1, 0, 'C');
$pdf->Cell(10, 5, $gradies[2], 1, 0, 'C');
$pdf->Cell(10, 5, $pointies[2], 1, 0, 'C');
$pdf->Cell(13, 5, '22/48', 1, 0, 'C');
$pdf->Cell(33, 5, $remarkies[2], 1, 0, 'C');
$pdf->Cell(22, 5, 'H.A.C', 1, 0, 'C');
$pdf->Ln(5);
$pdf->SetFont("Arial","",9);
$pdf->Cell(70,5,"BIOLOGY",1,0,'L');
$pdf->SetX(80);
$pdf->Cell(10, 5, round($cat_one_bio[$cat1], 0), 1, 0, 'C');
$pdf->Cell(12, 5, round($cat_one_bio[$cat2], 0), 1, 0, 'C');
$pdf->Cell(10, 5, round($cat_one_bio[$cat3], 0), 1, 0, 'C');
$pdf->Cell(10, 5, $gradies[3], 1, 0, 'C');
$pdf->Cell(10, 5, $pointies[3], 1, 0, 'C');
$pdf->Cell(13, 5, '22/48', 1, 0, 'C');
$pdf->Cell(33, 5, $remarkies[3], 1, 0, 'C');
$pdf->Cell(22, 5, 'H.A.C', 1, 0, 'C');
$pdf->Ln(5);
$pdf->SetFont("Arial","",9);
$pdf->Cell(70,5,"PHYSICS",1,0,'L');
$pdf->SetX(80);
$pdf->Cell(10, 5, round($cat_one_phy[$cat1], 0), 1, 0, 'C');
$pdf->Cell(12, 5, round($cat_one_phy[$cat2], 0), 1, 0, 'C');
$pdf->Cell(10, 5, round($cat_one_phy[$cat3], 0), 1, 0, 'C');
$pdf->Cell(10, 5, $gradies[4], 1, 0, 'C');
$pdf->Cell(10, 5, $pointies[4], 1, 0, 'C');
$pdf->Cell(13, 5, '22/48', 1, 0, 'C');
$pdf->Cell(33, 5, $remarkies[4], 1, 0, 'C');
$pdf->Cell(22, 5, 'H.A.C', 1, 0, 'C');
$pdf->Ln(5);
$pdf->SetFont("Arial","",9);
$pdf->Cell(70,5,"CHEMISTRY",1,0,'L');
$pdf->SetX(80);
$pdf->Cell(10, 5, round($cat_one_che[$cat1], 0), 1, 0, 'C');
$pdf->Cell(12, 5, round($cat_one_che[$cat2], 0), 1, 0, 'C');
$pdf->Cell(10, 5, round($cat_one_che[$cat3], 0), 1, 0, 'C');
$pdf->Cell(10, 5, $gradies[5], 1, 0, 'C');
$pdf->Cell(10, 5, $pointies[5], 1, 0, 'C');
$pdf->Cell(13, 5, '22/48', 1, 0, 'C');
$pdf->Cell(33, 5, $remarkies[5], 1, 0, 'C');
$pdf->Cell(22, 5, 'H.A.C', 1, 0, 'C');
$pdf->Ln(5);
$pdf->SetFont("Arial","",9);
$pdf->Cell(70,5,"HISTORY AND GOVERNMENT",1,0,'L');
$pdf->SetX(80);
$pdf->Cell(10, 5, round($cat_one_his[$cat1], 0), 1, 0, 'C');
$pdf->Cell(12, 5, round($cat_one_his[$cat2], 0), 1, 0, 'C');
$pdf->Cell(10, 5, round($cat_one_his[$cat3], 0), 1, 0, 'C');
$pdf->Cell(10, 5, $gradies[6], 1, 0, 'C');
$pdf->Cell(10, 5, $pointies[6], 1, 0, 'C');
$pdf->Cell(13, 5, '22/48', 1, 0, 'C');
$pdf->Cell(33, 5, $remarkies[6], 1, 0, 'C');
$pdf->Cell(22, 5, 'H.A.C', 1, 0, 'C');
$pdf->Ln(5);
$pdf->SetFont("Arial","",9);
$pdf->Cell(70,5,"GEOGRAPHY",1,0,'L');
$pdf->SetX(80);
$pdf->Cell(10, 5, round($cat_one_geo[$cat1], 0), 1, 0, 'C');
$pdf->Cell(12, 5, round($cat_one_geo[$cat2], 0), 1, 0, 'C');
$pdf->Cell(10, 5, round($cat_one_geo[$cat3], 0), 1, 0, 'C');
$pdf->Cell(10, 5, $gradies[7], 1, 0, 'C');
$pdf->Cell(10, 5, $pointies[7], 1, 0, 'C');
$pdf->Cell(13, 5, '22/48', 1, 0, 'C');
$pdf->Cell(33, 5, $remarkies[7], 1, 0, 'C');
$pdf->Cell(22, 5, 'H.A.C', 1, 0, 'C');
$pdf->Ln(5);
$pdf->SetFont("Arial","",9);
$pdf->Cell(70,5,"ISLAMIC R. E.",1,0,'L');
$pdf->SetX(80);
$pdf->Cell(10, 5, round($cat_one_ire[$cat1], 0), 1, 0, 'C');
$pdf->Cell(12, 5, round($cat_one_ire[$cat2], 0), 1, 0, 'C');
$pdf->Cell(10, 5, round($cat_one_ire[$cat3], 0), 1, 0, 'C');
$pdf->Cell(10, 5, $gradies[8], 1, 0, 'C');
$pdf->Cell(10, 5, $pointies[8], 1, 0, 'C');
$pdf->Cell(13, 5, '22/48', 1, 0, 'C');
$pdf->Cell(33, 5, $remarkies[8], 1, 0, 'C');
$pdf->Cell(22, 5, 'H.A.C', 1, 0, 'C');
$pdf->Ln(5);
$pdf->SetFont("Arial","",9);
$pdf->Cell(70,5,"HOME SCIENCE",1,0,'L');
$pdf->SetX(80);
$pdf->Cell(10, 5, round($cat_one_hom[$cat1], 0), 1, 0, 'C');
$pdf->Cell(12, 5, round($cat_one_hom[$cat2], 0), 1, 0, 'C');
$pdf->Cell(10, 5, round($cat_one_hom[$cat3], 0), 1, 0, 'C');
$pdf->Cell(10, 5, $gradies[10], 1, 0, 'C');
$pdf->Cell(10, 5, $pointies[10], 1, 0, 'C');
$pdf->Cell(13, 5, '22/48', 1, 0, 'C');
$pdf->Cell(33, 5, $remarkies[10], 1, 0, 'C');
$pdf->Cell(22, 5, 'H.A.C', 1, 0, 'C');
$pdf->Ln(5);
$pdf->SetFont("Arial","",9);
$pdf->Cell(70,5,"ARABIC",1,0,'L');
$pdf->SetX(80);
$pdf->Cell(10, 5, round($cat_one_ara[$cat1], 0), 1, 0, 'C');
$pdf->Cell(12, 5, round($cat_one_ara[$cat2], 0), 1, 0, 'C');
$pdf->Cell(10, 5, round($cat_one_ara[$cat3], 0), 1, 0, 'C');
$pdf->Cell(10, 5, $gradies[13], 1, 0, 'C');
$pdf->Cell(10, 5, $pointies[13], 1, 0, 'C');
$pdf->Cell(13, 5, '22/48', 1, 0, 'C');
$pdf->Cell(33, 5, $remarkies[13], 1, 0, 'C');
$pdf->Cell(22, 5, 'H.A.C', 1, 0, 'C');
$pdf->Ln(5);
$pdf->SetFont("Arial","",9);
$pdf->Cell(70,5,"BUSSINESS STUDIES",1,0,'L');
$pdf->SetX(80);
$pdf->Cell(10, 5, round($cat_one_bus[$cat1], 0), 1, 0, 'C');
$pdf->Cell(12, 5, round($cat_one_bus[$cat2], 0), 1, 0, 'C');
$pdf->Cell(10, 5, round($cat_one_bus[$cat3], 0), 1, 0, 'C');
$pdf->Cell(10, 5, $gradies[14], 1, 0, 'C');
$pdf->Cell(10, 5, $pointies[14], 1, 0, 'C');
$pdf->Cell(13, 5, '22/48', 1, 0, 'C');
$pdf->Cell(33, 5, $remarkies[14], 1, 0, 'C');
$pdf->Cell(22, 5, 'H.A.C', 1, 0, 'C');
$pdf->Ln(5);
$pdf->SetFont("Arial","",9);
$pdf->Cell(70,5,"COMPUTER STUDIES",1,0,'L');
$pdf->SetX(80);
$pdf->Cell(10, 5, round($cat_one_com[$cat1], 0), 1, 0, 'C');
$pdf->Cell(12, 5, round($cat_one_com[$cat2], 0), 1, 0, 'C');
$pdf->Cell(10, 5, round($cat_one_com[$cat3], 0), 1, 0, 'C');
$pdf->Cell(10, 5, $gradies[12], 1, 0, 'C');
$pdf->Cell(10, 5, $pointies[12], 1, 0, 'C');
$pdf->Cell(13, 5, '22/48', 1, 0, 'C');
$pdf->Cell(33, 5, $remarkies[12], 1, 0, 'C');
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