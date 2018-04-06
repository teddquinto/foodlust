<?php
session_start();
require "dbconn.php";


$user_id =$_SESSION['user_id'];
$id = $_POST['id'];
$rating = $_POST['rating'];
$c_name ="SELECT lname,fname FROM users WHERE user_id  = '$user_id' ";
$c_res = mysqli_query($connect,$c_name);
$row = mysqli_fetch_array($c_res);
$lname = $row['lname'];
$fname = $row['fname'];
$u_name = $row['lname']." ". $row['fname'];
$notif = 0;

// $prodid =$_POST['id4'];

$check = "SELECT * FROM users_rating WHERE user_id = '$user_id' AND user_rated_id = '$id' ";
$res = mysqli_query($connect, $check);
$row = mysqli_num_rows($res);
if ( $row > 0 ) {
	echo "you already rated this user ";
}else{
			$comm = "INSERT INTO users_rating(user_id,user_rated_id,rating,notif) VALUES('$user_id','$id','$rating','$notif') ";
			$res_comm = mysqli_query($connect, $comm);
			
			if ($res_comm) {
				echo "yes";

					 $sql8 = "INSERT INTO activity_log values('','$u_name','$user_id',CURRENT_TIMESTAMP,'rated a user $rating star','0')";
                  	 $result8 = mysqli_query($connect,$sql8); 

                  	  $sql_n = "INSERT INTO notifications values('','$user_id','$id','rated your account $rating star',CURRENT_TIMESTAMP,'0')";
                  	 $result_n = mysqli_query($connect,$sql_n); 
			}else{
				echo "no";
			}

}

//echo($outp);

// $sql = "UPDATE product_likes set rating ='$rating' WHERE prod_id='$id' AND user_id = '$user_id' ";
// $res = mysqli_query($connect,$sql);
// if (!$res) {
// 	echo "error";

// }else{
// 	echo "k";
// }
?>