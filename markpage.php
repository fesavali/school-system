<?php
set_time_limit(0);
include 'userSignup.php';

echo '
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
';
$output = '';
$year  = $_POST['ddlacyear'];
$term  = $_POST['ddlterms'];
$exams = $_POST['exams'];
if ($year == '1' && $term == 'Term1' && $exams == 'cat1') {
  $examination = 'C111';
  $examinations = 'E11';
}
else if ($year == '1' && $term == 'Term2' && $exams == 'cat1') {
  $examination = 'C112';
  $examinations = 'E12';
}
else if ($year == '1' && $term == 'Term3' && $exams == 'cat1') {
  $examination = 'C113';
  $examinations = 'E13';
}
else if ($year == '2' && $term == 'Term1' && $exams == 'cat1') {
  $examination = 'C121';
  $examinations = 'E21';
}
else if ($year == '2' && $term == 'Term2' && $exams == 'cat1') {
  $examination = 'C122';
  $examinations = 'E22';
}
else if ($year == '2' && $term == 'Term3' && $exams == 'cat1') {
  $examination = 'C123';
  $examinations = 'E23';
}
else if ($year == '3' && $term == 'Term1' && $exams == 'cat1') {
  $examination = 'C131';
  $examinations = 'E31';
}
else if ($year == '3' && $term == 'Term2' && $exams == 'cat1') {
  $examination = 'C132';
  $examinations = 'E32';
}
else if ($year == '3' && $term == 'Term3' && $exams == 'cat1') {
  $examination = 'C133';
  $examinations = 'E33';
}
else if ($year == '4' && $term == 'Term1' && $exams == 'cat1') {
  $examination = 'C141';
  $examinations = 'E41';
}
else if ($year == '4' && $term == 'Term2' && $exams == 'cat1') {
  $examination = 'C142';
  $examinations = 'E42';
}
else if ($year == '4' && $term == 'Term3' && $exams == 'cat1') {
  $examination = 'C143';
  $examinations = 'E43';
}
else if ($year == '5' && $term == 'Term1' && $exams == 'cat1') {
  $examination = 'C151';
  $examinations = 'E51';
}
else if ($year == '5' && $term == 'Term2' && $exams == 'cat1') {
  $examination = 'C152';
  $examinations = 'E52';
}
else if ($year == '5' && $term == 'Term3' && $exams == 'cat1') {
  $examination = 'C153';
  $examinations = 'E53';
}
else if ($year == '6' && $term == 'Term1' && $exams == 'cat1') {
  $examination = 'C161';
  $examinations = 'E61';
}
else if ($year == '6' && $term == 'Term2' && $exams == 'cat1') {
  $examination = 'C162';
  $examinations = 'E62';
}
else if ($year == '6' && $term == 'Term3' && $exams == 'cat1') {
  $examination = 'C163';
  $examinations = 'E63';
}
else if ($year == '7' && $term == 'Term1' && $exams == 'cat1') {
  $examination = 'C171';
  $examinations = 'E71';
}
else if ($year == '7' && $term == 'Term2' && $exams == 'cat1') {
  $examination = 'C172';
  $examinations = 'E72';
}
else if ($year == '7' && $term == 'Term3' && $exams == 'cat1') {
  $examination = 'C173';
  $examinations = 'E73';
}
else if ($year == '8' && $term == 'Term1' && $exams == 'cat1') {
  $examination = 'C181';
  $examinations = 'E81';
}
else if ($year == '8' && $term == 'Term2' && $exams == 'cat1') {
  $examination = 'C182';
  $examinations = 'E82';
}
else if ($year == '8' && $term == 'Term3' && $exams == 'cat1') {
  $examination = 'C183';
  $examinations = 'E83';
}


