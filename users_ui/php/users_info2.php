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
function addRatinguser(obj,id) {
  $('.demo-table #tutorial-'+id+' li').each(function(index) {
    $(this).addClass('selected');
    $('#tutorial-'+id+' #rating').val((index+1));
    if(index == $('.demo-table #tutorial-'+id+' li').index(obj)) {
      return false; 
    }
  });
  $.ajax({
  url: "php/add_rating_user.php",
  data:'id='+id+'&rating='+$('#tutorial-'+id+' #rating').val(),
  type: "POST",
   success: function( data ) {
                  if (data == 'yes') {
        alert('you rated this user  ' +$('#tutorial-'+id+' #rating').val() +' stars');  
                    
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

if(!isset($user_id)){ header('location:../index.php'); } else {  

@$id = $_GET['id'];

$sql = "SELECT * FROM users WHERE user_id = '$id' ";
$result = mysqli_query($connect,$sql);
while($row = mysqli_fetch_array($result)){


$name = $row['lname']." ". $row['fname'];
$id = $row['user_id'];
$address = $row['address'];
$num = $row['cp_num'];
$email = $row['email'];
$profile = $row['user_profile'];
$b_name = $row['business_name'];
$b_info = $row['b_info'];


 echo "<button id='r_user' class='r-btn' alt='$id' >report user</button>";
   echo "<script src='js/dashboard.js'></script>";
  // echo "<script src='js/admin-ajax/form-ajax.js'></script>";
echo "
	<div class ='profilepicx'>
	<img src='img/uploads/". $profile ." ' height='200px'/>
</div>

	<div class='notif-bar animated bounceInDown'>
	               
                      <p class='name'>Owner:  $name</p>
                      <p class='time'>ADDRESS: $address</p>
                      <p class='notifs'>CONTACT NUMBER: $num</p>
                      <p class='notifs'>Business Name: $b_name</p>
                      <p class='notifs'> Business INformation:</p>
                      <textarea class = '' readonly='' > $b_info </textarea>

                  </div>
";

echo "<p>VIDEOS</p>";

$query = "SELECT * FROM user_vid WHERE user_id = '$id' ";
$res_q = mysqli_query($connect,$query);

while ($vid = mysqli_fetch_assoc($res_q)) {
  // if ($vid == 0) {
  //  echo "<p>No videos uploaded</p>";
  // }else{
    
  echo '<div class="product-container">
  <div class="item animated fadeInDowns" >
        
        <video controls data-setup="{}" preload="auto" width="100%" height="400" poster="">
        
        <source src="img/videos/'.$vid['vid_name'].' " type="video/mp4">
        </video>

        
        </div>
    </div><br><br>
  <br><br><br>';
// }
}

echo "<a href= 'php/map.php?id=$id' target='_blank' id='map'>view address  in googlemap</a>";




 echo '

                  <table class="demo-table">
                  <tr>
                  <td valign="top">
                  <div id="tutorial-'.$id.'">
                  RATE USER:
                  <input type="hidden" name="rating" id="rating" value="" />
                  <ul onMouseOut="resetRating(' .$id.');">';
       
          for($i=1;$i<=5;$i++) {
          $selected = "";
          if(!empty($likes2['rating']) && $i<=$likes2['rating']) {
        $selected = "selected";
       }
        
       echo' <li class="'.$selected.'" onmouseover="highlightStar( this, '.$id.')" onmouseout="removeHighlight( '.$id.')" onClick="addRatinguser( this, '.$id.')">&#9733;</li>  
         ';
          } 
         echo'  
            <ul>           
          </div>
           </td>
            </tr>
          </table>';

  echo '  <table class="demo-table" border="0">
                  <tr>
                  <td valign="top">USERS RATING:
                  <div>
               
                  ';
       
          for($i=1;$i<=5;$i++) {
          $selected = "selected";
         
        
       echo' <li class="selected"'.$selected.'">&#9733;</li> ';
     $star5 = "SELECT * FROM users_rating WHERE user_rated_id = '$id' AND rating ='5' ";
       $res_5 = mysqli_query($connect,$star5);
       $row5 = mysqli_num_rows($res_5);


}
echo $row5;
     echo "</td></tr><tr><td  valign='top'>";

      for($i=1;$i<=4;$i++) {
          $selected = "selected";
         
        
       echo' <li class="selected"'.$selected.'">&#9733;</li> ';
       $star4 = "SELECT * FROM users_rating WHERE user_rated_id = '$id' AND rating ='4' ";
       $res_4 = mysqli_query($connect,$star4);
       $row4 = mysqli_num_rows($res_4);


}
echo $row4;
      echo "</td></tr><tr><td  valign='top'>";

      for($i=1;$i<=3;$i++) {
          $selected = "selected";
         
        
       echo' <li class="selected"'.$selected.'">&#9733;</li> ';
       $star3 = "SELECT * FROM users_rating WHERE user_rated_id = '$id' AND rating ='3' ";
       $res_3 = mysqli_query($connect,$star3);
       $row3 = mysqli_num_rows($res_3);


}
echo $row3;
      echo "</td></tr><tr><td  valign='top'>";

      for($i=1;$i<=2;$i++) {
          $selected = "selected";
         
        
       echo' <li class="selected"'.$selected.'">&#9733;</li> ';
      $star2 = "SELECT * FROM users_rating WHERE user_rated_id = '$id' AND rating ='2' ";
       $res_2 = mysqli_query($connect,$star2);
       $row2 = mysqli_num_rows($res_2);


}
echo $row2;
      echo "</td></tr><tr><td  valign='top'>";

      for($i=1;$i<=1;$i++) {
          $selected = "selected";
         
        
       echo' <li class="selected"'.$selected.'">&#9733;</li> ';
     }
     
  $star1 = "SELECT * FROM users_rating WHERE user_rated_id = '$id' AND rating ='1' ";
       $res_1 = mysqli_query($connect,$star1);
       $row1 = mysqli_num_rows($res_1);


}
echo @$row1;
 echo "</td></tr>";
 echo "</table>";
  
 echo "<script src='js/dashboard.js'></script>";
 // echo '<script type="text/javascript" src="js/dashboard2.js"></script>';
  // echo "<script src='js/admin-ajax/form-ajax.js'></script>";
  



$sql = "SELECT u.user_id,u.type_of_user,u.lname,u.fname,u.business_name,p.prod_name,p.food_desc,p.prod_pic,p.price,p.category,p.prod_id,p.extra_pic,p.cat_inq,p.price_r_1,p.price_r_2,p.inq_pic,p.inq_desc,p.date FROM product_post AS p ,users AS u WHERE u.user_id= p.user_seller_id AND u.user_id = '$id' ORDER BY p.prod_id desc ";
$res = mysqli_query($connect,$sql);


while($row = mysqli_fetch_array($res)){

$date = strtotime($row['date']);
 if ($row['cat_inq'] == '' || $row['price_r_1'] == 0 || $row['price_r_2'] == 0 || $row['inq_pic'] == '' || $row['inq_desc'] == '') {
               echo "

               <div class='product-market-container'>
               <div class='market animated fadeInDowns' id='" .$row['type_of_user']. "' >
               <p class='tname' alt = '".$row['user_id']."'>Owners Name: ".$row['fname']." ".$row['lname']." <br>
               <d class='date'>  date posted:" .date('F j Y',$date) ."</d></p>
                             <img src='img/uploads/". $row['prod_pic'] ."' width='10%;' id = 'slide' alt='".$row['prod_id']."'>
                           
                               
                            
                             <p class='name'>Business Name: ".$row['business_name']." </p>
                             <p class='name'>Product name: ".$row['prod_name']." </p>
                             <p class='desc'>Category :".$row['category']."</p>
                             <p class='desc'>Description :".$row['food_desc']."</p>
                             <p class='desc'>Price : P".$row['price']."</p>

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
          </table>
          ';
}
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
                        </div>
                        ";




}else{

    echo "
  <div class='product-market-container'>
               <div class='market animated fadeInDowns' id='" .$row['type_of_user']. "' >
                 <p class='tname' alt = '".$row['user_id']."'>Owners Name: ".$row['fname']." ".$row['lname']." <br>
               <d class='date'>  date posted:" .date('F j Y',$date) ."</d></p>
                 <input type ='hidden' value='".$row['prod_id']."' id='userss_id' name = 'userss_id' >
                 ";

                 echo"
                 
                       
                             <img src='img/uploads/". $row['inq_pic'] ."' width='10%;' id = 'slide' alt='".$row['prod_id']."'>
                           
                               
                            
                             <p class='name'>Business Name: ".$row['business_name']." </p>
                             <p class='name'>In need of: ".$row['cat_inq']." </p>
                             <p class='desc'>price range: P".$row['price_r_1']." to P".$row['price_r_2']."  </p>

                             <center>
                             
                             ";  
           $prodid = $row['prod_id'];

                
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

}

?>


