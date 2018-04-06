<?php
session_start();

$user_id = @$_SESSION['user_id'];

if(!isset($user_id)){ header('location:index.php'); } else {  } 

require "dbconn.php";
$id = $_POST['id'];


$c_name ="SELECT lname,fname FROM users WHERE user_id  = '$user_id' ";
$c_res = mysqli_query($connect,$c_name);
$row = mysqli_fetch_array($c_res);
$lname = $row['lname'];
$fname = $row['fname'];
$u_name = $row['lname']." ". $row['fname'];

     $sql = "DELETE FROM product_post WHERE prod_id='$id'";
     $result = mysqli_query($connect,$sql);
            if($result){
                echo "yes";
                $sql8 = "INSERT INTO activity_log values('','$u_name','$user_id',CURRENT_TIMESTAMP,'deleted product','0')";
                   $result8 = mysqli_query($connect,$sql8); 

            } else {
                echo "Something Went Wrong";
            }

?>
