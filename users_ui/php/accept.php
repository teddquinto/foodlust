<?php


require "dbconn.php";


session_start();

@$user_id = $_SESSION['user_id'];

// $name2 = @$_SESSION['name'];

if(!isset($user_id)){ header('location:../index.php'); } else {  

$id = $_POST['id'];






echo "<div id ='popup2' class ='popup2'>

<form id ='intss' action='php/accept2.php' method ='POST'>

<input type='hidden' value='$id' name ='ids'>

 <span>do you want to have transaction with this user? </span>
                            <hr>
 <input type ='submit' name ='submit' value='YES' class ='ok'>
                       
 
</form>
    <button class='cancel' id ='cancel'>NO</button><br>
     <button class='view' id ='viewed' alt='$id'>View profile</button>

     </hr>
</div>";




	}

// }
echo '<script type="text/javascript" src="js/dashboard.js"></script>';
echo '<script type="text/javascript" src="js/dashboard2.js"></script>';



?>


<script type="text/javascript" src="php/form_jquery.js"></script>
<script type="text/javascript">
	$(function(){
		$("#intss").ajaxForm(function(data){
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