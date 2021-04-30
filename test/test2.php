<?php
//session_start();
require __DIR__.'/../vendor/autoload.php';

use src\Captcha;
$captcha=new Captcha();
$captcha->generate();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Captcha Test page</title>
  </head>
  <body>
    <div class="php-captcha">
      <p clas='captcha-text'>
          <?php echo $captcha->getRandomString();?>
      </p>
      <br/>
      <img class="captcha-image" src="<?php echo $captcha->getImageData()?>" alt="Captcha image">
    </div>
  </body>
</html>
