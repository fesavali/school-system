<?php
include 'config.php';
session_start();
$username = "";
$email  = "";
$errors  = [];
// SIGN UP USER
if (isset($_POST['signup_btn'])) {
$username= mysqli_real_escape_string($conn,htmlspecialchars($_POST['username']));
$password_1= mysqli_real_escape_string($conn,htmlspecialchars($_POST['password']));
$password_2= mysqli_real_escape_string($conn,htmlspecialchars($_POST['passwordConf']));
if(empty($username)){
  				$e['username'] = "This field is required";
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
$student_check = "SELECT * FROM student_table WHERE adm_no='$username' LIMIT 1";
$results = mysqli_query($conn, $student_check);
$suser = mysqli_fetch_assoc($results);
if(!$suser){
			$errors['username'] = "User Number Does not exist contact admin";
		}
else(count($errors) === 0) {
		// insert user into database
		$password = password_hash($_password, PASSWORD_DEFAULT);
		$query = "UPDATE student_table SET password = '$password' WHERE adm_no = 'username'";
		$result = mysqli_query($conn, $query);
		if($result == TRUE){
	$_SESSION['username'] = $username;
	$_SESSION['success'] = "You are now logged in";
	header('location:../index.php');
		}else {
			 $_SESSION['error_msg'] = "Database error: Could not register user";
		}
	}
}
?>
