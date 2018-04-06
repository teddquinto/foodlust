<?php
session_start();
@$admin = $_SESSION['admin'];

require "../../mail/class.phpmailer.php";
require "../../mail/class.smtp.php";

require "dbconn.php"; 

if(!isset($admin)){ header('location:../index.php'); } else {  



$id = $_POST['id'];
$sql ="SELECT * FROM users WHERE user_id = '$id' ";
$res =mysqli_query($connect,$sql);

while ($row = mysqli_fetch_assoc($res)) {
	$email = $row['email'];
}

// echo $email;



echo '
		<form action="php/smail2.php" method ="POST" id="dsa">
			 <div class="form-cont">
 				<textarea name="message" id="message" rows="8" placeholder="message" resizable></textarea>
 				<input type="hidden" value= "'.$email.'" name ="email">
                 <button id="addprod-submit" type ="submit" value="submit" name="submit">Submit</button>
                 </div>

                 </form>
                  ';



}



?>
<script type="text/javascript" src="js/form_jquery.js"></script>
<script type="text/javascript">
	$(function(){
		$("#dsa").ajaxForm(function(data){
			if(data=='yes'){
				$('.smail').fadeOut("fast",function(){
				$('.container').animate({'opacity': '1'});
				$('.content').css({'opacity': '1'});
				$('.sidebar').css({'opacity': '1'});
				$('.header').css({'opacity': '1'});
				alert('Success');
                $('.content').load('php/users.php');
		});
			} else {	
				alert(data);
			}
		});
	});
	</script>