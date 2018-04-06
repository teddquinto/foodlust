<?php

session_start();

$user_id = @$_SESSION['user_id'];

// $name2 = @$_SESSION['name'];

if(!isset($user_id)){ header('location:../index.php'); } else {  } 

require 'dbconn.php';
$id = $_POST['id'];
$sql = "SELECT * FROM users WHERE user_id = '$id' ";
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


echo ' <form id="updateinfo" action="php/update_info.php" method="post" enctype="multipart/form-data">
                       
                        <div class="form-cont">
          
            
                                <input type="text" name="lname"  id="name" value="'.$lname. '" required="">
                                <input type="text" name="fname"  id="name" value="'.$fname.'" required="">
                                 <input type="text" name="b_name"  id="name" value="'.$b_name.'" required="">
                                  <input type="text" name="address"  id="name" value="'.$address.'" required="">
                               
                                <input type="number" name="cpnum" id="cpnum" placeholder="cpnum" required="" value="'.$num.'">
                                
                                <textarea name="description" id="description" rows="8"  resizable> '.$b_info.'</textarea>
                                <button id="update_info-submit">Submit</button>
                        </div>
            </form>';
      
       
      ?>


<script type="text/javascript" src="php/form_jquery.js"></script>
<script type="text/javascript">
  $(function(){
    $("#updateinfo").ajaxForm(function(data){
      if(data=='yes'){
        $('.add_products2').fadeOut("fast",function(){
        $('.container').animate({'opacity': '1'});
        $('.content').css({'opacity': '1'});
        $('.sidebar').css({'opacity': '1'});
        $('.header').css({'opacity': '1'});
        alert('Success');
                $('.content').load('php/home.php');
    });
      } else {  
        alert(data);
      }
    });
  });
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.img-cont img').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#addimage").change(function () {
            readURL(this);
        });
</script>