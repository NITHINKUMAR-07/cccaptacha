<?php

$recaptchaResponse = $_POST['g-recaptcha-response'];
$secretKey = '6LfrgOMmAAAAAD1gcN5uzOCXGQk_yjrA432UD5bI'; 

$response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secretKey . '&response=' . $recaptchaResponse);
$responseData = json_decode($response);

if (!$responseData->success) {

  die('CAPTCHA verification failed. Please try again.');
}


$name = $_POST['name'];
$email = $_POST['email'];

echo 'Form submitted successfully!';

?>