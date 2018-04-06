<?php


session_start();

$user_id = @$_SESSION['user_id'];

// $name2 = @$_SESSION['name'];

if(!isset($user_id)){ header('location:../index.php'); } else {  } 

require 'dbconn.php';





	$pass = $_POST['password'];
	$pass2 = $_POST['password2'];
	$pass3 = md5($pass);
	$pass4	= md5($pass2);

	if ($pass3 == $pass4) {
		$insert = "UPDATE users set pass = '$pass3' WHERE user_id = '$user_id' ";
		$ress = mysqli_query($connect,$insert);

		if ($ress) {
			echo "success";
		}else{
			echo "error";
		}
	}





?>