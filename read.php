<?php
include("config.php"); 
include 'userSignup.php';

$post_ids = $_POST['post_id'];
foreach($post_ids as $id){ 
$query = "UPDATE message SET isread = '0' WHERE to_user_id = '".$_SESSION['from_user_id']."' AND idd = '".$id."'";
mysqli_query($conn, $query);
}
echo 1;
?>
