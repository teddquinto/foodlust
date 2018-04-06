<?php

require "dbconn.php";


$email = $_POST['email'];


$sql = "SELECT * FROM users WHERE email = '$email' ";
$res = mysqli_query($connect,$sql);
$row = mysqli_num_rows($res);
$row2 = mysqli_fetch_assoc($res);
if ($row == 1) {
  $email = $row2['email'];
  echo 1;
}else{
  echo 2;
}








?>