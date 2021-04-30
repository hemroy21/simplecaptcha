<?php
/**
 * Methods when needed to pass generated image to a web page then uncomment
 **/
require __DIR__ .'/../vendor/autoload.php';

use src\Captcha;
header('Content-type:image/png');
/*
 * Captcha length is 5 here.
 * actual function to generate captcha
 * $captcha=new Captcha(captcha_number_length, captcha_image_width,captcha_image_height)
 */
$captcha=new Captcha(5);
/**
 * When png format image is needed then use the header with the content type png
 * and call the function getPngCaptcha() to get the png image.
 *
 * When jpeg format image is needed then use the header with content type jpeg
 * and call the function getJpegCaptcha() to get the jpeg image.
 **/
$captcha->generate()->getPngCaptcha();

//method to deliver the text to session header
/**
 * $captcha->getRandomString() function will provide the
 * captcha string to validate user input. Here it has been
 * to echo the generated String to test the function of the library.
 **/
//echo $captcha->getRandomString();
/**
 * If you dont want to send image through image header method then
 * you can send the image as standard data stream which is given in other test page
 * of this test folder
 **/
?>
