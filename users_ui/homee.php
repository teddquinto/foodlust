
<?php
require "php/dbconn.php";


session_start();

$user_id = @$_SESSION['user_id'];
@$recepient = $_GET['id'];

// $name2 = @$_SESSION['name'];

if(!isset($user_id)){ header('location:index.php'); } else {  } 

$sql = "SELECT * FROM users WHERE user_id = '$user_id' ";
$result = mysqli_query($connect,$sql);
$row = mysqli_fetch_array($result);
$lname = $row['lname'];
$fname = $row['fname'];

$name = $row['lname']." ". $row['fname'];
$address = $row['address'];
$num = $row['cp_num'];
$email = $row['email'];
$user_profile  = $row['user_profile'];
$b_info = $row['b_info'];
$b_name = $row['business_name'];
$type_of_user = $row['type_of_user'];

$conv = "SELECT * FROM conversation WHERE ((from_id ='$user_id' AND to_id = '$recepient') OR (from_id ='$recepient' AND to_id = '$user_id'))";
$result = mysqli_query($connect,$conv);
    
    
    while ($row2 = mysqli_fetch_assoc($result)) {

    $cid2 = $row2['c_id'];

    $status = "UPDATE messages set status = 1 WHERE from_id = '$recepient' AND c_id = '$cid2'";
    $res_stats = mysqli_query($connect,$status);
}
?>
<!Doctype html>
<html>
	<head>
		<title>FoodLust</title>
		<link rel="icon" href="img/fl.jpeg">

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>';
       
		<!-- CUSTOM JS/CSS -->
		<link rel="stylesheet" type="text/css" href="css/admin.css">
		<meta name="viewport" content="device-width=initial-scale 1.0;">

		<!-- FLAT UI JS/CSS -->
		<link rel="stylesheet" type="text/css" href="Ui/dist/css/flat-ui.css">
		<link rel="stylesheet" type="text/css" href="Ui/dist/css/flat-ui.min.css">
		<link rel="stylesheet" type="text/css" href="Ui/dist/css/flat-ui.css.map">
		<link rel="stylesheet" type="text/css" href="Ui/dist/css/vendor/bootstrap/css/bootstrap.min.css">
		<script type="text/javascript" src="Ui/dist/js/flat-ui.js"></script>

		<!-- Font awesome -->
		<link rel="stylesheet" type="text/css" href="fonts/css/font-awesome.css">


		<!-- Animate -->
		<link rel="stylesheet" type="text/css" href="css/animate.css">

		<!-- JQUERY -->
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/dashboard.js"></script>
        <script type="text/javascript" src="js/default.js"></script>
		<script type="text/javascript" src="js/drop.js"></script>

		<!-- Menu Ajax -->
		<script type="text/javascript" src="js/admin-ajax/menu.js"></script>
		<script type="text/javascript" src="js/admin-ajax/form-ajax.js"></script>
		<script type="text/javascript" src="js/form_jquery.js"></script>
    <script src="js/messages/message.js"></script>
		</script>
	</head>

	<body >

		<!-- Start of Container -->
		<div class="container">
		<!-- Start of header-->
        <div class="header">
                        <div id='cssmenu'>
<ul>
   <li class='has-sub'><a href='#'><span id="name"> <?php echo $name; ?></span></a>
      <ul>
        
         <li><a id="settings"><span><span class="entypo-cog" style="margin-right:5%;"></span>Settings</span></a></li>
     <li><a href='../Documentation/' target="_blank"><span class="entypo-info" style="margin-right:6%;"></span><span>Help</span></a></li>
         <li class='last'><a href='php/logout.php'><span class="entypo-forward" style="margin-right:5%;"></span><span>Logout</span></a></li>
      </ul>
   </li>
   
   <div class="left">
   <li><a href='home.php'>FoodLust <span class="entypo-book" style="padding:0;"></span></a></li>
  
   <li id="logo"><a href="home.php"><img style="width:50px; height:50px;" src="img/fl.jpeg"><span id="logo"> </span></a></li>
   </div>
