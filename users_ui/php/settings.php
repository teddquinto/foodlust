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
          <button style ='color:black;'  class='table5' id='re'>message admin</button>
       

        </div>";
echo '<script type="text/javascript" src="js/dashboard.js"></script>';
?>