else if ($year == '1' && $term == 'Term1' && $exams == 'cat2') {
  $examination = 'C211';
  $examinations = 'E11';
}
else if ($year == '1' && $term == 'Term2' && $exams == 'cat2') {
  $examination = 'C212';
  $examinations = 'E12';
}
else if ($year == '1' && $term == 'Term3' && $exams == 'cat2') {
  $examination = 'C213';
  $examinations = 'E13';
}
else if ($year == '2' && $term == 'Term1' && $exams == 'cat2') {
  $examination = 'C221';
  $examinations = 'E21';
}
else if ($year == '2' && $term == 'Term2' && $exams == 'cat2') {
  $examination = 'C222';
  $examinations = 'E22';
}
else if ($year == '2' && $term == 'Term3' && $exams == 'cat2') {
  $examination = 'C223';
  $examinations = 'E23';
}
else if ($year == '3' && $term == 'Term1' && $exams == 'cat2') {
  $examination = 'C231';
  $examinations = 'E31';
}
else if ($year == '3' && $term == 'Term2' && $exams == 'cat2') {
  $examination = 'C232';
  $examinations = 'E32';
}
else if ($year == '3' && $term == 'Term3' && $exams == 'cat2') {
  $examination = 'C233';
  $examinations = 'E33';
}
else if ($year == '4' && $term == 'Term1' && $exams == 'cat2') {
  $examination = 'C241';
  $examinations = 'E41';
}
else if ($year == '4' && $term == 'Term2' && $exams == 'cat2') {
  $examination = 'C242';
  $examinations = 'E42';
}
else if ($year == '4' && $term == 'Term3' && $exams == 'cat2') {
  $examination = 'C243';
  $examinations = 'E43';
}
else if ($year == '5' && $term == 'Term1' && $exams == 'cat2') {
  $examination = 'C251';
  $examinations = 'E51';
}
else if ($year == '5' && $term == 'Term2' && $exams == 'cat2') {
  $examination = 'C252';
  $examinations = 'E52';
}
else if ($year == '5' && $term == 'Term3' && $exams == 'cat2') {
  $examination = 'C253';
  $examinations = 'E53';
}
else if ($year == '6' && $term == 'Term1' && $exams == 'cat2') {
  $examination = 'C261';
  $examinations = 'E61';
}
else if ($year == '6' && $term == 'Term2' && $exams == 'cat2') {
  $examination = 'C262';
  $examinations = 'E62';
}
else if ($year == '6' && $term == 'Term3' && $exams == 'cat2') {
  $examination = 'C263';
  $examinations = 'E63';
}
else if ($year == '7' && $term == 'Term1' && $exams == 'cat2') {
  $examination = 'C271';
  $examinations = 'E71';
}
else if ($year == '7' && $term == 'Term2' && $exams == 'cat2') {
  $examination = 'C272';
  $examinations = 'E72';
}
else if ($year == '7' && $term == 'Term3' && $exams == 'cat2') {
  $examination = 'C273';
  $examinations = 'E73';
}
else if ($year == '8' && $term == 'Term1' && $exams == 'cat2') {
  $examination = 'C281';
  $examinations = 'E81';
}
else if ($year == '8' && $term == 'Term2' && $exams == 'cat2') {
  $examination = 'C282';
  $examinations = 'E82';
}
else if ($year == '8' && $term == 'Term3' && $exams == 'cat2') {
  $examination = 'C283';
  $examinations = 'E83';
}


