<?php
$path = __DIR__.'/reviews.txt';
include_once __DIR__.'/functions.php';
if(is_readable($path)){
  $fh = fopen($path,'r');
  $newReview = $_POST['review'];
  $reviews = getArrayFromFile($fh);
  $reviews[] .= "\n".trim($newReview);
  $newText = (string)'';
  foreach ($reviews as $review){
    $newText .= $review;
  }
  fclose($fh);
  $fh = fopen($path,'w');
  fwrite($fh,$newText);
  fclose($fh);
  header('Location: index.php');
  die;
}