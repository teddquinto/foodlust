<?php
require "dbconn.php";
session_start();
@$admin = $_SESSION['admin'];

// $name2 = @$_SESSION['name'];

if(!isset($admin)){ header('location:../index.php'); } else {   

$sql = "SELECT * FROM activity_log ORDER BY id desc LIMIT 50";
$result = mysqli_query($connect,$sql);

 while($row = mysqli_fetch_array($result)){

      
      $name = $row['name'];
      $date = $row['date'];
      $action = $row['action'];

            echo "<div class='notif-bar animated bounceInDown'>
                      <p class='name'><i class='fa fa-bell'></i> $name</p>
                      <p class='time'>$date</p>
                      <p class='notifs'>$action</p>
                  </div>";


}


}
?>