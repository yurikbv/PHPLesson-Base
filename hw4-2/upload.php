<?php
$count = count($_FILES['picture']['name']);
$start = 0;

if(isset($_FILES['picture'])){
  while ($start < $count) {
    if (0 == $_FILES['picture']['error'][$start] && ('image/jpeg' == $_FILES['picture']['type'][$start]
            || 'image/png' == $_FILES['picture']['type'][$start]) || 'image/gif' == $_FILES['picture']['type'][$start]) {
      move_uploaded_file($_FILES['picture']['tmp_name'][$start], __DIR__ . '/img/' . $_FILES['picture']['name'][$start]);
    } else {
      echo 'Error Uploading';
    }
    $start++;
  }
}
header('Location: index.php');
die;


