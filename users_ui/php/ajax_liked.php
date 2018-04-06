<?php
session_start();
require "dbconn.php";


$user_id =$_SESSION['user_id'];

$id = $_POST['id'];

$c_name ="SELECT lname,fname FROM users WHERE user_id  = '$user_id' ";
$c_res = mysqli_query($connect,$c_name);
$row = mysqli_fetch_array($c_res);
$lname = $row['lname'];
$fname = $row['fname'];
$u_name = $row['lname']." ". $row['fname'];
$notif = 0;

// $data = array() ;
// $prodid =$_POST['id4'];

$check2 = "SELECT * FROM product_post WHERE user_seller_id = '$user_id' AND prod_id = '$id' ";
	$res2 = mysqli_query($connect, $check2);
	$row2 = mysqli_num_rows($res2);
	if ( $row2 > 0 ) {
	echo "you'cannot liked/interested on your own product  ";

	}else{


$check = "SELECT * FROM product_likes WHERE user_id = '$user_id' AND prod_id = '$id' ";
$res = mysqli_query($connect, $check);
$row = mysqli_num_rows($res);
if ( $row > 0 ) {
	echo "you're already interested in this product  ";
}else{

	

			$comm = "INSERT INTO product_likes(user_id,prod_id,notif) VALUES('$user_id','$id','$notif') ";
			$res_comm = mysqli_query($connect, $comm);
			
			if ($res_comm) {
				echo 'yes';
				// $data['result'] = 'yes';

					 $sql8 = "INSERT INTO activity_log values('','$u_name','$user_id',CURRENT_TIMESTAMP,'interested in a inquery','0')";
                  	 $result8 = mysqli_query($connect,$sql8); 

                  	  $sql_n = "INSERT INTO notifications values('','$user_id','$id','is interested in your post',CURRENT_TIMESTAMP,'0')";
                  	 $result_n = mysqli_query($connect,$sql_n); 
			}else{
				// $data['result'] = 'no';
				echo 'error';
			}

			// echo json_encode($data);

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