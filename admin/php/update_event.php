<?php
require "dbconn.php";
session_start();
@$admin = $_SESSION['admin'];


// $arr = array('quinto teddy','sam sam');
// $name = 'quinto teddy';

if(!isset($admin)){ header('location:../index.php'); } else {   
$id = $_POST['id'];
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

@$image = $_FILES['image']['name'];

      @$file_name = $_FILES['image']['name'];
      @$file_size = $_FILES['image']['size'];
     @ $file_tmp = $_FILES['image']['tmp_name'];
     @ $file_type= $_FILES['image']['type'];

if (isset($image)) {
  

  if(move_uploaded_file($file_tmp,"../img/uploads/".$file_name)){

  	$sql = "UPDATE events set title='$title', details = '$details',start_d = '$start',end_d='$end',photo='$file_name' ,organizer='$organizer' WHERE id = '$id' ";
  	$res = mysqli_query($connect,$sql);
  	if ($res) {
  		
  		echo "yes";
  	}else{
  		echo "no";
  	}

  }
}else{

    $sql = "UPDATE events set title='$title', details = '$details',start_d = '$start',end_d='$end',organizer='$organizer' WHERE id = '$id' ";
    $res = mysqli_query($connect,$sql);
    if ($res) {
      
      echo "yes";
    }else{
      echo "no";
    }

}

}



?>
