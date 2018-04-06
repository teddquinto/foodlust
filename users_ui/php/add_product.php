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


$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];
$category = $_POST['category'];
$image = $_FILES['image']['name'];

      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type= $_FILES['image']['type'];
      //$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

      if(move_uploaded_file($file_tmp,"../img/uploads/".$file_name)){

         $sql1 = "SELECT * FROM product_post where prod_name='$name' and price='$price' and user_seller_id = '$user_id' ";
         $result1 = mysqli_query($connect,$sql1);
         $row1 = mysqli_num_rows($result1);
             if($row1<='0'){

                   $sql = "INSERT INTO product_post(user_seller_id,prod_name,prod_pic,price,category,food_desc,date) values('$user_id','$name','$file_name','$price','$category','$description',CURRENT_TIMESTAMP)";
                   $result = mysqli_query($connect,$sql);

                      if($result){
                  

                          echo "yes";
                          echo "<script>
                          window.location.href = 'home.php';  
                          </script>";
                            // $last_id = mysqli_insert_id($connect);
                            // $up = "UPDATE product_post SET prod_group = '$last_id' WHERE prod_id = '$last_id' ";
                            // $res_up = mysqli_query($connect,$up);
                          

                          $sql8 = "INSERT INTO activity_log values('','$u_name','$user_id',CURRENT_TIMESTAMP,'added product','0')";
                         $result8 = mysqli_query($connect,$sql8); 
                      } else {
                          echo "Something Went Wrong";
                      }
             } else {

                   echo "This Product already Exist";

             }


      } else {
         echo "Eror";
      }
?>
