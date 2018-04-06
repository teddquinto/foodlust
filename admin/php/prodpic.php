
<?php 
  session_start();  
include "dbconn.php";

$id = $_POST['id'];

$sql = "SELECT * FROM product_post where prod_id='$id' ";
$result =mysqli_query($connect,$sql);
$row = mysqli_fetch_assoc($result);
  
  $user_id = $row['user_seller_id'];
  $prod_pic =$row['prod_pic'];
  $extra_pic = $row['extra_pic'];
  $inq_pic = $row['inq_pic'];
 

$user = "SELECT * fROM users WHERE user_id = '$user_id' ";
$res = mysqli_query($connect,$user);
$row2 = mysqli_fetch_assoc($res);

$status = $row2['type_of_user'];

if ($status == 'seller') {

echo '
 
<div class="usersss"> 
    <div class="img-cont">
  <img id="user_pic"  src="../users_ui/img/uploads/'.$prod_pic.'">
  </div>
  
   
  </div>

  ';
  
}else{
echo '
 
<div class="usersss"> 
    <div class="img-cont">
  <img id="user_pic"  src="../users_ui/img/uploads/'.$inq_pic.'">
  </div>
  
   
  </div>

  ';


}

  
    
echo '<script type="text/javascript" src="js/dashboard.js"></script>';

?>
