<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
   <title>Report Form</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
<style>
table#t01 {
  width:80%;
  align-self: center;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 1px;
  text-align: left;
  text-overflow: wrap !important;
  white-space: pre-wrap !important;
}
table#t01 tr:nth-child(even) {
  background-color: #eee;
}
table#t01 tr:nth-child(odd) {
 background-color: #fff;
}
table#t01 th {
  background-color: grey;
  color: white;
}
</style>
</head>
<body>
<?php
include("../config.php");
$output = '';
$year  = $_POST['ddlacyear'];
$term  = $_POST['ddlterms'];
$exams = $_POST['exams'];
if ($year == '1' && $term == 'Term1' && $exams == 'cat1') {
  $examination = 'c111';
}
else if ($year == '1' && $term == 'Term2' && $exams == 'cat1') {
  $examination = 'c112';
}
else if ($year == '1' && $term == 'Term3' && $exams == 'cat1') {
  $examination = 'c113';
}
else if ($year == '2' && $term == 'Term1' && $exams == 'cat1') {
  $examination = 'c121';
}
else if ($year == '2' && $term == 'Term2' && $exams == 'cat1') {
  $examination = 'c122';
}
else if ($year == '2' && $term == 'Term3' && $exams == 'cat1') {
  $examination = 'c123';
}
else if ($year == '3' && $term == 'Term1' && $exams == 'cat1') {
  $examination = 'c131';
}
else if ($year == '3' && $term == 'Term2' && $exams == 'cat1') {
  $examination = 'c132';
}
else if ($year == '3' && $term == 'Term3' && $exams == 'cat1') {
  $examination = 'c133';
}
else if ($year == '4' && $term == 'Term1' && $exams == 'cat1') {
  $examination = 'c141';
}
else if ($year == '4' && $term == 'Term2' && $exams == 'cat1') {
  $examination = 'c142';
}
else if ($year == '4' && $term == 'Term3' && $exams == 'cat1') {
  $examination = 'c143';
}
else if ($year == '5' && $term == 'Term1' && $exams == 'cat1') {
  $examination = 'c151';
}
else if ($year == '5' && $term == 'Term2' && $exams == 'cat1') {
  $examination = 'c152';
}
else if ($year == '5' && $term == 'Term3' && $exams == 'cat1') {
  $examination = 'c153';
}
else if ($year == '6' && $term == 'Term1' && $exams == 'cat1') {
  $examination = 'c161';
}
else if ($year == '6' && $term == 'Term2' && $exams == 'cat1') {
  $examination = 'c162';
}
else if ($year == '6' && $term == 'Term3' && $exams == 'cat1') {
  $examination = 'c163';
}
else if ($year == '7' && $term == 'Term1' && $exams == 'cat1') {
  $examination = 'c171';
}
else if ($year == '7' && $term == 'Term2' && $exams == 'cat1') {
  $examination = 'c172';
}
else if ($year == '7' && $term == 'Term3' && $exams == 'cat1') {
  $examination = 'c173';
}
else if ($year == '8' && $term == 'Term1' && $exams == 'cat1') {
  $examination = 'c181';
}
else if ($year == '8' && $term == 'Term2' && $exams == 'cat1') {
  $examination = 'c182';
}
else if ($year == '8' && $term == 'Term3' && $exams == 'cat1') {
  $examination = 'c183';
}


else if ($year == '1' && $term == 'Term1' && $exams == 'cat2') {
  $examination = 'c211';
}
else if ($year == '1' && $term == 'Term2' && $exams == 'cat2') {
  $examination = 'c212';
}
else if ($year == '1' && $term == 'Term3' && $exams == 'cat2') {
  $examination = 'c213';
}
else if ($year == '2' && $term == 'Term1' && $exams == 'cat2') {
  $examination = 'c221';
}
else if ($year == '2' && $term == 'Term2' && $exams == 'cat2') {
  $examination = 'c222';
}
else if ($year == '2' && $term == 'Term3' && $exams == 'cat2') {
  $examination = 'c223';
}
else if ($year == '3' && $term == 'Term1' && $exams == 'cat2') {
  $examination = 'c231';
}
else if ($year == '3' && $term == 'Term2' && $exams == 'cat2') {
  $examination = 'c232';
}
else if ($year == '3' && $term == 'Term3' && $exams == 'cat2') {
  $examination = 'c233';
}
else if ($year == '4' && $term == 'Term1' && $exams == 'cat2') {
  $examination = 'c241';
}
else if ($year == '4' && $term == 'Term2' && $exams == 'cat2') {
  $examination = 'c242';
}
else if ($year == '4' && $term == 'Term3' && $exams == 'cat2') {
  $examination = 'c243';
}
else if ($year == '5' && $term == 'Term1' && $exams == 'cat2') {
  $examination = 'c251';
}
else if ($year == '5' && $term == 'Term2' && $exams == 'cat2') {
  $examination = 'c252';
}
else if ($year == '5' && $term == 'Term3' && $exams == 'cat2') {
  $examination = 'c253';
}
else if ($year == '6' && $term == 'Term1' && $exams == 'cat2') {
  $examination = 'c261';
}
else if ($year == '6' && $term == 'Term2' && $exams == 'cat2') {
  $examination = 'c262';
}
else if ($year == '6' && $term == 'Term3' && $exams == 'cat2') {
  $examination = 'c263';
}
else if ($year == '7' && $term == 'Term1' && $exams == 'cat2') {
  $examination = 'c271';
}
else if ($year == '7' && $term == 'Term2' && $exams == 'cat2') {
  $examination = 'c272';
}
else if ($year == '7' && $term == 'Term3' && $exams == 'cat2') {
  $examination = 'c273';
}
else if ($year == '8' && $term == 'Term1' && $exams == 'cat2') {
  $examination = 'c281';
}
else if ($year == '8' && $term == 'Term2' && $exams == 'cat2') {
  $examination = 'c282';
}
else if ($year == '8' && $term == 'Term3' && $exams == 'cat2') {
  $examination = 'c283';
}


else if ($year == '1' && $term == 'Term1' && $exams == 'cat3') {
  $examination = 'c311';
}
else if ($year == '1' && $term == 'Term2' && $exams == 'cat3') {
  $examination = 'c312';
}
else if ($year == '1' && $term == 'Term3' && $exams == 'cat3') {
  $examination = 'c313';
}
else if ($year == '2' && $term == 'Term1' && $exams == 'cat3') {
  $examination = 'c321';
}
else if ($year == '2' && $term == 'Term2' && $exams == 'cat3') {
  $examination = 'c322';
}
else if ($year == '2' && $term == 'Term3' && $exams == 'cat3') {
  $examination = 'c323';
}
else if ($year == '3' && $term == 'Term1' && $exams == 'cat3') {
  $examination = 'c331';
}
else if ($year == '3' && $term == 'Term2' && $exams == 'cat3') {
  $examination = 'c332';
}
else if ($year == '3' && $term == 'Term3' && $exams == 'cat3') {
  $examination = 'c333';
}
else if ($year == '4' && $term == 'Term1' && $exams == 'cat3') {
  $examination = 'c341';
}
else if ($year == '4' && $term == 'Term2' && $exams == 'cat3') {
  $examination = 'c342';
}
else if ($year == '4' && $term == 'Term3' && $exams == 'cat3') {
  $examination = 'c343';
}
else if ($year == '5' && $term == 'Term1' && $exams == 'cat3') {
  $examination = 'c351';
}
else if ($year == '5' && $term == 'Term2' && $exams == 'cat3') {
  $examination = 'c352';
}
else if ($year == '5' && $term == 'Term3' && $exams == 'cat3') {
  $examination = 'c353';
}
else if ($year == '6' && $term == 'Term1' && $exams == 'cat3') {
  $examination = 'c361';
}
else if ($year == '6' && $term == 'Term2' && $exams == 'cat3') {
  $examination = 'c362';
}
else if ($year == '6' && $term == 'Term3' && $exams == 'cat3') {
  $examination = 'c363';
}
else if ($year == '7' && $term == 'Term1' && $exams == 'cat3') {
  $examination = 'c371';
}
else if ($year == '7' && $term == 'Term2' && $exams == 'cat3') {
  $examination = 'c372';
}
else if ($year == '7' && $term == 'Term3' && $exams == 'cat3') {
  $examination = 'c373';
}
else if ($year == '8' && $term == 'Term1' && $exams == 'cat3') {
  $examination = 'c381';
}
else if ($year == '8' && $term == 'Term2' && $exams == 'cat3') {
  $examination = 'c382';
}
else if ($year == '8' && $term == 'Term3' && $exams == 'cat3') {
  $examination = 'c383';
}



