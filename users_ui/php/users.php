<?php

require "dbconn.php";

session_start();
$user_id  = $_SESSION['user_id'] ;
 echo "<script src='js/dashboard.js'></script>";
  // echo "<script src='js/admin-ajax/form-ajax.js'></script>";

$sql = "SELECT  * FROM users";

$res = mysqli_query($connect, $sql);


while ($row = mysqli_fetch_array($res)) {
	$id = $row['user_id'];
		if ($user_id == $id) {
		continue;
		}

		$conv = "SELECT * FROM conversation WHERE ((from_id ='$user_id' AND to_id = '$id' AND status = 'open') OR (from_id ='$id' AND to_id = '$user_id' AND status = 'open'))";
		$result = mysqli_query($connect,$conv);
$row4 = mysqli_num_rows($result);
if ($row4 == null) {
			echo "";


echo " 
	</div> 
	</div>";
	}else{	
	while ($row2 = mysqli_fetch_assoc($result)) {
	@$cid2 = $row2['c_id'];
		}
		$status = "SELECT COUNT(m_id) as mm FROM messages WHERE from_id = '$id' AND c_id = '$cid2' AND status = 0 ";
		$res_stat = mysqli_query($connect, $status);
		$row22 = mysqli_fetch_assoc($res_stat);

	echo "<div class='message-box animated bounceInLeft' style='background-color:white !important;'>

	<div class='message-bar'>
	<img src ='img/uploads/".$row['user_profile']."' style ='width:20px;height:20px; float:left; margin:auto;'> 
<a href = 'homee.php?id=".$row['user_id']."'><p class='names' id ='useras' alt='".$row['user_id']."'>". $row['lname']." ". $row['fname'] ." </p> ";
echo"<rbd class= 'rbd'>". $row22['mm'];
 if ($row22['mm'] <= 1) {
	echo "  message</a> 
	<p> </p>
	</div> 
	</div>";

}else { 
	echo " new messages</a> 
	<p> </p></rbd>
	</div> 
	</div>";
}
}
}
?>