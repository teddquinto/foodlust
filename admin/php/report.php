<?php
session_start();
@$admin = $_SESSION['admin'];
$id = $_GET['id'];

require "dbconn.php"; 

if(!isset($admin)){ header('location:../index.php'); } else {  




//    echo "<p class = 'graph' > view users graph </p>";   
// echo "<p class = '' > send activities to users </p>";

$sql = "SELECT * FROM users WHERE user_id ='$id' ";
$result =mysqli_query($connect,$sql);

while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['user_id']; 
        $lname = $row['lname'];
        $fname = $row['fname'];
        $profile = $row['user_profile'];

        echo "

        <img src= '../users_ui/img/uploads/$profile' style='width:180px; height:90px;'>
       <center> <p >$lname "." " ."$fname</p></center> ";
      }
 echo "<p class = 'mail' alt='$id' > send email </p>";
  echo "<p class = 'deactivate_acc' alt='$id' > deactivate account </p>";


  echo "<table class='users animated fadeInDown'>
        <tr>  
            <th>Name</th>
            <th>Email</th>
          <th>Contact</th> 
          <th>Address</th> 
          <th>users comment</th> 
          
            
        
        </tr>";




$sql2 = "SELECT * FROM reports_user WHERE r_user_id = '$id'";
$result2 =mysqli_query($connect,$sql2);

while ($row2 = mysqli_fetch_assoc($result2)) {
$user_id =$row2['user_id'];
$user_r = $row2['user_reason'];


$sql = "SELECT * FROM users WHERE user_id ='$user_id' ";
$result =mysqli_query($connect,$sql);

while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['user_id']; 
        $lname = $row['lname'];
        $fname = $row['fname']; 
        $email = $row['email']; 
        $contact = $row['cp_num']; 
        $address = $row['address']; 


 

              echo "<tr> 
                          <td>$lname "." "." $fname </td>
                          <td>$email</td> 
                          <td>$contact</td>
                          <td>$address</td>
                       
                       
                       <td>$user_r</td>
                          
                          
                         

                      </tr>";

   
   }

}

echo "</table><br>";  
      
echo '<script type="text/javascript" src="js/dashboard.js"></script>';




















 }




?>