<?php
require('../textlocal.class.php');

$textlocal = new Textlocal('foodlust2017@gmail.com', 'Shitbomb1');

$numbers = array(447556718902);
$sender = 'Foodlust';
$message = 'hi this is your code';

try {
    $result = $textlocal->sendSms($numbers, $message, $sender);
    print_r($result);
} catch (Exception $e) {
    die('Error: ' . $e->getMessage());
}
?>