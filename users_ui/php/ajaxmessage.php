<?php

require "dbconn.php";
session_start();
$user_id = $_SESSION['user_id'];
@$id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8">	
	<title></title>
</head>
<body>
<ol class="discussion" id="discussion">
<?php

$conv = "SELECT * FROM conversation WHERE ((from_id ='$user_id' AND to_id = '$id') OR (from_id ='$id' AND to_id = '$user_id'))";
$result = mysqli_query($connect,$conv);
	
	
	while ($row2 = mysqli_fetch_assoc($result)) {

	$cid2 = $row2['c_id'];

	$status = "UPDATE messages set status = 1 WHERE from_id = '$id' AND c_id = '$cid2'";
	$res_stats = mysqli_query($connect,$status);
}

if (isset($cid2)) {
$sql = "SELECT * FROM messages WHERE c_id = '$cid2'  ";
$res = mysqli_query($connect,$sql);



while ($row =  mysqli_fetch_assoc($res)) {
$self = $row['from_id'];
//$receiver = $row['c_id'];
$message = $row['m_content'];

$search_n = "SELECT lname,fname,user_profile FROM users WHERE user_id ='$self' ";
$n_res = mysqli_query($connect,$search_n);
$name =  mysqli_fetch_assoc($n_res);

$lname = $name['lname'];
$fname = $name['fname'];
$profile = $name['user_profile'];


if ($self == $user_id) {
	



?>
<li class="self">
<div class="avatar">
<img src="img/uploads/<?php echo $profile; ?>">
</div>
<div class="messages">
<p><?php echo $message ; ?></p>

<span class="tinyname"> <?php echo $lname ." ".$fname; ?> </span>
</div> 
</li>

<?php
}else{
?>

<li class="others">
<div class="avatar">
<img src="img/uploads/<?php echo $profile; ?>">
</div>
<div class="messages">
<p><?php echo $message; ?></p>

<span class="tinyname"> <?php echo $lname ." ".$fname; ?> </span>
</div> 
</li>
<?php }    }?>
</ol>
<?php }else{
echo "<p class = 'conv'><br><br><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;start Conversation</p>";	
}
?>

</body>
</html>