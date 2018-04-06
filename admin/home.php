  <?php

session_start();
$admin = $_SESSION['admin'];
if(isset($admin)){} else { header('location:index.php'); }

require "php/dbconn.php";

?>




<!Doctype html>
<html>
	<head>
		<title>FoodLust</title>
		<link rel="icon" href="img/fl.jpeg">

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

		</script>
	</head>

	<body>

		<!-- Start of Container -->
		<div class="container">
		<!-- Start of header-->
        <div class="header">
                        <div class="left">
                         FoodLust    <img src="img/fl.jpeg" style="width: 60px; height:40px; display:block; margin: auto;"> 

                        </div>
                        <div class="left2">
                            <i id="burgermenu" class="fa fa-bars" alt="1"></i>
                            

                        </div>
                        <div class="right">
                            <div class="box">

                                Welcome <?php echo $admin; ?> <a href="php/logout.php"><i class="fa fa-gear" style="color:white !important;"></i></a>
                            </div>
                        </div>
                        <div class="right2">
                            <div class="box">

                                <i class="fa fa-gear"></i>
                            </div>
                        </div>
        </div>
    	<!-- End of header-->
    	<!-- Start of sidebar-->
    	<div class="sidebar">

    		<div class="menu" id="a_activitylog">
    			<div class="icon active">
    				<i class="fa fa-bell"></i>
    			</div>
    			<div class="name active2">
    				Users Activity Log <!--<kbd style="background-color:#e74c3c;">31</kbd>-->
    			</div>
    		</div>
    		
    		<!-- <div class="menu" id="a_marketplace">
    			<div class="icon">
    				<i class="fa fa-cloud"></i>
    			</div>
    			<div class="name">
    				Market Place
    			</div>
    		</div> -->
    		<div class="menu" id="a_trends">
    			<div class="icon">
    				<i class="fa fa-eye"></i>
    			</div>
    			<div class="name">
    				Trends AND Events
    			</div>
    		</div>
    		<div class="menu" id="a_messages">
    			<div class="icon">
    				<i class="fa fa-envelope"></i>
    			</div>
    			<div class="name">
    				Messages  
    			</div>
    		</div>
    		<div class="menu" id="a_users">
    			<div class="icon">
    				<i class="fa fa-users"></i>
    			</div>
    			<div class="name">
    				users
    			</div>
    		</div>

           <!--  <div class="menu" id="a_notif">
                <div class="icon">
                    <i class="fa fa-bell"></i>
                </div>
                <div class="name">
                    Notifications
                </div>
            </div> -->
    	</div>
        <!-- End of sidebar-->
    	<!-- Start of Content-->
    	<div class="content">
         
    	</div>
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


<div class="smail animated bounce">
        <div class="header-title">
             <h4> <i class="fa fa-plus"></i> send email</h4>
             <span><i class="fa fa-remove"></i></span>
        </div><br><br>
        <div class="animated shake" id="erorr">
        </div>

        <div class= 'mailss' id ='mailss'></div>
    <!--     <form id="addproduct" action="php/add_product.php" method="post" enctype="multipart/form-data">
                        <div class="img-cont">
                                <img src="img/fl.jpeg" alt="Upload Image" />

                        </div>
                        <div class="form-cont">
            <input type="file" name="image" value="" id="add_image" required accept="image/png,image/jpg,image/jpeg,image/gif,image/    bitman" >
            
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
            </form> -->
</div>

<link href="../Date Picker/CSS/bootstrap2.css" rel="stylesheet" media="screen">
  <link href="../Date Picker/CSS/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

<div class="add_event animated bounce">
        <div class="header-title">
             <h4> <i class="fa fa-plus"></i> Add Event</h4>
             <span><i class="fa fa-remove"></i></span>
        </div><br><br>
        <div class="animated shake" id="erorr">
        </div>

     
        <form id="events" action="php/add_events.php" method="post" enctype="multipart/form-data">
                        <div class="img-cont">
                                <img src="img/fl.jpeg" alt="Upload Image" />

                        </div>
                      
            <input type="file" name="image" value="" id="add_image" required accept="image/png,image/jpg,image/jpeg,image/gif,image/    bitman" >

                  <div class="controls input-append date form_datetime" data-date="" data-date-format="MM dd yyyy HH:ii p" data-link-field="dtp_input1">
                                 <input size="16" type="text" name="Start" id="start-date" placeholder="Date Start" readonly>
                                 <span class="add-on"><i class="icon-th"></i></span>
                                 </div>
                                 <div class="controls input-append date form_datetime" data-date="" data-date-format="MM dd yyyy HH:ii p" data-link-field="dtp_input1">
                                <input size="16" type="text" name="End" id="end-date" placeholder="date end" readonly>
                                <span class="add-on"><i class="icon-th"></i></span>
                                </div>
                                  <div class="form-cont">
                                <input type="text" name="title"  id="title" placeholder="event title" required="">
                               
                               
                                
                                <textarea name="details" id="details" rows="8" placeholder="details" resizable></textarea>
                               
                                   <input type="text" name="organizer" id="organizer" placeholder="organizer" required="">
                                <button id="addevent-submit">Submit</button>
                        </div>
            </form>
</div>


<div class="view_event animated bounce">
        <div class="header-title">
             <h4> <i class="fa fa-plus"></i>Event info</h4>
             <span><i class="fa fa-remove"></i></span>
        </div><br><br>
        <div class="animated shake" id="erorr">
        </div>

     <div id = "event_view" ></div>

  
</div>
<div class="prod_pic animated bounce">
        <div class="header-title">
             <h4> <i class="fa fa-plus"></i>PRODUCT PICTURE</h4>
             <span><i class="fa fa-remove"></i></span>
        </div><br><br>
        <div class="animated shake" id="erorr">
        </div>

     <div id = "product" ></div>

  
</div>



<div class="edit_event animated bounce">
        <div class="header-title">
             <h4> <i class="fa fa-plus"></i>Event info</h4>
             <span><i class="fa fa-remove"></i></span>
        </div><br><br>
        <div class="animated shake" id="erorr">
        </div>

     <div id = "edit_view" ></div>

  
</div>
<div class="popup animated bounceIn">
                           
                             <div id="user_r" class="user_r"> </div>
                             
                    </div>









<script type="text/javascript" src="../Date Picker/Js/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="../Date Picker/Js/bootstrap.min.js"></script>
<script type="text/javascript" src="../Date Picker/Js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="../Date Picker/Js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
<script type="text/javascript">

    $('.form_datetime').datetimepicker({
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1,
        startDate: new Date()
    });

</script>











 