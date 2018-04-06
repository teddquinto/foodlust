<?php


require "dbconn.php";


session_start();

@$user_id = $_SESSION['user_id'];

// $name2 = @$_SESSION['name'];

if(!isset($user_id)){ header('location:../index.php'); } else {  





$id = $_POST['ids'];
$status= "open";
$status2  = "unopened";



	$check = "SELECT * FROM conversation WHERE ((from_id = '$id' AND to_id ='$user_id') OR (from_id = '$user_id' AND to_id ='$id')) ";
$re_c = mysqli_query($connect,$check);
$row = mysqli_fetch_assoc($re_c);
$idd = $row['c_id'];



	$conv = "UPDATE conversation SET status = '$status' WHERE c_id = '$idd' ";
			$res_cc = mysqli_query($connect,$conv);



if ($res_cc) {
	
	 echo "you are now free to message the user by going to the message panel";

	  // $sql_n = "INSERT INTO notifications values('','$user_id','$id','is ready to have transaction with you',CURRENT_TIMESTAMP,'0')";
   //                	 $result_n = mysqli_query($connect,$sql_n); 

	
}else{

	echo "error";
}





}
?>


