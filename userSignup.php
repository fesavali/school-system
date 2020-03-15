<?php
include 'config.php';
session_start();
$username = "";
$email  = "";
$errors  = [];
// SIGN UP USER
if(isset($_POST['signup_btn'])) {
$username= mysqli_real_escape_string($conn,htmlspecialchars($_POST['username']));
$password_1= mysqli_real_escape_string($conn,htmlspecialchars($_POST['password']));
$password_2= mysqli_real_escape_string($conn,htmlspecialchars($_POST['passwordConf']));
if(empty($username)){
  				$errors['username'] = "This field is required";
  			}
	if (empty($password_1)) {
  				$errors['password'] = "This field is required";
  			}
	if (empty($password_2)) {
  				$errors['passwordConf'] = "This field is required";
  			}
	if ($password_1 != $password_2) {
        $errors['passwordConf'] = "The two passwords do not match";
      }
$qry=mysqli_query($conn,"SELECT id FROM student_table WHERE adm_no = '$username' LIMIT 1");
$query=mysqli_query($conn,"SELECT id FROM teacher_table WHERE teacher_no = '$username' LIMIT 1");
$query3=mysqli_query($conn,"SELECT id FROM parent_table WHERE parent_no = '$username' LIMIT 1");
$query4=mysqli_query($conn,"SELECT id FROM manage WHERE admin_name = '$username' LIMIT 1");
if(mysqli_num_rows($qry)==1){
while(count($errors) == 0){
$password = md5($password_1);
	$sp = "UPDATE student_table SET password = '$password' WHERE adm_no = '$username'"; 
    mysqli_query($conn, $sp);
while($row = mysqli_fetch_assoc($qry)) {
$user = $row['student_name'];
	$_SESSION['username'] = $user;
	$_SESSION['success_msg'] = "You are now logged in";
	header('location: stdp.php');
}
}
}
elseif(mysqli_num_rows($query)==1){
while(count($errors) == 0){
$password = md5($password_1);
	$sp = "UPDATE teacher_table SET password = '$password' WHERE teacher_no = '$username'"; 
    mysqli_query($conn, $sp);
while($row = mysqli_fetch_assoc($query)) {
$user = $row['teacher_name'];
	$_SESSION['username'] = $user;
	$_SESSION['success_msg'] = "You are now logged in";
	header('location: teacherp.php');
}
}
}
elseif(mysqli_num_rows($query3)==1){
while(count($errors) == 0){
	$password = md5($password_1);
	$sp = "UPDATE parent_table SET password = '$password' WHERE parent_no = '$username'"; 
    mysqli_query($conn, $sp);
while($row = mysqli_fetch_assoc($query3)) {
$user = $row['parent_name'];
	$_SESSION['username'] = $user;
	$_SESSION['success_msg'] = "You are now logged in";
	header('location: 
		parents.php');
}
}
}
elseif(mysqli_num_rows($query4)==1){
while(count($errors) == 0){
	$password = md5($password_1);
	$sp = "UPDATE manage SET password = '$password' WHERE admin_name = '$username'"; 
    mysqli_query($conn, $sp);
	$_SESSION['username'] = $username;
	$_SESSION['success_msg'] = "You are now logged in";
	header('location: administration.php');
}
}
else{
		$_SESSION['error_msg'] = "Invalid Login Details try again or contact admin";
}
}
if(isset($_POST['login_btn'])) {
$username= mysqli_real_escape_string($conn,htmlspecialchars($_POST['username']));
$password= mysqli_real_escape_string($conn,htmlspecialchars($_POST['password']));
if(empty($username)){
  				$errors['username'] = "This field is required";
  			}
if (empty($password)) {
  				$errors['password'] = "This field is required";
  			}
$password1 = md5($password);
$qry=mysqli_query($conn,"SELECT * FROM student_table WHERE adm_no = '$username' and password = '$password1' LIMIT 1");
$query=mysqli_query($conn,"SELECT * FROM teacher_table WHERE teacher_no = '$username' AND password = '$password1' LIMIT 1");
$query3=mysqli_query($conn,"SELECT * FROM parent_table WHERE parent_no = '$username' AND password = '$password1' LIMIT 1");
$query4=mysqli_query($conn,"SELECT * FROM manage WHERE admin_name = '$username' AND password = '$password1' LIMIT 1");
if(mysqli_num_rows($qry)==1){
if(count($errors) == 0){
while($row = mysqli_fetch_assoc($qry)) {
	$user_id = $row['adm_no'];
	$_SESSION['from_user_id'] = $user_id;
$user = $row['student_name'];
$_SESSION['username'] = $user;
	$_SESSION['success_msg'] = "You are now logged in";
	header('location: stdp.php');
}
}
}
elseif(mysqli_num_rows($query)==1){
if(count($errors) == 0){
while($row = mysqli_fetch_assoc($query)) {
	$user_id = $row['teacher_no'];
	$_SESSION['from_user_id'] = $user_id;
$user = $row['teacher_name'];
	$_SESSION['username'] = $user;
	$_SESSION['success_msg'] = "You are now logged in";
	header('location: teacherp.php');
}
}
}
elseif(mysqli_num_rows($query3)==1){
if(count($errors) == 0){
while($row = mysqli_fetch_assoc($query3)) {
	$user_id = $row['parent_no'];
	$_SESSION['from_user_id'] = $user_id;
$user = $row['parent_name'];
	$_SESSION['username'] = $user;
	$_SESSION['success_msg'] = "You are now logged in";
	header('location: parents.php');
}
}
}
elseif(mysqli_num_rows($query4)==1){
if(count($errors) == 0){
	$_SESSION['from_user_id'] = $username;
	$_SESSION['username'] = $username;
	$_SESSION['success_msg'] = "You are now logged in";
	header('location: administration.php');
}
}
else{
	$_SESSION['error_msg'] = "Invalid Login Details try again or contact admin";
}
}
?>