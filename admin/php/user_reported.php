<?php
session_start();
@$admin = $_SESSION['admin'];


require "dbconn.php"; 

if(!isset($admin)){ header('location:../index.php'); } else {  




  echo "<table class='users animated fadeInDown'>
		    <tr>  
		        <th>user id</th>
		        <th>repoorted user</th>
			    <th>reports</th> 
			    <th>user reason</th> 
			    <th>users activity log</th> 
			  
		    </tr>";
$sql = "SELECT * FROM reports_user";
$result =mysqli_query($connect,$sql);

while ($row = mysqli_fetch_assoc($result)) {
	  $id = $row['user_id']; 
	  		$r_user_id = $row['r_user_id'];
	  		$report = $row['report']; 
	  		$user_reason = $row['user_reason']; 
	  		 

	  				  echo "<tr> 
	  				  		<td>$id </td>
			                    <td>$r_user_id </td>
			                    <td>$report</td> 
			                    <td>$user_reason</td>
			                   
			                  
			                   

			                </tr>";

   
}
echo "</table>";  
       
echo '<script type="text/javascript" src="js/dashboard.js"></script>';




















 }




?>