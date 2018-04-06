<?php
session_start();

$user_id = @$_SESSION['user_id'];

// $name2 = @$_SESSION['name'];

if(!isset($user_id)){ header('location:index.php'); } else {  } 

include "dbconn.php";


$b_name = $_POST['name'];
$place = $_POST['place'];
$des = $_POST['description'];

  
$name = $_FILES['file']['name'];
                $extension = explode('.', $name);
                $extension = end($extension);
                $type = $_FILES['file']['type'];
                $size = $_FILES['file']['size'] /1024/1024;
                $random_name = rand();
                $tmp = $_FILES['file']['tmp_name'];
                
                
                if ((strtolower($type) != "video/mpg") && (strtolower($type) != "video/wma") && (strtolower($type) != "video/mov") 
                && (strtolower($type) != "video/flv") && (strtolower($type) != "video/mp4") && (strtolower($type) != "video/avi") 
                && (strtolower($type) != "video/qt") && (strtolower($type) != "video/wmv") && (strtolower($type) != "video/wmv"))
                {
                  

                }else
                {
                 if ( move_uploaded_file($tmp, '../img/videos/'.$random_name.'.'.$extension)){
                  $query = "INSERT INTO user_vid(user_id,vid_name,b_name,address,v_info) VALUES('$user_id', '$random_name.$extension','$b_name','$place','$des' ) ";
                  $res = mysqli_query($connect,$query);


                   echo "<script type='text/javascript'>alert('\\n\\nUpload: $name\\nSize: $size\\nType: $type\\nStored in: uploads/$name');

                    window.location.href = '../home.php'; 

                   </script>";

                 } 
                 
                }
                
              


                
               
                
                
              
          

?>
