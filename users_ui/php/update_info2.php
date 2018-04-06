<?php

session_start();

$user_id = @$_SESSION['user_id'];

// $name2 = @$_SESSION['name'];

if(!isset($user_id)){ header('location:../index.php'); } else {  } 

require 'dbconn.php';
$c_name ="SELECT lname,fname FROM users WHERE user_id  = '$user_id' ";
$c_res = mysqli_query($connect,$c_name);
$row = mysqli_fetch_array($c_res);
$lname = $row['lname'];
$fname = $row['fname'];
$u_name = $row['lname']." ". $row['fname'];


// $lname = $_POST['lname'];
// $fname = $_POST['fname'];
// $b_name = $_POST['b_name'];
// $address = $_POST['address'];
// $cpnum = $_POST['cpnum'];
// $description = $_POST['description'];
$image = $_FILES['image']['name'];



      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type= $_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

      if(move_uploaded_file($file_tmp,"../img/uploads/".$file_name)){


                   $sql = "UPDATE users set user_profile='$image' WHERE user_id='$user_id' ";
                   $result = mysqli_query($connect,$sql);

                      if($result){
                          echo "yes";

                           $sql8 = "INSERT INTO activity_log values('','$u_name','$user_id',CURRENT_TIMESTAMP,'Updated his profile','0')";
                            $result8 = mysqli_query($connect,$sql8); 
                      } else {
                          echo "Something Went Wrong";
                      }
             } else {

                   echo "This Product already Exist";

             }


      
       
      ?>
