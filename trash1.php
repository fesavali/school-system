<?php include("config.php"); 
include 'userSignup.php';

$post_ids = $_POST['post_id'];

foreach($post_ids as $id){ 
  // Delete record 
   $query = "
 UPDATE message 
 SET destination = '2' 
 WHERE idd = '".$id."'
 ";

  mysqli_query($conn,$query);
}
echo 1;
?>
