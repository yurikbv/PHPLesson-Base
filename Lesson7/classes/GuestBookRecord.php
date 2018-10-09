<?php
/**
 * Created by PhpStorm.
 * User: HOME
 * Date: 09.10.2018
 * Time: 1:54
 */

class GuestBookRecord
{
  protected $message;
  public function __construct($message)
  {
    $this->message = $message;
  }
  public function getMessage()
  {
    return $this->message;
  }
}