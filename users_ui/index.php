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
require "../mail/class.phpmailer.php";
require "../mail/class.smtp.php";
require "php/dbconn.php";
?>

<!Doctype html>
<html>
	<head>
		<title>FOODLUST</title>
		<link rel="icon" href="img/fl.jpeg">



		<!-- CUSTOM JS/CSS -->
		<!-- <link rel="stylesheet" type="text/css" href="css/admin.css"> -->	
		<link rel="stylesheet" type="text/css" href="css/style.css">  

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- FLAT UI JS/CSS -->
		
		<!-- Font awesome -->
		<link rel="stylesheet" type="text/css" href="fonts/css/font-awesome.css">


		<!-- Animate -->
		<link rel="stylesheet" type="text/css" href="css/animate.css">


		<!-- JQUERY -->
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/default.js"></script>
		
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
		 			<source src="img/fl.mp4" type="video/mp4">
		 		</video>

		 	</div>
			<!-- End of Video Bg -->
			<!-- Start of food-->



	<div class="events" id="events">
			<?php




			  echo "<div class='product-container2'>";

			$events = "SELECT * FROM events";
			$res_ev  = mysqli_query($connect,$events);

			while ($row3 = mysqli_fetch_assoc($res_ev)) {
			$d = $row3['start_d'];
			$end = $row3['end_d'];

			echo " <div class='item2 animated fadeInDowns' id = 'events' >
	 							  <p> Events</p>
	  						 
                           	 <img src='../admin/img/uploads/". $row3['photo'] ."' width='10%;'>
                             <p class='name'>Title: ".$row3['title']." </p>
                           	 <p class='name'>Details: ".$row3['details']." </p>
                           	 <p class='name'>organizers: ".$row3['organizer']." </p>
                           	 <p class='name'>Start Date :". date('M/d/Y g:ia',$d) ."</p>
                           	 <p class='name'>End Date :". date('M/d/Y g:ia',$end) ."</p>

                           	 ";  
				echo "</div>";
				}

 			 echo "</div>";





			?>

			</div>

			<div class="food" id="food">
			<?php





		  echo '<select name="category" required="" id="cats">
		 			 <option value="all">all</option>
					<option value="rawmeat">raw meat</option>
                    <option value="rawfish">raw fish</option>
                    <option value="product">product</option>
                    <option value="fruits">fruits</option>
                    <option value="cupcakesandcookies">cupcakes and cookies</option>
					<option value="cateringservice">Catering service</option>
					<option value="cakes">cakes</option>
					<option value="vegatables">vegatables</option>
										
								</select>';
						

			  echo "<div class='product-container'>";
			

