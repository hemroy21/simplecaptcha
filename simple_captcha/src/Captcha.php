<?php
namespace src;
include "stringGenerator.php";
include "backgroundGenerator.php";

use src\stringGenerator as stringGenerator;
use src\backgroundGenerator as backgroundGenerator;
class Captcha{
  #the text colors
  protected $color1=0;
  protected $color2=0;
  protected $color3=0;
  protected $color4=0;
  protected $font=null;
  protected $textColors=[];
  protected $rand_string='';
  protected $image=null;
  protected $stringgenerator=null;
  protected $backgroundgenerator=null;

  /**Default Constructor to build captcha width
   * default settings
   **/
  // public function __construct(){
  //   $stringgenerator=new stringGenerator();
  //   $backgroundgenerator=new backgroundGenerator();
  // }

  /**Image with custom width and height**/
  public function __construct(
    $length=5,
    $width=200,
    $height=50
  ){
    $this->stringgenerator=new stringGenerator($length);
    $this->backgroundgenerator=new backgroundGenerator($width,$height);
  }
  /**Constructor to build totally custom Captcha**/
  // public function __construct(
  //   $chars,
  //   $length,
  //   $strength,
  //   $secure,
  //   $width,
  //   $height
  // ){
  //   $stringgenerator=new stringGenerator($chars,$length,$strength,$secure);
  //   $backgroundgenerator=new backgroundGenerator($width,$height);
  // }

  public function getCaptcha(){
    /***First job is to get the image and the string ***/
    $this->rand_string=$this->stringgenerator->generateString();
    $this->image=$this->backgroundgenerator->generateBackground();
    //Debug Purpose
    //echo $this->rand_string;

    $font=__DIR__ . '/fonts/font'.random_int(1,4).'.ttf';
    //Set your colors as below
    $color1=imagecolorallocate($this->image,0,0,0);#black
    $color2=imagecolorallocate($this->image,0, 128, 128);
    $color3=imagecolorallocate($this->image,21, 22, 168);
    $color4=imagecolorallocate($this->image,205,157,51);
    $color5=imagecolorallocate($this->image,255,255,255);#white
    $textColors=[$color1,$color2,$color3,$color4,$color5];
    $len=$this->stringgenerator->getLength();

    for($i=0;$i<$len;$i++){
      $letter_space=160/$len;//here 180 is the left over space
      $init=16;//padding on the both sides
      imagettftext($this->image,mt_rand(25,30),mt_rand(-15,10),$init+$i*$letter_space,mt_rand(30,40),$textColors[mt_rand(0,4)],$font,$this->rand_string[$i]);
      //imagettftext($image,$font_size,0,6,25,$foreground,$font_path,$captchanumber);
    }
    return $this->image;
  }

  public function getRandomString(){
    return $this->rand_string;
  }
}
?>
