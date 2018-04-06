<?php
session_start();
@$admin = $_SESSION['admin'];


require "dbconn.php"; 

if(!isset($admin)){ header('location:../index.php'); } else {  

 
 echo "
  <div class ='fil'>
 
         
       	<button style ='color:black;' class='graph'>view users graph</button>
       	<button style ='color:black;' class='graph2'>Active users </button>

        </div>";

  echo "<table class='users animated fadeInDown'>
		    <tr>  
		        <th>Name</th>
		        <th>Email</th>
			    <th>Contact</th> 
			    <th>Address</th> 
			    <th>users activity log</th> 
			    <th>report</th>			    
			    
			    <th>status</th> 
			  
		    </tr>";
$sql = "SELECT * FROM users";
$result =mysqli_query($connect,$sql);

while ($row = mysqli_fetch_assoc($result)) {
	  $id = $row['user_id']; 
	  		$lname = $row['lname'];
	  		$fname = $row['fname']; 
	  		$email = $row['email']; 
	  		$contact = $row['cp_num']; 
	  		$address = $row['address']; 
	  		$status = $row['status'];

$sql2 = "SELECT SUM(report) as r FROM reports_user WHERE r_user_id = '$id'";
$result2 =mysqli_query($connect,$sql2);

while ($row2 = mysqli_fetch_assoc($result2)) {
		$r =	$row2['r'];

if ($status == 1 ) {
									echo "<tr> 
			                    <td id='name' alt ='$id'>$id.$lname "." "." $fname </td>
			                    <td>$email</td> 
			                    <td>$contact</td>
			                    <td>$address</td>
			                 	<td><img src = 'img/ac.png' name = 'ac' style ='width:30px; height:30px;' alt ='$id' id ='ac' > </td>
			                  	<td id ='report' alt ='$id'>$r</td>
			                  
			                   <td> <rbd class= 'asd' id ='blue'>active </rbd></td>

			                </tr>";
}else if($status == 2){
echo "<tr> 
			                    <td id='name' alt ='$id'>$id.$lname "." "." $fname </td>
			                    <td>$email</td> 
			                    <td>$contact</td>
			                    <td>$address</td>
			                 	<td><img src = 'img/ac.png' name = 'ac' style ='width:30px; height:30px;' alt ='$id' id ='ac' > </td>
			                  	<td id ='report' alt ='$id'>$r</td>
			                  
			                   <td> <rbd class= 'asd' id ='redds'>deactivated </rbd></td>

			                </tr>";


}else{

		echo "<tr> 
			                    <td id='name' alt ='$id'>$id.$lname "." "." $fname </td>
			                    <td>$email</td> 
			                    <td>$contact</td>
			                    <td>$address</td>
			                 	<td><img src = 'img/ac.png' name = 'ac' style ='width:30px; height:30px;' alt ='$id' id ='ac' > </td>
			                  	<td id ='report' alt ='$id'>$r</td>
			                  	
			                   <td><rbsd class='asd' id ='redd'> not active </rbsd></td>

			                </tr>";

}
	  				  

   
   }
}
echo "</table>";  

           
echo '<script type="text/javascript" src="js/dashboard.js"></script>';




















 }




?>