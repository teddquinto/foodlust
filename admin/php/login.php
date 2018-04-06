<?php 
	session_start();	
include "../../users_ui/php/dbconn.php";

$user = $_POST['us'];
$pass2 = $_POST['pa'];
$pass = md5($pass2);

// $email = 'jan2@gmail.com';
// $pass = "asd";

$sql = "SELECT * FROM admin where uname='$user' and pass='$pass'";
$result =mysqli_query($connect,$sql);
$row = mysqli_num_rows($result);
	if ($row>0) {   
	
		// $_SESSION['admin'] = $user;


			
   			
   						echo "1";

	} else {
		
		echo "0"; 
		
	}

?>