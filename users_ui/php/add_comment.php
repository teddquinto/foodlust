<?php

require "dbconn.php";

$user_id = $_POST['user_id'];
$comm_id = $_POST['id'];
$comment = $_POST['comment_content'];


$c_name ="SELECT lname,fname FROM users WHERE user_id  = '$user_id' ";
$c_res = mysqli_query($connect,$c_name);
$row = mysqli_fetch_array($c_res);
$lname = $row['lname'];
$fname = $row['fname'];
$u_name = $row['lname']." ". $row['fname'];


$prods ="SELECT * FROM product_post WHERE prod_id ='$comm_id' ";
$res_p =mysqli_query($connect,$prods);
$row = mysqli_fetch_assoc($res_p);
$prod_name =$row['prod_name'];

$sql = "INSERT INTO product_comments(prod_id,c_content,user_c_id) VALUES('$comm_id','$comment','$user_id')  ";
$res = mysqli_query($connect,$sql);

	if($res){
                    echo "yes";
                     $sql8 = "INSERT INTO activity_log values('','$u_name','$user_id',CURRENT_TIMESTAMP,'Commented to a post','0')";
                   $result8 = mysqli_query($connect,$sql8); 


                  	  $sql_n = "INSERT INTO notifications values('','$user_id','$comm_id','commented on your $prod_name product ',CURRENT_TIMESTAMP,'0')";
                  	 $result_n = mysqli_query($connect,$sql_n); 
                } else {
                    echo "Something Went Wrong";
                }  
   
        
      		











?>