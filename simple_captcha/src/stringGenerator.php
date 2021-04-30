<?php
namespace src;
/**
 * Class String Generator will generate String based on the parameters
 * that can be used as default or can be changed to customize.
 **/
class stringGenerator{
  /**characters, using it this class will generate random string.
  Should not be changed! if not needed for any other string chain.*/
  protected $chars="ABCDEFGHIJKLMNOPQRSTUVWXZ123456789abcdefghijklmnopqrstuvwxyz";
  /**Whether Secure Random String is needed to create, better to use it always*/
  protected $secure=true;
  /**Level to strengthening genarated String*/
  protected $strength=5;
  /* Default Constructor*/
  // public function __construct(){}
  /*Constructor to assign with custom requirements*/
  public function __construct($strength=5,$secure=true){
    $this->secure=$secure;
    $this->strength=$strength;
  }

  public function getLength(){
    return $this->strength;
  }
  /**
  *  Function to generate string for captcha
  **/
  public function generateString()
  {
    $inp_len=strlen($this->chars);
    $rand_string='';
    for($i=0; $i<($this->strength);$i++){
      if($this->secure){
        $rand_char=$this->chars[random_int(0,$inp_len-1)];
      }else{
        $rand_char=$this->chars[mt_rand(0,$inp_len-1)];
      }
      $rand_string.=$rand_char;
    }
    return $rand_string;
  }
}
