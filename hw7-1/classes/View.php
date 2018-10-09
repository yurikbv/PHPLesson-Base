<?php

class View
{
  protected $data = [];
  public function assign($name, $value){
    $this->data[$name] = $value;
  }
  public function display($template){
//    var_dump($this->data['guestbook']->getRecords());
//    $guestBook = $this->data['guestbook'];
    echo $this->render($template);
  }
  public function render($template){
    ob_start();
    include $template;
    $content = ob_get_contents();
    ob_end_clean();
    return $content;
  }
}