else if ($year == '1' && $term == 'Term1' && $exams == 'term') {
  $examination = 'e11';
}
else if ($year == '1' && $term == 'Term2' && $exams == 'term') {
  $examination = 'e12';
}
else if ($year == '1' && $term == 'Term3' && $exams == 'term') {
  $examination = 'e13';
}
else if ($year == '2' && $term == 'Term1' && $exams == 'term') {
  $examination = 'e21';
}
else if ($year == '2' && $term == 'Term2' && $exams == 'term') {
  $examination = 'e22';
}
else if ($year == '2' && $term == 'Term3' && $exams == 'term') {
  $examination = 'e23';
}
else if ($year == '3' && $term == 'Term1' && $exams == 'term') {
  $examination = 'e31';
}
else if ($year == '3' && $term == 'Term2' && $exams == 'term') {
  $examination = 'e32';
}
else if ($year == '3' && $term == 'Term3' && $exams == 'term') {
  $examination = 'e33';
}
else if ($year == '4' && $term == 'Term1' && $exams == 'term') {
  $examination = 'e41';
}
else if ($year == '4' && $term == 'Term2' && $exams == 'term') {
  $examination = 'e42';
}
else if ($year == '4' && $term == 'Term3' && $exams == 'term') {
  $examination = 'e43';
}
else if ($year == '5' && $term == 'Term1' && $exams == 'term') {
  $examination = 'e51';
}
else if ($year == '5' && $term == 'Term2' && $exams == 'term') {
  $examination = 'e52';
}
else if ($year == '5' && $term == 'Term3' && $exams == 'term') {
  $examination = 'e53';
}
else if ($year == '6' && $term == 'Term1' && $exams == 'term') {
  $examination = 'e61';
}
else if ($year == '6' && $term == 'Term2' && $exams == 'term') {
  $examination = 'e62';
}
else if ($year == '6' && $term == 'Term3' && $exams == 'term') {
  $examination = 'e63';
}
else if ($year == '7' && $term == 'Term1' && $exams == 'term') {
  $examination = 'e71';
}
else if ($year == '7' && $term == 'Term2' && $exams == 'term') {
  $examination = 'e72';
}
else if ($year == '7' && $term == 'Term3' && $exams == 'term') {
  $examination = 'e73';
}
else if ($year == '8' && $term == 'Term1' && $exams == 'term') {
  $examination = 'e81';
}
else if ($year == '8' && $term == 'Term2' && $exams == 'term') {
  $examination = 'e82';
}
else if ($year == '8' && $term == 'Term3' && $exams == 'term') {
  $examination = 'e83';
}



else if ($year == '1' && $term == 'Term1' && $exams == 'othe') {
  $examination = 'e11';
}
else if ($year == '1' && $term == 'Term2' && $exams == 'othe') {
  $examination = 'm12';
}
else if ($year == '1' && $term == 'Term3' && $exams == 'othe') {
  $examination = 'm13';
}
else if ($year == '2' && $term == 'Term1' && $exams == 'othe') {
  $examination = 'm21';
}
else if ($year == '2' && $term == 'Term2' && $exams == 'othe') {
  $examination = 'm22';
}
else if ($year == '2' && $term == 'Term3' && $exams == 'othe') {
  $examination = 'm23';
}
else if ($year == '3' && $term == 'Term1' && $exams == 'othe') {
  $examination = 'm31';
}
else if ($year == '3' && $term == 'Term2' && $exams == 'othe') {
  $examination = 'm32';
}
else if ($year == '3' && $term == 'Term3' && $exams == 'othe') {
  $examination = 'm33';
}
else if ($year == '4' && $term == 'Term1' && $exams == 'othe') {
  $examination = 'm41';
}
else if ($year == '4' && $term == 'Term2' && $exams == 'othe') {
  $examination = 'm42';
}
else if ($year == '4' && $term == 'Term3' && $exams == 'othe') {
  $examination = 'm43';
}
else if ($year == '5' && $term == 'Term1' && $exams == 'othe') {
  $examination = 'm51';
}
else if ($year == '5' && $term == 'Term2' && $exams == 'othe') {
  $examination = 'm52';
}
else if ($year == '5' && $term == 'Term3' && $exams == 'othe') {
  $examination = 'm53';
}
else if ($year == '6' && $term == 'Term1' && $exams == 'othe') {
  $examination = 'm61';
}
else if ($year == '6' && $term == 'Term2' && $exams == 'othe') {
  $examination = 'm62';
}
else if ($year == '6' && $term == 'Term3' && $exams == 'othe') {
  $examination = 'm63';
}
else if ($year == '7' && $term == 'Term1' && $exams == 'othe') {
  $examination = 'm71';
}
else if ($year == '7' && $term == 'Term2' && $exams == 'othe') {
  $examination = 'm72';
}
else if ($year == '7' && $term == 'Term3' && $exams == 'othe') {
  $examination = 'm73';
}
else if ($year == '8' && $term == 'Term1' && $exams == 'othe') {
  $examination = 'm81';
}
else if ($year == '8' && $term == 'Term2' && $exams == 'othe') {
  $examination = 'm82';
}
else if ($year == '8' && $term == 'Term3' && $exams == 'othe') {
  $examination = 'm83';
}



else if ($year == '1' && $term == 'Term1' && $exams == 'othe') {
  $examination = 'e11';
}
else if ($year == '1' && $term == 'Term2' && $exams == 'othe') {
  $examination = 'o12';
}
else if ($year == '1' && $term == 'Term3' && $exams == 'othe') {
  $examination = 'o13';
}
else if ($year == '2' && $term == 'Term1' && $exams == 'othe') {
  $examination = 'o21';
}
else if ($year == '2' && $term == 'Term2' && $exams == 'othe') {
  $examination = 'o22';
}
else if ($year == '2' && $term == 'Term3' && $exams == 'othe') {
  $examination = 'o23';
}
else if ($year == '3' && $term == 'Term1' && $exams == 'othe') {
  $examination = 'o31';
}
else if ($year == '3' && $term == 'Term2' && $exams == 'othe') {
  $examination = 'o32';
}
else if ($year == '3' && $term == 'Term3' && $exams == 'othe') {
  $examination = 'o33';
}
else if ($year == '4' && $term == 'Term1' && $exams == 'othe') {
  $examination = 'o41';
}
else if ($year == '4' && $term == 'Term2' && $exams == 'othe') {
  $examination = 'o42';
}
else if ($year == '4' && $term == 'Term3' && $exams == 'othe') {
  $examination = 'o43';
}
else if ($year == '5' && $term == 'Term1' && $exams == 'othe') {
  $examination = 'o51';
}
else if ($year == '5' && $term == 'Term2' && $exams == 'othe') {
  $examination = 'o52';
}
else if ($year == '5' && $term == 'Term3' && $exams == 'othe') {
  $examination = 'o53';
}
else if ($year == '6' && $term == 'Term1' && $exams == 'othe') {
  $examination = 'o61';
}
else if ($year == '6' && $term == 'Term2' && $exams == 'othe') {
  $examination = 'o62';
}
else if ($year == '6' && $term == 'Term3' && $exams == 'othe') {
  $examination = 'o63';
}
else if ($year == '7' && $term == 'Term1' && $exams == 'othe') {
  $examination = 'o71';
}
else if ($year == '7' && $term == 'Term2' && $exams == 'othe') {
  $examination = 'o72';
}
else if ($year == '7' && $term == 'Term3' && $exams == 'othe') {
  $examination = 'o73';
}
else if ($year == '8' && $term == 'Term1' && $exams == 'othe') {
  $examination = 'o81';
}
else if ($year == '8' && $term == 'Term2' && $exams == 'othe') {
  $examination = 'o82';
}
else if ($year == '8' && $term == 'Term3' && $exams == 'othe') {
  $examination = 'o83';
}


include '../userSignup.php';
$user_id = $_SESSION['from_user_id'];

