<?php

require "dbconn.php";

session_start();

$user_id = $_SESSION['user_id'];

$message =$_POST['message'];
$toid = $_POST['id'];
$status= "seen";
$status2  = "unoppened";





	
$c_convo = "SELECT * FROM conversation WHERE ((from_id ='$user_id' AND to_id = '$toid') OR (from_id ='$toid' AND to_id = '$user_id')) ";
$res_con =mysqli_query($connect,$c_convo);
$row = mysqli_num_rows($res_con);

	if ($row == 0 ) {

		$conv = "INSERT INTO conversation(from_id,to_id,status) VALUES('$user_id','$toid','$status2') ";
			$res_c = mysqli_query($connect,$conv);
			if ($res_c) {
				$cid = mysqli_insert_id($connect);

				$sql = "INSERT INTO messages(from_id,c_id,m_Content) VALUES('$user_id','$cid','$message') ";
				$res = mysqli_query($connect,$sql);
			}

		
			//echo "fine";
			header("Location:ajaxmessage.php?id=$toid");

			
	}else{

	$c_convo2 = "SELECT * FROM conversation WHERE ((from_id ='$user_id' AND to_id = '$toid') OR (from_id ='$toid' AND to_id = '$user_id')) ";
	$res_con2 =mysqli_query($connect,$c_convo2);
	
	while ($row2 = mysqli_fetch_assoc($res_con2)) {
	$cid2 = $row2['c_id'];
		
	}
	 $sql2 = "INSERT INTO messages(from_id,c_id,m_Content) VALUES('$user_id','$cid2','$message') ";
		$res2 = mysqli_query($connect,$sql2);
		header("Location:ajaxmessage.php?id=$toid");	

		//echo "okay";
}

	




echo $cid;






?>