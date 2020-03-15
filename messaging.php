<?php
include("config.php");
set_time_limit(0);
$reci1 = $_POST['receiver_id1'];
$reci2 = $_POST['receiver_id2'];
$reci3 = $_POST['receiver_id3'];
$rice1 = $_POST['receiver_name1'];
$rice2 = $_POST['receiver_name2'];
$rice3 = $_POST['receiver_name3'];
$from1 = $_POST['from_user_id'];
$from2 = $_POST['from_user_name'];
$subj1 = $_POST['subject'];
$mess1 = $_POST['message'];

if ($reci1 == 9 OR $reci1 == 10 OR $reci1 == 13 OR $reci2 == 1 OR $reci2 == 2 OR $reci2 == 3 OR $reci2 == 4 OR $reci2 == 12 OR $reci3 == 5 OR $reci3 == 6 OR $reci3 == 7 OR $reci3 == 8 OR $reci3 == 11) {

if ($reci2 == 1) {
$sql = "SELECT count(id) FROM `message`"; 
$resul = $connect->prepare($sql); 
$resul->execute(); 
$idd = $resul->fetchColumn();
$id = ($idd +1);
$data1 = array(
':id'                 =>    $id,
':receiver_id2'       =>    '0',
':receiver_name2'     =>    $rice2,
':from_user_id'       =>    $from1,
':from_user_name'     =>    $from2,
':subject'            =>    $subj1,
':message'            =>    $mess1,
':status'             =>    '1',
':isread'             =>    '1',
':receiver_name'      =>    '0'
);

$query1 = "INSERT INTO message (id, to_user_id, from_user_id, sender, reci, message_id, subject, message, status, isread, destination) VALUES (:id, :receiver_id2, :from_user_id, :from_user_name, :receiver_name2, :from_user_id, :subject, :message, :status, :isread, :receiver_name)";
$statement1 = $connect->prepare($query1);
$statement1->execute($data1);


$query = "SELECT * FROM parent_table WHERE parent_name = (SELECT PName FROM registration WHERE CurrentClass = 1 ) AND parent_no != '".$from1."'";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

foreach($result as $row)
{

$sql1 = "SELECT count(id) FROM `message`"; 
$resul1 = $connect->prepare($sql1); 
$resul1->execute(); 
$idd1 = $resul1->fetchColumn();
$id1 = ($idd1 +1);
  $data = array(
':id'                 =>    $id1,
':receiver_id1'       =>    $row['parent_no'],
':receiver_name1'     =>    $row['parent_name'],
':from_user_id'       =>    $from1,
':from_user_name'     =>    $from2,
':subject'            =>    $subj1,
':message'            =>    $mess1,
':status'             =>    '1',
':isread'             =>    '1',
':receiver_name'      =>    $reci2
);

$query = "INSERT INTO message (id, to_user_id, from_user_id, sender, reci, message_id, subject, message, status, isread, destination) VALUES (:id, :receiver_id1, :from_user_id, :from_user_name, :receiver_name1, :from_user_id, :subject, :message, :status, :isread, :receiver_name)";
$statement = $connect->prepare($query);
$statement->execute($data);
}
}


if ($reci2 == 2) {
$sql = "SELECT count(id) FROM `message`"; 
$resul = $connect->prepare($sql); 
$resul->execute(); 
$idd = $resul->fetchColumn();
$id = ($idd +1);
$data1 = array(
':id'                 =>    $id,
':receiver_id2'       =>    '0',
':receiver_name2'     =>    $rice2,
':from_user_id'       =>    $from1,
':from_user_name'     =>    $from2,
':subject'            =>    $subj1,
':message'            =>    $mess1,
':status'             =>    '1',
':isread'             =>    '1',
':receiver_name'      =>    '0'
);

$query1 = "INSERT INTO message (id, to_user_id, from_user_id, sender, reci, message_id, subject, message, status, isread, destination) VALUES (:id, :receiver_id2, :from_user_id, :from_user_name, :receiver_name2, :from_user_id, :subject, :message, :status, :isread, :receiver_name)";
$statement1 = $connect->prepare($query1);
$statement1->execute($data1);


$query = "SELECT * FROM parent_table WHERE parent_name = (SELECT PName FROM registration WHERE CurrentClass = 2 ) AND parent_no != '".$from1."'";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

foreach($result as $row)
{

$sql1 = "SELECT count(id) FROM `message`"; 
$resul1 = $connect->prepare($sql1); 
$resul1->execute(); 
$idd1 = $resul1->fetchColumn();
$id1 = ($idd1 +1);
  $data = array(
':id'                 =>    $id1,
':receiver_id1'       =>    $row['parent_no'],
':receiver_name1'     =>    $row['parent_name'],
':from_user_id'       =>    $from1,
':from_user_name'     =>    $from2,
':subject'            =>    $subj1,
':message'            =>    $mess1,
':status'             =>    '1',
':isread'             =>    '1',
':receiver_name'      =>    $reci2
);

$query = "INSERT INTO message (id, to_user_id, from_user_id, sender, reci, message_id, subject, message, status, isread, destination) VALUES (:id, :receiver_id1, :from_user_id, :from_user_name, :receiver_name1, :from_user_id, :subject, :message, :status, :isread, :receiver_name)";
$statement = $connect->prepare($query);
$statement->execute($data);
}
}


if ($reci2 == 3) {
$sql = "SELECT count(id) FROM `message`"; 
$resul = $connect->prepare($sql); 
$resul->execute(); 
$idd = $resul->fetchColumn();
$id = ($idd +1);
$data1 = array(
':id'                 =>    $id,
':receiver_id2'       =>    '0',
':receiver_name2'     =>    $rice2,
':from_user_id'       =>    $from1,
':from_user_name'     =>    $from2,
':subject'            =>    $subj1,
':message'            =>    $mess1,
':status'             =>    '1',
':isread'             =>    '1',
':receiver_name'      =>    '0'
);

$query1 = "INSERT INTO message (id, to_user_id, from_user_id, sender, reci, message_id, subject, message, status, isread, destination) VALUES (:id, :receiver_id2, :from_user_id, :from_user_name, :receiver_name2, :from_user_id, :subject, :message, :status, :isread, :receiver_name)";
$statement1 = $connect->prepare($query1);
$statement1->execute($data1);


$query = "SELECT * FROM parent_table WHERE parent_name = (SELECT PName FROM registration WHERE CurrentClass = 3 ) AND parent_no != '".$from1."'";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

foreach($result as $row)
{

$sql1 = "SELECT count(id) FROM `message`"; 
$resul1 = $connect->prepare($sql1); 
$resul1->execute(); 
$idd1 = $resul1->fetchColumn();
$id1 = ($idd1 +1);
  $data = array(
':id'                 =>    $id1,
':receiver_id1'       =>    $row['parent_no'],
':receiver_name1'     =>    $row['parent_name'],
':from_user_id'       =>    $from1,
':from_user_name'     =>    $from2,
':subject'            =>    $subj1,
':message'            =>    $mess1,
':status'             =>    '1',
':isread'             =>    '1',
':receiver_name'      =>    $reci2
);

$query = "INSERT INTO message (id, to_user_id, from_user_id, sender, reci, message_id, subject, message, status, isread, destination) VALUES (:id, :receiver_id1, :from_user_id, :from_user_name, :receiver_name1, :from_user_id, :subject, :message, :status, :isread, :receiver_name)";
$statement = $connect->prepare($query);
$statement->execute($data);
}
}


if ($reci2 == 4) {
$sql = "SELECT count(id) FROM `message`"; 
$resul = $connect->prepare($sql); 
$resul->execute(); 
$idd = $resul->fetchColumn();
$id = ($idd +1);
$data1 = array(
':id'                 =>    $id,
':receiver_id2'       =>    '0',
':receiver_name2'     =>    $rice2,
':from_user_id'       =>    $from1,
':from_user_name'     =>    $from2,
':subject'            =>    $subj1,
':message'            =>    $mess1,
':status'             =>    '1',
':isread'             =>    '1',
':receiver_name'      =>    '0'
);

$query1 = "INSERT INTO message (id, to_user_id, from_user_id, sender, reci, message_id, subject, message, status, isread, destination) VALUES (:id, :receiver_id2, :from_user_id, :from_user_name, :receiver_name2, :from_user_id, :subject, :message, :status, :isread, :receiver_name)";
$statement1 = $connect->prepare($query1);
$statement1->execute($data1);


$query = "SELECT * FROM parent_table WHERE parent_name = (SELECT PName FROM registration WHERE CurrentClass = 4 ) AND parent_no != '".$from1."'";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

foreach($result as $row)
{

$sql1 = "SELECT count(id) FROM `message`"; 
$resul1 = $connect->prepare($sql1); 
$resul1->execute(); 
$idd1 = $resul1->fetchColumn();
$id1 = ($idd1 +1);
  $data = array(
':id'                 =>    $id1,
':receiver_id1'       =>    $row['parent_no'],
':receiver_name1'     =>    $row['parent_name'],
':from_user_id'       =>    $from1,
':from_user_name'     =>    $from2,
':subject'            =>    $subj1,
':message'            =>    $mess1,
':status'             =>    '1',
':isread'             =>    '1',
':receiver_name'      =>    $reci2
);

$query = "INSERT INTO message (id, to_user_id, from_user_id, sender, reci, message_id, subject, message, status, isread, destination) VALUES (:id, :receiver_id1, :from_user_id, :from_user_name, :receiver_name1, :from_user_id, :subject, :message, :status, :isread, :receiver_name)";
$statement = $connect->prepare($query);
$statement->execute($data);
}
}


if ($reci3 == 5) {
$sql = "SELECT count(id) FROM `message`"; 
$resul = $connect->prepare($sql); 
$resul->execute(); 
$idd = $resul->fetchColumn();
$id = ($idd +1);
$data1 = array(
':id'                 =>    $id,
':receiver_id3'       =>    '0',
':receiver_name3'     =>    $rice3,
':from_user_id'       =>    $from1,
':from_user_name'     =>    $from2,
':subject'            =>    $subj1,
':message'            =>    $mess1,
':status'             =>    '1',
':isread'             =>    '1',
':receiver_name'      =>    '0'
);

$query1 = "INSERT INTO message (id, to_user_id, from_user_id, sender, reci, message_id, subject, message, status, isread, destination) VALUES (:id, :receiver_id3, :from_user_id, :from_user_name, :receiver_name3, :from_user_id, :subject, :message, :status, :isread, :receiver_name)";
$statement1 = $connect->prepare($query1);
$statement1->execute($data1);

$query = "SELECT * FROM registration WHERE CurrentClass = 1 AND AdmNo != '".$from1."'";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

foreach($result as $row)
{

$sql1 = "SELECT count(id) FROM `message`"; 
$resul1 = $connect->prepare($sql1); 
$resul1->execute(); 
$idd1 = $resul1->fetchColumn();
$id1 = ($idd1 +1);
  $data = array(
':id'                 =>    $id1,
':receiver_id1'       =>    $row['AdmNo'],
':receiver_name1'     =>    $row['Name'],
':from_user_id'       =>    $from1,
':from_user_name'     =>    $from2,
':subject'            =>    $subj1,
':message'            =>    $mess1,
':status'             =>    '1',
':isread'             =>    '1',
':receiver_name'      =>    $rice3
);

$query = "INSERT INTO message (id, to_user_id, from_user_id, sender, reci, message_id, subject, message, status, isread, destination) VALUES (:id, :receiver_id1, :from_user_id, :from_user_name, :receiver_name1, :from_user_id, :subject, :message, :status, :isread, :receiver_name)";
$statement = $connect->prepare($query);
$statement->execute($data);
}
}


if ($reci3 == 6) {
$sql = "SELECT count(id) FROM `message`"; 
$resul = $connect->prepare($sql); 
$resul->execute(); 
$idd = $resul->fetchColumn();
$id = ($idd +1);
$data1 = array(
':id'                 =>    $id,
':receiver_id3'       =>    '0',
':receiver_name3'     =>    $rice3,
':from_user_id'       =>    $from1,
':from_user_name'     =>    $from2,
':subject'            =>    $subj1,
':message'            =>    $mess1,
':status'             =>    '1',
':isread'             =>    '1',
':receiver_name'      =>    '0'
);

$query1 = "INSERT INTO message (id, to_user_id, from_user_id, sender, reci, message_id, subject, message, status, isread, destination) VALUES (:id, :receiver_id3, :from_user_id, :from_user_name, :receiver_name3, :from_user_id, :subject, :message, :status, :isread, :receiver_name)";
$statement1 = $connect->prepare($query1);
$statement1->execute($data1);

$query = "SELECT * FROM registration WHERE CurrentClass = 2 AND AdmNo != '".$from1."'";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

foreach($result as $row)
{

$sql1 = "SELECT count(id) FROM `message`"; 
$resul1 = $connect->prepare($sql1); 
$resul1->execute(); 
$idd1 = $resul1->fetchColumn();
$id1 = ($idd1 +1);
  $data = array(
':id'                 =>    $id1,
':receiver_id1'       =>    $row['AdmNo'],
':receiver_name1'     =>    $row['Name'],
':from_user_id'       =>    $from1,
':from_user_name'     =>    $from2,
':subject'            =>    $subj1,
':message'            =>    $mess1,
':status'             =>    '1',
':isread'             =>    '1',
':receiver_name'      =>    $rice3
);

$query = "INSERT INTO message (id, to_user_id, from_user_id, sender, reci, message_id, subject, message, status, isread, destination) VALUES (:id, :receiver_id1, :from_user_id, :from_user_name, :receiver_name1, :from_user_id, :subject, :message, :status, :isread, :receiver_name)";
$statement = $connect->prepare($query);
$statement->execute($data);
}
}


if ($reci3 == 7) {
$sql = "SELECT count(id) FROM `message`"; 
$resul = $connect->prepare($sql); 
$resul->execute(); 
$idd = $resul->fetchColumn();
$id = ($idd +1);
$data1 = array(
':id'                 =>    $id,
':receiver_id3'       =>    '0',
':receiver_name3'     =>    $rice3,
':from_user_id'       =>    $from1,
':from_user_name'     =>    $from2,
':subject'            =>    $subj1,
':message'            =>    $mess1,
':status'             =>    '1',
':isread'             =>    '1',
':receiver_name'      =>    '0'
);

$query1 = "INSERT INTO message (id, to_user_id, from_user_id, sender, reci, message_id, subject, message, status, isread, destination) VALUES (:id, :receiver_id3, :from_user_id, :from_user_name, :receiver_name3, :from_user_id, :subject, :message, :status, :isread, :receiver_name)";
$statement1 = $connect->prepare($query1);
$statement1->execute($data1);

$query = "SELECT * FROM registration WHERE CurrentClass = 3 AND AdmNo != '".$from1."'";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

foreach($result as $row)
{

$sql1 = "SELECT count(id) FROM `message`"; 
$resul1 = $connect->prepare($sql1); 
$resul1->execute(); 
$idd1 = $resul1->fetchColumn();
$id1 = ($idd1 +1);
  $data = array(
':id'                 =>    $id1,
':receiver_id1'       =>    $row['AdmNo'],
':receiver_name1'     =>    $row['Name'],
':from_user_id'       =>    $from1,
':from_user_name'     =>    $from2,
':subject'            =>    $subj1,
':message'            =>    $mess1,
':status'             =>    '1',
':isread'             =>    '1',
':receiver_name'      =>    $rice3
);

$query = "INSERT INTO message (id, to_user_id, from_user_id, sender, reci, message_id, subject, message, status, isread, destination) VALUES (:id, :receiver_id1, :from_user_id, :from_user_name, :receiver_name1, :from_user_id, :subject, :message, :status, :isread, :receiver_name)";
$statement = $connect->prepare($query);
$statement->execute($data);
}
}


if ($reci3 == 8) {
$sql = "SELECT count(id) FROM `message`"; 
$resul = $connect->prepare($sql); 
$resul->execute(); 
$idd = $resul->fetchColumn();
$id = ($idd +1);
$data1 = array(
':id'                 =>    $id,
':receiver_id3'       =>    '0',
':receiver_name3'     =>    $rice3,
':from_user_id'       =>    $from1,
':from_user_name'     =>    $from2,
':subject'            =>    $subj1,
':message'            =>    $mess1,
':status'             =>    '1',
':isread'             =>    '1',
':receiver_name'      =>    '0'
);

$query1 = "INSERT INTO message (id, to_user_id, from_user_id, sender, reci, message_id, subject, message, status, isread, destination) VALUES (:id, :receiver_id3, :from_user_id, :from_user_name, :receiver_name3, :from_user_id, :subject, :message, :status, :isread, :receiver_name)";
$statement1 = $connect->prepare($query1);
$statement1->execute($data1);

$query = "SELECT * FROM registration WHERE CurrentClass = 4 AND AdmNo != '".$from1."'";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

foreach($result as $row)
{

$sql1 = "SELECT count(id) FROM `message`"; 
$resul1 = $connect->prepare($sql1); 
$resul1->execute(); 
$idd1 = $resul1->fetchColumn();
$id1 = ($idd1 +1);
  $data = array(
':id'                 =>    $id1,
':receiver_id1'       =>    $row['AdmNo'],
':receiver_name1'     =>    $row['Name'],
':from_user_id'       =>    $from1,
':from_user_name'     =>    $from2,
':subject'            =>    $subj1,
':message'            =>    $mess1,
':status'             =>    '1',
':isread'             =>    '1',
':receiver_name'      =>    $rice3
);

$query = "INSERT INTO message (id, to_user_id, from_user_id, sender, reci, message_id, subject, message, status, isread, destination) VALUES (:id, :receiver_id1, :from_user_id, :from_user_name, :receiver_name1, :from_user_id, :subject, :message, :status, :isread, :receiver_name)";
$statement = $connect->prepare($query);
$statement->execute($data);
}
}


if ($reci1 == 9) {
$sql = "SELECT count(id) FROM `message`"; 
$resul = $connect->prepare($sql); 
$resul->execute(); 
$idd = $resul->fetchColumn();
$id = ($idd +1);
$data1 = array(
':id'                 =>    $id,
':receiver_id3'       =>    '0',
':receiver_name3'     =>    $rice1,
':from_user_id'       =>    $from1,
':from_user_name'     =>    $from2,
':subject'            =>    $subj1,
':message'            =>    $mess1,
':status'             =>    '1',
':isread'             =>    '1',
':receiver_name'      =>    '0'
);

$query1 = "INSERT INTO message (id, to_user_id, from_user_id, sender, reci, message_id, subject, message, status, isread, destination) VALUES (:id, :receiver_id3, :from_user_id, :from_user_name, :receiver_name3, :from_user_id, :subject, :message, :status, :isread, :receiver_name)";
$statement1 = $connect->prepare($query1);
$statement1->execute($data1);


$query = "SELECT * FROM teacher_table  WHERE teacher_no != '".$from1."'";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

foreach($result as $row)
{

$sql1 = "SELECT count(id) FROM `message`"; 
$resul1 = $connect->prepare($sql1); 
$resul1->execute(); 
$idd1 = $resul1->fetchColumn();
$id1 = ($idd1 +1);
  $data = array(
':id'                 =>    $id1,
':receiver_id1'       =>    $row['teacher_no'],
':receiver_name1'     =>    $row['Name'],
':from_user_id'       =>    $from1,
':from_user_name'     =>    $from2,
':subject'            =>    $subj1,
':message'            =>    $mess1,
':status'             =>    '1',
':isread'             =>    '1',
':receiver_name'      =>    $rice1
);

$query = "INSERT INTO message (id, to_user_id, from_user_id, sender, reci, message_id, subject, message, status, isread, destination) VALUES (:id, :receiver_id1, :from_user_id, :from_user_name, :receiver_name1, :from_user_id, :subject, :message, :status, :isread, :receiver_name)";
$statement = $connect->prepare($query);
$statement->execute($data);
}
}


if ($reci1 == 10) {
$sql = "SELECT count(id) FROM `message`"; 
$resul = $connect->prepare($sql); 
$resul->execute(); 
$idd = $resul->fetchColumn();
$id = ($idd +1);
$data1 = array(
':id'                 =>    $id,
':receiver_id3'       =>    '0',
':receiver_name3'     =>    $rice1,
':from_user_id'       =>    $from1,
':from_user_name'     =>    $from2,
':subject'            =>    $subj1,
':message'            =>    $mess1,
':status'             =>    '1',
':isread'             =>    '1',
':receiver_name'      =>    '0'
);

$query1 = "INSERT INTO message (id, to_user_id, from_user_id, sender, reci, message_id, subject, message, status, isread, destination) VALUES (:id, :receiver_id3, :from_user_id, :from_user_name, :receiver_name3, :from_user_id, :subject, :message, :status, :isread, :receiver_name)";
$statement1 = $connect->prepare($query1);
$statement1->execute($data1);


$query = "SELECT * FROM teacher_table  WHERE teacher_no != '".$from1."'";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

foreach($result as $row)
{

$sql1 = "SELECT count(id) FROM `message`"; 
$resul1 = $connect->prepare($sql1); 
$resul1->execute(); 
$idd1 = $resul1->fetchColumn();
$id1 = ($idd1 +1);
  $data = array(
':id'                 =>    $id1,
':receiver_id1'       =>    $row['teacher_no'],
':receiver_name1'     =>    $row['Name'],
':from_user_id'       =>    $from1,
':from_user_name'     =>    $from2,
':subject'            =>    $subj1,
':message'            =>    $mess1,
':status'             =>    '1',
':isread'             =>    '1',
':receiver_name'      =>    $rice1
);

$query = "INSERT INTO message (id, to_user_id, from_user_id, sender, reci, message_id, subject, message, status, isread, destination) VALUES (:id, :receiver_id1, :from_user_id, :from_user_name, :receiver_name1, :from_user_id, :subject, :message, :status, :isread, :receiver_name)";
$statement = $connect->prepare($query);
$statement->execute($data);
}
}


if ($reci3 == 11) {
$sql = "SELECT count(id) FROM `message`"; 
$resul = $connect->prepare($sql); 
$resul->execute(); 
$idd = $resul->fetchColumn();
$id = ($idd +1);
$data1 = array(
':id'                 =>    $id,
':receiver_id3'       =>    '0',
':receiver_name3'     =>    $rice3,
':from_user_id'       =>    $from1,
':from_user_name'     =>    $from2,
':subject'            =>    $subj1,
':message'            =>    $mess1,
':status'             =>    '1',
':isread'             =>    '1',
':receiver_name'      =>    '0'
);

$query1 = "INSERT INTO message (id, to_user_id, from_user_id, sender, reci, message_id, subject, message, status, isread, destination) VALUES (:id, :receiver_id3, :from_user_id, :from_user_name, :receiver_name3, :from_user_id, :subject, :message, :status, :isread, :receiver_name)";
$statement1 = $connect->prepare($query1);
$statement1->execute($data1);


$query = "SELECT * FROM registration WHERE AdmNo != '".$from1."'";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

foreach($result as $row)
{

$sql1 = "SELECT count(id) FROM `message`"; 
$resul1 = $connect->prepare($sql1); 
$resul1->execute(); 
$idd1 = $resul1->fetchColumn();
$id1 = ($idd1 +1);
  $data = array(
':id'                 =>    $id1,
':receiver_id1'       =>    $row['AdmNo'],
':receiver_name1'     =>    $row['Name'],
':from_user_id'       =>    $from1,
':from_user_name'     =>    $from2,
':subject'            =>    $subj1,
':message'            =>    $mess1,
':status'             =>    '1',
':isread'             =>    '1',
':receiver_name'      =>    $rice3
);

$query = "INSERT INTO message (id, to_user_id, from_user_id, sender, reci, message_id, subject, message, status, isread, destination) VALUES (:id, :receiver_id1, :from_user_id, :from_user_name, :receiver_name1, :from_user_id, :subject, :message, :status, :isread, :receiver_name)";
$statement = $connect->prepare($query);
$statement->execute($data);
}
}


if ($reci2 == 12) {
$sql = "SELECT count(id) FROM `message`"; 
$resul = $connect->prepare($sql); 
$resul->execute(); 
$idd = $resul->fetchColumn();
$id = ($idd +1);
$data1 = array(
':id'                 =>    $id,
':receiver_id2'       =>    '0',
':receiver_name2'     =>    $rice2,
':from_user_id'       =>    $from1,
':from_user_name'     =>    $from2,
':subject'            =>    $subj1,
':message'            =>    $mess1,
':status'             =>    '1',
':isread'             =>    '1',
':receiver_name'      =>    '0'
);

$query1 = "INSERT INTO message (id, to_user_id, from_user_id, sender, reci, message_id, subject, message, status, isread, destination) VALUES (:id, :receiver_id2, :from_user_id, :from_user_name, :receiver_name2, :from_user_id, :subject, :message, :status, :isread, :receiver_name)";
$statement1 = $connect->prepare($query1);
$statement1->execute($data1);


$query = "SELECT * FROM parent_table WHERE parent_no != '".$from1."'";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

foreach($result as $row)
{

$sql1 = "SELECT count(id) FROM `message`"; 
$resul1 = $connect->prepare($sql1); 
$resul1->execute(); 
$idd1 = $resul1->fetchColumn();
$id1 = ($idd1 +1);
  $data = array(
':id'                 =>    $id1,
':receiver_id1'       =>    $row['parent_no'],
':receiver_name1'     =>    $row['parent_name'],
':from_user_id'       =>    $from1,
':from_user_name'     =>    $from2,
':subject'            =>    $subj1,
':message'            =>    $mess1,
':status'             =>    '1',
':isread'             =>    '1',
':receiver_name'      =>    $reci2
);

$query = "INSERT INTO message (id, to_user_id, from_user_id, sender, reci, message_id, subject, message, status, isread, destination) VALUES (:id, :receiver_id1, :from_user_id, :from_user_name, :receiver_name1, :from_user_id, :subject, :message, :status, :isread, :receiver_name)";
$statement = $connect->prepare($query);
$statement->execute($data);
}
}


if ($reci1 == 13) {
$sql = "SELECT count(id) FROM `message`"; 
$resul = $connect->prepare($sql); 
$resul->execute(); 
$idd = $resul->fetchColumn();
$id = ($idd +1);
$data1 = array(
':id'                 =>    $id,
':receiver_id3'       =>    '0',
':receiver_name3'     =>    $rice1,
':from_user_id'       =>    $from1,
':from_user_name'     =>    $from2,
':subject'            =>    $subj1,
':message'            =>    $mess1,
':status'             =>    '1',
':isread'             =>    '1',
':receiver_name'      =>    '0'
);

$query1 = "INSERT INTO message (id, to_user_id, from_user_id, sender, reci, message_id, subject, message, status, isread, destination) VALUES (:id, :receiver_id3, :from_user_id, :from_user_name, :receiver_name3, :from_user_id, :subject, :message, :status, :isread, :receiver_name)";
$statement1 = $connect->prepare($query1);
$statement1->execute($data1);


$query = "SELECT * FROM teacher_table  WHERE teacher_no != '".$from1."'";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

foreach($result as $row)
{

$sql1 = "SELECT count(id) FROM `message`"; 
$resul1 = $connect->prepare($sql1); 
$resul1->execute(); 
$idd1 = $resul1->fetchColumn();
$id1 = ($idd1 +1);
  $data = array(
':id'                 =>    $id1,
':receiver_id1'       =>    $row['teacher_no'],
':receiver_name1'     =>    $row['Name'],
':from_user_id'       =>    $from1,
':from_user_name'     =>    $from2,
':subject'            =>    $subj1,
':message'            =>    $mess1,
':status'             =>    '1',
':isread'             =>    '1',
':receiver_name'      =>    $rice1
);

$query = "INSERT INTO message (id, to_user_id, from_user_id, sender, reci, message_id, subject, message, status, isread, destination) VALUES (:id, :receiver_id1, :from_user_id, :from_user_name, :receiver_name1, :from_user_id, :subject, :message, :status, :isread, :receiver_name)";
$statement = $connect->prepare($query);
$statement->execute($data);
}
}
}
else
{

if (($reci1 != 0) AND ($reci1 != 9 OR $reci1 != 10 OR $reci1 != 13 OR $reci2 != 1 OR $reci2 != 2 OR $reci2 != 3 OR $reci2 != 4 OR $reci2 != 12 OR $reci3 != 5 OR $reci3 != 6 OR $reci3 != 7 OR $reci3 != 8 OR $reci3 != 11)) {

$sql = "SELECT count(id) FROM `message`"; 
$resul = $connect->prepare($sql); 
$resul->execute(); 
$idd = $resul->fetchColumn();
$id = ($idd +1);
  $data = array(
':id'                 =>    $id,
':receiver_id1'       =>    $reci1,
':receiver_name1'     =>    $rice1,
':from_user_id'       =>    $from1,
':from_user_name'     =>    $from2,
':subject'            =>    $subj1,
':message'            =>    $mess1,
':status'             =>    '1',
':isread'             =>    '1',
':receiver_name'      =>    '0'
);

$query = "INSERT INTO message (id, to_user_id, from_user_id, sender, reci, message_id, subject, message, status, isread, destination) VALUES (:id, :receiver_id1, :from_user_id, :from_user_name, :receiver_name1, :from_user_id, :subject, :message, :status, :isread, :receiver_name)";
$statement = $connect->prepare($query);
$statement->execute($data);
}


if (($reci2 != 0) AND ($reci1 != 9 OR $reci1 != 10 OR $reci1 != 13 OR $reci2 != 1 OR $reci2 != 2 OR $reci2 != 3 OR $reci2 != 4 OR $reci2 != 12 OR $reci3 != 5 OR $reci3 != 6 OR $reci3 != 7 OR $reci3 != 8 OR $reci3 != 11)) {
$sql = "SELECT count(id) FROM `message`"; 
$resul = $connect->prepare($sql); 
$resul->execute(); 
$idd = $resul->fetchColumn();
$id = ($idd +1);
$data = array(
':id'                 =>    $id,
':receiver_id2'       =>    $reci2,
':receiver_name2'     =>    $rice2,
':from_user_id'       =>    $from1,
':from_user_name'     =>    $from2,
':subject'            =>    $subj1,
':message'            =>    $mess1,
':status'             =>    '1',
':isread'             =>    '1',
':receiver_name'      =>    '0'
);

$query = "INSERT INTO message (id, to_user_id, from_user_id, sender, reci, message_id, subject, message, status, isread, destination) VALUES (:id, :receiver_id2, :from_user_id, :from_user_name, :receiver_name2, :from_user_id, :subject, :message, :status, :isread, :receiver_name)";
$statement = $connect->prepare($query);
$statement->execute($data);
}
if (($reci3 != 0) AND ($reci1 != 9 OR $reci1 != 10 OR $reci1 != 13 OR $reci2 != 1 OR $reci2 != 2 OR $reci2 != 3 OR $reci2 != 4 OR $reci2 != 12 OR $reci3 != 5 OR $reci3 != 6 OR $reci3 != 7 OR $reci3 != 8 OR $reci3 != 11)) {
$sql = "SELECT count(id) FROM `message`"; 
$resul = $connect->prepare($sql); 
$resul->execute(); 
$idd = $resul->fetchColumn();
$id = ($idd +1);
$data = array(
':id'                 =>    $id,
':receiver_id3'       =>    $reci3,
':receiver_name3'     =>    $rice3,
':from_user_id'       =>    $from1,
':from_user_name'     =>    $from2,
':subject'            =>    $subj1,
':message'            =>    $mess1,
':status'             =>    '1',
':isread'             =>    '1',
':receiver_name'      =>    '0'
);

$query = "INSERT INTO message (id, to_user_id, from_user_id, sender, reci, message_id, subject, message, status, isread, destination) VALUES (:id, :receiver_id3, :from_user_id, :from_user_name, :receiver_name3, :from_user_id, :subject, :message, :status, :isread, :receiver_name)";
$statement = $connect->prepare($query);
$statement->execute($data);
}
}
?>

