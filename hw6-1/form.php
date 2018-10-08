<?php
$path = __DIR__.'/reviews.txt';
if(is_writable($path)){
  require_once __DIR__.'/data.php';
  $reviews->append($_POST['review']);
  $reviews->save();
} else {
    echo 'Impossible to read' . $path . ' file.remove write protection.';
}
header('Location: index.php');
die;