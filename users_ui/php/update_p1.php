<?php


require "dbconn.php";


session_start();

@$user_id = $_SESSION['user_id'];

// $name2 = @$_SESSION['name'];

if(!isset($user_id)){ header('location:../index.php'); } else {  

$id = $_POST['id'];



// $id2 = $_POST['id'];
// $report_c = $_POST['reason'];

// 	$check = "SELECT * FROM product_post WHERE prod_id = '$id' ";
// $re_c = mysqli_query($connect,$check);
// $row = mysqli_fetch_assoc($re_c);
// $user_seller_id = $row['user_seller_id'];
// if ($row > 0) {
// 	echo "could not report user";
// }else{


// $sql = "INSERT INTO reports_user(user_id,r_user_id,text,report) VALUES('$user_id', '$id','$report_c','1') ";
// $res = mysqli_query($connect,$sql);

// if ($res) {
// 	echo "ok";
// }else{

// 	echo "error";
// }


// }
// }else{




echo "<div id ='popup2' class ='popup2'>




                         
  <button class='ok' id ='update_p' alt='$id'>update pic</button>
                       
 

    <button class='cancel' id ='update' alt='$id'>update info</button><br>

      <button class='view' id ='cancel'>cancel</button>
     
</div>";




	}

// }
echo '<script type="text/javascript" src="js/dashboard.js"></script>';



?>


