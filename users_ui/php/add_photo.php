<?php 

require "dbconn.php";

$id = $_POST['id']; 

	$sql = "SELECT * FROM product_post where prod_id ='$id' ";
	$result = mysqli_query($connect,$sql);
	$row = mysqli_fetch_array($result);
	$id = $row['prod_id'];
	 $cat = $row['cat_inq'];
      $pr1 = $row['price_r_1'];
      $pr2 = $row['price_r_2'];
      $inq_pic = $row['inq_pic'];
      $inq_desc = $row['inq_desc'];

         if ($cat == '' || $pr1 == 0 || $pr2 == 0 || $inq_pic == '' || $inq_desc == '') {
	  	  echo '<form id="sadd" action="php/add_p.php" method="post" enctype="multipart/form-data">
						<div class="img-cont">
								<img src="img/fl.jpeg" alt="Upload Image" />

						</div>
						<div class="form-cont">
								<input type="hidden" name="id" value="'.$row['prod_id'].'"  readonly>
								<input type="hidden" name="imgb" value="'.$row['prod_id'].'" readonly>
								<input type="file" name="image" id="addimage" required accept="image/png,image/jpg,image/jpeg,image/gif,image/bitman" readonly >
								<input type="text" name="name"  id="name" value="'.$row['prod_name'].'" required="" readonly>
								<input type="number" name="price" id="price" value="'.$row['price'].'" required="" readonly>
								<select name="category" required="" id="category">
										<option value="'.$row['category'].'">'.$row['category'].'</option>
										<option value="raw meat">raw meat</option>
                   						<option value="raw fish">raw fish</option>
                    					<option value="product">product</option>
                   					    <option value="fruits">fruits</option>
                    				    <option value="cupcakes and cookies">cupcakes and cookies</option>
										<option value="catering_service">Catering service</option>
										<option value="cakes">cakes</option>
										<option value="vegatables">vegatables</option>
								</select>
								<textarea name="description" id="description" rows="8" value="'.$row['food_desc'].'" readonly resizable>'.$row['food_desc'].' </textarea>
								<button id="addprod-submit">Submit</button>
						</div>
				</form>';
			}else if($cat != '') {
				 echo '<form id="sadd" action="php/add_p.php" method="post" enctype="multipart/form-data">
						<div class="img-cont">
								<img src="img/fl.jpeg" alt="Upload Image" />

						</div>
						<div class="form-cont">
						<input type="hidden" name="idds" value="'.$id.'"  readonly>
						<input type="file" name="image" id="addimage" required accept="image/png,image/jpg,image/jpeg,image/gif,image/bitman" readonly >
								<input type="text" name="id" value="'.$cat.'"  readonly>
								
								
								
								<input type="number" name="price" id="price" value="'.$pr1.'" required="" readonly>
								<input type="number" name="price" id="price" value="'.$pr2.'" required="" readonly>
								
								<textarea name="description" id="description" rows="8" value="'.$inq_desc.'" readonly resizable>'.$inq_desc. '</textarea>
								<button id="addprod-submit">Submit</button>
						</div>
				</form>';

			}

?>
<script type="text/javascript" src="php/form_jquery.js"></script>
<script type="text/javascript">
	$(function(){
		$("#sadd").ajaxForm(function(data){
			if(data=='yes'){
				$('.add_products2').fadeOut("fast",function(){
				$('.container').animate({'opacity': '1'});
				$('.content').css({'opacity': '1'});
				$('.sidebar').css({'opacity': '1'});
				$('.header').css({'opacity': '1'});
				alert('Successfully added a photo');
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