<?php

require_once __DIR__ . '/Item.php';

class Table extends Item {
  protected $legs;
  public function show()
  {
    return 'i\'m a table and i have ' . $this->legs . ' legs' . parent::show();
  }
  public function setLegs($legs){
    $this->legs = $legs;
  }
}