else if ($year == '1' && $term == 'Term1' && $exams == 'cat3') {
  $examination = 'C311';
  $examinations = 'E11';
}
else if ($year == '1' && $term == 'Term2' && $exams == 'cat3') {
  $examination = 'C312';
  $examinations = 'E12';
}
else if ($year == '1' && $term == 'Term3' && $exams == 'cat3') {
  $examination = 'C313';
  $examinations = 'E13';
}
else if ($year == '2' && $term == 'Term1' && $exams == 'cat3') {
  $examination = 'C321';
  $examinations = 'E21';
}
else if ($year == '2' && $term == 'Term2' && $exams == 'cat3') {
  $examination = 'C322';
  $examinations = 'E22';
}
else if ($year == '2' && $term == 'Term3' && $exams == 'cat3') {
  $examination = 'C323';
  $examinations = 'E23';
}
else if ($year == '3' && $term == 'Term1' && $exams == 'cat3') {
  $examination = 'C331';
  $examinations = 'E31';
}
else if ($year == '3' && $term == 'Term2' && $exams == 'cat3') {
  $examination = 'C332';
  $examinations = 'E32';
}
else if ($year == '3' && $term == 'Term3' && $exams == 'cat3') {
  $examination = 'C333';
  $examinations = 'E33';
}
else if ($year == '4' && $term == 'Term1' && $exams == 'cat3') {
  $examination = 'C341';
  $examinations = 'E41';
}
else if ($year == '4' && $term == 'Term2' && $exams == 'cat3') {
  $examination = 'C342';
  $examinations = 'E42';
}
else if ($year == '4' && $term == 'Term3' && $exams == 'cat3') {
  $examination = 'C343';
  $examinations = 'E43';
}
else if ($year == '5' && $term == 'Term1' && $exams == 'cat3') {
  $examination = 'C351';
  $examinations = 'E51';
}
else if ($year == '5' && $term == 'Term2' && $exams == 'cat3') {
  $examination = 'C352';
  $examinations = 'E52';
}
else if ($year == '5' && $term == 'Term3' && $exams == 'cat3') {
  $examination = 'C353';
  $examinations = 'E53';
}
else if ($year == '6' && $term == 'Term1' && $exams == 'cat3') {
  $examination = 'C361';
  $examinations = 'E61';
}
else if ($year == '6' && $term == 'Term2' && $exams == 'cat3') {
  $examination = 'C362';
  $examinations = 'E62';
}
else if ($year == '6' && $term == 'Term3' && $exams == 'cat3') {
  $examination = 'C363';
  $examinations = 'E63';
}
else if ($year == '7' && $term == 'Term1' && $exams == 'cat3') {
  $examination = 'C371';
  $examinations = 'E71';
}
else if ($year == '7' && $term == 'Term2' && $exams == 'cat3') {
  $examination = 'C372';
  $examinations = 'E72';
}
else if ($year == '7' && $term == 'Term3' && $exams == 'cat3') {
  $examination = 'C373';
  $examinations = 'E73';
}
else if ($year == '8' && $term == 'Term1' && $exams == 'cat3') {
  $examination = 'C381';
  $examinations = 'E81';
}
else if ($year == '8' && $term == 'Term2' && $exams == 'cat3') {
  $examination = 'C382';
  $examinations = 'E82';
}
else if ($year == '8' && $term == 'Term3' && $exams == 'cat3') {
  $examination = 'C383';
  $examinations = 'E83';
}



else if ($year == '1' && $term == 'Term1' && $exams == 'term') {
  $examination = 'E11';
  $examinations = 'E11';
}
else if ($year == '1' && $term == 'Term2' && $exams == 'term') {
  $examination = 'E12';
  $examinations = 'E12';
}
else if ($year == '1' && $term == 'Term3' && $exams == 'term') {
  $examination = 'E13';
  $examinations = 'E13';
}
else if ($year == '2' && $term == 'Term1' && $exams == 'term') {
  $examination = 'E21';
  $examinations = 'E21';
}
else if ($year == '2' && $term == 'Term2' && $exams == 'term') {
  $examination = 'E22';
  $examinations = 'E22';
}
else if ($year == '2' && $term == 'Term3' && $exams == 'term') {
  $examination = 'E23';
  $examinations = 'E23';
}
else if ($year == '3' && $term == 'Term1' && $exams == 'term') {
  $examination = 'E31';
  $examinations = 'E31';
}
else if ($year == '3' && $term == 'Term2' && $exams == 'term') {
  $examination = 'E32';
  $examinations = 'E32';
}
else if ($year == '3' && $term == 'Term3' && $exams == 'term') {
  $examination = 'E33';
  $examinations = 'E33';
}
else if ($year == '4' && $term == 'Term1' && $exams == 'term') {
  $examination = 'E41';
  $examinations = 'E41';
}
else if ($year == '4' && $term == 'Term2' && $exams == 'term') {
  $examination = 'E42';
  $examinations = 'E42';
}
else if ($year == '4' && $term == 'Term3' && $exams == 'term') {
  $examination = 'E43';
  $examinations = 'E43';
}
else if ($year == '5' && $term == 'Term1' && $exams == 'term') {
  $examination = 'E51';
  $examinations = 'E51';
}
else if ($year == '5' && $term == 'Term2' && $exams == 'term') {
  $examination = 'E52';
  $examinations = 'E52';
}
else if ($year == '5' && $term == 'Term3' && $exams == 'term') {
  $examination = 'E53';
  $examinations = 'E53';
}
else if ($year == '6' && $term == 'Term1' && $exams == 'term') {
  $examination = 'E61';
  $examinations = 'E61';
}
else if ($year == '6' && $term == 'Term2' && $exams == 'term') {
  $examination = 'E62';
  $examinations = 'E62';
}
else if ($year == '6' && $term == 'Term3' && $exams == 'term') {
  $examination = 'E63';
  $examinations = 'E63';
}
else if ($year == '7' && $term == 'Term1' && $exams == 'term') {
  $examination = 'E71';
  $examinations = 'E71';
}
else if ($year == '7' && $term == 'Term2' && $exams == 'term') {
  $examination = 'E72';
  $examinations = 'E72';
}
else if ($year == '7' && $term == 'Term3' && $exams == 'term') {
  $examination = 'E73';
  $examinations = 'E73';
}
else if ($year == '8' && $term == 'Term1' && $exams == 'term') {
  $examination = 'E81';
  $examinations = 'E81';
}
else if ($year == '8' && $term == 'Term2' && $exams == 'term') {
  $examination = 'E82';
  $examinations = 'E82';
}
else if ($year == '8' && $term == 'Term3' && $exams == 'term') {
  $examination = 'E83';
  $examinations = 'E83';
}



