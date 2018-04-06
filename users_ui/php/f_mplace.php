<?php

session_start();

$user_id = @$_SESSION['user_id'];

// $name2 = @$_SESSION['name'];

if(!isset($user_id)){ header('location:../index.php'); } else {  } 

require 'dbconn.php';

 echo "
  <div class ='fils'>

  		
         <button style ='color:black;'   class='cats' id='catering_service'>Caterings</button>        
         <button style ='color:black;'   class='cats' id='raw_meat'>raw meat</button>
          <button style ='color:black;'   class='cats' id='raw_fish'>raw fish</button>
          <button style ='color:black;'   class='cats' id='product'>Product</button>
          <button style ='color:black;'   class='cats' id='fruits'>Fruits</button>
          <button style ='color:black;'   class='cats' id='cupcakes_and_cookies'>Cupcakes and cookies</button>
          <button style ='color:black;'   class='cats' id='cakes'>Cakes</button>
          <button style ='color:black;'   class='cats' id='vegatables'>vegatables</button>
           <button style ='color:black;'   class='cats' id='all'>all</button>
       

        </div>";
echo '<script type="text/javascript" src="js/dashboard.js"></script>';
?>
