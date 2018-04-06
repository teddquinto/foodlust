<?php


require "dbconn.php";


session_start();

@$admin = $_SESSION['admin'];

// $name2 = @$_SESSION['name'];

if(!isset($admin)){ header('location:../index.php'); } else {  

$id = $_POST['id'];




$sql = "DELETE FROM events WHERE id='$id' ";
$res =mysqli_query($connect,$sql);

if ($res) {
	echo "1";




}else{
	echo "error";
}

}
?>