else if ($year == '1' && $term == 'Term1' && $exams == 'othe') {
  $examination = 'E11';
  $examinations = 'E11';
}
else if ($year == '1' && $term == 'Term2' && $exams == 'othe') {
  $examination = 'M12';
  $examinations = 'E12';
}
else if ($year == '1' && $term == 'Term3' && $exams == 'othe') {
  $examination = 'M13';
  $examinations = 'E13';
}
else if ($year == '2' && $term == 'Term1' && $exams == 'othe') {
  $examination = 'M21';
  $examinations = 'E21';
}
else if ($year == '2' && $term == 'Term2' && $exams == 'othe') {
  $examination = 'M22';
  $examinations = 'E22';
}
else if ($year == '2' && $term == 'Term3' && $exams == 'othe') {
  $examination = 'M23';
  $examinations = 'E23';
}
else if ($year == '3' && $term == 'Term1' && $exams == 'othe') {
  $examination = 'M31';
  $examinations = 'E31';
}
else if ($year == '3' && $term == 'Term2' && $exams == 'othe') {
  $examination = 'M32';
  $examinations = 'E32';
}
else if ($year == '3' && $term == 'Term3' && $exams == 'othe') {
  $examination = 'M33';
  $examinations = 'E33';
}
else if ($year == '4' && $term == 'Term1' && $exams == 'othe') {
  $examination = 'M41';
  $examinations = 'E41';
}
else if ($year == '4' && $term == 'Term2' && $exams == 'othe') {
  $examination = 'M42';
  $examinations = 'E42';
}
else if ($year == '4' && $term == 'Term3' && $exams == 'othe') {
  $examination = 'M43';
  $examinations = 'E43';
}
else if ($year == '5' && $term == 'Term1' && $exams == 'othe') {
  $examination = 'M51';
  $examinations = 'E51';
}
else if ($year == '5' && $term == 'Term2' && $exams == 'othe') {
  $examination = 'M52';
  $examinations = 'E52';
}
else if ($year == '5' && $term == 'Term3' && $exams == 'othe') {
  $examination = 'M53';
  $examinations = 'E53';
}
else if ($year == '6' && $term == 'Term1' && $exams == 'othe') {
  $examination = 'M61';
  $examinations = 'E61';
}
else if ($year == '6' && $term == 'Term2' && $exams == 'othe') {
  $examination = 'M62';
  $examinations = 'E62';
}
else if ($year == '6' && $term == 'Term3' && $exams == 'othe') {
  $examination = 'M63';
  $examinations = 'E63';
}
else if ($year == '7' && $term == 'Term1' && $exams == 'othe') {
  $examination = 'M71';
  $examinations = 'E71';
}
else if ($year == '7' && $term == 'Term2' && $exams == 'othe') {
  $examination = 'M72';
  $examinations = 'E72';
}
else if ($year == '7' && $term == 'Term3' && $exams == 'othe') {
  $examination = 'M73';
  $examinations = 'E73';
}
else if ($year == '8' && $term == 'Term1' && $exams == 'othe') {
  $examination = 'M81';
  $examinations = 'E81';
}
else if ($year == '8' && $term == 'Term2' && $exams == 'othe') {
  $examination = 'M82';
  $examinations = 'E82';
}
else if ($year == '8' && $term == 'Term3' && $exams == 'othe') {
  $examination = 'M83';
  $examinations = 'E83';
}



