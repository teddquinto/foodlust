<?php
session_start();
@$admin = $_SESSION['admin'];
$id = $_GET['id'];

require "dbconn.php"; 

if(!isset($admin)){ header('location:../index.php'); } else {  




//    echo "<p class = 'graph' > view users graph </p>";   
// echo "<p class = '' > send activities to users </p>";
 echo "<table class='users animated fadeInDown'>
        <tr>  
            <th>NAME</th>
            <th>ADDRESS</th>
          <th>BUSINESS NAME</th> 
          
          <th>CONTACT NUM</th>
          <th>EMAIL</th>
          <th>TYPE OF USER</th>
          <th>BUSINESS INFO</th>
         
          
            
        
        </tr>";

$sql = "SELECT * FROM users WHERE user_id ='$id' ";
$result =mysqli_query($connect,$sql);

while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['user_id']; 
        $lname = $row['lname'];
        $fname = $row['fname'];
        $name = $lname ." ". $fname;
        $profile = $row['user_profile'];
        $address = $row['address'];
        $b_name = $row['business_name'];
        $num = $row['cp_num'];
        $email = $row['email'];
        $type = $row['type_of_user'];
        $b_info = $row['b_info'];

        echo "

        <img src= '../users_ui/img/uploads/$profile' style='width:180px; height:90px;'>
       ";

         echo "<tr> 
                    
                          <td>$name</td>
                          <td>$address</td>
                           <td>$b_name</td>
                           <td>$num</td>
                           <td>$email</td>
                           <td>$type</td>
                           <td>$b_info</td>
                       
                       
                          
                          
                         

                      </tr>";

      }
 echo "<p class = 'mail' alt='$id' > send email </p>";
  echo "<a href='php/print_info.php?id=$id' target ='_blank'> <p class = 'print_info' alt='$id' > print info </p></a>";


  echo "<table class='users animated fadeInDown'>
        <tr>  
            <th>Product posted</th>
            <th>visited site</th>
          <th>reported user</th> 
          <th>user transaction</th> 
         
          
            
        
        </tr>";




$sql2 = "SELECT COUNT(prod_id) as prod FROM product_post WHERE user_seller_id = '$id'";
$result2 =mysqli_query($connect,$sql2);

while ($row2 = mysqli_fetch_assoc($result2)) {
$prod =$row2['prod'];
// $user_r = $row2['user_reason'];


$sql = "SELECT COUNT(id) as viewed FROM activity_log WHERE user_id ='$id' AND action = 'Logged In' ";
$result =mysqli_query($connect,$sql);

while ($row = mysqli_fetch_assoc($result)) {
//     $id = $row['user_id']; 
        $viewed = $row['viewed'];
//         $fname = $row['fname']; 
//         $email = $row['email']; 
//         $contact = $row['cp_num']; 
//         $address = $row['address']; 

$sql3 = "SELECT COUNT(id) as report FROM reports_user WHERE user_id = '$id' ";
$result3 =mysqli_query($connect,$sql3);

while ($row3 = mysqli_fetch_assoc($result3)) {
  $report = $row3['report'];

  $sql4 = "SELECT COUNT(c_id) as conv FROM conversation WHERE from_id = '$id' OR to_id = '$id' ";
$result4 =mysqli_query($connect,$sql4);

while ($row4 = mysqli_fetch_assoc($result4)) {
  $conv = $row4['conv'];


              echo "<tr> 
                    
                          <td alt= '$id' id='products' >$prod</td>
                          <td>$viewed</td>
                           <td>$report</td>
                           <td alt='$id' id='conv'>$conv</td>
                       
                       
                          
                          
                         

                      </tr>";

   }
 }
   }

}

echo "</table><br>";  
      
echo '<script type="text/javascript" src="js/dashboard.js"></script>';




















 }




?>