<?php
/**
 * Created by PhpStorm.
 * User: HOME
 * Date: 09.10.2018
 * Time: 14:08
 */

class View
{
  protected $data = [];
  public function assign($name, $value){
    $this->data[$name] = $value;
  }
  public function display($template){

  }
  public function render($template){
    ob_start();
    include $template;
    $content = ob_get_contents();
    ob_end_clean();
    return $content;
  }
}