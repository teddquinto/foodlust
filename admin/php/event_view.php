
<?php 
	session_start();	
include "dbconn.php";

$id = $_POST['id'];

$sql = "SELECT * FROM events where id='$id' ";
$result =mysqli_query($connect,$sql);
$row = mysqli_fetch_assoc($result);

 	$id =$row['id'];
	$title = $row['title'];
	$details = $row['details'];
	$start = $row['start_d'];
	$end = $row['end_d'];
	$organizers = $row['organizer'];
	$photo = $row['photo'];
$details = str_replace('<br />', " ",  $details ); 


echo '<div class="usersss"> 
	  <div class="img-cont">
	<img id="user_pic"  src="img/uploads/'.$photo.'">
	</div>
	<div class="form-cont">
 		<input type="text" name="title"  id="title" value="'.$title.'" readonly>
 		  <textarea name="details" id="details" rows="8" value="details" readonly>'.$details.'</textarea>
	 <input size="16" type="text" name="Start" id="start-date" value="'.date('M/d/Y g:ia',$start).'" readonly>
 	<input size="16" type="text" name="End" id="end-date" value="'. date('M/d/Y g:ia',$end) .'" readonly>

                               
                               
                                
                              
                               
                                   <input type="text" name="organizer" id="organizer" value="'.$organizers.'" readonly>
	</div>
	</div>';
	
		
echo '<script type="text/javascript" src="js/dashboard.js"></script>';

?>