<?php
include 'config.php';
include  'usersignup.php';
$username = "";
$errors  = [];
// SIGN UP USER
if(isset($_POST['save_user'])) {
$username= mysqli_real_escape_string($conn,htmlspecialchars($_POST['username']));
$class= mysqli_real_escape_string($conn,htmlspecialchars($_POST['class']));
$stream= mysqli_real_escape_string($conn,htmlspecialchars($_POST['stream']));
if(empty($username)){
  				$errors['username'] = "This field is required";
  			}
	if (empty($class)) {
  				$errors['passwordOld'] = "This field is required";
  			}
	if (empty($stream)) {
  				$errors['password'] = "This field is required";
  			}
$pname = $_SESSION['username'];
$qry=mysqli_query($conn,"SELECT * FROM student_table WHERE adm_no = '$username' LIMIT 1");
$query3=mysqli_query($conn,"SELECT * FROM parent_table WHERE parent_name = '$pname' LIMIT 1");
if(mysqli_num_rows($qry)==1){
if(mysqli_num_rows($query3)==1){
	while(count($errors) == 0){
		while($row = mysqli_fetch_assoc($query3)) {
$number = $row['phone_number'];
	$sp = "UPDATE student_table SET parent_name = '$pname', parent_no = '$number' WHERE adm_no = '$username'"; 
    mysqli_query($conn, $sp);
	header('location: parents.php');
}
}
}
}
else{
		$_SESSION['error_msg'] = "Invalid student Details try again or contact admin";
}
}

?>