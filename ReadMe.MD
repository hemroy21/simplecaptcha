Description # simplecaptcha
PHP based simple captcha package for quick implementation in php based web applcation.

Installation
Composer Installation:

composer require hemroy/simplecaptcha

Usage
This package is very easy to use.
Two simple examples has been given inside test folder.

 >> This library provides unique class Captcha, which provides some functions
    to build and generate captcha to use on webpage. Functions which can be used
    and available to use are discussed below.

  + Captcha class : This is the main class which is need to be called to use the library.
                  create an Captcha class instant as, $captcha=new Captcha();

  + generate() : this method will generate a captcha using methods available through
              backgroundGenerator and stringGenerator class and pass the captcha to
              the calling class.

  + getJpegCaptcha() : This method will provide the jpeg image of the captcha to
                      use directly onto a webpage.

  + getPngCaptcha() : This method will provide the Png image of the captcha to
                    use directly onto a webpage.
  + getRandomString():  the method will provide the captcha string to use or
                      store into session variable/
  + getImageData(): the method that will provide base64 encoded datastream of the image.

  >>To know the Usage perfectly, go through the test folder.

license

This package is with MIT license.
