<?php
require "dbconn.php";
session_start();
@$admin = $_SESSION['admin'];

// 2017-08-3 06:08:47
$date = date("Y-m-j h:m:s ");
// date_sub($date ,date_interval_create_from_date_string("7 days"));
$da = strtotime("-1 week ", strtotime($date));
$das =  date("Y-m-j h:m:s ",$da);

if(!isset($admin)){ header('location:../index.php'); } else {  
$id = $_GET['id']; 
 echo "
  <div class ='fil'>

         <button style ='color:black;' alt ='$id' class='sends'>send to user</button></a>
      

        </div>";
 echo $date ;
echo "<br>". $das;

$sql ="SELECT * FROM users WHERE user_id = '$id' ";
$res =mysqli_query($connect,$sql);

while ($row = mysqli_fetch_assoc($res)) {
	$lname = $row['lname'];
	$fname = $row['fname'];
}
$name = $lname ." ". $fname;
// echo $name;
echo "<table class='users animated fadeInDown'>
		   <tr><th colspan='2'>Activities during the week</th></tr>
		    <tr>  
		        <th>Action</th>
		        
			    
			    <th>number of action</th> 
			  
		    </tr>";
 $sql3 = "SELECT DISTINCT action FROM activity_log  WHERE name ='$name' AND date BETWEEN '$das' AND '$date'  ";
$result3 = mysqli_query($connect,$sql3);



 while($row2 = mysqli_fetch_array($result3)){
 $actions = $row2['action'];
 if ($actions == 'Logout from foodlust') {
 	continue;
 }

$sql2 = "SELECT name,action,COUNT('id') as dd FROM activity_log  WHERE name = '$name' AND action = '$actions' AND date BETWEEN '$das' AND '$date' ";
$result2 = mysqli_query($connect,$sql2);



 while($row = mysqli_fetch_array($result2)){

      $dd  = $row['dd'];
      $name = $row['name'];
   
      $action = $row['action'];


           echo "<tr> 
			                   
			                   
			                    <td>$actions</td>
			                    <td>$dd</td>
			                  
			                  
			                   

	
		                </tr>";

}


}





echo "</table>";  







}



?>