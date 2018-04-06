<?php


require "dbconn.php";


session_start();

@$user_id = $_SESSION['user_id'];

// $name2 = @$_SESSION['name'];

if(!isset($user_id)){ header('location:../index.php'); } else {  

$id = $_POST['id2'];








echo "<div id ='popup2' class ='popup2'>




                         
  <button class='ok' id ='update_user_p' alt='$id'>update pic</button>
                       
 

    <button class='cancel' id ='update_user' alt='$id'>update info</button><br>

      <button class='view' id ='cancel'>cancel</button>
     
</div>";




	}

// }
echo '<script type="text/javascript" src="js/dashboard.js"></script>';



?>


