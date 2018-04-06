<style type="text/css">
  
 .demo-table ul{margin:0;padding:0;}
 .demo-table li{cursor:pointer;list-style-type: none;display: inline-block;color: #F0F0F0;text-shadow: 0 0 1px #666666;font-size:20px;}
 .demo-table .highlight ,.demo-table .selected {color:#F4B30A;text-shadow: 0 0 1px #F48F0A;}


</style>
<?php

require "dbconn.php";


session_start();

@$user_id = $_SESSION['user_id'];
 // echo "<script src='js/dashboard.js'></script>";



if(!isset($user_id)){ header('location:index.php'); } else {   


$prod_id = $_GET['id'];
$u_id = $_GET['u_id'];

$update ="UPDATE notifications set push ='1' WHERE prod_id ='$prod_id' AND user_id = '$u_id' ";
$res_up =mysqli_query($connect,$update);

// $get_product = "SELECT * FROM product_post WHERE prod_id = '$prod_id' ";

$get_product = "SELECT u.user_id,u.type_of_user,u.lname,u.fname,u.business_name,p.prod_name,p.prod_pic,p.price,p.category,p.prod_id,p.extra_pic,p.cat_inq,p.price_r_1,p.price_r_2,p.inq_pic,p.inq_desc FROM product_post AS p ,users AS u WHERE u.user_id= p.user_seller_id AND p.prod_id = '$prod_id' ";
$ress = mysqli_query($connect,$get_product);

while ($row = mysqli_fetch_assoc($ress) ) {
	// $prod_id = $row['prod_id'];
    if ($row['cat_inq'] == '' || $row['price_r_1'] == 0 || $row['price_r_2'] == 0 || $row['inq_pic'] == '' || $row['inq_desc'] == '') {

 echo "

	 						 <div class='product-market-container'>
	 						 <div class='market animated fadeInDowns' id='" .$row['type_of_user']. "' >
	  					 <p class='tname' alt = '".$row['user_id']."'>Owners Name: ".$row['fname']." ".$row['lname']." </p>
               <img src='img/uploads/". $row['prod_pic'] ."' width='10%;'>
               <p class='name'>Business Name: ".$row['business_name']." </p>
               <p class='name'>Product name: ".$row['prod_name']." </p>
               <p class='desc'>Category :".$row['category']."</p>
               <center>
               </div>
               </div>";  

echo '  
            <table class="demo-table">
            <tr>
            <td valign="top">
            <div>
               
                  ';
       
          for($i=1;$i<=5;$i++) {
          $selected = "selected";
         
        
       echo' <li class="selected"'.$selected.'">&#9733;</li> ';
       $star5 = "SELECT * FROM product_likes WHERE prod_id = '$prod_id' AND rating ='5' ";
       $res_5 = mysqli_query($connect,$star5);
       $row5 = mysqli_num_rows($res_5);


}
echo $row5;
 echo '  
                  <tr>
                  <td valign="top">
                  <div>
               
                  ';
       
          for($i=1;$i<=4;$i++) {
          $selected = "selected";
         
        
       echo' <li class="selected"'.$selected.'">&#9733;</li>  ';
        $star4 = "SELECT * FROM product_likes WHERE prod_id = '$prod_id' AND rating ='4' ";
       $res_4 = mysqli_query($connect,$star4);
       $row4 = mysqli_num_rows($res_4);

}
echo $row4;
 echo '  
                  <tr>
                  <td valign="top">
                  <div>';
       
          for($i=1;$i<=3;$i++) {
          $selected = "selected";
         
        
       echo' <li class="selected"'.$selected.'">&#9733;</li>  ';
              $star3 = "SELECT * FROM product_likes WHERE prod_id = '$prod_id' AND rating ='3' ";
       $res_3 = mysqli_query($connect,$star3);
       $row3 = mysqli_num_rows($res_3);
}
echo $row3;
 echo '  
                  <tr>
                  <td valign="top">
                  <div>';
       
          for($i=1;$i<=2;$i++) {
          $selected = "selected";
         
        
       echo' <li class="selected"'.$selected.'">&#9733;</li>  ';
              $star2 = "SELECT * FROM product_likes WHERE prod_id = '$prod_id' AND rating ='2' ";
       $res_2 = mysqli_query($connect,$star2);
       $row2 = mysqli_num_rows($res_2);
}
echo $row2;
 echo '  
                  <tr>
                  <td valign="top">
                  <div>';
       
          for($i=1;$i<=1;$i++) {
          $selected = "selected";
         
        
       echo' <li class="selected"'.$selected.'">&#9733;</li>  ';
       $star1 = "SELECT * FROM product_likes WHERE prod_id = '$prod_id' AND rating ='1' ";
       $res_1 = mysqli_query($connect,$star1);
       $row1 = mysqli_num_rows($res_1);
}
echo $row1;




      }else{

       echo " 
       <div class='product-market-container'>
       <div class='market animated fadeInDowns' id='" .$row['type_of_user']. "' >
       <p class='tname' alt = '".$row['user_id']."'>Owners Name: ".$row['fname']." ".$row['lname']." </p>
       <img src='img/uploads/". $row['inq_pic'] ."' width='10%;' id = 'slide' alt='".$row['prod_id']."'>                       
       <p class='name'>Business Name: ".$row['business_name']." </p>
       <p class='name'>In need of: ".$row['cat_inq']." </p>
       <p class='desc'>price range: P".$row['price_r_1']." to P".$row['price_r_2']."  </p>
       <center>
       <p> INTERESTED:</p>
       ";  

              // $get_int = "SELECT * FROM product_likes WHERE prod_id = '$prod_id' ";
              // $res_int = mysqli_query($connect,$get_int);
              // while ($users = mysqli_fetch_assoc($res_int)) {
              // $interested = $users['user_id'];

              $get_name = "SELECT * FROM users WHERE user_id = '$u_id' ";
              $res_name = mysqli_query($connect,$get_name);
              while ($names = mysqli_fetch_assoc($res_name)) {
                 
                 echo
                 "

                 <p class='ttname' id='ttname' alt='".$names['user_id'] ."' > ".$names['lname'] ." ".$names['fname']." </p>
                 </div>
                 </div>
                 ";

               // } 

              }


}

}

}

echo '<script type="text/javascript" src="js/dashboard.js"></script>';

?>