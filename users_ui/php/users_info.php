
<?php 
	session_start();	
include "dbconn.php";

$user_id = $_POST['id3'];

$sql = "SELECT * FROM users where user_id='$user_id' ";
$result =mysqli_query($connect,$sql);
$row = mysqli_fetch_assoc($result);
 	
	$lname         =$row['lname'];	
	$type_of_user =$row['type_of_user'];
	$user_id       =$row['user_id'];
	$fname         =$row['fname'];
	$address       =$row['address'];
	$user_profile  =$row['user_profile'];
	$business_name =$row['business_name'];
	$cpnum   	   = $row['cp_num'];
	$email   	   = $row['email'];



echo "<div class='usersss'> 
	<a href = 'homee.php?id=".$user_id."'><button id = 'user' value='$user_id'>Chat </button></a>
	<div class = 'img-cont'>
	<img id='user_pic' alt='$user_id' src='img/uploads/".$user_profile."'><br>
	</div>	
	<br>
	<br>
	
	<p>Name:".$lname." ".$fname."</p>
	<p>Type of user:".$type_of_user."</p>
	<p>Address: ".$address."</p>
	<p>Business Name:".$business_name."</p>
	<p>Email:".$email."</p>
	<p>Contact Number:".$cpnum."</p>
	</div>";
	
		
echo '<script type="text/javascript" src="js/dashboard.js"></script>';
echo '<script type="text/javascript" src="js/dashboard2.js"></script>';
?>