<?php
require "dbconn.php";
session_start();
@$admin = $_SESSION['admin'];


// $arr = array('quinto teddy','sam sam');
// $name = 'quinto teddy';

if(!isset($admin)){ header('location:../index.php'); } else {   

	 echo "
  <div class ='fil'>
 
         
       	<button style ='color:black;' class='trends'>Trends</button></a>
       	<button style ='color:black;' class='events'>Events</button></a>

        </div>";

 echo "<button id='add_event' class='eventuser-btn' >Add Event</button>";





$sql = "SELECT * FROM events";
$res = mysqli_query($connect,$sql);
echo "
	<table class = 'eve'>
	<tr>
	<th>title</th>
	<th>details</th>
	<th>start date</th>
	<th>end date</th>
	<th>organizers</th>
	<th>action</th>
	<th>edit</th>
	<th>remove</th>

	</tr>


	";
while ($row = mysqli_fetch_assoc($res)) {
	$id =$row['id'];
	$title = $row['title'];
	$details = $row['details'];
	$start = $row['start_d'];
	$end = $row['end_d'];
	$organizers = $row['organizer'];
	// $photo = $row['photo'];

	echo "
	<tbody>
	<tr>
	<td>$title</td>
	<td>$details</td>
	<td>". date('M/d/Y g:ia',$start) ."</td>
	<td>". date('M/d/Y g:ia',$end) ."</td>
	<td>$organizers</td>
	<td>view event ". "  " ." <i class='fa fa-arrow-circle-right' id = 'eventss' alt = '$id'></i></td>
	<td>edit event ". "  " ." <i class='fa fa-refresh' id = 'events_e' alt = '$id'></i></td>
	<td>remove event ". "  " ." <i class='fa fa-remove' id = 'events_r' alt = '$id'></i></td>

	</tr>

	</tbody>
	


	";

}
echo "</table>";

}

echo '<script type="text/javascript" src="js/dashboard.js"></script>';

?>
