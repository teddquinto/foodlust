{
	"success": 1,
	"result": 
	
<?php
require "dbconn.php";


$query = "SELECT * FROM events ";
$res = mysqli_Query($connect,$query);
$row = mysqli_fetch_assoc($res);
 
 $row2 = json_encode($row);
 echo $row2;


?>
}
