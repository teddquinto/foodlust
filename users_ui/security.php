<?php

require "php/dbconn.php";
require "../mail/class.phpmailer.php";
require "../mail/class.smtp.php";
 session_start();

 // $user_id = @$_SESSION['user_id'];

 // if(!isset($user_id)){ header('location:index.php'); } else {  } 



$lname =preg_replace('/[^a-zA-Z0-9\']/','',$_POST['lname']);
$fname =preg_replace('/[^a-zA-Z0-9\']/','',$_POST['fname']);
$address = $_POST['address'];
$b_name = $_POST['b_name'];
$contact = $_POST['contact'];
$email = $_POST['email']; 
$t_user = $_POST['t_user'];
$pass = $_POST['pass']; 
$pass2 = $_POST['pass2']; 
$confirm_code=md5(uniqid(rand())); 

$sql2 = "SELECT * FROM temp_user WHERE fname = '$fname' AND  lname = '$lname' AND email = '$email' AND pass ='$pass' "; 
$res2 = mysqli_query($connect,$sql2);
  $row = mysqli_num_rows($res2);
  if ($row == 0) {
    $sql = "INSERT INTO temp_user VALUES('','$fname','$lname','$email','$confirm_code','$pass','$address' )";
    $res = mysqli_query($connect,$sql);

  


$mail             = new PHPMailer();

// $body             = $mail->getFile('contents.html');
$body             = $confirm_code;

$mail->IsSMTP();
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 465;                   // set the SMTP port

$mail->Username   = "foodlust2017@gmail.com";  // GMAIL username
$mail->Password   = "foodlustkami";            // GMAIL password

$mail->From       = "foodlust2017@gmail.com";
$mail->FromName   = "Foodlust";
$mail->Subject    = "confirmation code";
$mail->AltBody    = "This is the body when user views in plain text format"; //Text Body
$mail->WordWrap   = 50; // set word wrap

$mail->MsgHTML($body);

$mail->AddReplyTo("foodlust2017@gmail.com","ted");

// $mail->AddAttachment("/path/to/file.zip");             // attachment
// $mail->AddAttachment("/path/to/image.jpg", "new.jpg"); // attachment

$mail->AddAddress($email);

$mail->IsHTML(true); // send as HTML

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "<script>alert('the security code has been sent to your email') </script>";
}






$d = date("Y");
if(!isset($email)){ header('location:index.php'); } else {  }

?>
<!DOCTYPE html>
<html>
<head>
	<title>FOODLUST</title>

<link type="text/css" rel="stylesheet" href="css/sec_css.css" />
 <link href="css/bootstrap/bootstrap.css" rel="stylesheet">

</head>
<body>
<div>
	WELCOME!!

</div>
<div class="container">
		<!-- Start of header-->
       <form action="php/signup.php" method="POST" enctype="multipart/form-data" autocomplete="off" id="seccs">
<?php

   // $user = "SELECT * FROM users where user_id='$user_id'";
			// $result_user = mysqli_query($connect,$user); 
			//  while ($row= mysqli_fetch_array($result_user, MYSQLI_ASSOC)){
			//  	$fname = $row['fname'];
			//  	$lname = $row['lname'];
			// 	$pass = $row['pass'];
			// 	$emails = $row['email'];
			 //}
