<?php 
	session_start();	
include "dbconn.php";
require_once('../../Captcha/securimage.php');
$securimage = new Securimage();

if(isset($_COOKIE['login'])){
    if($_COOKIE['login'] >= 3){
    echo "2";
    }
}


if(isset($_COOKIE['login'])){
     if($_COOKIE['login'] <= 3){
        $attempts = $_COOKIE['login'] + 1;
            setcookie('login', $attempts, time()+60*1); //set the cookie for 10 minutes with the number of attempts stored
        }
	}else{
          setcookie('login', 1, time()+60*1); //set the cookie for 10 minutes with the initial value of 1
    }

$email = $_POST['email'];
$pass = $_POST['pass'];
// $pass = "asd";
$password = md5($pass);

// $password = md5($password);

// $email = 'jan2@gmail.com';
// echo $password;



$sql = "SELECT * FROM users where email='$email' AND pass='$password' AND (status = '0' OR status = '1')  ";
$result =mysqli_query($connect,$sql);
$row = mysqli_num_rows($result);
	if ($row>0) {   
	
		$_SESSION['email'] = $email;


			$sql9 = "SELECT * FROM users where email='$email'";
			$result9 = mysqli_query($connect,$sql9);
			$row9 = mysqli_fetch_array($result9);
			$user_id = $row9['user_id'];
			$_SESSION['user_id'] = $user_id;
				 $lname = $row9['lname'];
				$fname = $row9['fname'];
				$_SESSION['name'] = $lname . " " . $fname;
				$name = $_SESSION['name'];

				//echo $name;
			
					$sql8 = "INSERT INTO activity_log values('','$name','$user_id',CURRENT_TIMESTAMP,'Logged In','0')";
					$result8 = mysqli_query($connect,$sql8); 

					$update = "UPDATE users set status = '1' WHERE user_id ='$user_id' ";
					$res_up = mysqli_query($connect,$update); 
   			
   						echo "1";

	} else {
		
		echo "0"; 

	// 	if(isset($_COOKIE['login'])){
 //     if($_COOKIE['login'] <= 3){
 //        $attempts = $_COOKIE['login'] + 1;
 //            setcookie('login', $attempts, time()+60*1); //set the cookie for 10 minutes with the number of attempts stored
          
 //        }else{
 //           echo "2";
 //        }
	// }else{
 //          setcookie('login', 1, time()+60*1); //set the cookie for 10 minutes with the initial value of 1
 //    }
		
	}
	$captcha = @$_POST['ct_captcha'];
if ($securimage->check($captcha) == true) {
	if (isset($captcha)) {
		$sql = "SELECT * FROM users where email='$email' and pass='$password' AND (status = '0' OR status = '1' )";
$result =mysqli_query($connect,$sql);
$row = mysqli_num_rows($result);
	if ($row>0) {   
	
		$_SESSION['email'] = $email;


			$sql9 = "SELECT * FROM users where email='$email'";
			$result9 = mysqli_query($connect,$sql9);
			$row9 = mysqli_fetch_array($result9);
			$user_id = $row9['user_id'];
			$_SESSION['user_id'] = $user_id;
				 $lname = $row9['lname'];
				$fname = $row9['fname'];
				$_SESSION['name'] = $lname . " " . $fname;
				$name = $_SESSION['name'];

				//echo $name;
			
					$sql8 = "INSERT INTO activity_log values('','$name','$user_id',CURRENT_TIMESTAMP,'Logged In','0')";
					$result8 = mysqli_query($connect,$sql8); 

						$update = "UPDATE users set status = '1' WHERE user_id ='$user_id' ";
					$res_up = mysqli_query($connect,$update); 
   			
   						echo "1";
	}
	
	
}
}else{

	echo "0";
}
?>