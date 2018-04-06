<?php

session_start();

$user_id = @$_SESSION['user_id'];

if(!isset($user_id)){ header('location:index.php'); } else {  } 

require "dbconn.php";

$c_name ="SELECT lname,fname FROM users WHERE user_id  = '$user_id' ";
$c_res = mysqli_query($connect,$c_name);
$row = mysqli_fetch_array($c_res);
$lname = $row['lname'];
$fname = $row['fname'];
$u_name = $row['lname']." ". $row['fname'];

@$idds = $_POST['idds'];
@$id = $_POST['id']; 
// $name = $_POST['name']; 
// $category = $_POST['category']; 
// $description = $_POST['description']; 
// $price = $_POST['price']; 
// $imgb = $_POST['imgb']; 
$image = $_FILES['image']['name']; 

      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type= $_FILES['image']['type'];
      //$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

      if(move_uploaded_file($file_tmp,"../img/uploads/".$file_name)){

        $check = "SELECT * FROM product_post WHERE prod_id = '$id' OR prod_id = '$idds' ";
        $ser = mysqli_query($connect,$check);
        $row = mysqli_fetch_assoc($ser);
        $p = $row['extra_pic'];
        if ($p != '') {
          echo 'You are only allowed to add one photo to a product';
        }else{

         	$sql = "UPDATE product_post set extra_pic='$image' where prod_id='$id' OR prod_id = '$idds' ";
            $result = mysqli_query($connect,$sql);
				if($result){
                    echo "yes";

                   $sql8 = "INSERT INTO activity_log values('','$u_name','$user_id',CURRENT_TIMESTAMP,'added photo to a product','0')";
                   $result8 = mysqli_query($connect,$sql8); 
                } else {
                    echo "Something Went Wrong";
                    }
                }  
      } else {
         echo "Eror";
      }

?>
