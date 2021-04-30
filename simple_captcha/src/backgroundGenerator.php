<?php
namespace src;

/**
 * Class background image Generator that will generate images randomly for captcha.
**/
class backgroundGenerator{
  //the image variable that will hold the image
  protected $image=null;
  //the width of the image, default is 200
  protected $width=200;
  //the height of the image, default is 50
  protected $height=50;
  //default Constructor
  // public function __construct(){}
  //Constructor with custom requirements
  public function __construct($width,$height){
    $this->width=$width;
    $this->height=$height;
  }

  public function generateBackground(){
    $this->image=imagecreatetruecolor($this->width,$this->height);
    /**
    * Activate the fast drtawing anbtialiased methods for lines and wired
    * polygons. It does not support alpha components. Works using a direct
    * blend operation. It works only with truecolor images.
    **/
    imageantialias($this->image,true);
    $colors=[];

    $red=rand(105,185);
    $green=rand(120,175);
    $blue=rand(205,175);

    //getting the list of color array
    for($i=0;$i<5;$i++){
      $colors[]=imagecolorallocate($this->image,$red-20*$i,$green-20*$i,$blue-20*$i);
    }
    imagefill($this->image,0,0,$colors[0]);
    // /**Filling background with some random lines**/
    // for($i=0;$i<10;$i++){
    //   $line_color=$colors[rand(1,4)];
    //   imageline($this->image,rand(0,$this->width),rand(0,$this->height),rand(0,$this->width),rand(0,$this->height),$line_color);
    // }
    /**Filling background with some random rectangles**/
    for($i=0;$i<10;$i++){
      imagesetthickness($this->image, rand(2,10));
      $rect_color=$colors[rand(1,4)];
      imagerectangle($this->image,rand(-10,190),rand(-10,10),rand(-10,190),rand(40,60), $rect_color);
    }
    return $this->image;
  }
}
?>