</ul>
</div>
        </div>
    	<!-- End of header-->
    	<!-- Start of sidebar-->
    	<div class="sidebar">
    		<div class="menu" id="a_information2">
    			<div class="icon active">
    				<i class="fa fa-bell"></i>
    			</div>
    			<div class="name active2">
    				Personal Information <!--<kbd style="background-color:#e74c3c;">31</kbd>-->
    			</div>
    		</div>
    		<!-- <div class="menu" id="a_buyers">
    			<div class="icon">
    				<i class="fa fa-spoon"></i>
    			</div>
    			<div class="name">
    				Buyers
    			</div>
    		</div> -->
    		<div class="menu" id="a_marketplace2">
    			<div class="icon">
    				<i class="fa fa-cloud"></i>
    			</div>
    			<div class="name">
    				Market Place
    			</div>
    		</div>
    		<div class="menu" id="a_trends2">
    			<div class="icon">
    				<i class="fa fa-eye"></i>
    			</div>
    			<div class="name">
    				Trends And Events
    			</div>
    		</div>
    		<div class="menu" id="a_messages2">
    			<div class="icon">
    				<i class="fa fa-envelope"></i>
    			</div>
    			<div class="name">
    				Messages  
    			</div>
    		</div>
    		<div class="menu" id="a_products2">
    			<div class="icon">
    				<i class="fa fa-users"></i>
    			</div>
    			<div class="name">
    				  <?php 
          if ($type_of_user == 'buyer') {
            echo 'advertisments';
          }else{
            echo 'Products';
          }
          ?>
    			</div>
    		</div>
             <div class="menu" id="a_notifs2">
          <div class="icon">
            <i class="fa fa-users"></i>
          </div>
          <div class="name">
            Notifications
          </div>
        </div>
    	</div>
        <!-- End of sidebar-->
    	<!-- Start of Content-->
    	<div class="content">

        <script type="text/javascript">getMessage(<?php echo $recepient; ?>);</script>
      <?php if (isset($recepient)) {


          echo ' <div class="MMS" >



<!-- Discussion -->
<div class="discussions" id="div1" >


<div id="body">


</div>
  



</div>
<form action="" method="post">
    <div class="write-form" style="margin-top:0px;">
  <textarea placeholder="Type your message" name="Message" id="message"  rows="2"></textarea>
  <input type="button" name="Submit" value="Send" onclick="submitReply('.$recepient.')" >

    </div>
  </form>
</div>
        </div>';
      }else{


        } ?>
     
        <!-- End of Content-->

        <!-- Start of footer-->
        <div class="footer">
            Copyright &copy 2017 -FoodLust
        </div>
        <!-- End of footer-->



    		<!-- Start of header-->
        <!-- End of header-->
		</div>
		<!-- End of Container -->
	</body>
</html>

<div class="add_products animated bounce">
    <div class="header-title">
       <h4> <i class="fa fa-plus"></i> Add Product</h4>
       <span><i class="fa fa-remove"></i></span>
    </div><br><br>
    <div class="animated shake" id="erorr">
    </div>
    <form id="addproduct" action="php/add_product.php" method="post" enctype="multipart/form-data">
            <div class="img-cont">
                <img src="img/fl.jpeg" alt="Upload Image" />

            </div>
            <div class="form-cont">
      <input type="file" name="image" value="" id="add_image" required accept="image/png,image/jpg,image/jpeg,image/gif,image/  bitman" >
            
                <input type="text" name="name"  id="name" placeholder="Name" required="">
                <select name="category" required="" id="category">
                    <option value="raw meat">raw meat</option>
                    <option value="raw fish">raw fish</option>
                    <option value="product">product</option>
                    <option value="fruits">fruits</option>
                    <option value="cupcakes and cookies">cupcakes and cookies</option>
                    <option value="catering_service">Catering service</option>
                    <option value="cakes">cakes</option>
                    <option value="vegatables">vegatables</option>
                    
                </select>
                <input type="number" name="price" id="price" placeholder="Price" required="">
                
                <textarea name="description" id="description" rows="8" placeholder="Description" resizable></textarea>
                <button id="addprod-submit">Submit</button>
            </div>
      </form>
</div>

<div class="add_inqueries animated bounce">
    <div class="header-title">
       <h4> <i class="fa fa-plus"></i> Add business inqueries</h4>
       <span><i class="fa fa-remove"></i></span>
    </div><br><br>
    <div class="animated shake" id="erorr">
    </div>
    <form id="addinq" action="php/add_inq.php" method="post" enctype="multipart/form-data">
            <div class="img-cont">
                <img src="img/fl.jpeg" alt="Upload Image" />

            </div>
            <div class="form-cont">
      <input type="file" name="image" value="" id="add_image" required accept="image/png,image/jpg,image/jpeg,image/gif,image/  bitman" >
            
               <!--  <input type="text" name="name"  id="name" placeholder="Name" required=""> -->
           <p>     In need of:</p>
                <select name="category" required="" id="category">
                    <option value="raw meat">raw meat</option>
                    <option value="raw fish">raw fish</option>
                    <option value="product">product</option>
                    <option value="fruits">fruits</option>
                    <option value="cupcakes and cookies">cupcakes and cookies</option>
                    <option value="catering_service">Catering service</option>
                    <option value="cakes">cakes</option>
                    <option value="vegatables">vegatables</option>
                    
                </select>
               
              

                <input type="number" name="price" id="price" placeholder="Price" required="">
                 <p>to:</p>

                 <input type="number" name="price" id="price" placeholder="Price" required="">
 
                
                <textarea name="description" id="description" rows="8" placeholder="Description" resizable></textarea>
                <button id="addprod-submit">Submit</button>
            </div>
      </form>
