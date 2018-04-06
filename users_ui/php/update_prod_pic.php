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

@$id = $_POST['id'];
@$imgb = $_POST['imgb'];
$image = $_FILES['image']['name']; 



      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type= $_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

      if(move_uploaded_file($file_tmp,"../img/uploads/".$file_name)){

        if ($imgb == '' ) {
          
        

         	$sql = "UPDATE product_post set prod_pic='$image' where prod_id='$id'";
            $result = mysqli_query($connect,$sql);
				if($result){
                    echo "yes";

                   $sql8 = "INSERT INTO activity_log values('','$u_name','$user_id',CURRENT_TIMESTAMP,'Updated product','0')";
                   $result8 = mysqli_query($connect,$sql8); 
                } else {
                    echo "Something Went Wrong";
                }  
              }else{
                    $sql = "UPDATE product_post set inq_pic= '$image' where prod_id='$imgb'";
            $result = mysqli_query($connect,$sql);
        if($result){
                    echo "yes";

                   $sql8 = "INSERT INTO activity_log values('','$u_name','$user_id',CURRENT_TIMESTAMP,'Updated product','0')";
                   $result8 = mysqli_query($connect,$sql8); 
                } else {
                    echo "Something Went Wrong";
                }  
              }
      } else {
         echo "Eror";
      }
?>
