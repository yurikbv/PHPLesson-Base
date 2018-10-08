<?php
function getArrayFromFile($file){
  $reviews = [];
  while (!feof($file)){
    $reviews[] = fgets($file);
  }
  return $reviews;
}