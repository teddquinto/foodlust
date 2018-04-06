<style type="text/css">
  
 .demo-table ul{margin:0;padding:0;}
 .demo-table li{cursor:pointer;list-style-type: none;display: inline-block;color: #F0F0F0;text-shadow: 0 0 1px #666666;font-size:20px;}
 .demo-table .highlight ,.demo-table .selected {color:#F4B30A;text-shadow: 0 0 1px #F48F0A;}


</style>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>

<script>
function highlightStar(obj,id) {
  removeHighlight(id);    
  $('.demo-table #tutorial-'+id+' li').each(function(index) {
    $(this).addClass('highlight');
    if(index == $('.demo-table #tutorial-'+id+' li').index(obj)) {
      return false; 
    }
  });
}

function removeHighlight(id) {
  $('.demo-table #tutorial-'+id+' li').removeClass('selected');
  $('.demo-table #tutorial-'+id+' li').removeClass('highlight');
}

function addRating(obj,id) {
  $('.demo-table #tutorial-'+id+' li').each(function(index) {
    $(this).addClass('selected');
    $('#tutorial-'+id+' #rating').val((index+1));
    if(index == $('.demo-table #tutorial-'+id+' li').index(obj)) {
      return false; 
    }
  });
  $.ajax({
  url: "php/count.php",
  data:'id='+id+'&rating='+$('#tutorial-'+id+' #rating').val(),
  type: "POST",
   success: function( data ) {
                  if (data == 'yes') {
        alert('you rated this post  ' +$('#tutorial-'+id+' #rating').val() +' stars');             
    }else{
      alert(data);
    }
      },
      error: function(data) {
                // Handle error here
                alert(data);
              },
              timeout: 30000  
  });
}

function resetRating(id) {
  if($('#tutorial-'+id+' #rating').val() != 0) {
    $('.demo-table #tutorial-'+id+' li').each(function(index) {
      $(this).addClass('selected');
      if((index+1) == $('#tutorial-'+id+' #rating').val()) {
        return false; 
      }
    });
  }
} </script>
<?php
require "php/dbconn.php";


session_start();

$user_id = @$_SESSION['user_id'];


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
    <script type="text/javascript" src="js/dashboard2.js"></script>
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
        <div id='cssmenu'>
<ul>
   <li class='has-sub'><a href='#'><span id="name"> <?php echo $name; ?></span></a>
      <ul>
        
         <li><a id="settings"><span><span class="entypo-cog" style="margin-right:5%;"></span>Settings</span></a></li>
     <li><a href='documentation/' target="_blank"><span class="entypo-info" style="margin-right:6%;"></span><span>Help</span></a></li>
         <li class='last'><a href='php/logout.php'><span class="entypo-forward" style="margin-right:5%;"></span><span>Logout</span></a></li>
      </ul>
   </li>
   
   <div class="left">
   <li><a href='home.php'>FoodLust <span class="entypo-book" style="padding:0;"></span></a></li>
  
   <li id="logo"><a href="home.php"><img style="width:50px; height:50px;" src="img/fl.jpeg"><span id="logo"> </span></a></li>
   </div>
</ul>
</div>
                     <!--    <div class="left">
                         FoodLust    <img src="img/fl.jpeg" style="width: 60px; height:40px; display:block; margin: auto;"> 

                        </div>
                        <div class="left2">
                            <i id="burgermenu" class="fa fa-bars" alt="1"></i>
                            

                        </div>
                        <div class="right">
                            <div class="box">
                                
                                
                            <ul>
                              
                            <li>
                            <a href=""><i class="fa fa-user" style="color:white !important;" class="drop"> <?php echo $name; ?></i></a>
                                <ul>
                                 <li><i class="fa fa-gear" id="settings">&nbsp; Settings</i> </li>
                                <li> <a href="php/logout.php"><i class="fa fa-eject" >&nbsp;LOGOUT</i></a> </li>   
                               
                                <li><a href=""></a></li>
                              
                                                          
                                </ul>
                               </li>
                               </ul>
                              
                              
                            </div>
                        </div>
                        <div class="right2">
                            <div class="box">

                                <i class="fa fa-gear"></i>
                            </div>
                        </div> -->
        </div>
    	<!-- End of header-->
    	<!-- Start of sidebar-->
    	<div class="sidebar">
    		<div class="menu" id="a_information">
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
    		<div class="menu" id="a_marketplace">
    			<div class="icon">
    				<i class="fa fa-cloud"></i>
    			</div>
    			<div class="name">
    				Market Place
    			</div>
    		</div>
    		<div class="menu" id="a_trends">
    			<div class="icon">
    				<i class="fa fa-eye"></i>
    			</div>
    			<div class="name">
    				Trends And events
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
    		<div class="menu" id="a_products">
    			<div class="icon">
    				<i class="fa fa-users"></i>
    			</div>
    			<div class="name">
          <?php 
          if ($type_of_user == 'buyer') {
            echo 'advertisements';
          }else{
            echo 'Products';
          }
          ?>
    				
    			</div>
    		</div>
         <div class="menu" id="a_notifs">
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
           <?php
           $q = @$_GET['q'];
          if (isset($q)) {
           $sql2 = "SELECT u.user_id,u.type_of_user,u.lname,u.fname,u.business_name,p.prod_name,p.prod_pic,p.category,p.prod_id,p.cat_inq,p.price_r_1,p.price_r_2,p.inq_pic,p.inq_desc,p.date FROM product_post AS p ,users AS u WHERE u.user_id= p.user_seller_id AND
            (u.lname LIKE '%$q%' OR u.fname LIKE '%$q%' OR u.business_name LIKE '%$q%' OR p.category LIKE '%$q%') ";
  $res2 = mysqli_query($connect,$sql2);
  $row2 = mysqli_num_rows($res2);
  if($row2<=0){
            echo "<div class='item' id='' style='width:100% !important; padding:1%;'>
                  <center><br><br><br>NO Results Found !</center>
                </div>";
          }

          while($row2 = mysqli_fetch_array($res2)){


              $date = strtotime($row2['date']);
            if ($row2['type_of_user'] == 'seller' ) {
              # code...
            

                 echo "

                 <div class='product-market-container'>
                 <div class='market animated fadeInDowns' id='" .$row2['type_of_user']. "' >
                   <p class='tname' alt = '".$row2['user_id']."'>Owners Name: ".$row2['fname']." ".$row2['lname']." </p>
                               <img src='img/uploads/". $row2['prod_pic'] ."' width='10%;'>
                               <p class='name'>Business Name: ".$row2['business_name']." </p>
                               <p class='name'>Product name: ".$row2['prod_name']." </p>
                               <p class='desc'>Category :".$row2['category']."</p>

                               <center>";  

                               $prodid = $row2['prod_id'];

                
        $likes = "SELECT * FROM product_likes WHERE prod_id ='$prodid' AND user_id = '$user_id'";
        $res_likes = mysqli_query($connect, $likes);
      
              // echo $likes;

        // $rating = $likes2['rating'];
        // if(!$res_likes) {
        $i=0;
        $likes2 = mysqli_fetch_assoc($res_likes);
        if ( $likes > 1) {
          # code...
        
                    echo '

                    <table class="demo-table">
                    <tr>
                    <td valign="top">
                    <div id="tutorial-'.$prodid.'">
                    <input type="hidden" name="rating" id="rating" value="'.$likes2['rating'].'" />
                    <ul onMouseOut="resetRating(' .$prodid.');">';
         
            for($i=1;$i<=5;$i++) {
            $selected = "";
            if(!empty($likes2['rating']) && $i<=$likes2['rating']) {
          $selected = "selected";
         }
          
         echo' <li class="'.$selected.'" onmouseover="highlightStar( this, '.$prodid.')" onmouseout="removeHighlight( '.$prodid.')" onClick="addRating( this, '.$prodid.')">&#9733;</li>  
           ';
            } 
           echo'  
              <ul>
             
            </div>
             </td>
              </tr>
           </table>';
  //} 
  }else{
            echo '

                    <table class="demo-table">
                    <tr>
                    <td valign="top">
                    <div id="tutorial-'.$prodid.'">
                    <input type="hidden" name="rating" id="rating" value="" />
                    <ul onMouseOut="resetRating(' .$prodid.');">';
         
            for($i=1;$i<=5;$i++) {
            $selected = "";
            if(!empty($likes2['rating']) && $i<=$likes2['rating']) {
          $selected = "selected";
         }
          
         echo' <li class="'.$selected.'" onmouseover="highlightStar( this, '.$prodid.')" onmouseout="removeHighlight( '.$prodid.')" onClick="addRating( this, '.$prodid.')">&#9733;</li>  
           ';
            } 
           echo'  
              <ul>           
            </div>
             </td>
              </tr>
            </table>';
  }
                echo"
                
                 <div class='icon'>
                <div id = 'comment' value='$prodid' >";
                  

        $comm = "SELECT * FROM product_comments WHERE prod_id ='$prodid'";
        $res_comm = mysqli_query($connect, $comm);
        $row = mysqli_num_rows($res_comm);

          


                echo "Comments:<i class='fa fa-comment'></i>".$row."
                </div>
                </div>        
                                
                          </center>
                          
                          </div>
                          </div>
                          ";

  }else{

     @$prodid = $row2['prod_id'];
          echo "

                 <div class='product-market-container'>
                 <div class='market animated fadeInDowns' id='" .$row2['type_of_user']. "' >
                   <p class='tname' alt = '".$row2['user_id']."'>Owners Name: ".$row2['fname']." ".$row2['lname']." <br>
                 <d class='date'>  date posted:" .date('F j Y',$date) ."</d></p>
                   <input type ='hidden' value='".$row2['prod_id']."' id='userss_id' name = 'userss_id' >
                   ";

                
                   echo"
                   
                         
                               <img src='img/uploads/". $row2['inq_pic'] ."' width='10%;' id = 'slide' alt='".$row2['prod_id']."'>
                             
                                 
                              
                               <p class='name'>Business Name: ".$row2['business_name']." </p>
                               <p class='name'>In need of: ".$row2['cat_inq']." </p>
                               <p class='desc'>price range: P".$row2['price_r_1']." to P".$row2['price_r_2']."  </p>

                               <center>
                               
                               ";  
                                 

                  
                  echo"
                   <div class='icon'>
                  <div id = 'comment' value='$prodid' >";
    $comm = "SELECT * FROM product_comments WHERE prod_id ='$prodid'";
        $res_comm = mysqli_query($connect, $comm);
        $row = mysqli_num_rows($res_comm);

          


                echo "Comments:<i class='fa fa-comment'></i>".$row."
                </div>
                 <button id = 'interested' alt='$prodid' class='inss' > interested</button> 
                </div>        
                                
                          </center>
                         
                          </div>

                          </div>
                          ";


                        }





  }

  }else{
    echo '<img style="width:500px; height:500px;" src="img/fl.jpeg">';

    
  }
           ?>
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


<!-- Start of add product-->
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
			<input type="file" name="image" value="" id="add_image" required accept="image/png,image/jpg,image/jpeg,image/gif,image/	bitman" >
            
								<input type="text" name="name"  id="name" placeholder="Name" required="">
								<select name="category" required="" id="category">
										<option value="raw meat">raw meat</option>
                    <option value="raw fish">raw fish</option>
                    <option value="product">product</option>
                    <option value="fruits">fruits</option>
                    <option value="cupcakes and cookies">cupcakes and cookies</option>
										<option value="catering service">Catering service</option>
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
                <select name="category_inq" required="" id="category">
                    <option value="raw meat">raw meat</option>
                    <option value="raw fish">raw fish</option>
                    <option value="product">product</option>
                    <option value="fruits">fruits</option>
                    <option value="cupcakes and cookies">cupcakes and cookies</option>
                    <option value="catering service">Catering service</option>
                    <option value="cakes">cakes</option>
                    <option value="vegatables">vegatables</option>
                    
                </select>
               
              

                <input type="number" name="price1" id="price" placeholder="Price" required="">
                 <p>to:</p>

                 <input type="number" name="price2" id="price" placeholder="Price" required="">
 
                
                <textarea name="description_inq" id="description" rows="8" placeholder="Description" resizable></textarea>
                <button id="addprods-submit">Submit</button>
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

          <div id="ava" class="ava"> </div>
       
</div>


