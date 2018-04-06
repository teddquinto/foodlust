<?php

require "dbconn.php";

 echo "<select name='' class='prodcat-btn' id='filter2'>
            <option value='All'>All</option>
            <option value='events'>events</option>
             <option value='trends'>trends</option>
            
        </select>";


  echo "<div class='product-container2'>

  ";

$sql = "SELECT prod_id  FROM product_post  ";
$res = mysqli_query($connect,$sql);

while ($row =  mysqli_fetch_assoc($res)) { 
	$prod_id = $row['prod_id'];

	
	// echo $prod_id . "<br>"	;


	$sql2 = "SELECT SUM(l.rating) as likes, p.prod_name,p.prod_pic,p.category,u.lname,u.fname,u.business_name,u.type_of_user,u.user_id FROM product_likes as l, product_post as p , users as u WHERE p.prod_id = l.prod_id AND u.user_id = p.user_seller_id AND l.prod_id = '$prod_id' ";
	$res2 = mysqli_query($connect,$sql2);

	while ($row2 =  mysqli_fetch_assoc($res2)) {


		// echo $row2['prod_name'];
		// echo  $row2['likes'];
		if ($row2['likes'] > 15) {

			echo " <div class='item2 animated fadeInDowns' id ='trends' >
	 							  <p> This Product Receive more than 20 stars</p>
	  						 <p class='tname' alt = '".$row2['user_id']."' >Owners Name: ".$row2['fname']." ".$row2['lname']." </p>
                           	 <img src='img/uploads/". $row2['prod_pic'] ."' width='10%;'>
                             <p class='name'>Business Name: ".$row2['business_name']." </p>
                           	 <p class='name'>Product name: ".$row2['prod_name']." </p>
                           	 <p class='desc'>Category :".$row2['category']."</p>

                           	 ";  

  echo "</div>";
	 }	

		}
		


}


$ev = "SELECT * FROM events";
$res = mysqli_query($connect,$ev);
while ($row = mysqli_fetch_assoc($res)) {
$d = $row['start_d'];
$end = $row['end_d'];

	echo " <div class='item2 animated fadeInDowns' id = 'events' >
	 							  <p class='assk'> Events</p> 

                
	  						 
                           	 <img src='../admin/img/uploads/". $row['photo'] ."' width='10%;'>
                             <p class='name'>Title: ".$row['title']." </p>
                           	 <p class='name'>Details: ".$row['details']." </p>
                           	 <p class='name'>organizers: ".$row['organizer']." </p>
                           	 <p class='name'>Start Date :". date('M/d/Y g:ia',$d) ."</p>
                           	 <p class='name'>End Date :". date('M/d/Y g:ia',$end) ."</p>

                           	 ";  
echo "</div>";
}

  echo "</div>";

   echo "<script src='js/dashboard.js'></script>";
?>