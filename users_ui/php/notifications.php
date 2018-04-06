<?php
require "dbconn.php";


session_start();

@$user_id = $_SESSION['user_id'];
 echo "<script src='js/dashboard.js'></script>";
 echo "<script src='js/dashboard2.js'></script>";

// $name2 = @$_SESSION['name'];

if(!isset($user_id)){ header('location:index.php'); } else {   

$sql = "SELECT * FROM product_post WHERE user_seller_id = '$user_id'";
$res = mysqli_query($connect,$sql);

while ($row = mysqli_fetch_assoc($res)){
$prodid = $row['prod_id'];
$prod_name = $row['prod_name'];

$ssql = "SELECT n.lname,n.fname,n.user_profile,s.action,s.user_id,s.prod_id,s.push FROM notifications as s,users as n WHERE s.user_id =n.user_id AND 
	 s.prod_id = '$prodid'  ORDER BY s.id desc ";
$res_s = mysqli_query($connect,$ssql);

// if (empty($row2  = mysqli_fetch_assoc($res_s))) {
// 	echo "<p>no notifications</p>";
// }else{

while($row2 = mysqli_fetch_assoc($res_s) ){
$pic =$row2['user_profile'];
$lname = $row2['lname'] ." ". $row2['fname'];
$action = $row2['action'];
$id= $row2['user_id'];
$prod= $row2['prod_id'];
$push = $row2['push'];


if ($action == 'commented on your '.$prod_name.' product ') {
	 echo "<div class='notifications-box animated bounceInLeft' style='background-color:white !important;'>
	<div class='notifications-bar' alt='$prod' value='$id' id ='userasss'>
	<img src ='img/uploads/$pic' style ='width:20px;height:20px; float:left; margin:auto;'> 
<p class='names' id ='userass' >$lname </p> ";
if ($push == 0) {
	echo "<p class='names' style='color:red;'>view </p>";
}else{
	echo "<p class='names'>viewed </p>";
}
echo"<rbd class= 'rbd'>$action</rbd></div></div>	";

}else if($action == 'interested to have transaction with your business') {

  echo "<div class='notifications-box animated bounceInLeft' style='background-color:white !important;'>
	<div class='notifications-bar' alt='$id' value='$prod' id ='userasa'>
	<img src ='img/uploads/$pic' style ='width:20px;height:20px; float:left; margin:auto;'> 
<p class='names' id ='userass' >$lname </p> ";

echo"<rbd class= 'rbd' style='color:red;'>$action</rbd></div></div>	";

}else if($action == 'is ready to have transaction with you') {

  echo "<div class='notifications-box animated bounceInLeft' style='background-color:white !important;'>
	<div class='notifications-bar' alt='$id' value='$prod' id ='userasa'>
	<img src ='img/uploads/$pic' style ='width:20px;height:20px; float:left; margin:auto;'> 
<p class='names' id ='userass' >$lname </p> ";

echo"<rbd class= 'rbd' style='color:red;'>$action</rbd></div></div>	";

 }else{
 	  echo "<div class='notifications-box animated bounceInLeft' style='background-color:white !important;'>
	<div class='notifications-bar' alt='$prod' value='$id' id ='useras'>
	<img src ='img/uploads/$pic' style ='width:20px;height:20px; float:left; margin:auto;'> 
<p class='names' id ='userass' >$lname </p> ";
if ($push == 0) {
	echo "<p class='names' style='color:red;'>view </p>";
}else{
	echo "<p class='names'>viewed </p>";
}
echo"<rbd class= 'rbd'>$action</rbd></div></div>	";

 }

	// echo " <br><br><br><br><input type ='text' value='".  $row2['lname']."'>";
	// echo " <br><br><br><br><input type ='text' value='".  $row2['action']."'>";
	

}

}

}
// }





?>