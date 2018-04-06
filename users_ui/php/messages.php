
<?php 

session_start();

$user_id = $_SESSION['user_id'];
@$recepient = $_GET['id'];
@$recepient2 = $_GET['id2'];
// $name2 = @$_SESSION['name'];

// echo ' <script src="js/messages/message.js"></script>';
// echo ' <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>';
// echo '<link rel="stylesheet" type="text/css" href="js/jScrollPane/jScrollPane.css"></script> ';
// echo '<link rel="stylesheet" type="text/css" href="css/page.css"></script>';
// echo '<link rel="stylesheet" type="text/css" href="css/chat.css"></script>';

if(!isset($user_id)){ header('location:index.php'); } else {  } 
require "dbconn.php";


 ?>
<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" type="text/css" href="css/admin.css">
		 
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>';
		   <script src="js/messages/message.js"></script>
		  
</head>
<body >






<div class="MMS" >



<!-- Discussion -->
<div class="discussions" id="div1" >


<script type="text/javascript">getMessage(<?php echo $recepient; ?>); </script>
<div id="body">


</div>
	



</div>
<form action="" method="post">
    <div class="write-form" style="margin-top:0px;">
	<textarea placeholder="Type your message" name="Message" id="message"  rows="2"></textarea>
	<input type="button" name="Submit" value="Send" onclick="submitReply(<?php echo $recepient; ?>)">
    </div>
	</form>
</div>


</body>
</html>