$stmt1 = $connect->prepare("SELECT * FROM `{$examination}`
  WHERE AdmNo = '$user_id' AND Subject = 101"); 
$stmt1->execute(); 
$exams_eng = $stmt1->fetch();

$stmt5 = $connect->prepare("SELECT * FROM `{$examination}`
  WHERE AdmNo = '$user_id' AND Subject = 102 LIMIT 1");
$stmt5->execute(); 
$exams_kis = $stmt5->fetch();

$stmt9 = $connect->prepare("SELECT * FROM `{$examination}`
  WHERE AdmNo = '$user_id' AND Subject = 121");
$stmt9->execute(); 
$exams_mat = $stmt9->fetch();

$stmt13 = $connect->prepare("SELECT * FROM `{$examination}`
  WHERE AdmNo = '$user_id' AND Subject = 231");
$stmt13->execute(); 
$exams_bio = $stmt13->fetch();

$stmt17 = $connect->prepare("SELECT * FROM `{$examination}`
  WHERE AdmNo = '$user_id' AND Subject = 232 LIMIT 1");
$stmt17->execute(); 
$exams_phy = $stmt17->fetch();

$stmt21 = $connect->prepare("SELECT * FROM `{$examination}`
  WHERE AdmNo = '$user_id' AND Subject = 233 LIMIT 1");
$stmt21->execute(); 
$exams_che = $stmt21->fetch();

$stmt25 = $connect->prepare("SELECT * FROM `{$examination}`
  WHERE AdmNo = '$user_id' AND Subject = 311");
$stmt25->execute(); 
$exams_his = $stmt25->fetch();

$stmt29 = $connect->prepare("SELECT * FROM `{$examination}`
  WHERE AdmNo = '$user_id' AND Subject = 312 LIMIT 1");
$stmt29->execute(); 
$exams_geo = $stmt29->fetch();

$stmt33 = $connect->prepare("SELECT * FROM `{$examination}`
  WHERE AdmNo = '$user_id' AND Subject = 314 LIMIT 1");
$stmt33->execute(); 
$exams_ire = $stmt33->fetch();

$stmt68 = $connect->prepare("SELECT * FROM `{$examination}`
  WHERE AdmNo = '$user_id' AND Subject = 313 LIMIT 1");
$stmt68->execute(); 
$exams_cre = $stmt68->fetch();

$stmt37 = $connect->prepare("SELECT * FROM `{$examination}`
  WHERE AdmNo = '$user_id' AND Subject = 441");
$stmt37->execute(); 
$exams_hom = $stmt37->fetch();

$stmt41 = $connect->prepare("SELECT * FROM `{$examination}`
  WHERE AdmNo = '$user_id' AND Subject = 443 LIMIT 1");
$stmt41->execute(); 
$exams_agr = $stmt41->fetch();

$stmt45 = $connect->prepare("SELECT * FROM `{$examination}`
  WHERE AdmNo = '$user_id' AND Subject = 451");
$stmt45->execute(); 
$exams_com = $stmt45->fetch();

$stmt49 = $connect->prepare("SELECT * FROM `{$examination}`
  WHERE AdmNo = '$user_id' AND Subject = 503 LIMIT 1");
$stmt49->execute(); 
$exams_ara = $stmt49->fetch();

$stmt53 = $connect->prepare("SELECT * FROM `{$examination}`
  WHERE AdmNo = '$user_id' AND Subject = 565 LIMIT 1");
$stmt53->execute(); 
$exams_bus = $stmt53->fetch();
/*
$stmt57 = $connect->prepare("SELECT * FROM `{$examination}`
  WHERE AdmNo = '$user_id' AND Subject = NE1");
$stmt57->execute(); 
$exams_Ped = $stmt57->fetch();

$stmt61 = $connect->prepare("SELECT * FROM `{$examination}`
  WHERE AdmNo = '$user_id' AND Subject = NE2 LIMIT 1");
$stmt61->execute(); 
$exams_Lsk = $stmt61->fetch();
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


$to = 'To';
$from = 'From';
$eng_meanScore1 = round($exams_eng['Score'], 0);
$kis_meanScore1 = round($exams_kis['Score'], 0);
$mat_meanScore1 = round($exams_mat['Score'], 0);
$bio_meanScore1 = round($exams_bio['Score'], 0);
$phy_meanScore1 = round($exams_phy['Score'], 0);
$che_meanScore1 = round($exams_che['Score'], 0);
$his_meanScore1 = round($exams_his['Score'], 0);
$geo_meanScore1 = round($exams_geo['Score'], 0);
$ire_meanScore1 = round($exams_ire['Score'], 0);
$cre_meanScore1 = round($exams_cre['Score'], 0);
$hom_meanScore1 = round($exams_hom['Score'], 0);
$com_meanScore1 = round($exams_com['Score'], 0);
$ara_meanScore1 = round($exams_ara['Score'], 0);
$bus_meanScore1 = round($exams_bus['Score'], 0);
//switch english score
$workScore = $eng_meanScore1;
switch($workScore) {
case $workScore >= 80:
    $grade = "A";
    $points = 12;
    $remark = "EXCELLENT";
    $trmark = "EXCELLENT PERFOMANCE KEEP IT UP.";
    break;
case $workScore >= 75 and $workScore <= 79:
    $grade = "A-";
     $points = 11;
     $remark = "V.GOOD";
      $trmark = "VERY GOOD PERFOMANCE. KEEP IT UP.";
    break;
case $workScore >= 70 and $workScore <= 74:
    $grade = "B+";
     $points = 10;
     $remark = "V.GOOD";
     $trmark = "VERY GOOD PERFOMANCE. KEEP IT UP.";
    break;
 case $workScore >= 65 and $workScore <= 69:
    $grade = "B";
     $points = 9;
     $remark = "V.GOOD";
     $trmark = "GOOD PERFOMANCE. YOU CAN IMPROVE.";
    break;
 case $workScore >= 60 and $workScore <= 64:
    $grade = "B-";
     $points = 8;
     $remark = "GOOD";
        $trmark = "GOOD PERFOMANCE. YOU CAN IMPROVE.";
    break;
 case $workScore >= 55 and $workScore <= 59:
    $grade = "C+";
     $points = 7;
     $remark = "GOOD";
      $trmark = "FAIR PERFOMANCE. IMPROVE IN THE WEAK GRADES.";
    break;
 case $workScore >= 50 and $workScore <= 54:
    $grade = "C";
     $points = 6;
      $remark = "AVERAGE";
       $trmark = "FAIR PERFOMANCE. IMPROVE IN THE WEAK GRADES.";
    break;                
 case $workScore >= 45 and $workScore <= 49:
    $grade = "C-";
     $points = 5;
      $remark = "FAIR";
       $trmark = "QUITE FAIR. WORK HARDER.";
    break;     
 case $workScore >= 40 and $workScore <= 44:
    $grade = "D+";
     $points = 4;
      $remark = "CAN DO BETTER";
      $trmark = "WEAK PERFOMANCE. GET RID OF THE WEAK GRADES.";
    break;
 case $workScore >= 35 and $workScore <= 39:
    $grade = "D";
    $points = 3;
    $remark = "WORK HARDER";
    $trmark = "WEAK PERFOMANCE. GET RID OF THE WEAK GRADES.";
    break;
 case $workScore >= 30 and $workScore <= 34:
    $grade = "D-";
     $points = 2;
      $remark = "BELOW AVERAGE, WORK HARD";
      $trmark = "POOR PERFOMANCE. GET RID OF THE D'S AND E'S.";
    break;
  case $workScore >= -1 and $workScore <= 29:
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
  //swwitch Kiswahili score
$workScore = $kis_meanScore1;
switch($workScore) {
case $workScore >= 80:
    $kgrade = "A";
    $kpoints = 12;
    $kremark = "EXCELLENT";
    $ktrmark = "EXCELLENT PERFOMANCE KEEP IT UP.";
    break;
case $workScore >= 75 and $workScore <= 79:
    $kgrade = "A-";
     $kpoints = 11;
     $kremark = "V.GOOD";
      $ktrmark = "VERY GOOD PERFOMANCE. KEEP IT UP.";
    break;
case $workScore >= 70 and $workScore <= 74:
    $kgrade = "B+";
     $kpoints = 10;
     $kremark = "V.GOOD";
     $ktrmark = "VERY GOOD PERFOMANCE. KEEP IT UP.";
    break;
 case $workScore >= 65 and $workScore <= 69:
    $kgrade = "B";
     $kpoints = 9;
     $kremark = "V.GOOD";
     $ktrmark = "GOOD PERFOMANCE. YOU CAN IMPROVE.";
    break;
 case $workScore >= 60 and $workScore <= 64:
    $kgrade = "B-";
     $kpoints = 8;
     $kremark = "GOOD";
        $ktrmark = "GOOD PERFOMANCE. YOU CAN IMPROVE.";
    break;
 case $workScore >= 55 and $workScore <= 59:
    $kgrade = "C+";
     $kpoints = 7;
     $kremark = "GOOD";
      $ktrmark = "FAIR PERFOMANCE. IMPROVE IN THE WEAK GRADES.";
    break;
 case $workScore >= 50 and $workScore <= 54:
    $kgrade = "C";
     $kpoints = 6;
      $kremark = "AVERAGE";
       $ktrmark = "FAIR PERFOMANCE. IMPROVE IN THE WEAK GRADES.";
    break;                
 case $workScore >= 45 and $workScore <= 49:
    $kgrade = "C-";
     $kpoints = 5;
      $kremark = "FAIR";
       $ktrmark = "QUITE FAIR. WORK HARDER.";
    break;     
 case $workScore >= 40 and $workScore <= 44:
    $kgrade = "D+";
     $kpoints = 4;
      $kremark = "CAN DO BETTER";
      $ktrmark = "WEAK PERFOMANCE. GET RID OF THE WEAK GRADES.";
    break;
 case $workScore >= 35 and $workScore <= 39:
    $kgrade = "D";
    $kpoints = 3;
    $kremark = "WORK HARDER";
    $ktrmark = "WEAK PERFOMANCE. GET RID OF THE WEAK GRADES.";
    break;
 case $workScore >= 30 and $workScore <= 34:
    $kgrade = "D-";
     $kpoints = 2;
      $kremark = "BELOW AVERAGE, WORK HARD";
      $ktrmark = "POOR PERFOMANCE. GET RID OF THE D'S AND E'S.";
    break;
  case $workScore >= -1 and $workScore <= 29:
    $kgrade = "E";
     $kpoints = 1;
     $kremark = "BELOW AVERAGE, WORK HARD";
    $ktrmark = "VERY POOR. YOU NEED TO BE SERIOUS WITH YOUR STUDIES. ";
    break;               
default:
$kgrade = "Z";
    $kpoints = 0;
    $kremark = "AVOID MISSING EXAMS.";
    $ktrmark = "AVOID MISSING EXAMS.";
  }
//switch methimatics score
$workScore = $mat_meanScore1;
switch($workScore) {
case $workScore >= 80:
    $mgrade = "A";
    $mpoints = 12;
    $mremark = "EXCELLENT";
    $mtrmark = "EXCELLENT PERFOMANCE KEEP IT UP.";
    break;
case $workScore >= 75 and $workScore <= 79:
    $mgrade = "A-";
     $mpoints = 11;
     $mremark = "V.GOOD";
      $mtrmark = "VERY GOOD PERFOMANCE. KEEP IT UP.";
    break;
case $workScore >= 70 and $workScore <= 74:
    $mgrade = "B+";
     $mpoints = 10;
     $mremark = "V.GOOD";
     $mtrmark = "VERY GOOD PERFOMANCE. KEEP IT UP.";
    break;
 case $workScore >= 65 and $workScore <= 69:
    $mgrade = "B";
     $mpoints = 9;
     $mremark = "V.GOOD";
     $mtrmark = "GOOD PERFOMANCE. YOU CAN IMPROVE.";
    break;
 case $workScore >= 60 and $workScore <= 64:
    $mgrade = "B-";
     $mpoints = 8;
     $mremark = "GOOD";
        $mtrmark = "GOOD PERFOMANCE. YOU CAN IMPROVE.";
    break;
 case $workScore >= 55 and $workScore <= 59:
    $mgrade = "C+";
     $mpoints = 7;
     $mremark = "GOOD";
      $mtrmark = "FAIR PERFOMANCE. IMPROVE IN THE WEAK GRADES.";
    break;
 case $workScore >= 50 and $workScore <= 54:
    $mgrade = "C";
     $mpoints = 6;
      $mremark = "AVERAGE";
       $mtrmark = "FAIR PERFOMANCE. IMPROVE IN THE WEAK GRADES.";
    break;                
 case $workScore >= 45 and $workScore <= 49:
    $mgrade = "C-";
     $mpoints = 5;
      $mremark = "FAIR";
       $mtrmark = "QUITE FAIR. WORK HARDER.";
    break;     
 case $workScore >= 40 and $workScore <= 44:
    $mgrade = "D+";
     $mpoints = 4;
      $mremark = "CAN DO BETTER";
      $mtrmark = "WEAK PERFOMANCE. GET RID OF THE WEAK GRADES.";
    break;
 case $workScore >= 35 and $workScore <= 39:
    $mgrade = "D";
    $mpoints = 3;
    $mremark = "WORK HARDER";
    $mtrmark = "WEAK PERFOMANCE. GET RID OF THE WEAK GRADES.";
    break;
 case $workScore >= 30 and $workScore <= 34:
    $mgrade = "D-";
     $mpoints = 2;
      $mremark = "BELOW AVERAGE, WORK HARD";
      $mtrmark = "POOR PERFOMANCE. GET RID OF THE D'S AND E'S.";
    break;
  case $workScore >= -1 and $workScore <= 29:
    $mgrade = "E";
     $mpoints = 1;
     $mremark = "BELOW AVERAGE, WORK HARD";
    $mtrmark = "VERY POOR. YOU NEED TO BE SERIOUS WITH YOUR STUDIES. ";
    break;               
default:
$mgrade = "Z";
    $mpoints = 0;
    $mremark = "AVOID MISSING EXAMS.";
    $mtrmark = "AVOID MISSING EXAMS.";
  } 
  $workScore = $eng_meanScore1;
//switch biology score
$workScore = $bio_meanScore1;
switch($workScore) {
case $workScore >= 80:
    $bgrade = "A";
    $bpoints = 12;
    $bremark = "EXCELLENT";
    $btrmark = "EXCELLENT PERFOMANCE KEEP IT UP.";
    break;
case $workScore >= 75 and $workScore <= 79:
    $bgrade = "A-";
     $bpoints = 11;
     $bremark = "V.GOOD";
      $btrmark = "VERY GOOD PERFOMANCE. KEEP IT UP.";
    break;
case $workScore >= 70 and $workScore <= 74:
    $bgrade = "B+";
     $bpoints = 10;
     $bremark = "V.GOOD";
     $btrmark = "VERY GOOD PERFOMANCE. KEEP IT UP.";
    break;
 case $workScore >= 65 and $workScore <= 69:
    $bgrade = "B";
     $bpoints = 9;
     $bremark = "V.GOOD";
     $btrmark = "GOOD PERFOMANCE. YOU CAN IMPROVE.";
    break;
 case $workScore >= 60 and $workScore <= 64:
    $bgrade = "B-";
     $bpoints = 8;
     $bremark = "GOOD";
        $btrmark = "GOOD PERFOMANCE. YOU CAN IMPROVE.";
    break;
 case $workScore >= 55 and $workScore <= 59:
    $bgrade = "C+";
     $bpoints = 7;
     $bremark = "GOOD";
      $btrmark = "FAIR PERFOMANCE. IMPROVE IN THE WEAK GRADES.";
    break;
 case $workScore >= 50 and $workScore <= 54:
    $bgrade = "C";
     $bpoints = 6;
      $bremark = "AVERAGE";
       $btrmark = "FAIR PERFOMANCE. IMPROVE IN THE WEAK GRADES.";
    break;                
 case $workScore >= 45 and $workScore <= 49:
    $bgrade = "C-";
     $bpoints = 5;
      $bremark = "FAIR";
       $btrmark = "QUITE FAIR. WORK HARDER.";
    break;     
 case $workScore >= 40 and $workScore <= 44:
    $bgrade = "D+";
     $bpoints = 4;
      $bremark = "CAN DO BETTER";
      $btrmark = "WEAK PERFOMANCE. GET RID OF THE WEAK GRADES.";
    break;
 case $workScore >= 35 and $workScore <= 39:
    $bgrade = "D";
    $bpoints = 3;
    $bremark = "WORK HARDER";
    $btrmark = "WEAK PERFOMANCE. GET RID OF THE WEAK GRADES.";
    break;
 case $workScore >= 30 and $workScore <= 34:
    $bgrade = "D-";
     $bpoints = 2;
      $bremark = "BELOW AVERAGE, WORK HARD";
      $btrmark = "POOR PERFOMANCE. GET RID OF THE D'S AND E'S.";
    break;
  case $workScore >= -1 and $workScore <= 29:
    $bgrade = "E";
     $bpoints = 1;
     $bremark = "BELOW AVERAGE, WORK HARD";
    $btrmark = "VERY POOR. YOU NEED TO BE SERIOUS WITH YOUR STUDIES. ";
    break;               
default:
$mgrade = "Z";
    $bpoints = 0;
    $bremark = "AVOID MISSING EXAMS.";
    $btrmark = "AVOID MISSING EXAMS.";
  }
  //switch Physics score
$workScore = $phy_meanScore1;
switch($workScore) {
case $workScore >= 80:
    $pgrade = "A";
    $ppoints = 12;
    $premark = "EXCELLENT";
    $ptrmark = "EXCELLENT PERFOMANCE KEEP IT UP.";
    break;
case $workScore >= 75 and $workScore <= 79:
    $pgrade = "A-";
     $ppoints = 11;
     $premark = "V.GOOD";
      $ptrmark = "VERY GOOD PERFOMANCE. KEEP IT UP.";
    break;
case $workScore >= 70 and $workScore <= 74:
    $pgrade = "B+";
     $ppoints = 10;
     $premark = "V.GOOD";
     $ptrmark = "VERY GOOD PERFOMANCE. KEEP IT UP.";
    break;
 case $workScore >= 65 and $workScore <= 69:
    $pgrade = "B";
     $ppoints = 9;
     $premark = "V.GOOD";
     $ptrmark = "GOOD PERFOMANCE. YOU CAN IMPROVE.";
    break;
 case $workScore >= 60 and $workScore <= 64:
    $pgrade = "B-";
     $ppoints = 8;
     $premark = "GOOD";
        $ptrmark = "GOOD PERFOMANCE. YOU CAN IMPROVE.";
    break;
 case $workScore >= 55 and $workScore <= 59:
    $pgrade = "C+";
     $ppoints = 7;
     $premark = "GOOD";
      $ptrmark = "FAIR PERFOMANCE. IMPROVE IN THE WEAK GRADES.";
    break;
 case $workScore >= 50 and $workScore <= 54:
    $pgrade = "C";
     $ppoints = 6;
      $premark = "AVERAGE";
       $ptrmark = "FAIR PERFOMANCE. IMPROVE IN THE WEAK GRADES.";
    break;                
 case $workScore >= 45 and $workScore <= 49:
    $pgrade = "C-";
     $ppoints = 5;
      $premark = "FAIR";
       $ptrmark = "QUITE FAIR. WORK HARDER.";
    break;     
 case $workScore >= 40 and $workScore <= 44:
    $pgrade = "D+";
     $ppoints = 4;
      $premark = "CAN DO BETTER";
      $ptrmark = "WEAK PERFOMANCE. GET RID OF THE WEAK GRADES.";
    break;
 case $workScore >= 35 and $workScore <= 39:
    $pgrade = "D";
    $ppoints = 3;
    $premark = "WORK HARDER";
    $ptrmark = "WEAK PERFOMANCE. GET RID OF THE WEAK GRADES.";
    break;
 case $workScore >= 30 and $workScore <= 34:
    $pgrade = "D-";
     $ppoints = 2;
      $premark = "BELOW AVERAGE, WORK HARD";
      $ptrmark = "POOR PERFOMANCE. GET RID OF THE D'S AND E'S.";
    break;
  case $workScore >= -1 and $workScore <= 29:
    $pgrade = "E";
     $ppoints = 1;
     $premark = "BELOW AVERAGE, WORK HARD";
    $ptrmark = "VERY POOR. YOU NEED TO BE SERIOUS WITH YOUR STUDIES. ";
    break;               
default:
$pgrade = "Z";
    $ppoints = 0;
    $premark = "AVOID MISSING EXAMS.";
    $ptrmark = "AVOID MISSING EXAMS.";
  } 
  //switch Chemistry score
$workScore = $che_meanScore1;
switch($workScore) {
case $workScore >= 80:
    $cgrade = "A";
    $cpoints = 12;
    $cremark = "EXCELLENT";
    $ctrmark = "EXCELLENT PERFOMANCE KEEP IT UP.";
    break;
case $workScore >= 75 and $workScore <= 79:
    $cgrade = "A-";
     $cpoints = 11;
     $cremark = "V.GOOD";
      $ctrmark = "VERY GOOD PERFOMANCE. KEEP IT UP.";
    break;
case $workScore >= 70 and $workScore <= 74:
    $cgrade = "B+";
     $cpoints = 10;
     $cremark = "V.GOOD";
     $ctrmark = "VERY GOOD PERFOMANCE. KEEP IT UP.";
    break;
 case $workScore >= 65 and $workScore <= 69:
    $cgrade = "B";
     $cpoints = 9;
     $cremark = "V.GOOD";
     $ctrmark = "GOOD PERFOMANCE. YOU CAN IMPROVE.";
    break;
 case $workScore >= 60 and $workScore <= 64:
    $cgrade = "B-";
     $cpoints = 8;
     $cremark = "GOOD";
        $ctrmark = "GOOD PERFOMANCE. YOU CAN IMPROVE.";
    break;
 case $workScore >= 55 and $workScore <= 59:
    $cgrade = "C+";
     $cpoints = 7;
     $cremark = "GOOD";
      $ctrmark = "FAIR PERFOMANCE. IMPROVE IN THE WEAK GRADES.";
    break;
 case $workScore >= 50 and $workScore <= 54:
    $cgrade = "C";
     $cpoints = 6;
      $cremark = "AVERAGE";
       $ctrmark = "FAIR PERFOMANCE. IMPROVE IN THE WEAK GRADES.";
    break;                
 case $workScore >= 45 and $workScore <= 49:
    $cgrade = "C-";
     $cpoints = 5;
      $cremark = "FAIR";
       $ctrmark = "QUITE FAIR. WORK HARDER.";
    break;     
 case $workScore >= 40 and $workScore <= 44:
    $cgrade = "D+";
     $cpoints = 4;
      $cremark = "CAN DO BETTER";
      $ctrmark = "WEAK PERFOMANCE. GET RID OF THE WEAK GRADES.";
    break;
 case $workScore >= 35 and $workScore <= 39:
    $cgrade = "D";
    $cpoints = 3;
    $cremark = "WORK HARDER";
    $ctrmark = "WEAK PERFOMANCE. GET RID OF THE WEAK GRADES.";
    break;
 case $workScore >= 30 and $workScore <= 34:
    $cgrade = "D-";
     $cpoints = 2;
      $cremark = "BELOW AVERAGE, WORK HARD";
      $ctrmark = "POOR PERFOMANCE. GET RID OF THE D'S AND E'S.";
    break;
  case $workScore >= -1 and $workScore <= 29:
    $cgrade = "E";
     $cpoints = 1;
     $cremark = "BELOW AVERAGE, WORK HARD";
    $ctrmark = "VERY POOR. YOU NEED TO BE SERIOUS WITH YOUR STUDIES. ";
    break;               
default:
$cgrade = "Z";
    $cpoints = 0;
    $cremark = "AVOID MISSING EXAMS.";
    $ctrmark = "AVOID MISSING EXAMS.";
  } 
    //switch History score
$workScore = $his_meanScore1;
switch($workScore) {
case $workScore >= 80:
    $hgrade = "A";
    $hpoints = 12;
    $hremark = "EXCELLENT";
    $htrmark = "EXCELLENT PERFOMANCE KEEP IT UP.";
    break;
case $workScore >= 75 and $workScore <= 79:
    $hgrade = "A-";
     $hpoints = 11;
     $hremark = "V.GOOD";
      $htrmark = "VERY GOOD PERFOMANCE. KEEP IT UP.";
    break;
case $workScore >= 70 and $workScore <= 74:
    $hgrade = "B+";
     $hpoints = 10;
     $hremark = "V.GOOD";
     $htrmark = "VERY GOOD PERFOMANCE. KEEP IT UP.";
    break;
 case $workScore >= 65 and $workScore <= 69:
    $hgrade = "B";
     $hpoints = 9;
     $hremark = "V.GOOD";
     $htrmark = "GOOD PERFOMANCE. YOU CAN IMPROVE.";
    break;
 case $workScore >= 60 and $workScore <= 64:
    $hgrade = "B-";
     $hpoints = 8;
     $hremark = "GOOD";
        $htrmark = "GOOD PERFOMANCE. YOU CAN IMPROVE.";
    break;
 case $workScore >= 55 and $workScore <= 59:
    $hgrade = "C+";
     $hpoints = 7;
     $hremark = "GOOD";
      $htrmark = "FAIR PERFOMANCE. IMPROVE IN THE WEAK GRADES.";
    break;
 case $workScore >= 50 and $workScore <= 54:
    $hgrade = "C";
     $hpoints = 6;
      $hremark = "AVERAGE";
       $htrmark = "FAIR PERFOMANCE. IMPROVE IN THE WEAK GRADES.";
    break;                
 case $workScore >= 45 and $workScore <= 49:
    $hgrade = "C-";
     $hpoints = 5;
      $hremark = "FAIR";
       $htrmark = "QUITE FAIR. WORK HARDER.";
    break;     
 case $workScore >= 40 and $workScore <= 44:
    $hgrade = "D+";
     $hpoints = 4;
      $hremark = "CAN DO BETTER";
      $htrmark = "WEAK PERFOMANCE. GET RID OF THE WEAK GRADES.";
    break;
 case $workScore >= 35 and $workScore <= 39:
    $hgrade = "D";
    $hpoints = 3;
    $hremark = "WORK HARDER";
    $htrmark = "WEAK PERFOMANCE. GET RID OF THE WEAK GRADES.";
    break;
 case $workScore >= 30 and $workScore <= 34:
    $hgrade = "D-";
     $hpoints = 2;
      $hremark = "BELOW AVERAGE, WORK HARD";
      $htrmark = "POOR PERFOMANCE. GET RID OF THE D'S AND E'S.";
    break;
  case $workScore >= -1 and $workScore <= 29:
    $hgrade = "E";
     $hpoints = 1;
     $hremark = "BELOW AVERAGE, WORK HARD";
    $htrmark = "VERY POOR. YOU NEED TO BE SERIOUS WITH YOUR STUDIES. ";
    break;               
default:
$hgrade = "Z";
    $hpoints = 0;
    $hremark = "AVOID MISSING EXAMS.";
    $htrmark = "AVOID MISSING EXAMS.";
  } 
      //switch Geography score
$workScore = $geo_meanScore1;
switch($workScore) {
case $workScore >= 80:
    $ggrade = "A";
    $gpoints = 12;
    $gremark = "EXCELLENT";
    $gtrmark = "EXCELLENT PERFOMANCE KEEP IT UP.";
    break;
case $workScore >= 75 and $workScore <= 79:
    $ggrade = "A-";
     $gpoints = 11;
     $gremark = "V.GOOD";
      $gtrmark = "VERY GOOD PERFOMANCE. KEEP IT UP.";
    break;
case $workScore >= 70 and $workScore <= 74:
    $ggrade = "B+";
     $gpoints = 10;
     $gremark = "V.GOOD";
     $gtrmark = "VERY GOOD PERFOMANCE. KEEP IT UP.";
    break;
 case $workScore >= 65 and $workScore <= 69:
    $ggrade = "B";
     $gpoints = 9;
     $gremark = "V.GOOD";
     $gtrmark = "GOOD PERFOMANCE. YOU CAN IMPROVE.";
    break;
 case $workScore >= 60 and $workScore <= 64:
    $ggrade = "B-";
     $gpoints = 8;
     $gremark = "GOOD";
        $gtrmark = "GOOD PERFOMANCE. YOU CAN IMPROVE.";
    break;
 case $workScore >= 55 and $workScore <= 59:
    $ggrade = "C+";
     $gpoints = 7;
     $gremark = "GOOD";
      $gtrmark = "FAIR PERFOMANCE. IMPROVE IN THE WEAK GRADES.";
    break;
 case $workScore >= 50 and $workScore <= 54:
    $ggrade = "C";
     $gpoints = 6;
      $gremark = "AVERAGE";
       $gtrmark = "FAIR PERFOMANCE. IMPROVE IN THE WEAK GRADES.";
    break;                
 case $workScore >= 45 and $workScore <= 49:
    $ggrade = "C-";
     $gpoints = 5;
      $gremark = "FAIR";
       $gtrmark = "QUITE FAIR. WORK HARDER.";
    break;     
 case $workScore >= 40 and $workScore <= 44:
    $ggrade = "D+";
     $gpoints = 4;
      $gremark = "CAN DO BETTER";
      $gtrmark = "WEAK PERFOMANCE. GET RID OF THE WEAK GRADES.";
    break;
 case $workScore >= 35 and $workScore <= 39:
    $ggrade = "D";
    $gpoints = 3;
    $gremark = "WORK HARDER";
    $gtrmark = "WEAK PERFOMANCE. GET RID OF THE WEAK GRADES.";
    break;
 case $workScore >= 30 and $workScore <= 34:
    $ggrade = "D-";
     $gpoints = 2;
      $gremark = "BELOW AVERAGE, WORK HARD";
      $gtrmark = "POOR PERFOMANCE. GET RID OF THE D'S AND E'S.";
    break;
  case $workScore >= -1 and $workScore <= 29:
    $ggrade = "E";
     $gpoints = 1;
     $gremark = "BELOW AVERAGE, WORK HARD";
    $gtrmark = "VERY POOR. YOU NEED TO BE SERIOUS WITH YOUR STUDIES. ";
    break;               
default:
$ggrade = "Z";
    $gpoints = 0;
    $gremark = "AVOID MISSING EXAMS.";
    $gtrmark = "AVOID MISSING EXAMS.";
  } 
    //switch IRE score
$workScore = $ire_meanScore1;
switch($workScore) {
case $workScore >= 80:
    $igrade = "A";
    $ipoints = 12;
    $iremark = "EXCELLENT";
    $itrmark = "EXCELLENT PERFOMANCE KEEP IT UP.";
    break;
case $workScore >= 75 and $workScore <= 79:
    $igrade = "A-";
     $ipoints = 11;
     $iremark = "V.GOOD";
      $itrmark = "VERY GOOD PERFOMANCE. KEEP IT UP.";
    break;
case $workScore >= 70 and $workScore <= 74:
    $igrade = "B+";
     $ipoints = 10;
     $iremark = "V.GOOD";
     $itrmark = "VERY GOOD PERFOMANCE. KEEP IT UP.";
    break;
 case $workScore >= 65 and $workScore <= 69:
    $igrade = "B";
     $ipoints = 9;
     $iremark = "V.GOOD";
     $itrmark = "GOOD PERFOMANCE. YOU CAN IMPROVE.";
    break;
 case $workScore >= 60 and $workScore <= 64:
    $igrade = "B-";
     $ipoints = 8;
     $iremark = "GOOD";
        $itrmark = "GOOD PERFOMANCE. YOU CAN IMPROVE.";
    break;
 case $workScore >= 55 and $workScore <= 59:
    $igrade = "C+";
     $ipoints = 7;
     $iremark = "GOOD";
      $itrmark = "FAIR PERFOMANCE. IMPROVE IN THE WEAK GRADES.";
    break;
 case $workScore >= 50 and $workScore <= 54:
    $igrade = "C";
     $ipoints = 6;
      $iremark = "AVERAGE";
       $itrmark = "FAIR PERFOMANCE. IMPROVE IN THE WEAK GRADES.";
    break;                
 case $workScore >= 45 and $workScore <= 49:
    $igrade = "C-";
     $ipoints = 5;
      $iremark = "FAIR";
       $itrmark = "QUITE FAIR. WORK HARDER.";
    break;     
 case $workScore >= 40 and $workScore <= 44:
    $igrade = "D+";
     $ipoints = 4;
      $iremark = "CAN DO BETTER";
      $itrmark = "WEAK PERFOMANCE. GET RID OF THE WEAK GRADES.";
    break;
 case $workScore >= 35 and $workScore <= 39:
    $igrade = "D";
    $ipoints = 3;
    $iremark = "WORK HARDER";
    $itrmark = "WEAK PERFOMANCE. GET RID OF THE WEAK GRADES.";
    break;
 case $workScore >= 30 and $workScore <= 34:
    $igrade = "D-";
     $ipoints = 2;
      $iremark = "BELOW AVERAGE, WORK HARD";
      $itrmark = "POOR PERFOMANCE. GET RID OF THE D'S AND E'S.";
    break;
  case $workScore >= -1 and $workScore <= 29:
    $igrade = "E";
     $ipoints = 1;
     $iremark = "BELOW AVERAGE, WORK HARD";
    $itrmark = "VERY POOR. YOU NEED TO BE SERIOUS WITH YOUR STUDIES. ";
    break;               
default:
$igrade = "Z";
    $ipoints = 0;
    $iremark = "AVOID MISSING EXAMS.";
    $itrmark = "AVOID MISSING EXAMS.";
  } 
      //switch CRE score
$workScore = $cre_meanScore1;
switch($workScore) {
case $workScore >= 80:
    $crgrade = "A";
    $crpoints = 12;
    $crremark = "EXCELLENT";
    $crtrmark = "EXCELLENT PERFOMANCE KEEP IT UP.";
    break;
case $workScore >= 75 and $workScore <= 79:
    $crgrade = "A-";
     $crpoints = 11;
     $crremark = "V.GOOD";
      $crtrmark = "VERY GOOD PERFOMANCE. KEEP IT UP.";
    break;
case $workScore >= 70 and $workScore <= 74:
    $crgrade = "B+";
     $crpoints = 10;
     $crremark = "V.GOOD";
     $crtrmark = "VERY GOOD PERFOMANCE. KEEP IT UP.";
    break;
 case $workScore >= 65 and $workScore <= 69:
    $crgrade = "B";
     $crpoints = 9;
     $crremark = "V.GOOD";
     $crtrmark = "GOOD PERFOMANCE. YOU CAN IMPROVE.";
    break;
 case $workScore >= 60 and $workScore <= 64:
    $crgrade = "B-";
     $crpoints = 8;
     $crremark = "GOOD";
        $crtrmark = "GOOD PERFOMANCE. YOU CAN IMPROVE.";
    break;
 case $workScore >= 55 and $workScore <= 59:
    $crgrade = "C+";
     $crpoints = 7;
     $crremark = "GOOD";
      $crtrmark = "FAIR PERFOMANCE. IMPROVE IN THE WEAK GRADES.";
    break;
 case $workScore >= 50 and $workScore <= 54:
    $crgrade = "C";
     $crpoints = 6;
      $crremark = "AVERAGE";
       $crtrmark = "FAIR PERFOMANCE. IMPROVE IN THE WEAK GRADES.";
    break;                
 case $workScore >= 45 and $workScore <= 49:
    $crgrade = "C-";
     $crpoints = 5;
      $crremark = "FAIR";
       $crtrmark = "QUITE FAIR. WORK HARDER.";
    break;     
 case $workScore >= 40 and $workScore <= 44:
    $crgrade = "D+";
     $crpoints = 4;
      $crremark = "CAN DO BETTER";
      $crtrmark = "WEAK PERFOMANCE. GET RID OF THE WEAK GRADES.";
    break;
 case $workScore >= 35 and $workScore <= 39:
    $crgrade = "D";
    $crpoints = 3;
    $crremark = "WORK HARDER";
    $crtrmark = "WEAK PERFOMANCE. GET RID OF THE WEAK GRADES.";
    break;
 case $workScore >= 30 and $workScore <= 34:
    $crgrade = "D-";
     $crpoints = 2;
      $crremark = "BELOW AVERAGE, WORK HARD";
      $crtrmark = "POOR PERFOMANCE. GET RID OF THE D'S AND E'S.";
    break;
  case $workScore >= -1 and $workScore <= 29:
    $crgrade = "E";
     $crpoints = 1;
     $crremark = "BELOW AVERAGE, WORK HARD";
    $crtrmark = "VERY POOR. YOU NEED TO BE SERIOUS WITH YOUR STUDIES. ";
    break;               
default:
$crgrade = "Z";
    $crpoints = 0;
    $crremark = "AVOID MISSING EXAMS.";
    $crtrmark = "AVOID MISSING EXAMS.";
  } 
        //switch HOME SCIENCE score
$workScore = $hom_meanScore1;
switch($workScore) {
case $workScore >= 80:
    $hmgrade = "A";
    $hmpoints = 12;
    $hmremark = "EXCELLENT";
    $hmtrmark = "EXCELLENT PERFOMANCE KEEP IT UP.";
    break;
case $workScore >= 75 and $workScore <= 79:
    $hmgrade = "A-";
     $hmpoints = 11;
     $hmremark = "V.GOOD";
      $hmtrmark = "VERY GOOD PERFOMANCE. KEEP IT UP.";
    break;
case $workScore >= 70 and $workScore <= 74:
    $hmgrade = "B+";
     $hmpoints = 10;
     $hmremark = "V.GOOD";
     $hmtrmark = "VERY GOOD PERFOMANCE. KEEP IT UP.";
    break;
 case $workScore >= 65 and $workScore <= 69:
    $hmgrade = "B";
     $hmpoints = 9;
     $hmremark = "V.GOOD";
     $hmtrmark = "GOOD PERFOMANCE. YOU CAN IMPROVE.";
    break;
 case $workScore >= 60 and $workScore <= 64:
    $hmgrade = "B-";
     $hmpoints = 8;
     $hmremark = "GOOD";
        $hmtrmark = "GOOD PERFOMANCE. YOU CAN IMPROVE.";
    break;
 case $workScore >= 55 and $workScore <= 59:
    $hmgrade = "C+";
     $hmpoints = 7;
     $hmremark = "GOOD";
      $hmtrmark = "FAIR PERFOMANCE. IMPROVE IN THE WEAK GRADES.";
    break;
 case $workScore >= 50 and $workScore <= 54:
    $hmgrade = "C";
     $hmpoints = 6;
      $hmremark = "AVERAGE";
       $hmtrmark = "FAIR PERFOMANCE. IMPROVE IN THE WEAK GRADES.";
    break;                
 case $workScore >= 45 and $workScore <= 49:
    $hmgrade = "C-";
     $hmpoints = 5;
      $hmremark = "FAIR";
       $hmtrmark = "QUITE FAIR. WORK HARDER.";
    break;     
 case $workScore >= 40 and $workScore <= 44:
    $hmgrade = "D+";
     $hmpoints = 4;
      $hmremark = "CAN DO BETTER";
      $hmtrmark = "WEAK PERFOMANCE. GET RID OF THE WEAK GRADES.";
    break;
 case $workScore >= 35 and $workScore <= 39:
    $hmgrade = "D";
    $hmpoints = 3;
    $hmremark = "WORK HARDER";
    $hmtrmark = "WEAK PERFOMANCE. GET RID OF THE WEAK GRADES.";
    break;
 case $workScore >= 30 and $workScore <= 34:
    $hmgrade = "D-";
     $hmpoints = 2;
      $hmremark = "BELOW AVERAGE, WORK HARD";
      $hmtrmark = "POOR PERFOMANCE. GET RID OF THE D'S AND E'S.";
    break;
  case $workScore >= -1 and $workScore <= 29:
    $hmgrade = "E";
     $hmpoints = 1;
     $hmremark = "BELOW AVERAGE, WORK HARD";
    $hmtrmark = "VERY POOR. YOU NEED TO BE SERIOUS WITH YOUR STUDIES. ";
    break;               
default:
$hmgrade = "Z";
    $hmpoints = 0;
    $hmremark = "AVOID MISSING EXAMS.";
    $hmtrmark = "AVOID MISSING EXAMS.";
  } 
    //switch Agricultutre score
$workScore = $agr_meanScore1;
switch($workScore) {
case $workScore >= 80:
    $aggrade = "A";
    $agpoints = 12;
    $agremark = "EXCELLENT";
    $agtrmark = "EXCELLENT PERFOMANCE KEEP IT UP.";
    break;
case $workScore >= 75 and $workScore <= 79:
    $aggrade = "A-";
     $agpoints = 11;
     $agremark = "V.GOOD";
      $agtrmark = "VERY GOOD PERFOMANCE. KEEP IT UP.";
    break;
case $workScore >= 70 and $workScore <= 74:
    $aggrade = "B+";
     $agpoints = 10;
     $agremark = "V.GOOD";
     $agtrmark = "VERY GOOD PERFOMANCE. KEEP IT UP.";
    break;
 case $workScore >= 65 and $workScore <= 69:
    $aggrade = "B";
     $agpoints = 9;
     $agremark = "V.GOOD";
     $agtrmark = "GOOD PERFOMANCE. YOU CAN IMPROVE.";
    break;
 case $workScore >= 60 and $workScore <= 64:
    $aggrade = "B-";
     $agpoints = 8;
     $agremark = "GOOD";
        $agtrmark = "GOOD PERFOMANCE. YOU CAN IMPROVE.";
    break;
 case $workScore >= 55 and $workScore <= 59:
    $aggrade = "C+";
     $agpoints = 7;
     $agremark = "GOOD";
      $agtrmark = "FAIR PERFOMANCE. IMPROVE IN THE WEAK GRADES.";
    break;
 case $workScore >= 50 and $workScore <= 54:
    $aggrade = "C";
     $agpoints = 6;
      $agremark = "AVERAGE";
       $agtrmark = "FAIR PERFOMANCE. IMPROVE IN THE WEAK GRADES.";
    break;                
 case $workScore >= 45 and $workScore <= 49:
    $aggrade = "C-";
     $agpoints = 5;
      $agremark = "FAIR";
       $agtrmark = "QUITE FAIR. WORK HARDER.";
    break;     
 case $workScore >= 40 and $workScore <= 44:
    $aggrade = "D+";
     $agpoints = 4;
      $agremark = "CAN DO BETTER";
      $agtrmark = "WEAK PERFOMANCE. GET RID OF THE WEAK GRADES.";
    break;
 case $workScore >= 35 and $workScore <= 39:
    $aggrade = "D";
    $agpoints = 3;
    $agremark = "WORK HARDER";
    $agtrmark = "WEAK PERFOMANCE. GET RID OF THE WEAK GRADES.";
    break;
 case $workScore >= 30 and $workScore <= 34:
    $aggrade = "D-";
     $agpoints = 2;
      $agremark = "BELOW AVERAGE, WORK HARD";
      $agtrmark = "POOR PERFOMANCE. GET RID OF THE D'S AND E'S.";
    break;
  case $workScore >= -1 and $workScore <= 29:
    $aggrade = "E";
     $agpoints = 1;
     $agremark = "BELOW AVERAGE, WORK HARD";
    $agtrmark = "VERY POOR. YOU NEED TO BE SERIOUS WITH YOUR STUDIES. ";
    break;               
default:
$aggrade = "Z";
    $agpoints = 0;
    $agremark = "AVOID MISSING EXAMS.";
    $agtrmark = "AVOID MISSING EXAMS.";
  } 
    //switch Computer Studies score
$workScore = $com_meanScore1;
switch($workScore) {
case $workScore >= 80:
    $cograde = "A";
    $copoints = 12;
    $coremark = "EXCELLENT";
    $cotrmark = "EXCELLENT PERFOMANCE KEEP IT UP.";
    break;
case $workScore >= 75 and $workScore <= 79:
    $cograde = "A-";
     $copoints = 11;
     $coremark = "V.GOOD";
      $cotrmark = "VERY GOOD PERFOMANCE. KEEP IT UP.";
    break;
case $workScore >= 70 and $workScore <= 74:
    $cograde = "B+";
     $copoints = 10;
     $coremark = "V.GOOD";
     $cotrmark = "VERY GOOD PERFOMANCE. KEEP IT UP.";
    break;
 case $workScore >= 65 and $workScore <= 69:
    $cograde = "B";
     $copoints = 9;
     $coremark = "V.GOOD";
     $cotrmark = "GOOD PERFOMANCE. YOU CAN IMPROVE.";
    break;
 case $workScore >= 60 and $workScore <= 64:
    $cograde = "B-";
     $copoints = 8;
     $coremark = "GOOD";
        $cotrmark = "GOOD PERFOMANCE. YOU CAN IMPROVE.";
    break;
 case $workScore >= 55 and $workScore <= 59:
    $cograde = "C+";
     $copoints = 7;
     $coremark = "GOOD";
      $cotrmark = "FAIR PERFOMANCE. IMPROVE IN THE WEAK GRADES.";
    break;
 case $workScore >= 50 and $workScore <= 54:
    $cograde = "C";
     $copoints = 6;
      $coremark = "AVERAGE";
       $cotrmark = "FAIR PERFOMANCE. IMPROVE IN THE WEAK GRADES.";
    break;                
 case $workScore >= 45 and $workScore <= 49:
    $cograde = "C-";
     $copoints = 5;
      $coremark = "FAIR";
       $cotrmark = "QUITE FAIR. WORK HARDER.";
    break;     
 case $workScore >= 40 and $workScore <= 44:
    $cograde = "D+";
     $copoints = 4;
      $coremark = "CAN DO BETTER";
      $cotrmark = "WEAK PERFOMANCE. GET RID OF THE WEAK GRADES.";
    break;
 case $workScore >= 35 and $workScore <= 39:
    $cograde = "D";
    $copoints = 3;
    $coremark = "WORK HARDER";
    $cotrmark = "WEAK PERFOMANCE. GET RID OF THE WEAK GRADES.";
    break;
 case $workScore >= 30 and $workScore <= 34:
    $cograde = "D-";
     $copoints = 2;
      $coremark = "BELOW AVERAGE, WORK HARD";
      $cotrmark = "POOR PERFOMANCE. GET RID OF THE D'S AND E'S.";
    break;
  case $workScore >= -1 and $workScore <= 29:
    $cograde = "E";
     $copoints = 1;
     $coremark = "BELOW AVERAGE, WORK HARD";
    $cotrmark = "VERY POOR. YOU NEED TO BE SERIOUS WITH YOUR STUDIES. ";
    break;               
default:
$cograde = "Z";
    $copoints = 0;
    $coremark = "AVOID MISSING EXAMS.";
    $cotrmark = "AVOID MISSING EXAMS.";
  } 
    //switch Arabic score
$workScore = $ara_meanScore1;
switch($workScore) {
case $workScore >= 80:
    $argrade = "A";
    $arpoints = 12;
    $arremark = "EXCELLENT";
    $artrmark = "EXCELLENT PERFOMANCE KEEP IT UP.";
    break;
case $workScore >= 75 and $workScore <= 79:
    $argrade = "A-";
     $arpoints = 11;
     $arremark = "V.GOOD";
      $artrmark = "VERY GOOD PERFOMANCE. KEEP IT UP.";
    break;
case $workScore >= 70 and $workScore <= 74:
    $argrade = "B+";
     $arpoints = 10;
     $arremark = "V.GOOD";
     $artrmark = "VERY GOOD PERFOMANCE. KEEP IT UP.";
    break;
 case $workScore >= 65 and $workScore <= 69:
    $argrade = "B";
     $arpoints = 9;
     $arremark = "V.GOOD";
     $artrmark = "GOOD PERFOMANCE. YOU CAN IMPROVE.";
    break;
 case $workScore >= 60 and $workScore <= 64:
    $argrade = "B-";
     $arpoints = 8;
     $arremark = "GOOD";
        $artrmark = "GOOD PERFOMANCE. YOU CAN IMPROVE.";
    break;
 case $workScore >= 55 and $workScore <= 59:
    $argrade = "C+";
     $arpoints = 7;
     $arremark = "GOOD";
      $artrmark = "FAIR PERFOMANCE. IMPROVE IN THE WEAK GRADES.";
    break;
 case $workScore >= 50 and $workScore <= 54:
    $argrade = "C";
     $arpoints = 6;
      $arremark = "AVERAGE";
       $artrmark = "FAIR PERFOMANCE. IMPROVE IN THE WEAK GRADES.";
    break;                
 case $workScore >= 45 and $workScore <= 49:
    $argrade = "C-";
     $arpoints = 5;
      $arremark = "FAIR";
       $artrmark = "QUITE FAIR. WORK HARDER.";
    break;     
 case $workScore >= 40 and $workScore <= 44:
    $argrade = "D+";
     $arpoints = 4;
      $arremark = "CAN DO BETTER";
      $artrmark = "WEAK PERFOMANCE. GET RID OF THE WEAK GRADES.";
    break;
 case $workScore >= 35 and $workScore <= 39:
    $argrade = "D";
    $arpoints = 3;
    $arremark = "WORK HARDER";
    $artrmark = "WEAK PERFOMANCE. GET RID OF THE WEAK GRADES.";
    break;
 case $workScore >= 30 and $workScore <= 34:
    $argrade = "D-";
     $arpoints = 2;
      $arremark = "BELOW AVERAGE, WORK HARD";
      $artrmark = "POOR PERFOMANCE. GET RID OF THE D'S AND E'S.";
    break;
  case $workScore >= -1 and $workScore <= 29:
    $argrade = "E";
     $arpoints = 1;
     $arremark = "BELOW AVERAGE, WORK HARD";
    $artrmark = "VERY POOR. YOU NEED TO BE SERIOUS WITH YOUR STUDIES. ";
    break;               
default:
$argrade = "Z";
    $arpoints = 0;
    $arremark = "AVOID MISSING EXAMS.";
    $artrmark = "AVOID MISSING EXAMS.";
  } 
    //switch Bussiness Studies score
$workScore = $bus_meanScore1;
switch($workScore) {
case $workScore >= 80:
    $bsgrade = "A";
    $bspoints = 12;
    $bsremark = "EXCELLENT";
    $bstrmark = "EXCELLENT PERFOMANCE KEEP IT UP.";
    break;
case $workScore >= 75 and $workScore <= 79:
    $bsgrade = "A-";
     $bspoints = 11;
     $bsremark = "V.GOOD";
      $bstrmark = "VERY GOOD PERFOMANCE. KEEP IT UP.";
    break;
case $workScore >= 70 and $workScore <= 74:
    $bsgrade = "B+";
     $bspoints = 10;
     $bsremark = "V.GOOD";
     $bstrmark = "VERY GOOD PERFOMANCE. KEEP IT UP.";
    break;
 case $workScore >= 65 and $workScore <= 69:
    $bsgrade = "B";
     $bspoints = 9;
     $bsremark = "V.GOOD";
     $bstrmark = "GOOD PERFOMANCE. YOU CAN IMPROVE.";
    break;
 case $workScore >= 60 and $workScore <= 64:
    $bsgrade = "B-";
     $bspoints = 8;
     $bsremark = "GOOD";
        $bstrmark = "GOOD PERFOMANCE. YOU CAN IMPROVE.";
    break;
 case $workScore >= 55 and $workScore <= 59:
    $bsgrade = "C+";
     $bspoints = 7;
     $bsremark = "GOOD";
      $bstrmark = "FAIR PERFOMANCE. IMPROVE IN THE WEAK GRADES.";
    break;
 case $workScore >= 50 and $workScore <= 54:
    $bsgrade = "C";
     $bspoints = 6;
      $bsremark = "AVERAGE";
       $bstrmark = "FAIR PERFOMANCE. IMPROVE IN THE WEAK GRADES.";
    break;                
 case $workScore >= 45 and $workScore <= 49:
    $bsgrade = "C-";
     $bspoints = 5;
      $bsremark = "FAIR";
       $bstrmark = "QUITE FAIR. WORK HARDER.";
    break;     
 case $workScore >= 40 and $workScore <= 44:
    $bsgrade = "D+";
     $bspoints = 4;
      $bsremark = "CAN DO BETTER";
      $bstrmark = "WEAK PERFOMANCE. GET RID OF THE WEAK GRADES.";
    break;
 case $workScore >= 35 and $workScore <= 39:
    $bsgrade = "D";
    $bspoints = 3;
    $bsremark = "WORK HARDER";
    $bstrmark = "WEAK PERFOMANCE. GET RID OF THE WEAK GRADES.";
    break;
 case $workScore >= 30 and $workScore <= 34:
    $bsgrade = "D-";
     $bspoints = 2;
      $bsremark = "BELOW AVERAGE, WORK HARD";
      $bstrmark = "POOR PERFOMANCE. GET RID OF THE D'S AND E'S.";
    break;
  case $workScore >= -1 and $workScore <= 29:
    $bsgrade = "E";
     $bspoints = 1;
     $bsremark = "BELOW AVERAGE, WORK HARD";
    $bstrmark = "VERY POOR. YOU NEED TO BE SERIOUS WITH YOUR STUDIES. ";
    break;               
default:
$bsgrade = "Z";
    $bspoints = 0;
    $bsremark = "AVOID MISSING EXAMS.";
    $bstrmark = "AVOID MISSING EXAMS.";
  } 
$output .= '
<div align="center" class = "scroll">
<table id="t01">
  <tr>
    <col width="10%">
    <col width="27%">
    <col width="10%">
    <col width="10%">
    <col width="10%">
    <col width="33%">
    <th>Subject Code</th>
    <th>Subject Name</th>
    <th>Marks</th> 
    <th>Points</th>
    <th>Grade</th>
    <th>Remarks</th>
  </tr>
  <tr>
    <td>101</td>
    <td>ENGLISH</td>
    <td>'.$eng_meanScore1.'</td>
    <td>'.$points.'</td>
    <td>'.$grade.'</td>
    <td>'.$remark.'</td>
  </tr>
  <tr>
    <td>102</td>
    <td>KISWAHILI</td>
    <td>'.$kis_meanScore1.'</td>
    <td>'.$kpoints.'</td>
    <td>'.$kgrade.'</td>
    <td>'.$kremark.'</td>
  </tr>
  <tr>
    <td>121</td>
    <td>MATHEMATICS</td>
    <td>'.$mat_meanScore1.'</td>
    <td>'.$mpoints.'</td>
    <td>'.$mgrade.'</td>
    <td>'.$mremark.'</td>
  </tr>
  <tr>
    <td>231</td>
    <td>BIOLOGY</td>
    <td>'.$bio_meanScore1.'</td>
    <td>'.$bpoints.'</td>
    <td>'.$bgrade.'</td>
    <td>'.$bremark.'</td>
  </tr>
  <tr>
    <td>232</td>
    <td>PHYSICS</td>
    <td>'.$phy_meanScore1.'</td>
    <td>'.$ppoints.'</td>
    <td>'.$pgrade.'</td>
    <td>'.$premark.'</td>
  </tr>
  <tr>
    <td>233</td>
    <td>CHEMISTRY</td>
    <td>'.$che_meanScore1.'</td>
    <td>'.$cpoints.'</td>
    <td>'.$cgrade.'</td>
    <td>'.$cremark.'</td>
  </tr>
  <tr>
    <td>311</td>
    <td>HISTORY AND GOVERNMENT</td>
    <td>'.$his_meanScore1.'</td>
    <td>'.$hpoints.'</td>
    <td>'.$hgrade.'</td>
    <td>'.$hremark.'</td>
  </tr>
  <tr>
    <td>312</td>
    <td>GEOGRAPHY</td>
    <td>'.$geo_meanScore1.'</td>
    <td>'.$gpoints.'</td>
    <td>'.$ggrade.'</td>
    <td>'.$gremark.'</td>
  </tr>
  <tr>
    <td>314</td>
    <td>ISLAMIC RELIGIOUS Ed.</td>
    <td>'.$ire_meanScore1.'</td>
    <td>'.$ipoints.'</td>
    <td>'.$igrade.'</td>
    <td>'.$iremark.'</td>
  </tr>
  <tr>
    <td>313</td>
    <td>CHRISTIAN RELIGIOUS Ed.</td>
    <td>'.$cre_meanScore1.'</td>
    <td>'.$crpoints.'</td>
    <td>'.$crgrade.'</td>
    <td>'.$crremark.'</td>
  </tr>
  <tr>
    <td>441</td>
    <td>HOME SCIENCE</td>
    <td>'.$hom_meanScore1.'</td>
    <td>'.$hmpoints.'</td>
    <td>'.$hmgrade.'</td>
    <td>'.$hmremark.'</td>
  </tr>
  <tr>
     <td>443</td>
    <td>AGRICULTURE</td>
    <td>'.$agr_meanScore1.'</td>
    <td>'.$agpoints.'</td>
    <td>'.$aggrade.'</td>
    <td>'.$agremark.'</td>
  </tr>
  <tr>
    <td>451</td>
    <td>COMPUTER STUDIES</td>
    <td>'.$com_meanScore1.'</td>
    <td>'.$copoints.'</td>
    <td>'.$cograde.'</td>
    <td>'.$coremark.'</td>
  </tr>
  <tr>
    <td>503</td>
    <td>ARABIC</td>
    <td>'.$ara_meanScore1.'</td>
    <td>'.$arpoints.'</td>
    <td>'.$argrade.'</td>
    <td>'.$arremark.'</td>
  </tr>
  <tr>
    <td>565</td>
    <td>BUSINESS STUDIES</td>
    <td>'.$bus_meanScore1.'</td>
    <td>'.$bspoints.'</td>
    <td>'.$bsgrade.'</td>
    <td>'.$bsremark.'</td>
  </tr>

  <tr>
    <td>NE1</td>
    <td>PHYSICAL EDUCATION</td>
    <td></td>
    <td></td>
    <td></td>
    <td>Good</td>
  </tr>
  <tr>
    <td>NE2</td>
    <td>LIFE SKILLS</td>
    <td></td>
    <td></td>
    <td></td>
    <td>Good</td>
  </tr>
</table>
</br>
</div>
<div align="center">
<tbody width="50%">
  <table>
  <tr>
    <col width="120">
    <col width="60">
    <tr>
    <th>Grade</th>
    <td></td>
  </tr>
    <tr>
    <th>Total</th>
    <td>'.$totalMarks.'</td>
  </tr>
    <th>Position</th>
    <td>'.$position.'</td>
  </tr>
  </table>
</tbody>
</div>';
echo $output;
?>
<div class="container" style="padding-left: 80px;">
<form class="form-inline" target="_blank" method="post" action="Export_pdf/generate_pdf.php">
<input type="hidden" name="ddlacyear" value="<?php echo $year;?> ">
<input type="hidden" name="ddlterms" value="<?php echo $term;?> ">
<input type="hidden" name="exams" value="<?php echo $exams;?> ">
<button type="submit" id="generate_pdf" name="generate_pdf" class="btn btn-primary" style = "margin-top:3px;"><i class="fa fa-pdf" aria-hidden="true"></i>Export to PDF</button>
</form>
</fieldset>
</div>
</body>
</html>
