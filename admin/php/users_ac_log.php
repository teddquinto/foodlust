<?php
session_start();
@$admin = $_SESSION['admin'];
$id = $_GET['id'];

require "dbconn.php"; 

if(!isset($admin)){ header('location:index.php'); } else {  

	


  echo "
  <div class ='fil'>
  <select name='' class='activity-btn' id='filter2'>
            <option value='All'>All</option>
            <option value='LoggedIn'>Logged In</option>
             <option value='Logoutfromfoodlust'>Logout from foodlust</option>
              <option value='Commentedtoapost'>Commented to a post</option>
               <option value='deletedproduct'>deleted product</option>
                <option value='addedproduct'>added product</option>
                <option value='addedbusinessinq'>added business inq</option>
                <option value='interestedinainquery'>interested in a inquery</option>
                 <option value='updatedproduct'>Updated product</option>
                 <option value='addedphototoaproduct'>added photo to a product</option>
                  <option value='ratedaPhoto5star'>rated a Photo 5 star</option>
                   <option value='Updatedhisprofile'>Updated his profile</option>
                    <option value='ratedaPhoto4star'>rated a Photo 4 star</option>
                     <option value='ratedaPhoto3star'>rated a Photo 3 star</option>
                      <option value='ratedaPhoto2star'>rated a Photo 2 star</option>
                       <option value='ratedaPhoto1star'>rated a Photo 1 star</option>
                         <option value='ratedauser5star'>rated a user 5 star</option>
                   		
                    	 <option value='ratedauser4star'>rated a user 4 star</option>
                     	 <option value='ratedauser3star'>rated a user 3 star</option>
                      	 <option value='ratedauser2star'>rated a user 2 star</option>
                       	 <option value='ratedauser1star'>rated a user 1 star</option>
            
        </select>
         <button style ='color:black;' alt ='$id' class='table'>view activities during the week</button></a>
       <a href = 'php/activity_log_print.php?id=$id' target='_blank'> <button style ='color:black;' >print users activity</button></a>

        </div>";

$sql = "SELECT * FROM users WHERE user_id ='$id' ";
$result =mysqli_query($connect,$sql);

while ($row = mysqli_fetch_assoc($result)) {
	
		    $id = $row['user_id']; 
	  		$lname = $row['lname'];
	  		$fname = $row['fname']; 
	  		// $email = $row['email']; 
	  		// $contact = $row['cp_num']; 
	  		// $address = $row['address']; 
	  		$name =$lname ." ". $fname;

	  		$sql2 = "SELECT * FROM activity_log  WHERE user_id = '$id' ORDER BY id desc   ";
			$result2 = mysqli_query($connect,$sql2);
			 while($row2 = mysqli_fetch_array($result2)){
	  			    
      $name2 = $row2['name'];
      $date = $row2['date'];
      $dd = strtotime($date);
      $action = $row2['action'];
     $ac = preg_replace('/\s+/S', "", $action);

            echo "<div class='notif-bar animated bounceInDown' id ='". $ac."'>
            	
                      <p class='name'><i class='fa fa-bell'></i> $name2</p>
                      <p class='time'>" .date('j F Y',$dd) ."</p>
                      <p class='notifs'>$action</p>
                 
                  </div>";
	 
	 }
	  } 
			






echo '<script type="text/javascript" src="js/dashboard.js"></script>';

}























?>