<?php

// example on using PHPMailer with GMAIL

include("../class.phpmailer.php");
include("../class.smtp.php"); // note, this is optional - gets called from main class if not already loaded

$mail             = new PHPMailer();

$body             = $mail->getFile('contents.html');
$body             = eregi_replace("[\]",'',$body);

$mail->IsSMTP();
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 465;                   // set the SMTP port

$mail->Username   = "janjanquinto13@gmail.com";  // GMAIL username
$mail->Password   = "shitbomb";            // GMAIL password

$mail->From       = "janjanquinto13@gmail.com";
$mail->FromName   = "Webmaster";
$mail->Subject    = "This is the subject";
$mail->AltBody    = "This is the body when user views in plain text format"; //Text Body
$mail->WordWrap   = 50; // set word wrap

$mail->MsgHTML($body);

$mail->AddReplyTo("replyto@yourdomain.com","Webmaster");

$mail->AddAttachment("/path/to/file.zip");             // attachment
$mail->AddAttachment("/path/to/image.jpg", "new.jpg"); // attachment

$mail->AddAddress("janjanquinto@gmail.com","janjan quinto");

$mail->IsHTML(true); // send as HTML

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message has been sent";
}

?>
