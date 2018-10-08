<?php

class GuestBook
{
  protected $notes;
  public $path;
  public function __construct($link)
  {
    $this->path = $link;
    $this->notes = file($link);//Short Method
    //Long method
//    $fh = fopen($this->path,'r');
//    $this->notes = [];
//    while (!feof($fh)){
//      $this->notes[] = fgets($fh);
//    }
//    fclose($fh);
  }
  public function getData(){
    return $this->notes;
  }
  public function append($text)
  {
    if(strlen(trim($text)) > 0){
      $this->notes[] = $text . "\n";
    }
  }
  public function save()
  {
    $fh = fopen($this->path,'w');
    $text = '';
    foreach ($this->notes as $note){
      $text .= $note;
  }
    fwrite($fh,$text);
    fclose($fh);
  }
}