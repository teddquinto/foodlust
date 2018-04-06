<style type="text/css">
  
 .demo-table ul{margin:0;padding:0;}
 .demo-table li{cursor:pointer;list-style-type: none;display: inline-block;color: #F0F0F0;text-shadow: 0 0 1px #666666;font-size:20px;}
 .demo-table .highlight ,.demo-table .selected {color:#F4B30A;text-shadow: 0 0 1px #F48F0A;}


</style>
<!--   <script src="js/js/jquery.js" type="text/javascript"></script>
    <script src="js/js/bootstrap.js" type="text/javascript"></script>
    <link href="js/js/bootstrap.css" rel="stylesheet" type="text/css"> -->
<?php
require "dbconn.php";


session_start();

@$user_id = $_SESSION['user_id'];

// $name2 = @$_SESSION['name'];

if(!isset($user_id)){ header('location:../index.php'); } else {  

$sql = "SELECT * FROM users WHERE user_id = '$user_id' ";
$result = mysqli_query($connect,$sql);
while($row = mysqli_fetch_array($result)){


$name = $row['lname']." ". $row['fname'];
$address = $row['address'];
$num = $row['cp_num'];
$email = $row['email'];
$profile = $row['user_profile'];
$b_name = $row['business_name'];
$b_info = $row['b_info'];


 echo "<button id='up_user' class='updateuser-btn' alt='$user_id' >Update info</button>";
   echo "<script src='js/dashboard.js'></script>";
  echo "<script src='js/admin-ajax/form-ajax.js'></script>";
echo "
	<div class ='profilepicx'>
	<img src='img/uploads/". $profile ." ' height='200px'/>
</div>

	<div class='notif-bar animated bounceInDown'>
	               
                      <p class='name'>Owner:  $name</p>
                      <p class='time'>ADDRESS: $address</p>
                      <p class='notifs'>CONTACT NUMBER: $num</p>
                      <p class='notifs'>Business Name: $b_name</p>
                      <p class='notifs'> Business INformation:</p>
                      <textarea class = '' readonly='' > $b_info </textarea>
                  </div>
";

}

echo "<p>VIDEOS</p>";

$query = "SELECT * FROM user_vid WHERE user_id = '$user_id' ";
$res_q = mysqli_query($connect,$query);

while ($vid = mysqli_fetch_assoc($res_q)) {
  // if ($vid == 0) {
  //  echo "<p>No videos uploaded</p>";
  // }else{
    
  echo '<div class="product-container">
  <div class="item animated fadeInDowns" >
        
        <video controls data-setup="{}" preload="auto" width="100%" height="400" poster="">
        
        <source src="img/videos/'.$vid['vid_name'].' " type="video/mp4">
        </video>

        
        </div>
    </div><br><br>
  <br><br><br>';
// }
}
 echo '  <table class="demo-table" border="0">
                  <tr>
                  <td valign="top">USERS RATING:
                  <div>
               
                  ';
       
          for($i=1;$i<=5;$i++) {
          $selected = "selected";
         
        
       echo' <li class="selected"'.$selected.'">&#9733;</li> ';
     $star5 = "SELECT * FROM users_rating WHERE user_rated_id = '$user_id' AND rating ='5' ";
       $res_5 = mysqli_query($connect,$star5);
       $row5 = mysqli_num_rows($res_5);


}
echo $row5;
     echo "</td></tr><tr><td  valign='top'>";

      for($i=1;$i<=4;$i++) {
          $selected = "selected";
         
        
       echo' <li class="selected"'.$selected.'">&#9733;</li> ';
       $star4 = "SELECT * FROM users_rating WHERE user_rated_id = '$user_id' AND rating ='4' ";
       $res_4 = mysqli_query($connect,$star4);
       $row4 = mysqli_num_rows($res_4);


}
echo $row4;
      echo "</td></tr><tr><td  valign='top'>";

      for($i=1;$i<=3;$i++) {
          $selected = "selected";
         
        
       echo' <li class="selected"'.$selected.'">&#9733;</li> ';
       $star3 = "SELECT * FROM users_rating WHERE user_rated_id = '$user_id' AND rating ='3' ";
       $res_3 = mysqli_query($connect,$star3);
       $row3 = mysqli_num_rows($res_3);


}
echo $row3;
      echo "</td></tr><tr><td  valign='top'>";

      for($i=1;$i<=2;$i++) {
          $selected = "selected";
         
        
       echo' <li class="selected"'.$selected.'">&#9733;</li> ';
      $star2 = "SELECT * FROM users_rating WHERE user_rated_id = '$user_id' AND rating ='2' ";
       $res_2 = mysqli_query($connect,$star2);
       $row2 = mysqli_num_rows($res_2);


}
echo $row2;
      echo "</td></tr><tr><td  valign='top'>";

      for($i=1;$i<=1;$i++) {
          $selected = "selected";
         
        
       echo' <li class="selected"'.$selected.'">&#9733;</li> ';
     }
       $star1 = "SELECT * FROM users_rating WHERE user_rated_id = '$user_id' AND rating ='1' ";
       $res_1 = mysqli_query($connect,$star1);
       $row1 = mysqli_num_rows($res_1);



echo $row1;
}
echo "</table>";



?>


