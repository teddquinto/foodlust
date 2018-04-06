<?php


require "dbconn.php";


session_start();

@$admin = $_SESSION['admin'];

// $name2 = @$_SESSION['name'];

if(!isset($admin)){ header('location:../index.php'); } else {  

$id = $_POST['id'];



// $id2 = $_POST['id'];
// $report_c = $_POST['reason'];

// 	$check = "SELECT * FROM reports_user WHERE user_id = '$user_id' AND r_user_id ='$id2' ";
// $re_c = mysqli_query($connect,$check);
// $row = mysqli_num_rows($re_c);
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



// echo $id;
echo "<div id ='popup2' class ='popup2'>

<form id ='ddd' action='php/delete_eve.php' method ='POST'>
 <span>are you sure you want to remove event? </span>
 <input type ='hidden' value = '$id' name ='id'>
                            <hr>
                            <input type ='submit' name ='submit' class ='ok'>
                       
</form>
     <button class='cancel' id ='cancel'>Cancel</button>


     </hr>
     
</div>";




	}

// }
echo '<script type="text/javascript" src="js/dashboard.js"></script>';



?>


<script type="text/javascript" src="js/form_jquery.js"></script>
<script type="text/javascript">
	$(function(){
		$("#ddd").ajaxForm(function(data){
			if(data == 1){
				$('.popup').fadeOut("fast",function(){
				$('.container').animate({'opacity': '1'});
				$('.content').css({'opacity': '1'});
				$('.sidebar').css({'opacity': '1'});
				$('.header').css({'opacity': '1'});
				alert('event has been removed.');	
          		$('.content').load('php/events.php');
		});
			} else {
				$('.popup').fadeOut("fast",function(){
				$('.container').animate({'opacity': '1'});
				$('.content').css({'opacity': '1'});
				$('.sidebar').css({'opacity': '1'});
				$('.header').css({'opacity': '1'});
				alert(data);
				});
			}
		});
	});
				
</script>