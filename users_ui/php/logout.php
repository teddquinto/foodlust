<?php
session_start();
@$user_id = $_SESSION['user_id'];
include "dbconn.php";

	$sql9 = "SELECT * FROM users where user_id='$user_id'";
	$result9 = mysqli_query($connect,$sql9);
	while($row9 = mysqli_fetch_array($result9)){
		 $lname = $row9['lname'];

				$fname = $row9['fname'];
				$_SESSION['name'] = $lname . " " . $fname;
				$name = $_SESSION['name'];
			
			$sql8 = "INSERT INTO activity_log values('','$name','$user_id',CURRENT_TIMESTAMP,'Logout from foodlust','0')";
			$result8 = mysqli_query($connect,$sql8); 

			$update = "UPDATE users set status = '0' WHERE user_id ='$user_id' ";
					$res_up = mysqli_query($connect,$update); 
					
				session_destroy();
				unset($user_id);
				header('location:../index.php');
	}
				header('location:../index.php');

?>