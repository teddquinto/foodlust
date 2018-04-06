<?php
session_start();

// if(isset($_COOKIE['login'])){
//      if($_COOKIE['login'] <= 3){
//         $attempts = $_COOKIE['login'] + 1;
//             setcookie('login', $attempts, time()+60*1); //set the cookie for 10 minutes with the number of attempts stored
//         }else{
//             header('Location: login.php');
//         }
// 	}else{
//           setcookie('login', 1, time()+60*1); //set the cookie for 10 minutes with the initial value of 1
//     }

require "users_ui/php/dbconn.php";
?>

<!Doctype html>
<html>
	<head>
		<title>FOODLUST</title>
		<link rel="icon" href="img/fl.jpeg">



		<!-- CUSTOM JS/CSS -->
		<!-- <link rel="stylesheet" type="text/css" href="css/admin.css"> -->	
		<link rel="stylesheet" type="text/css" href="users_ui/css/style.css">  

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- FLAT UI JS/CSS -->
		
	

		<!-- JQUERY -->
	
		
	</head>

	<body>

		<!-- Start of -->
		<!-- End of -->



		<!-- Start of Container -->
		<div class="container">

			<!-- Header -->
			<div class="header animated fadeInDown">
				<div class="a"> 
					<span class=""><a href="#welcome"><i class="fa fa-star"></i> <p class="rwd">HOME</p></a></span>
					
					<span class="active"><a href="#events"><i class="fa fa-star"></i> <p class="rwd active">EVENTS</p></a></span>
					
					<span class=""><a href="#about"><i class="fa fa-star"></i> <p class="rwd">About</p></a></span>
					<span class="active"><a href="#food"><i class="fa fa-image active"></i> <p class="rwd active">products</p></a></span>

				</div>
				<div class="b"> 
					<span><i class="fa fa-bell"></i></span>
					<img src="img/fl.jpeg" >
				</div>
				<div class="c">
					<span class="search"><i class="fa fa-search"></i> <p class="rwd"><input placeholder="Search" id='searchr'></p></span> 
					<span class="join" id="loginmodal">LOGIN </span>
					
					
				</div>
			</div>
				
		 	<div class="video-fl">

		 		<div class="welcome" id="welcome">
		 			<center>
		 				<h1>FOODLUST</h1>
		 				<p>FOODLUST ,ORDERING MADE EASIER </p>

		 				<div class="buttons">
		 					<button class="blue">POST</button>
			 				
			 				<button class="gray">BUY</button>
			 				<button class="red">SEARCH</button>
		 				</div>

		 			</center>
		 		</div>

		 		<video autoplay="" name="media" loop muted class="video">
		 			<source src="users_ui/img/fl.mp4" type="video/mp4">
		 		</video>

		 	</div>
			<!-- End of Video Bg -->
			<!-- Start of food-->




			<!-- End of food-->
	

			
			<!-- Start of  About -->
			<div class="about" id="about">
				<div class="about-txt">
					<h1>ABOUT <b>US</b></h1>
					<p>FoodLust is a website which serves a meeting place of all food enthusiast and food businesses in the Philippines. The purpose of the system is to provide a hub for food businesses which serves as the market for both buyers and sellers here in the Philippines. With so may competitors in the food business, the system could help each and every one on finding a possible buyer or rather supplier just by accessing our site. Features like chatting, comments, likes could be seen in the system to improve and promote once business. It has little similarities with e-commerce sites like OLX, Lazada in which the users could interact and do business online. Having a place where you could meet people who has the same interest as you and knowing the new trends in the food industry could help every food enterepreneurs to grow in the business they live in. Carving for something? Nowhere to go? FoodLust gives you the way.</p>
					<div class="icon-wrap">
						<div class="icon-cont">
							<i class="fa fa-shopping-cart"></i> <br><br><center>POST</center>
						</div>
						<div class="icon-cont">
							<i class="fa fa-money"></i> <br><br><center>BUY</center>
						</div>
						<div class="icon-cont">
							<i class="fa fa-spoon"></i> <br><br><center>SEARCH</center>
						</div>
					</div>
				</div>
			</div>
			<!-- End of  About -->
		
			<!-- Start of  Category -->
			<div class="category" id="category">
					<div class="">
					
					</div>
			</div>
			<!-- End of  Category -->



		</div>
		<!-- End of Container -->

		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/default.js"></script> 
		<script type="text/javascript" src="js/angular.js"></script> 
		<script type="text/javascript" src="js/a-model1.js"></script> 
		<script type="text/javascript" src="js/client.js"></script> 
		<script type="text/javascript" src="js/formajax.js"></script>	
	</body>
</html>

	