?>
    <div class="col-md-6">
        <div class="form-group float-label-control">
                    <input type="hidden" name = "t_user" value="<?php echo $t_user; ?>">
                    <input type="hidden" name = "b_name" value="<?php echo $b_name; ?>">
                    <input type="hidden" name = "address" value="<?php echo $address; ?>">

             <label for="">SEcurity code</label>
            <input type="text" class="form-control" placeholder="please copy your code in your email" name="sec_code"  required>
            <label for="">First Name</label>
            <input type="text" class="form-control" placeholder="<?php echo $fname;?>" name="fname" value="<?php echo $fname;?>" required>
        </div>
        <div class="form-group float-label-control">
            <label for="">Last Name</label>
            <input type="text" class="form-control"  placeholder="<?php echo $lname;?>" name="lname" value="<?php echo $lname;?>" required>
        </div>
        <div class="form-group float-label-control">
            <label for="">Contact</label>
            <input type="text" class="form-control"  placeholder="<?php echo $contact;?>" name="contact" value="<?php echo $contact;?>" required>
        </div>
        <div class="form-group float-label-control">
            <label for="">Avatar</label>
            <center><input name="ImageFile"  class="btn btn-primary ladda-button" data-style="zoom-in"  type="file" /></center>
        </div>           
    </div>    
     
            <div class="col-md-6">
 <div class="form-group float-label-control">
                    <label for="">Business INfo</label>
                    <textarea class="form-control" placeholder="business information" rows="10" placeholder="" name="business_info"></textarea>
                </div>
                
                </div>
        <div class="form-group float-label-control">
            <label for="">Password</label>
            <input type="password" class="form-control" placeholder="<?php echo $pass; ?>" name="password" value="<?php echo $pass;?>" required>
             <label for="">Re Type Password</label>
            <input type="password" class="form-control" placeholder="password" name="password2" required>
        </div>
        <div class="form-group float-label-control">
            <label for="">Email</label>
            <input type="text" class="form-control" placeholder="<?php echo $email;?>" name="email" value="<?php echo $email;?>" required>
        </div>
  <div class="col-md-6">
   
 <div class="form-group float-label-control">
                    <label for="">Users terms and policy</label>
                    <textarea class="form-control" placeholder="" rows="10" placeholder="" readonly="" id ="term_for_buyers">
                  TERM AND POLICIES FOR FOODLUST:

                    This agreement was written in English (US).To the extent any translated version of this agreement conflicts with the English version, the English version controls. 

 Date of Last Revision: August 17, 2017

  I.Acceptance
   You acknowledge and agree that these Terms of Use of the Foodlust terms and conditions will govern your access or use of the foodlust system accessible via internet or the web. In addition to the Terms of Use and Privacy Policy (the “Terms”) accessible at the registration of account which you have previously consented to and are now bound to when you registered as a member of FOODLUST community, you also consent to be bound by the following Terms:




II.DESCRIPTION OF SERVICE AND GENERAL TERMS OF USE FOR USERS

BUYERS:
1.  The Service is an online venue catering to interested sellers and buyers, inquiring about an item or service, in full coordination with the advertisement seller and buyers only.
2.You acknowledge and agree that the information you add for the inquiry will be used by the system to pinpoint your location and use for its authenticity.
3. You acknowledge and agree that when a seller clickes the preferred button ,he/she is ready for offers or your product is already in auction.
4. You as the owner is still in control on who you want to transact with. 
5. You acknowledge and agree that your personal information will be used as the validation of the system for your business and your posts in the system. 

6. You have the capacity to ask for event organizing by just sending an email to us using our email foodlust2017@gmail.com.

7.You understand and agree that the sale is strictly between yourself and the seller.  Foodlust is not a party to your sale nor  it is responsible for the delivery of the item. Foodlust merely provides information that allows you to enter into and consummate the sale with the seller. 
SELLERS:
1.You acknowledge and agree that when you click the "interested" button you are bidding on the buyer\'s post and it  does not result in the sale of the item nor an agreement on the part of the seller to deliver the item
2.You acknowledge and agree that your personal information will be used  for validity and tracking of your actions in the system.
3. You acknowledge and agree that the system will not be liable for any failed transaction you conducted within the system.
4.  You understand and agree that the sale is strictly between yourself and the buyer.  Foodlust is not a party to your sale nor it is responsible for the delivery of the item. Foodlust merely provides information that allows you to enter into and consummate the sale with the buyer. 

5.Should you, as a seller, agrees on the terms in registration, you agree to grant Foodlust complete access to activity log for the purpose of tracking malicous doing.

    
III. DISCLAIMER

1. Foodlust takes no responsibility for any action done directly or indirectly based on terms, information, content and service within the system. Foodlust does not guarantee and will not be held responsible for any damage or loss affiliated to the product endorsed that is found within our system.

2. Foodlust shall not be counted as liable for any incidental or accidental damage and will not guarantee accountability for any loss or expense that resulted from misuse of information whether based on violation of contract of the seller to its products liability and credibility.

