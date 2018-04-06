<?php 

require "dbconn.php";

$id = $_POST['id']; 

	$sql = "SELECT * FROM product_post where prod_id ='$id' ";
	$result = mysqli_query($connect,$sql);
	$row = mysqli_fetch_array($result);

	 // $ids = $row['prod_id'];
  //     $name = $row['prod_name'];
  //     $category = $row['category'];
  //     $description = $row['food_desc'];
  //     $price = $row['price'];
  //     $image = $row['prod_pic'];
      $cat = $row['cat_inq'];
      $pr1 = $row['price_r_1'];
      $pr2 = $row['price_r_2'];
      $inq_pic = $row['inq_pic'];
      $inq_desc = $row['inq_desc'];

         if ($cat == '' || $pr1 == 0 || $pr2 == 0 || $inq_pic == '' || $inq_desc == '') {

	  	  echo '<form id="asdddd" action="php/update_prod_pic.php" method="post" enctype="multipart/form-data">
						<div class="img-cont">
								<img src="img/uploads/'.$row['prod_pic'].'" alt="Upload Image" />

						</div>
						<div class="form-cont">
						<input type="hidden" name="id" value="'.$row['prod_id'].'">
								
								<input type="file" name="image" id="addimage" accept="image/png,image/jpg,image/jpeg,image/gif,image/bitman" value="'.$row['prod_pic'].'" >
								
								<button id="addprod-submit">Submit</button>
						</div>
				</form>';

				}else{
					 echo '<form id="asdddd" action="php/update_prod_pic.php" method="post" enctype="multipart/form-data">
						<div class="img-cont">
								<img src="img/uploads/'.$row['inq_pic'].'" alt="Upload Image" />

						</div>
						<div class="form-cont">
						<input type="hidden" name="imgb" value="'.$row['prod_id'].'">
						<input type="file" name="image" id="addimage" accept="image/png,image/jpg,image/jpeg,image/gif,image/bitman" value="'.$inq_pic.'" >
								
								
								<button id="addprod-submit">Submit</button>
						</div>
						
				</form>';



				}

?>
<script type="text/javascript" src="php/form_jquery.js"></script>
<script type="text/javascript">
	$(function(){
		$("#asdddd").ajaxForm(function(data){
			if(data=='yes'){
				$('.add_products2').fadeOut("fast",function(){
				$('.container').animate({'opacity': '1'});
				$('.content').css({'opacity': '1'});
				$('.sidebar').css({'opacity': '1'});
				$('.header').css({'opacity': '1'});
				alert('Success');
                $('.content').load('php/products.php');
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