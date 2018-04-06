<?php
session_start();

$user_id = @$_SESSION['user_id'];

// $name2 = @$_SESSION['name'];

if(!isset($user_id)){ header('location:index.php'); } else {  } 

include "dbconn.php";
$sql = "SELECT * FROM users WHERE user_id = '$user_id' ";
$result = mysqli_query($connect,$sql);
$row = mysqli_fetch_array($result);
$type_of_user = $row['type_of_user'];
  
  echo "<input type = 'hidden' name='type' id='typess' value='".$type_of_user."'> ";
  echo "<button id='add' class='addprod-btn'>Add product</button>";
  echo "<button id='addsss' class='addprod-btn'>Add inqueries</button>";
   echo "<button id='addvid' class='addvids-btn'>Add Video</button>";
  echo "<script src='js/dashboard.js'></script>";
  echo "<script src='js/admin-ajax/form-ajax.js'></script>";
  echo '<script type="text/javascript" src="php/form_jquery.js"></script>';
  echo "<div class='product-container'>";


$sql = "SELECT * FROM product_post WHERE user_seller_id = '$user_id' ";
  $result = mysqli_query($connect,$sql);
  while($row = mysqli_fetch_array($result)){

      $id = $row['prod_id'];
      $name = $row['prod_name'];
      $category = $row['category'];
      $description = $row['food_desc'];
      $price = $row['price'];
      $image = $row['prod_pic'];
      $cat = $row['cat_inq'];
      $pr1 = $row['price_r_1'];
      $pr2 = $row['price_r_2'];
      $inq_pic = $row['inq_pic'];
      $inq_desc = $row['inq_desc'];

         if ($cat == '' || $pr1 == 0 || $pr2 == 0 || $inq_pic == '' || $inq_desc == '') {
          
         

                  echo "<div class='item animated fadeInDowns' id='$category'>
                            <img src='img/uploads/$image' width='10%;'>
                            <p class='name'>$name <kbd style='background-color:#e74c3c;'>P$price</kbd></p>
                            <p class='desc'>$description</p>
                            <center>
                             <button class='add_photo' id='add-image' value='$id'>Add photo</button>
                                <button class='update' id='update-prod' value='$id'>Update</button>
                             
                                <form id='deleteprod' action='php/delete.php' method='post' style='display:inline !important;'>
                                    <input type='hidden' name='id' value='$id'>
                                    <button class='delete'>Delete</button>
                                </form>
                            </center>
                        </div>";
                      }else{
                          echo "<div class='item animated fadeInDowns' id='$cat'>
                            <img src='img/uploads/$inq_pic' width='10%;'>
                            <center>
                            <p>$cat</p>
                            <p>Price Range:</p>
                            <kbd style='background-color:#e74c3c;'>P$pr1 - P$pr2</kbd></p>
                            <p class='desc'>$inq_desc</p>
                           </center>
                            <center>
                             <button class='add_photo' id='add-image' value='$id'>Add photo</button>
                                <button class='update' id='update-prod' value='$id'>Update</button>
                             
                                <form id='deleteprod' action='php/delete.php' method='post' style='display:inline !important;'>
                                    <input type='hidden' name='id' value='$id'>
                                    <button class='delete'>Delete</button>
                                </form>
                            </center>
                        </div>";

                      }

  }

  echo "</div>";
?>
<script type="text/javascript" src="php/form_jquery.js"></script>
<script type="text/javascript">


  $(document).ready(function(){
     $("#add").hide();
      $("#addsss").hide();
      var typee =  $("#typess").val();

      if ( typee == 'seller') {
        $("#add").show();
      }else if (typee == 'buyer'){
        $("#addsss").show();
      }
    // $("#pass").click(function(){
    //    $("#process").show();
    // });

});

     $("#deleteprod").ajaxForm(function(data) {
             if(data=='yes'){
                $('.content').load('php/products.php');
             } else {
                alert(data);
             }
        });

</script>