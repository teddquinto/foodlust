
   <?php
require "dbconn.php";


session_start();

@$user_id = $_SESSION['user_id'];


// $name2 = @$_SESSION['name'];

if(!isset($user_id)){ header('location:index.php'); } else {

$query = "SELECT * FROM user_vid WHERE user_id = '$user_id' ";
$res_q = mysqli_query($connect,$query);

while ($vid = mysqli_fetch_assoc($res_q)) {
    $id =  $vid['id'];


   ?>


    <div id="Video_Modal<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">

    <h3 id="myModalLabel"><?php echo $vid['vid_name']; ?></h3>
    </div>
    <div class="modal-body">
				
				<video controls data-setup="{}" preload="auto" width="100%" height="400" poster="">
        
				<source src="img/uploads/<?php echo $vid['vid_name']; ?>" type='video/mp4'>
				</video>

				
				
    </div>
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    </div>
    </div>
    <?php

}
}
    ?>