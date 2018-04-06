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

 // echo "<button id='add_event' class='eventuser-btn' >Add Event</button>";
 echo "<div class='product-container'>";

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

			echo " <div class='item animated fadeInDowns' id = >
							<p class='tname'> Most Rated Product </p>	 							
	  						 <p class='tname' alt = '".$row2['user_id']."' >Owners Name: ".$row2['fname']." ".$row2['lname']." </p>
                           	 <img src='../users_ui/img/uploads/". $row2['prod_pic'] ."' width='10%;'>
                             <p class='name'>Business Name: ".$row2['business_name']." </p>
                           	 <p class='name'>Product name: ".$row2['prod_name']." </p>
                           	 <p class='desc'>Category :".$row2['category']."</p>

                           	 ";  

  echo "</div>";
	 }else{
	 
	 }	

		}
		


}




}

echo '<script type="text/javascript" src="js/dashboard.js"></script>';

?>
<!--   <link rel="stylesheet" href="Calendar/components/bootstrap3/css/bootstrap.css">
  <link rel="stylesheet" href="Calendar/css/calendar.css">
<div class="events">
<div id="header">
<span class="entypo-calendar" style="margin-right:5px; margin-left:10px;"></span> Events
<span id="link"><a href="add_event.php"> Add Event<span class="entypo-forward"></span></a></span>
</div>


<div id="body">
<div class="container">
	<div class="page-header">

		<div class="pull-right form-inline">
			<div class="btn-group">
				<button class="btn btn-primary" data-calendar-nav="prev"><< Prev</button>
				<button class="btn btn-default" data-calendar-nav="today">Today</button>
				<button class="btn btn-primary" data-calendar-nav="next">Next >></button>
			</div>
			<div class="btn-group">
				<button class="btn btn-warning" data-calendar-view="year">Year</button>
				<button class="btn btn-warning active" data-calendar-view="month">Month</button>
				<button class="btn btn-warning" data-calendar-view="week">Week</button>
				<button class="btn btn-warning" data-calendar-view="day">Day</button>
			</div>
		</div>

		<h3 style="color: #B40404; font-size:28px;"></h3>
	</div>
	
	<hr style="margin-bottom:20px;">
	
	<div class="row">
		<div class="col-md-9">
			<div id="calendar"></div>
		</div>
		<div class="col-md-4">

			<h1>Events</h1>
			<ul id="eventlist" class="nav nav-list"></ul>
		</div>
	</div>

	<div class="clearfix"></div>
	<br><br>
	
	<div class="modal fade" id="events-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h3 class="modal-title">Event</h3>
				</div>
				<div class="modal-body" style="height: 400px">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

</div>

</div>
</div>

<script type="text/javascript" src="Calendar/components/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="Calendar/components/underscore/underscore-min.js"></script>
	<script type="text/javascript" src="Calendar/components/bootstrap3/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="Calendar/components/jstimezonedetect/jstz.min.js"></script>
	<script type="text/javascript" src="Calendar/js/calendar.js"></script>
	<script type="text/javascript" src="Calendar/js/app.js"></script> -->