<?php


require "dbconn.php";


session_start();

@$user_id = $_SESSION['user_id'];

// $name2 = @$_SESSION['name'];

if(!isset($user_id)){ header('location:../index.php'); } else {  

$id = $_POST['id2'];



// $id2 = $_POST['id'];
// $report_c = $_POST['reason'];

	$check = "SELECT * FROM product_post WHERE prod_id = '$id' ";
$re_c = mysqli_query($connect,$check);
$row = mysqli_fetch_assoc($re_c);
$user_seller_id = $row['user_seller_id'];
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

<form id ='ints' action='php/interested2.php' method ='POST'>
<input type='hidden' value='$user_seller_id' name ='id2'>
<input type='hidden' value='$id' name ='id3'>
 <span>are you intersted in this Product? </span>
                            <hr>
 <input type ='submit' name ='submit' value='YES' class ='ok'>
                       
 
</form>
    <button class='cancel' id ='cancel'>NO</button>
     </hr>
</div>";




	}

// }
echo '<script type="text/javascript" src="js/dashboard.js"></script>';



?>


<script type="text/javascript" src="php/form_jquery.js"></script>
<script type="text/javascript">
	$(function(){
		$("#ints").ajaxForm(function(data){
			if(data == 'error'){
				$('.popup').fadeOut("fast",function(){
				$('.container').animate({'opacity': '1'});
				$('.content').css({'opacity': '1'});
				$('.sidebar').css({'opacity': '1'});
				$('.header').css({'opacity': '1'});
				alert('error');
          
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