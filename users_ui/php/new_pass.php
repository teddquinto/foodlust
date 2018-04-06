<?php


session_start();

// $user_id = @$_SESSION['user_id'];

// $name2 = @$_SESSION['name'];

// if(!isset($user_id)){ header('location:../index.php'); } else {  } 

require 'dbconn.php';

	$email = $_POST['emails'];
	$code = $_POST['code'];

	$sql = "SELECT * FROM temp_user WHERE email = '$email' AND security_code = '$code' ";
	$res = mysqli_query($connect,$sql);
	$row = mysqli_fetch_assoc($res);
	if ($row) {
		
	$pass = $_POST['pass1'];
	$pass2 = $_POST['pass2'];
	$pass3 = md5($pass);
	$pass4	= md5($pass2);

	if ($pass3 == $pass4) {
		$insert = "UPDATE users set pass = '$pass3' WHERE email = '$email' ";
		$ress = mysqli_query($connect,$insert);

		if ($ress) {
			

			$dels = "DELETE FROM temp_user WHERE email = '$email'";
			$res_d =mysqli_query($connect,$dels);
			if (!$res_d) {
				echo "error deleting";
			}else{
			
	
		echo "welcome!";

		  echo "<script>
                      window.location.href = '../index.php';  
                          </script>";
}

		}else{
			echo "error";
		}
	}



}


?>