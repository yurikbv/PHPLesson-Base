<?php

class Item
{
  public $price;
  public $color;
  public function __construct($price)
  {
    $this->price = $price;
  }

  public function show()
  {
    return 'My cost is ' . $this->price . ' rub ' . " \n ";
  }
}