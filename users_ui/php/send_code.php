<?php
require "dbconn.php";
require "../../mail/class.phpmailer.php";
require "../../mail/class.smtp.php";

$email = $_POST['email'];
$confirm_code=md5(uniqid(rand())); 

 $sql = "INSERT INTO temp_user(email,security_code) VALUES('$email','$confirm_code' )";
    $res = mysqli_query($connect,$sql);
    if ($res) {
   
    


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
  echo "the security code has been sent to your email";
}

}else{
	echo "error";
}
?>