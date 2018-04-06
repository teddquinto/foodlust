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



$user_profile  = $row['user_profile'];



echo ' <form id="updateinfo2" action="php/update_info2.php" method="post" enctype="multipart/form-data">
                        <div class="img-cont">
                                <img src="img/uploads/'.$user_profile.'" alt="Upload Image" />

                        </div>
                        <div class="form-cont">
            <input type="file" name="image" value="" id="add_image" required accept="image/png,image/jpg,image/jpeg,image/gif,image/bitman" >
            
                                <button id="update_info-submit">Submit</button>
                        </div>
            </form>';
      
       
      ?>
<script type="text/javascript" src="php/form_jquery.js"></script>
<script type="text/javascript">
  $(function(){
    $("#updateinfo2").ajaxForm(function(data){
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