else if ($year == '1' && $term == 'Term1' && $exams == 'othe') {
  $examination = 'E11';
  $examinations = 'E11';
}
else if ($year == '1' && $term == 'Term2' && $exams == 'othe') {
  $examination = 'O12';
  $examinations = 'E12';
}
else if ($year == '1' && $term == 'Term3' && $exams == 'othe') {
  $examination = 'O13';
  $examinations = 'E13';
}
else if ($year == '2' && $term == 'Term1' && $exams == 'othe') {
  $examination = 'O21';
  $examinations = 'E21';
}
else if ($year == '2' && $term == 'Term2' && $exams == 'othe') {
  $examination = 'O22';
  $examinations = 'E22';
}
else if ($year == '2' && $term == 'Term3' && $exams == 'othe') {
  $examination = 'O23';
  $examinations = 'E23';
}
else if ($year == '3' && $term == 'Term1' && $exams == 'othe') {
  $examination = 'O31';
  $examinations = 'E31';
}
else if ($year == '3' && $term == 'Term2' && $exams == 'othe') {
  $examination = 'O32';
  $examinations = 'E32';
}
else if ($year == '3' && $term == 'Term3' && $exams == 'othe') {
  $examination = 'O33';
  $examinations = 'E33';
}
else if ($year == '4' && $term == 'Term1' && $exams == 'othe') {
  $examination = 'O41';
  $examinations = 'E41';
}
else if ($year == '4' && $term == 'Term2' && $exams == 'othe') {
  $examination = 'O42';
  $examinations = 'E42';
}
else if ($year == '4' && $term == 'Term3' && $exams == 'othe') {
  $examination = 'O43';
  $examinations = 'E43';
}
else if ($year == '5' && $term == 'Term1' && $exams == 'othe') {
  $examination = 'O51';
  $examinations = 'E51';
}
else if ($year == '5' && $term == 'Term2' && $exams == 'othe') {
  $examination = 'O52';
  $examinations = 'E52';
}
else if ($year == '5' && $term == 'Term3' && $exams == 'othe') {
  $examination = 'O53';
  $examinations = 'E53';
}
else if ($year == '6' && $term == 'Term1' && $exams == 'othe') {
  $examination = 'O61';
  $examinations = 'E61';
}
else if ($year == '6' && $term == 'Term2' && $exams == 'othe') {
  $examination = 'O62';
  $examinations = 'E62';
}
else if ($year == '6' && $term == 'Term3' && $exams == 'othe') {
  $examination = 'O63';
  $examinations = 'E63';
}
else if ($year == '7' && $term == 'Term1' && $exams == 'othe') {
  $examination = 'O71';
  $examinations = 'E71';
}
else if ($year == '7' && $term == 'Term2' && $exams == 'othe') {
  $examination = 'O72';
  $examinations = 'E72';
}
else if ($year == '7' && $term == 'Term3' && $exams == 'othe') {
  $examination = 'O73';
  $examinations = 'E73';
}
else if ($year == '8' && $term == 'Term1' && $exams == 'othe') {
  $examination = 'O81';
  $examinations = 'E81';
}
else if ($year == '8' && $term == 'Term2' && $exams == 'othe') {
  $examination = 'O82';
  $examinations = 'E82';
}
else if ($year == '8' && $term == 'Term3' && $exams == 'othe') {
  $examination = 'O83';
  $examinations = 'E83';
}

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
if ($exams_eng >= 1) {


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
if (round($workScore, 0) == 0){
    $grade = "N/A";
    $points = "N/A";
    $remark = "N/A";
    $trmark = "N/A";
} else if (round($workScore, 0) >= 80 && round($workScore, 0) <= 100){
    $grade = "A";
    $points = 12;
    $remark = "EXCELLENT";
    $trmark = "EXCELLENT PERFOMANCE KEEP IT UP.";
}else if (round($workScore, 0) >= 75 && round($workScore, 0) <= 79){
    $grade = "A-";
     $points = 11;
     $remark = "V.GOOD";
      $trmark = "VERY GOOD PERFOMANCE. KEEP IT UP.";
}else if (round($workScore, 0) >= 70 && round($workScore, 0) <= 74){
    $grade = "B+";
     $points = 10;
     $remark = "V.GOOD";
     $trmark = "VERY GOOD PERFOMANCE. KEEP IT UP.";
}else if (round($workScore, 0) >= 65 && round($workScore, 0) <= 69){
    $grade = "B";
     $points = 9;
     $remark = "V.GOOD";
     $trmark = "GOOD PERFOMANCE. YOU CAN IMPROVE.";
}else if (round($workScore, 0) >= 60 && round($workScore, 0) <= 64){
    $grade = "B-";
     $points = 8;
     $remark = "GOOD";
        $trmark = "GOOD PERFOMANCE. YOU CAN IMPROVE.";
}else if (round($workScore, 0) >= 55 && round($workScore, 0) <= 59){
    $grade = "C+";
     $points = 7;
     $remark = "GOOD";
      $trmark = "FAIR PERFOMANCE. IMPROVE IN THE WEAK GRADES.";
}else if (round($workScore, 0) >= 50 && round($workScore, 0) <= 54){
    $grade = "C";
     $points = 6;
      $remark = "AVERAGE";
       $trmark = "FAIR PERFOMANCE. IMPROVE IN THE WEAK GRADES.";
}else if (round($workScore, 0) >= 45 && round($workScore, 0) <= 49){
    $grade = "C-";
     $points = 5;
      $remark = "FAIR";
       $trmark = "QUITE FAIR. WORK HARDER.";
}else if (round($workScore, 0) >= 40 && round($workScore, 0) <= 44){
    $grade = "D+";
     $points = 4;
      $remark = "CAN DO BETTER";
      $trmark = "WEAK PERFOMANCE. GET RID OF THE WEAK GRADES.";
}else if (round($workScore, 0) >= 35 && round($workScore, 0) <= 39){
    $grade = "D";
    $points = 3;
    $remark = "WORK HARDER";
    $trmark = "WEAK PERFOMANCE. GET RID OF THE WEAK GRADES.";
}else if (round($workScore, 0) >= 30 && round($workScore, 0) <= 34){
    $grade = "D-";
     $points = 2;
      $remark = "BELOW AVERAGE, WORK HARD";
      $trmark = "POOR PERFOMANCE. GET RID OF THE D'S AND E'S.";
}else if (round($workScore, 0) <= 29){
     $grade = "E";
     $points = 1;
     $remark = "BELOW AVERAGE, WORK HARD";
    $trmark = "VERY POOR. YOU NEED TO BE SERIOUS WITH YOUR STUDIES. ";
}else {               
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
$agr_meanScore1 = round($exams_agr['Score'], 0);
$com_meanScore1 = round($exams_com['Score'], 0);
$ara_meanScore1 = round($exams_ara['Score'], 0);
$bus_meanScore1 = round($exams_bus['Score'], 0);

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
    <td>'.$pointies[0].'</td>
    <td>'.$gradies[0].'</td>
    <td>'.$remarkies[0].'</td>
  </tr>
  <tr>
    <td>102</td>
    <td>KISWAHILI</td>
    <td>'.$kis_meanScore1.'</td>
    <td>'.$pointies[1].'</td>
    <td>'.$gradies[1].'</td>
    <td>'.$remarkies[1].'</td>
  </tr>
  <tr>
    <td>121</td>
    <td>MATHEMATICS</td>
    <td>'.$mat_meanScore1.'</td>
    <td>'.$pointies[2].'</td>
    <td>'.$gradies[2].'</td>
    <td>'.$remarkies[2].'</td>
  </tr>
  <tr>
    <td>231</td>
    <td>BIOLOGY</td>
    <td>'.$bio_meanScore1.'</td>
    <td>'.$pointies[3].'</td>
    <td>'.$gradies[3].'</td>
    <td>'.$remarkies[3].'</td>
  </tr>
  <tr>
    <td>232</td>
    <td>PHYSICS</td>
    <td>'.$phy_meanScore1.'</td>
    <td>'.$pointies[4].'</td>
    <td>'.$gradies[4].'</td>
    <td>'.$remarkies[4].'</td>
  </tr>
  <tr>
    <td>233</td>
    <td>CHEMISTRY</td>
    <td>'.$che_meanScore1.'</td>
    <td>'.$pointies[5].'</td>
    <td>'.$gradies[5].'</td>
    <td>'.$remarkies[5].'</td>
  </tr>
  <tr>
    <td>311</td>
    <td>HISTORY AND GOVERNMENT</td>
    <td>'.$his_meanScore1.'</td>
    <td>'.$pointies[6].'</td>
    <td>'.$gradies[6].'</td>
    <td>'.$remarkies[6].'</td>
  </tr>
  <tr>
    <td>312</td>
    <td>GEOGRAPHY</td>
    <td>'.$geo_meanScore1.'</td>
    <td>'.$pointies[7].'</td>
    <td>'.$gradies[7].'</td>
    <td>'.$remarkies[7].'</td>
  </tr>
  <tr>
    <td>314</td>
    <td>ISLAMIC RELIGIOUS Ed.</td>
    <td>'.$ire_meanScore1.'</td>
    <td>'.$pointies[8].'</td>
    <td>'.$gradies[8].'</td>
    <td>'.$remarkies[8].'</td>
  </tr>
  <tr>
    <td>313</td>
    <td>CHRISTIAN RELIGIOUS Ed.</td>
    <td>'.$cre_meanScore1.'</td>
    <td>'.$pointies[9].'</td>
    <td>'.$gradies[9].'</td>
    <td>'.$remarkies[9].'</td>
  </tr>
  <tr>
    <td>441</td>
    <td>HOME SCIENCE</td>
    <td>'.$hom_meanScore1.'</td>
    <td>'.$pointies[10].'</td>
    <td>'.$gradies[10].'</td>
    <td>'.$remarkies[10].'</td>
  </tr>
  <tr>
     <td>443</td>
    <td>AGRICULTURE</td>
    <td>'.$agr_meanScore1.'</td>
    <td>'.$pointies[11].'</td>
    <td>'.$gradies[11].'</td>
    <td>'.$remarkies[11].'</td>
  </tr>
  <tr>
    <td>451</td>
    <td>COMPUTER STUDIES</td>
    <td>'.$com_meanScore1.'</td>
    <td>'.$pointies[12].'</td>
    <td>'.$gradies[12].'</td>
    <td>'.$remarkies[12].'</td>
  </tr>
  <tr>
    <td>503</td>
    <td>ARABIC</td>
    <td>'.$ara_meanScore1.'</td>
    <td>'.$pointies[13].'</td>
    <td>'.$gradies[13].'</td>
    <td>'.$remarkies[13].'</td>
  </tr>
  <tr>
    <td>565</td>
    <td>BUSINESS STUDIES</td>
    <td>'.$bus_meanScore1.'</td>
    <td>'.$pointies[14].'</td>
    <td>'.$gradies[14].'</td>
    <td>'.$remarkies[14].'</td>
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
<form class="form-inline" target="_blank" method="post" action="generate_pdf.php">
<input type="hidden" name="examinations" value="<?php echo $examinations;?> ">
<button type="submit" id="generate_pdf" name="generate_pdf" class="btn btn-primary" style = "margin-top:3px;"><i class="fa fa-pdf" aria-hidden="true"></i>Export to PDF</button>
</form>
<form class="form-inline" target="_blank" method="post" action="generate_pdf.php">
<input type="hidden" name="examination" value="<?php echo $examination;?> ">
<button type="submit" id="generate_pdf2" name="generate_pdf2" class="btn btn-primary" style = "margin-top:3px;"><i class="fa fa-pdf" aria-hidden="true"></i>Main Exams Report</button>
</form>
</fieldset>
</div>
</body>
</html>
<?php
}
else {
  echo ('<b>There are no results for year '. $year. ' '. $term. '. Please check whether you did the exams.</b>');
}
?>