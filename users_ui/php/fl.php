
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



echo '


<img src="img/fl.jpeg" style= "width:80px; height:80px;">
<p><b>FOODLUST</b><br> was develop as a completion for capstone project 2 ,created by students of san sebastian college recoletos manila.
It was created for the purpose of helping food businesses, food enthuiast to have a more organize and easy metting place. Here they could update each one for the latst products. Have transuctions for busnisess. Know the lates trends in the food industry.
</p>

<br><br><br>
THE PROGRAMMERS:


<img src="img/ted.jpg" style= "width:100px; height:100px; float:left;">
<p>
<b>Name:</b><i> Teodoro R Quinto </i><br>
<b>Age:</b> <i>19</i><br>
<b>Position:</b> <i>Head Programmer</i><br>
<b>School:</b> <i>San Sebastian college Recoletos Manila</i><br>
<b>Characteristics:</b> <i>Cute, polite, God-fearing, Humble</i><br><br><br>

<img src="img/dianne.jpg" style= "width:100px; height:100px; float:left;">
<p>
<b>Name:</b><i>Dianne Theresse Rivera </i><br>
<b>Age:</b> <i>19</i><br>
<b>Position:</b> <i>users Administrator</i><br>
<b>School:</b> <i>San Sebastian college Recoletos Manila</i><br>
<b>Characteristics:</b> <i>UNKNOWN</i><br><br><br>

<img src="img/joana.jpg" style= "width:100px; height:100px; float:left;">
<p>
<b>Name:</b><i>Joana Camille Estacio </i><br>
<b>Age:</b> <i>19</i><br>
<b>Position:</b> <i>System Analyst</i><br>
<b>School:</b> <i>San Sebastian college Recoletos Manila</i><br>
<b>Characteristics:</b> <i>UNKNOWN</i><br><br><br>

<img src="img/jab.jpg" style= "width:100px; height:100px; float:left;">
<p>
<b>Name:</b><i>Justine Angel Bustamante </i><br>
<b>Age:</b> <i>19</i><br>
<b>Position:</b> <i>Database Administrator</i><br>
<b>School:</b> <i>San Sebastian college Recoletos Manila</i><br>
<b>Characteristics:</b> <i>UNKNOWN</i><br>






';





?>
<!-- <script type="text/javascript" src="form_jquery.js"></script> -->
