<?php


require "dbconn.php";


session_start();

@$user_id = $_SESSION['user_id'];

// $name2 = @$_SESSION['name'];

if(!isset($user_id)){ header('location:../index.php'); } else {  




$id2 = $_POST['id2'];
$id = $_POST['id3'];
$status= "seen";
$status2  = "unopened";

if ($id2 == $user_id) {
	echo "you cannot have transaction with your own product";
	}else{

	$check = "SELECT * FROM conversation WHERE ((from_id = '$user_id' AND to_id ='$id2') OR (from_id = '$id2' AND to_id ='$user_id')) ";
$re_c = mysqli_query($connect,$check);
$row = mysqli_num_rows($re_c);
if ($row > 0) {
	echo "pending request";
}else{


	$conv = "INSERT INTO conversation(from_id,to_id,status) VALUES('$user_id','$id2','$status2') ";
			$res_c = mysqli_query($connect,$conv);

if ($res_c) {
	echo "please wait for the acceptance of the user";

	  $sql_n = "INSERT INTO notifications values('','$user_id','$id','interested to have transaction with your business',CURRENT_TIMESTAMP,'0')";
                  	 $result_n = mysqli_query($connect,$sql_n); 
}else{

	echo "error";
}


}

}
}
?>


