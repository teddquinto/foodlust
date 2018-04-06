<?php 

require "dbconn.php";

session_start();

$user_id = @$_SESSION['user_id'];

// $name2 = @$_SESSION['name'];

if(!isset($user_id)){ header('location:index.php'); } else {  } 
$id = $_POST['id2']; 
 





	  	  echo '<form id="awa" action="php/add_comment.php" method="post" >
						
						<div class="form-cont">
						<input type="hidden" value="'.$user_id.'"  name="user_id">
						<input type="hidden" value="'.$id.'"  name="id">
							 <textarea rows="4" name="comment_content" class="span6" placeholder="Your Comment Here" required=""></textarea>
  		  <br>
  			 <br>
   				 <button name="comment" type="submit" class="btn btn-info">&nbsp;Comment </button>
   				 </div>
				</form> 
				<br>
				__________________________________________________________________________________
				';
				$sql = "SELECT u.lname,u.fname,c.c_content FROM users as u, product_comments as c WHERE c.user_c_id =u.user_id AND c.prod_id ='$id'";
				$res = mysqli_query($connect, $sql);


while ($row = mysqli_fetch_array($res)) {

				echo "<div id='comment_box' class='comment_box'><span>
				 ".$row['fname'] ." ". $row['lname'] .": </span> 
				".$row['c_content']." <br> </div>";
}

?>



 <script type="text/javascript" src="php/form_jquery.js"></script>
<script type="text/javascript">
	$(function(){
		c = 'all';
		$("#awa").ajaxForm(function(data){
			if(data=='yes'){
				$('.comment_sec').fadeOut("fast",function(){
				$('.container').animate({'opacity': '1'});
				$('.content').css({'opacity': '1'});
				$('.sidebar').css({'opacity': '1'});
				$('.header').css({'opacity': '1'});
				alert('Success');
                $('.content').load('php/marketplace.php?c='+c);
		});
			} else {	
				alert(data);
			}
			
		});
	});
				
</script> 