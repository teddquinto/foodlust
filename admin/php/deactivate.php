<?php


require "dbconn.php";


session_start();

@$admin = $_SESSION['admin'];

// $name2 = @$_SESSION['name'];

if(!isset($admin)){ header('location:../index.php'); } else {  

$id = $_POST['id'];

$em = "SELECT * FROM users WHERE user_id = '$id' ";
$res_em = mysqli_query($connect,$em);


$row = mysqli_fetch_assoc($res_em);

$email = $row['email'];


$sql = "DELETE FROM users WHERE user_id='$id' ";
$res =mysqli_query($connect,$sql);

if ($res) {
	echo "1";

 
$em2 = "INSERT INTO reported_users values('','$email') ";
$res_em2 = mysqli_query($connect,$em2);



}else{
	echo "error";
}

}
?>

