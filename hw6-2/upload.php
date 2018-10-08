<?php
require_once __DIR__.'/classes/Uploader.php';
$upload = new Uploader('picture');

if($upload->isUploaded()){
  $count = count($_FILES[$upload->field]['name']);
  $start = 0;
  while ($start < $count) {
    if (0 == $_FILES[$upload->field]['error'][$start] && ('image/jpeg' == $_FILES[$upload->field]['type'][$start]
            || 'image/png' == $_FILES[$upload->field]['type'][$start]) || 'image/gif' == $_FILES[$upload->field]['type'][$start]){

      $upload->upload($_FILES[$upload->field]['tmp_name'][$start],__DIR__ . '/img/' . $_FILES[$upload->field]['name'][$start]);
      $path = __DIR__.'/logs.txt';
      $log = '------------------------------------------------------'."\n";
      $log .= 'Username : ' . $_COOKIE['username']."\n";
      $log .= 'Date :' . date('Y-m-d:H-i-s')."\n";
      $log .= 'Picture : ' . $_FILES[$upload->field]['name'][$start]."\n";
      $handle = fopen($path,'a');
      fwrite($handle,$log);
      fclose($handle);
    } else {
      die('Error Uploading');
    }
    $start++;
  }
}else {
  die('Error Anywhere');
}
header('Location: index.php');
die;


