<?php
require __DIR__.'/../simple_captcha/init.php';

use src\Captcha;

$captcha=new Captcha(5);
$image=$captcha->getCaptcha();
//method to deliver the text to session header
//echo $captcha->getRandomString();

header('Content-type:image/png');
imagepng($image);
//imagedestroy($image);
?>
