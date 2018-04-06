<?php 
session_start();

require "dbconn.php";
 
@$terms = $_POST['terms'];

if ($terms != 1) {
	echo "You must Agree to the Terms And Policies";
}else{

 $Destination = '../img/uploads';
        if(!isset($_FILES['ImageFile']) || !is_uploaded_file($_FILES['ImageFile']['tmp_name'])){
            $NewImageName= 'default.jpg';
            move_uploaded_file(@$_FILES['ImageFile']['tmp_name'], "$Destination/$NewImageName");
        }
        else{
            $RandomNum = rand(0, 9999999999);
            $ImageName = str_replace(' ','-',strtolower($_FILES['ImageFile']['name']));
            $ImageType = $_FILES['ImageFile']['type'];
            $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
            $ImageExt = str_replace('.','',$ImageExt);
            $ImageName = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
            $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
            move_uploaded_file($_FILES['ImageFile']['tmp_name'], "$Destination/$NewImageName");
        }

$lname =preg_replace('/[^a-zA-Z0-9\']/','',$_POST['lname']);
$fname =preg_replace('/[^a-zA-Z0-9\']/','',$_POST['fname']);
$address = $_POST['address'];
$b_name = $_POST['b_name'];
$contact = $_POST['contact'];
$email = $_POST['email']; 
$t_user = $_POST['t_user'];
$pass = $_POST['password']; 
$pass2 = $_POST['password2']; 
$sec_code = $_POST['sec_code'];
$b_info = $_POST['business_info'];
$password = md5($pass);
$password2 = md5($pass2);
 $d = date("Y");

// $lname ="ted";
// $fname = "ted";
// $address = "asd";
// $b_name = "asd";
// $contact = "123";
// $email  = "jan223s22@gmail.com";
// $t_user = "buyer";
// $pass = "123";
// $pass2  = "123";
 
 $check_code ="SELECT * FROM temp_user WHERE security_code = '$sec_code' ";
$result_C =mysqli_query($connect,$check_code);
$row2 = mysqli_num_rows($result_C);
if ($row2 > 0) {
	


$check_email = "SELECT * FROM users where email='$email' ";
$result2 =mysqli_query($connect,$check_email);
$row = mysqli_num_rows($result2);
	
	if ($row > 0) {   
		

		echo "email already exist";


}else{

	$check_email2 = "SELECT * FROM reported_users where email='$email' ";
$result22 =mysqli_query($connect,$check_email2);
$row2 = mysqli_num_rows($result22);
	
	if ($row2 > 0) {   
		

		echo "email already exist";


}else{

	if ($password==$password2) {
		$sql = "INSERT INTO users(lname,fname,address,business_name,cp_num,email,type_of_user,pass,user_profile,b_info,date_created) values('$lname','$fname','$address','$b_name','$contact','$email','$t_user','$password','$NewImageName', '$b_info','$d')";
		$result = mysqli_query($connect,$sql); 
		if ($result ) {

			$dels = "DELETE FROM temp_user WHERE email = '$email'";
			$res_d =mysqli_query($connect,$dels);
			if (!$res_d) {
				echo "error deleting";
			}else{
			
	
		echo "welcome!";
}
		} else {

			echo "error";
	
	}
		// $check_email2 = "SELECT * FROM users where email='$email' ";
		// $result22 =mysqli_query($connect,$check_email2);
		// $rows = mysqli_num_rows($result22);

		


	}  else {
	echo "password does not match
		
		";
		

}
}
}
}else{
echo "confirmation code does not match";
	
}
}
?>