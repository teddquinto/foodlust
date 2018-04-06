
<?php

session_start();

$user_id = @$_SESSION['user_id'];

// $name2 = @$_SESSION['name'];

if(!isset($user_id)){ header('location:../index.php'); } else {  } 

require 'dbconn.php';



 echo "
  <div class ='fil'>

         <button style ='color:black;'  class='table1' id='change_pass'>Change Password</button>
         
         <button style ='color:black;'  class='table3' id='terms'>Guide for the Terms And Policies</button>
          <button style ='color:black;'  class='table4' id='fl'>Foodlust</button>
       

        </div>";

echo '<script type="text/javascript" src="js/dashboard.js"></script>';

// $sql = "SELECT * FROM users WHERE user_id = '$user_id' ";
// $res= mysqli_query($connect,$sql);
// while ($row =mysqli_fetch_assoc($res)) {
// 	$pass = $row['pass'];
// }

echo '


   <div class="">
   <form action="php/change_pass.php" method="POST" id = "xx">
            <label for="">Password</label>
            <input type="text" class="form-control" placeholder="password" name="password" required>
             <label for="">Re Type Password</label>
            <input type="password" class="form-control" placeholder="re-type password" name="password2" required>
            <br>
              <input type="submit" name="submit" value="submit">

</form>
        </div>
    


      ';











?>
<!-- <script type="text/javascript" src="form_jquery.js"></script> -->
<script type="text/javascript">
	$(function(){
		$("#xx").ajaxForm(function(data){
			if(data=='success'){
				
				alert('you successfully Changeed your password');
                $('.content').load('php/c_pass.php');
		
			} else {	
				alert(data);
			}


		});
	});
	</script>
