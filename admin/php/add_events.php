<?php
require "dbconn.php";
session_start();
@$admin = $_SESSION['admin'];


// $arr = array('quinto teddy','sam sam');
// $name = 'quinto teddy';

if(!isset($admin)){ header('location:../index.php'); } else {   

$title = $_POST['title'];
$details = $_POST['details'];
$details = stripslashes($details);
$details = nl2br(htmlentities($details, ENT_QUOTES, 'UTF-8'));
$details = str_replace( "\\r\\n", '<br />', $details ); 
$start = $_POST['Start'];
$start = strtotime($start);
$end = $_POST['End'];
$end = strtotime($end);
$organizer = $_POST['organizer'];

$image = $_FILES['image']['name'];

      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type= $_FILES['image']['type'];

  if(move_uploaded_file($file_tmp,"../img/uploads/".$file_name)){

  	$sql = "INSERT INTO events(title,details,start_d,end_d,organizer,photo) VALUES('$title','$details','$start','$end','$organizer','$file_name' ) ";
  	$res = mysqli_query($connect,$sql);
  	if ($res) {
  		
  		echo "<script>
                          window.location.href = '../home.php';  
                          </script>";
  	}else{
  		echo "no";
  	}

  }

}

echo '<script type="text/javascript" src="js/dashboard.js"></script>';

?>
