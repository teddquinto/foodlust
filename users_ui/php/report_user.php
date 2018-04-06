<?php


require "dbconn.php";


session_start();

@$user_id = $_SESSION['user_id'];

// $name2 = @$_SESSION['name'];

if(!isset($user_id)){ header('location:../index.php'); } else {  

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




echo "<div id ='popup2' class ='popup2'>

<form id ='reports' action='php/report.php' method ='POST'>
<span> please write your reason </span>
<input type='hidden' value='$id' name ='id2'>
<textarea name='reason' id='reason' rows='2'  resizable required = ''> </textarea>
<br><br>
 <span>are you sure you want to report this user? </span>
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


<script type="text/javascript" src="php/form_jquery.js"></script>
<script type="text/javascript">
	$(function(){
		$("#reports").ajaxForm(function(data){
			if(data == 'error'){
				$('.popup').fadeOut("fast",function(){
				$('.container').animate({'opacity': '1'});
				$('.content').css({'opacity': '1'});
				$('.sidebar').css({'opacity': '1'});
				$('.header').css({'opacity': '1'});
				alert('your report is still in process');
          
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