$sql = "SELECT u.user_id,u.type_of_user,u.lname,u.fname,u.business_name,p.prod_name,p.prod_pic,p.price,p.category,p.food_desc,p.prod_id,p.extra_pic,p.cat_inq,p.price_r_1,p.price_r_2,p.inq_pic,p.inq_desc,p.date FROM product_post AS p ,users AS u WHERE u.user_id= p.user_seller_id AND u.type_of_user = 'seller' ORDER BY p.prod_id desc ";
$res = mysqli_query($connect,$sql);


		while($row = mysqli_fetch_array($res)){


			$prodid = $row['prod_id'];
			$sc = $row['category'];

			 $star5 = "SELECT SUM(rating) as ratings FROM product_likes WHERE prod_id = '$prodid'  ";
       $res_5 = mysqli_query($connect,$star5);
       $row5 = mysqli_fetch_assoc($res_5);
       $s = $row5["ratings"] ;

       $sql2 = "SELECT * FROM users ";
		$result2 = mysqli_query($connect,$sql2);
		$row2 = mysqli_num_rows($result2);


       @$d = $s/$row2;
       $dd =number_format((float) $d, 1, '.', '');

		 $cc = preg_replace('/\s+/S', "", $sc);
 
				echo " <div class='item animated fadeInDowns' id='".$cc."' >
							<p class='tname'> ".$row['type_of_user'] ." </p>	 							
	  						 <p class='tname' alt = '".$row['user_id']."' >Owners Name: ".$row['fname']." ".$row['lname']." </p>
                           	 <img src='img/uploads/". $row['prod_pic'] ."' width='10%;'>
                             <p class='name'>Business Name: ".$row['business_name']." </p>
                           	 <p class='name'>Product name: ".$row['prod_name']." </p>
                           	 <p class='desc'>Category :".$row['category']."</p>
                           	 <p class = 'desc'>Ratings :".$dd."</p>
                           	 ";  

  				echo "</div>";
  				
 
}
echo "</div>";
?>
			
				<!-- <img src="img/bg1.png" alt="img Gal"> -->
			</div>
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

	<div class="login-modal animated bounceIn">   
		<div id="loader" class="loaderdiv"><img src="img/loader2.gif" style="width:20%; margin-left:40%; margin-top:5%; margin-bottom:5%;"><center>Please Wait !<br></center></div>

		<div class="login">  
			<i class="fa fa-remove" id="close"></i>
			<form action="php/login.php" method="post" id="userlogin">
				<input type="email" name="email" placeholder="Email" required>
				<input type="password" name="pass" placeholder="Password" required>  
				<button id="loginsubmit">Login</button>

				<div class="input-container">
     	
	  <br><br><br>
		<div class='captcha'>
<?php
      // show captcha HTML using Securimage::getCaptchaHtml()
      require_once '../Captcha/securimage.php';
      $options = array();
      $options['input_name']             = 'ct_captcha'; // change name of input element for form post
      $options['disable_flash_fallback'] = false; // allow flash fallback

      if (!empty($_SESSION['captcha']['captcha_error'])) {
        // error html to show in captcha output
        $options['error_html'] = $_SESSION['captcha']['captcha_error'];
      }

      echo Securimage::getCaptchaHtml($options);
 ?>
  </div>
  </div>
			</form>
			<button class="sign" id="signupbtn2">SignUp</button> 

			<span id="forget">forget password?</span>
		</div>
		
		<div class="signup"> 
			<i class="fa fa-remove" id="close"></i>
			<form action="security.php" method="post" >
				<select name="t_user" id="t_user">
				<option value="buyer">Buyer</option>
				<option value="seller">Seller</option>
				</select>
				<input type="text" name="lname" placeholder="LASTNAME" required>
				<input type="text" name="fname" placeholder="firstname" required>
				<input type="text" name="b_name" placeholder="business name" required>
				<textarea name="address" placeholder="ST/TOWN/CITY/COUNTRY" rows="5" required></textarea>
				<input type="number" name="contact" placeholder="Contact" required>
				<input type="email" name="email" placeholder="Email" required>
				<input type="password" name="pass" placeholder="Password" required>
				<input type="password" name="pass2" placeholder="Confirm Password" required> 
				
			
				
				
				
				<button>Signup</button>
			</form>
			<button class="log" id="loginbtn2">Login</button>
		
		</div>
	
	<div class="loader">
		<img src="img/loader2.gif">
	</div>
	</div>
	

<div class="forget_pass animated bounce">
		<div class="header-title">
			 <h4> <i class="fa fa-plus"></i> verify acc</h4>
			 <span><i class="fa fa-remove"></i></span>
		</div><br>
		<div class="animated shake" id="erorr">
		</div>
		<div class="inputs-container">
				<div class="loader">
		<img src="img/loader2.gif">
	</div>
				</div>
		<form id="ver_email" action="php/verify_email.php" method="post" enctype="multipart/form-data">
					
						<div class="form-cont">
			
            <center>
								<input type="text" name="email"  id="emailed" placeholder=" email" required="">
								
								
								
							 
								<button id="ver_sub" >verify</button>
								</center>
						</div>
			</form>
				<div class="form_c">
				</div>

		


</div>