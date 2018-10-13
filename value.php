<?php
class Value{
  public $name;
  public $birthday;
  public $image;
  public function __construct($name, $birthday, $image){
    $this->name =$name;
    $this->birthday =$birthday;
    $this->image =$image;
  }
}
?>
