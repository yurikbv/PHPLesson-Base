<?php

require_once __DIR__ . '/Item.php';

class Wardrobe extends Item
{
  public $doors;
  public function __construct($price,$doors)
  {
    $this->doors = $doors;
    parent::__construct($price);
  }

  public function show()
  {
    return 'i\'m a wardrobe and i have ' . $this->doors . ' doors' . parent::show();
  }
}