<?php
include("config.php"); 
include 'userSignup.php';

$count=0;
$sql2="SELECT * FROM message WHERE isread = 1 AND to_user_id = '".$_SESSION['from_user_id']."'";
$result=mysqli_query($conn, $sql2);
$count=mysqli_num_rows($result);
if($count>0) { echo $count; } ?>