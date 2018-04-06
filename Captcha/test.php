<?php
session_start();

if (isset($_POST['Submit'])) {
	 require_once dirname(__FILE__) . '/securimage.php';
      $securimage = new Securimage();
	   $captcha = @$_POST['ct_captcha']; // the user's entry for the captcha code

      if ($securimage->check($captcha) == false) {
         print "Error";
}else{
	print "Correct!";
	}


}
?>
  
 <form method="post" action="">
  <input type="hidden" name="do" value="contact">
<div>
    <?php
      // show captcha HTML using Securimage::getCaptchaHtml()
      require_once 'securimage.php';
      $options = array();
      $options['input_name']             = 'ct_captcha'; // change name of input element for form post
      $options['disable_flash_fallback'] = false; // allow flash fallback

      if (!empty($_SESSION['captcha']['captcha_error'])) {
        // error html to show in captcha output
        $options['error_html'] = $_SESSION['captcha']['captcha_error'];
      }

      echo Securimage::getCaptchaHtml($options);
    ?>
  </div>
   <input type="submit" name="Submit" value="Validate">
   </form>
   
