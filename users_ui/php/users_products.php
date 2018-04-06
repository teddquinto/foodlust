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
require "dbconn.php";


session_start();

@$user_id = $_SESSION['user_id'];


// $name2 = @$_SESSION['name'];

if(!isset($user_id)){ header('location:index.php'); } else {   
@$id = $_GET['id'];

		
    // echo "<button id='report' class='r-btn2'>report user</button>";
			
 echo "<script src='js/dashboard.js'></script>";
 // echo '<script type="text/javascript" src="js/dashboard2.js"></script>';
  // echo "<script src='js/admin-ajax/form-ajax.js'></script>";
  



$sql = "SELECT u.user_id,u.type_of_user,u.lname,u.fname,u.business_name,p.prod_name,p.prod_pic,p.category,p.prod_id FROM product_post AS p ,users AS u WHERE u.user_id= p.user_seller_id AND u.user_id = '$id' ORDER BY p.prod_id desc ";
$res = mysqli_query($connect,$sql);


while($row = mysqli_fetch_array($res)){



	 						 echo "

	 						 <div class='product-market-container2'>
	 						 <div class='market2 animated fadeInDowns' id='" .$row['type_of_user']. "' >
	  						 <p class='tname' alt = '".$row['user_id']."'>Owners Name: ".$row['fname']." ".$row['lname']." </p>
                           	 <img src='img/uploads/". $row['prod_pic'] ."' width='10%;'>
                             <p class='name'>Business Name: ".$row['business_name']." </p>
                           	 <p class='name'>Product name: ".$row['prod_name']." </p>
                           	 <p class='desc'>Category :".$row['category']."</p>

                           	 <center>";  

                           	 $prodid = $row['prod_id'];

    					
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
                        </div>
                        ";


}
}

?>

<script type="text/javascript" src="js/default.js"></script>
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