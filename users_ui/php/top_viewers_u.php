
<?php

session_start();

$user_id = @$_SESSION['user_id'];

// $name2 = @$_SESSION['name'];

if(!isset($user_id)){ header('location:../index.php'); } else {  } 

require 'dbconn.php';



 echo "
  <div class ='fil'>

         <button style ='color:black;'  class='table1' id='change_pass'>Change Password</button>
         <button style ='color:black;'  class='table2' id='views'>Top Viewers</button>
         <button style ='color:black;'  class='table3' id='terms'>Guide for the Terms And Policies</button>
          <button style ='color:black;'  class='table4' id='fl'>Foodlust</button>
       

        </div>";

echo '<script type="text/javascript" src="js/dashboard.js"></script>';

$sql = "SELECT * FROM product_post WHERE user_Seller_id = '$user_id' ";
$res= mysqli_query($connect,$sql);
while ($row =mysqli_fetch_assoc($res)) {
	$prod = $row['prod_id'];


// $f = "SELECT SUM(rating) as rate FROM product_likes WHERE  prod_id = '$prod' ";
$f = "SELECT DISTINCT COUNT(user_id) as user_id FROM product_likes WHERE prod_id = '$prod'";

$result =mysqli_query($connect,$f);
while ($row2 =mysqli_fetch_assoc($result)) {

$id = $row2['user_id'];

echo $id . "<br>";

}


  // echo $prod ."<br>";
}
















?>


