<?php
include("config.php");
include "userSignup.php";

	$string 		  =		$_POST["message_id"];
	$message_id 	  =		rtrim($string, ';');
	$receiver_id	  =		'unknown';
	$receiver_name	  =		'unknown';

$data = array(
':id'                 =>    $message_id,
':receiver_id'        =>    $receiver_id,
':receiver_name'      =>    $receiver_name,
':from_user_id'       =>    $_SESSION['from_user_id'],
':from_user_name'     =>    $_SESSION['from_user_name'],
':subject'            =>    'rep14ly1',
':message'            =>    $_POST['message'],
':status'             =>    '1',
':isread'             =>    '1',
':destination'      =>    '0'
);

$query = "INSERT INTO message (id, to_user_id, from_user_id, sender, reci, message_id, subject, message, status, isread, destination) VALUES (:id, :receiver_id, :from_user_id, :from_user_name, :receiver_name, :from_user_id, :subject, :message, :status, :isread, :destination)";
$statement = $connect->prepare($query);
$statement->execute($data);

?>
