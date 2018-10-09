<?php

class Uploader{
  public $field;
  public function __construct($field)
  {
    $this->field = $field;
  }
  public function isUploaded(){
    if (isset($_FILES[$this->field]))
    {
      return true;
    } else {
      return false;
    }
  }
  public function upload($file,$whereTo)
  {
    move_uploaded_file($file,$whereTo);
  }
}