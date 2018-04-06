<?php
session_start();
@$admin = $_SESSION['admin'];


$id = $_GET['id'];

require "dbconn.php"; 

if(!isset($admin)){ header('location:index.php'); } else {  

	




$sql2 = "SELECT * FROM users WHERE user_id ='$id' ";
$result2 =mysqli_query($connect,$sql2);
while ($row2 = mysqli_fetch_assoc($result2)) {
	$status = $row2['type_of_user'];

}

if ($status == 'seller') {
	


$sql = "SELECT * FROM product_post WHERE user_seller_id ='$id' ";
$result =mysqli_query($connect,$sql);

  echo "<table class='users animated fadeInDown'>
		    <tr>  
		        <th>product name</th>
		        <th>price </th>
			    <th>description</th>
			    <th>category</th>
			    <th>product photo</th> 
			  
		    </tr>";

while ($row = mysqli_fetch_assoc($result)) {
			$pid = $row['prod_id'];
		    $prod_name = $row['prod_name']; 
	  		$price = $row['price'];
	  		$cat = $row['category']; 
	  		$food_desc = $row['food_desc']; 
	  		$prod_pic = $row['prod_pic']; 
	  		$extra_pic = $row['extra_pic']; 

	  		

	  				  echo "<tr> 
			                    <td>$prod_name </td>
			                    <td>$price</td> 
			                    <td>$food_desc</td>
			                    <td>$cat</td>
			                    <td id='prod_pic' alt='$pid'  >$prod_pic</td>
			                    
			                  
			                  
			                   

			                </tr>";
 
	 
	  } 
	}else{
		$sql = "SELECT * FROM product_post WHERE user_seller_id ='$id' ";
$result =mysqli_query($connect,$sql);

  echo "<table class='users animated fadeInDown'>
		    <tr>  
		        <th>category</th>
		        <th>price range</th>
			    <th>pic</th> 
			    <th>description</th>
			     
			  
		    </tr>";

while ($row = mysqli_fetch_assoc($result)) {
	   		$pid = $row['prod_id'];
		    $cat_inq = $row['cat_inq']; 
	  		$price1 = $row['price_r_1'];
	  		$price2 = $row['price_r_2']; 
	  		$inq_pic = $row['inq_pic']; 
	  		$inq_desc = $row['inq_desc']; 
	  		$extra_pic2 = $row['extra_pic']; 

	  		

	  				  echo "<tr>
	  				  			<td>$cat_inq</td> 
			                    <td>$price1 "."-"." $price2 </td>
			                     
			                    <td id='prod_pic' alt='$pid' >$inq_pic</td>
			                    <td>$inq_desc</td>
			                  
			                  
			                   

			                </tr>";
 
	 
	  } 

	}
			echo "</table>";  
      
echo '<script type="text/javascript" src="js/dashboard.js"></script>';

}























?>