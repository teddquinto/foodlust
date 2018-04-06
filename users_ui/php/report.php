<?php


require "dbconn.php";


session_start();

@$user_id = $_SESSION['user_id'];

// $name2 = @$_SESSION['name'];

if(!isset($user_id)){ header('location:../index.php'); } else {  




$id2 = $_POST['id2'];
$report_c = $_POST['reason'];

	$check = "SELECT * FROM reports_user WHERE user_id = '$user_id' AND r_user_id ='$id2' ";
$re_c = mysqli_query($connect,$check);
$row = mysqli_num_rows($re_c);
if ($row > 0) {
	echo "your report is still in process";
}else{


$sql = "INSERT INTO reports_user(user_id,r_user_id,report,user_reason) VALUES('$user_id', '$id2','1','$report_c') ";
$res = mysqli_query($connect,$sql);

if ($res) {
	echo "successfully reported this user. your report will be reviewed by foodlust";
}else{

	echo "error";
}


}

}

?>


