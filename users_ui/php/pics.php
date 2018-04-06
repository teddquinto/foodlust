<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php 

require "dbconn.php";

$id = $_POST['id']; 

	$sql = "SELECT * FROM product_post where prod_id ='$id' ";
	$result = mysqli_query($connect,$sql);
	$row = mysqli_fetch_array($result);
if ($row['extra_pic'] == '') {

	if ($row['inq_pic'] == '' ) {
		 $star5 = "SELECT SUM(rating) as ratings FROM product_likes WHERE prod_id = '$id'  ";
       $res_5 = mysqli_query($connect,$star5);
       $row5 = mysqli_fetch_assoc($res_5);
       $s = $row5["ratings"] ;

       $sql2 = "SELECT * FROM users ";
		$result2 = mysqli_query($connect,$sql2);
		$row2 = mysqli_num_rows($result2);


       @$d = $s/$row2;
       $dd =number_format((float) $d, 1, '.', '');

	
		  	  echo '
						<div class="img-cont">
								<img src="img/uploads/'.$row['prod_pic'].'" alt="Upload Image" class="slidess" />
								
								<button class="w3-button w3-black w3-display-left"  onclick="plusDivs(-1)">&#10094;</button>
                               <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
						</div>

						
							<div class="star">
						<p>This PHOTO is Rated 
						'.$dd.'&#9733;
						</div>
						';
	}else{
 		 echo '
						<div class="img-cont">
								<img src="img/uploads/'.$row['inq_pic'].'" alt="Upload Image" class="slidess" />
								
								<button class="w3-button w3-black w3-display-left"  onclick="plusDivs(-1)">&#10094;</button>
                               <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
						</div>

					
						

						';

	}


}else{

	

	 $star5 = "SELECT SUM(rating) as ratings FROM product_likes WHERE prod_id = '$id'  ";
       $res_5 = mysqli_query($connect,$star5);
       $row5 = mysqli_fetch_assoc($res_5);
       $s = $row5["ratings"] ;
       @$d = 15/$s;
       $dd =number_format((float) $d, 1, '.', '');
       // if ($row5 > 20 ) {
       	
       // }
       if ($row['inq_pic'] == '' ) {
	  	  echo '
						<div class="img-cont">
								<img src="img/uploads/'.$row['prod_pic'].'" alt="Upload Image" class="slidess" />
								<img src="img/uploads/'.$row['extra_pic'].'" alt="Upload Image" class="slidess" />
								<button class="w3-button w3-black w3-display-left"  onclick="plusDivs(-1)">&#10094;</button>
                               <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
						</div>

						<div class="star">
						<p>This PHOTO is Rated 
						'.$dd.'&#9733;
						</div>
						';
					}else{
							  echo '
						<div class="img-cont">
								<img src="img/uploads/'.$row['inq_pic'].'" alt="Upload Image" class="slidess" />
								<img src="img/uploads/'.$row['extra_pic'].'" alt="Upload Image" class="slidess" />
								<button class="w3-button w3-black w3-display-left"  onclick="plusDivs(-1)">&#10094;</button>
                               <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
						</div>

						
						';
					}
}
?>

<script type="text/javascript">

	var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("slidess");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>