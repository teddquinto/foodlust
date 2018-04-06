<?php
session_start();
@$admin = $_SESSION['admin'];
$date = $_GET['d'];

require "dbconn.php"; 

if(!isset($admin)){ header('location:index.php'); } else {  

	


  echo "<table class='users animated fadeInDown'>
		    <tr>  
		        <th>Name</th>
		        <th>Email</th>
			    <th>Contact</th> 
			    <th>Address</th> 
			  
		    </tr>";

$sql = "SELECT * FROM users WHERE date_created ='$date' ";
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
			                  
			                  
			                   

			                </tr>";
 
	 
	  } 
			echo "</table>";  


}























?>