3. Foodlust may/can include links that may direct to external systems. Foodlust has no responsibility, whatsoever related to the system used to direct to external links and with that, will be counted as the consumer\'s own responsibility and risk.

4. With regards to the warrant given to the content information, products included and specified in the system, Foodlust disown all couriers and implied warranties related to the content, service and information included in the system including without limitation of any given warranty of the products. All provided information are "the same" and "available" without any accustomed warranty of any kind.			       
                    </textarea>

                  
                    </div>
                     <input type="checkbox" name="terms" id="terms" value="1">
                     <label for="">I Agree</label>
                    </div>
               
<hr>                 
    

    <br>
    <div class="submit">
        <center>
            <button class="btn btn-primary ladda-button" data-style="zoom-in" type="submit"  id="SubmitButton" value="Upload" />Save Your Profile</button>
        </center>
    </div>
</form>


</div>
<script type="text/javascript" src="js/default.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/client.js"></script> 
<!-- 
		
		 
		<script type="text/javascript" src="js/angular.js"></script> 
		<script type="text/javascript" src="js/a-model1.js"></script> 
		
		<script type="text/javascript" src="js/formajax.js"></script> -->	

</body>
</html>
<?php 
}else{

?>
<!DOCTYPE html>
<html>
<head>
    <title>FOODLUST</title>

<link type="text/css" rel="stylesheet" href="css/sec_css.css" />
 <link href="css/bootstrap/bootstrap.css" rel="stylesheet">

</head>
<body>
<div>
    WELCOME!!

</div>
<div class="container">
        <!-- Start of header-->
       <form action="php/signup.php" method="POST" enctype="multipart/form-data" autocomplete="off" id= "seccs">
<?php

   // $user = "SELECT * FROM users where user_id='$user_id'";
            // $result_user = mysqli_query($connect,$user); 
            //  while ($row= mysqli_fetch_array($result_user, MYSQLI_ASSOC)){
            //      $fname = $row['fname'];
            //      $lname = $row['lname'];
            //  $pass = $row['pass'];
            //  $emails = $row['email'];
             //}
?>
    <div class="col-md-6">
        <div class="form-group float-label-control">
                    <input type="hidden" name = "t_user" value="<?php echo $t_user; ?>">
                    <input type="hidden" name = "b_name" value="<?php echo $b_name; ?>">
                    <input type="hidden" name = "address" value="<?php echo $address; ?>">

             <label for="">SEcurity code</label>
            <input type="text" class="form-control" placeholder="please copy your code in your email" name="sec_code"  required>
            <label for="">First Name</label>
            <input type="text" class="form-control" placeholder="<?php echo $fname;?>" name="fname" value="<?php echo $fname;?>" required>
        </div>
        <div class="form-group float-label-control">
            <label for="">Last Name</label>
            <input type="text" class="form-control"  placeholder="<?php echo $lname;?>" name="lname" value="<?php echo $lname;?>" required>
        </div>
        <div class="form-group float-label-control">
            <label for="">Contact</label>
            <input type="text" class="form-control"  placeholder="<?php echo $contact;?>" name="contact" value="<?php echo $contact;?>" required>
        </div>
        <div class="form-group float-label-control">
            <label for="">Avatar</label>
            <center><input name="ImageFile"  class="btn btn-primary ladda-button" data-style="zoom-in"  type="file" /></center>
        </div>           
    </div>    
     
            <div class="col-md-6">
 <div class="form-group float-label-control">
                    <label for="">Business INfo</label>
                    <textarea class="form-control" placeholder="business information" rows="10" placeholder="" name="business_info"></textarea>
                </div>
                
                </div>
        <div class="form-group float-label-control">
            <label for="">Password</label>
            <input type="password" class="form-control" placeholder="<?php echo $pass; ?>" name="password" value="<?php echo $pass;?>" required>
             <label for="">Re Type Password</label>
            <input type="password" class="form-control" placeholder="password" name="password2" required>
        </div>
        <div class="form-group float-label-control">
            <label for="">Email</label>
            <input type="text" class="form-control" placeholder="<?php echo $email;?>" name="email" value="<?php echo $email;?>" required>
        </div>
  <div class="col-md-6">
 <div class="form-group float-label-control">
                    <label for="">Users terms and policy</label>
                    <textarea class="form-control" placeholder="" rows="10" placeholder="" readonly="" id ="term_for_buyers" 
                    style="text-align:left;  ">                        
 TERM AND POLICIES FOR FOODLUST:

                    This agreement was written in English (US).To the extent any translated version of this agreement conflicts with the English version, the English version controls. 

 Date of Last Revision: Augost 17, 2017

  I.Acceptance 
   You acknowledge and agree that these Terms of Use of the Foodlust terms and conditions will govern your access or use of the foodlust system accessible via internet or the web. In addition to the Terms of Use and Privacy Policy (the “Terms”) accessible at the registration of account which you have previously consented to and are now bound to when you registered as a member of FOODLUST community, you also consent to be bound by the following Terms:




II.DESCRIPTION OF SERVICE AND GENERAL TERMS OF USE FOR USERS

BUYERS:
1.  The Service is an online venue catering to interested sellers and buyers, inquiring an item or service must be done, in full coordination, with the advertisement seller and buyers only.
2.You acknowledge and agree that the information you add for the inquery will be used by the system to pinpoint your location and used for its autenticity.
3. You acknowledge and agree that when a seller clicked the interested button ,he/she is already ready for offers or your product is already in auction.
4. you as the owner is stil in control on who you want to transuct with. 
5. You acknowledge and agree that your personal information will be used as the validation of the system for your business and your posts in the system. 

6. you have the capacity to asked for event organizing by just sending an email to us using our email foodlust2017@gmail.com.

7.ou understand and agree that the sale is strictly between yourself and the Seller.  Foodlust is not a party to your sale nor is it responsible for the delivery of the item. Foodlust merely provides information that allows you to enter into and consummate the sale with the Seller. 
SELLERS:
1.You acknowledge and agree that when you clicked the interested button you are bidding on the buyers post and it  does not result in the sale of the item nor an agreement on the part of the seller to deliver the item
2.you acknowledge and agree that your personal information will be used by the us for validity and tracking of your actions in the system.
3. you acknowledge and agree that the system will not be liable for any failed transuction you conducted within the system.
4.  You understand and agree that the sale is strictly between yourself and the Buyer.  Foodlust is not a party to your sale nor is it responsible for the delivery of the item. Foodlust merely provides information that allows you to enter into and consummate the sale with the buyer. 

5.Should you, as a Seller, agress on the terms in registration, you agree to grant Foodlust complete access to activity log for the purpose of tracking malicous doing.



 III. DISCLAIMER

1. Foodlust takes no responsibility for any actions done directly or indirectly based on terms, information, content and service within the system. Foodlust does not guarantee and will not be held responsible for any damage or loss affiliated to the product endorsed that is found within our system.

2. Foodlust shall not be counted as liable for any incidental or accidental damage and will not guarantee accountability for any loss or expense that resulted from misuse of data and information. Whether based on violation of contract of the seller to its products liability and credibility.

3. Foodlust may/can include links that may direct to external systems. Foodlust has no responsibility, whatsoever related to the system used to direct to external links and with that, will be counted as the consumers own responsibility and risk.

4. With regards to the warrant given to the content information, products included and specified in the system, Foodlust disown all couriers and implied warranties related to the content, service and information included on the system. Including without limitation of any given warranty of the products. All provided information are "the same" and "available" without any accustomed warranty of any kind.

            




                    </textarea>
                    <input type="checkbox" name="terms" id="terms" value="1">
                   
                     <label for="">I Agree</label>
                    </div>
                    </div>
               
<hr>                 
    

    <br>
    <div class="submit">
        <center>
            <button class="btn btn-primary ladda-button" data-style="zoom-in" type="submit"  id="SubmitButton" value="Upload" />Save Your Profile</button>
        </center>
    </div>
</form>


</div>
<script type="text/javascript" src="js/default.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/client.js"></script> 
<?php
}
?>

<script type="text/javascript" src="php/form_jquery.js"></script>
<script type="text/javascript">
    $(function(){
        $("#seccs").ajaxForm(function(data){
            if(data=='welcome!'){
                window.location.href = 'home.php';
            } else {    
                alert(data);
            }
        });
    });
              
</script>