</div>

<div class="add_vid animated bounce">
    <div class="header-title">
       <h4> <i class="fa fa-plus"></i> Add video</h4>
       <span><i class="fa fa-remove"></i></span>
    </div><br><br>
    <div class="animated shake" id="erorr">
    </div>
    <form id="add_vid" action="php/add_vid.php" method="post" enctype="multipart/form-data">
           
            <div class="form-cont">
     <input name="UPLOAD_MAX_FILESIZE" value="20971520"  type="hidden"/>
          <input type="file" name="file" id="file" />
            
                <input type="text" name="name"  id="name" placeholder="business name" value="<?php echo $b_name; ?>" required="">
               
                <input type="text" name="place" id="place" placeholder="place" value="<?php echo $address; ?>" required="">
                
                <textarea name="description" id="description" rows="8" placeholder="Description" resizable></textarea>
                <button id="addvid-submit">Submit</button>
            </div>
      </form>
</div>


<!-- End of add product-->

<!-- Start of update product-->
<div class="add_products2 animated bounce" id="update-cont">
    <div class="header-title">
       <h4> <i class="fa fa-plus"></i> Update Product</h4>
       <span><i class="fa fa-remove"></i></span>
    </div><br><br>
    <div class="animated shake" id="erorr">
    </div>
    <div id="ccc"></div>
</div>



<!-- End of update product-->

<div class="add_photoss animated bounce" id="update-cont">
    <div class="header-title">
       <h4> <i class="fa fa-plus"></i> Add Photo</h4>
       <span><i class="fa fa-remove"></i></span>
    </div><br><br>
    <div class="animated shake" id="erorr">
    </div>
    <div id="sss"></div>
</div>

          

<div class="comment_sec animated bounce">
        <div class="header-title">
             <h4> <i class="fa fa-plus"></i> Comment sections</h4>
             <span><i class="fa fa-remove"></i></span>
        </div><br><br>
    
        <div class="animated shake" id="erorr">
        </div>
      <div id="jafhioasbfaskldhasd" class="ass"> </div>

       
</div>


<div class="users_info animated bounce">
        <div class="header-title">
             <h4> <i class="fa fa-plus"></i> Users Information</h4>
             <span><i class="fa fa-remove"></i></span>
        </div><br><br>
    
        <div class="animated shake" id="erorr">
        </div>
      <div id="info" class="info"> </div>

       
</div>

<div class="pics animated bounce">
        <div class="header-title">
            
             <span><i class="fa fa-remove"></i></span>
        </div><br><br>
    
        <div class="animated shake" id="erorr">
        </div>
      <div id="picss" class="picss"> </div>

       
</div>

<!-- Start of PopUp-->
                    <div class="popup animated bounceIn">
                           
                             <div id="user_r" class="user_r"> </div>
                             
                    </div>


     

<div class="update_info animated bounce">
        <div class="header-title">
             <h4> <i class="fa fa-plus"></i> Update Information</h4>
             <span><i class="fa fa-remove"></i></span>
        </div><br><br>
        <div class="animated shake" id="erorr">
        </div>


        <form id="updateinfo" action="php/update_info.php" method="post" enctype="multipart/form-data">
                        <div class="img-cont">
                                <img src="img/uploads/<?php echo $user_profile ?>" alt="Upload Image" />

                        </div>
                        <div class="form-cont">
            <input type="file" name="image" value="" id="add_image" required accept="image/png,image/jpg,image/jpeg,image/gif,image/bitman" >
            
                                <input type="text" name="lname"  id="name" value="<?php echo $lname; ?>" required="">
                                <input type="text" name="fname"  id="name" value="<?php echo $fname; ?>" required="">
                                 <input type="text" name="b_name"  id="name" value="<?php echo $b_name; ?>" required="">
                                  <input type="text" name="address"  id="name" value="<?php echo $address; ?>" required="">
                               
                                <input type="number" name="cpnum" id="cpnum" placeholder="cpnum" required="" value="<?php echo $num; ?>"">
                                
                                <textarea name="description" id="description" rows="8"  resizable><?php echo $b_info; ?></textarea>
                                <button id="update_info-submit">Submit</button>
                        </div>
            </form>
</div>


