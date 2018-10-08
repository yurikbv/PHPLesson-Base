<?php
$count = count($_FILES['picture']['name']);
$start = 0;

if(isset($_FILES['picture'])){
  while ($start < $count) {
    if (0 == $_FILES['picture']['error'][$start] && ('image/jpeg' == $_FILES['picture']['type'][$start]
            || 'image/png' == $_FILES['picture']['type'][$start]) || 'image/gif' == $_FILES['picture']['type'][$start]) {
      move_uploaded_file($_FILES['picture']['tmp_name'][$start], __DIR__ . '/img/' . $_FILES['picture']['name'][$start]);
      $path = __DIR__.'/logs.txt';
      $log = '------------------------------------------------------'."\n";
      $log .= 'Username : ' . $_COOKIE['username']."\n";
      $log .= 'Date :' . date('Y-m-d:H-i-s')."\n";
      $log .= 'Picture : ' . $_FILES['picture']['name'][$start]."\n";
      $handle = fopen($path,'a');
      fwrite($handle,$log);
      fclose($handle);
    } else {
      echo 'Error Uploading';
    }
    $start++;
  }
}
header('Location: index.php');
die;


