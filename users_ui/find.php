<script type="text/javascript" src="../js/default.js"></script>
<?php
require "php/dbconn.php";


session_start();

$user_id = @$_SESSION['user_id'];

// $name2 = @$_SESSION['name'];

if(!isset($user_id)){ header('location:index.php'); } else {  } 

			 echo "<select name='' class='prodcat-btn' id='filter'>
            <option value='All'>All</option>
            <option value='buyer'>buyer</option>
             <option value='seller'>seller</option>
            
        </select>";
			echo '<span class="search"><i class="fa fa-search"></i> <p class="rwd"><input placeholder="Search" id="searchr" class="search"></p></span> ';
  
			
 echo "<script src='js/dashboard.js'></script>";
  echo "<script src='js/admin-ajax/form-ajax.js'></script>";
  

 
$q = $_POST['q'];

$sql = "SELECT u.user_id,u.type_of_user,u.lname,u.fname,u.business_name,p.prod_name,p.prod_pic,p.category,p.prod_id FROM product_post AS p ,users AS u WHERE u.user_id= p.user_seller_id AND u.lname LIKE '%$q%' OR u.fname LIKE '%$q%' OR u.business_name LIKE '%$q%' OR p.category LIKE '%$q%' ";
$res = mysqli_query($connect,$sql);
$row = mysqli_num_rows($res);
if($rows<=0){
          echo "<div class='item' id='' style='width:100% !important; padding:1%;'>
                <center>NO Results Found !</center>
              </div>";
        }

while($row = mysqli_fetch_array($res)){



	 						 echo "

	 						 <div class='product-market-container'>
	 						 <div class='market animated fadeInDowns' id='" .$row['type_of_user']. "' >
	  						 <p class='tname' alt = '".$row['user_id']."'>Owners Name: ".$row['fname']." ".$row['lname']." </p>
                           	 <img src='img/uploads/". $row['prod_pic'] ."' width='10%;'>
                             <p class='name'>Business Name: ".$row['business_name']." </p>
                           	 <p class='name'>Product name: ".$row['prod_name']." </p>
                           	 <p class='desc'>Category :".$row['category']."</p>

                           	 <center>";  

                           	 $prodid = $row['prod_id'];

                            echo "
                           <div class='icon'>

                          
                           <div id = 'likes'  class='likes'  value='".$row['prod_id']."'>
                          

                           	Like
    					    <input type='image' src='img/images.png' alt='submit id = 'butt'>
    						";
    					
			$likes = "SELECT * FROM product_likes WHERE prod_id ='$prodid'";
			$res_likes = mysqli_query($connect, $likes);
			$likes = mysqli_num_rows($res_likes);
						echo $likes;
    					echo"
    					</div>
    					</form>
    					<div id = 'comment' value='".$row['prod_id']."' >";
    						

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


}


?>


<script type="text/javascript">
	// $(function(){
	// 	$("#sss").ajaxForm(function(data){
	// 		if(data=='yes'){
				
	// 			alert('you like this post');
 //                $('.content').load('php/marketplace.php');
		
	// 		} else {	
	// 			alert(data);
	// 		}


	// 	});
	// });
	</script>