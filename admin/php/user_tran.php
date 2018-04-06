<?php
session_start();
@$admin = $_SESSION['admin'];


$id = $_GET['id'];

require "dbconn.php"; 

if(!isset($admin)){ header('location:index.php'); } else {  

	




// $sql2 = "SELECT * FROM users WHERE user_id ='$id' ";
// $result2 =mysqli_query($connect,$sql2);
// while ($row2 = mysqli_fetch_assoc($result2)) {
// 	$status = $row2['type_of_user'];

// }


	

  echo "<table class='users animated fadeInDown'>
		    <tr>  
		        <th>lastname</th>
		        <th>Firstname </th>
			    <th>email</th>
			    <th>business name</th>
			    <th>address</th>
			    <th>contact</th>
			    <th>type of user</th> 
			  
		    </tr>";

$sql = "SELECT * FROM conversation WHERE from_id = '$id' OR to_id  = '$id' ";
$result =mysqli_query($connect,$sql);
while ($row = mysqli_fetch_assoc($result)) {
	
	@$id1 = $row['from_id'];
	@$id2 = $row['to_id'];


	if ($id == @$id1 ) {


		$sql2 = "SELECT * FROM users WHERE user_id ='$id2' ";
		$result2 =mysqli_query($connect,$sql2);
		while ($row2 = mysqli_fetch_assoc($result2)) {
		$lname = $row2['lname'];
		$fname = $row2['fname'];
		$address = $row2['address'];
		$email = $row2['email'];
		$business_name = $row2['business_name'];
		$cp_num = $row2['cp_num'];
		$type_of_user = $row2['type_of_user'];


		  echo "<tr> 
			                    <td>$lname </td>
			                    <td>$fname </td>
			                    <td>$email </td>
			                    <td>$business_name </td>
			                    <td>$address </td>
			                    <td>$cp_num </td>
			                    <td>$type_of_user </td>
			                    
			                   
			                  
			                  
			                   

			                </tr>";

}

	}else if($id == @$id2) {
		
		$sql2 = "SELECT * FROM users WHERE user_id ='$id1' ";
		$result2 =mysqli_query($connect,$sql2);
		while ($row2 = mysqli_fetch_assoc($result2)) {

		$lname = $row2['lname'];
		$fname = $row2['fname'];
		$address = $row2['address'];
		$email = $row2['email'];
		$business_name = $row2['business_name'];
		$cp_num = $row2['cp_num'];
		$type_of_user = $row2['type_of_user'];

		  echo "<tr> 
			                     <td>$lname </td>
			                    <td>$fname </td>
			                    <td>$email </td>
			                    <td>$business_name </td>
			                    <td>$address </td>
			                    <td>$cp_num </td>
			                    <td>$type_of_user </td>
			                   
			                    
			                  
			                  
			                   

			                </tr>";

	}

}

}

// while ($row = mysqli_fetch_assoc($result)) {
// 			$pid = $row['prod_id'];
// 		    $prod_name = $row['prod_name']; 
// 	  		$price = $row['price'];
// 	  		$cat = $row['category']; 
// 	  		$food_desc = $row['food_desc']; 
// 	  		$prod_pic = $row['prod_pic']; 
// 	  		$extra_pic = $row['extra_pic']; 

	  		

	  				
 
	 
	  //} 
	
			echo "</table>";  
      
echo '<script type="text/javascript" src="js/dashboard.js"></script>';

}























?>