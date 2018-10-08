<?php

$first_number = (int)$_GET['first_number'];
$second_number = (int)$_GET['second_number'];
$operator = $_GET['operator'];

switch ($operator){
  case '+':
    $sum = $first_number + $second_number;
    break;
  case '-':
    $sum = $first_number - $second_number;
    break;
  case '*':
    $sum = $first_number * $second_number;
    break;
  case '/':
    $sum = $first_number / $second_number;
    number_format($sum,2);
    break;
  case '**':
    $sum = $first_number ** $second_number;
    break;
  default:
    $sum = 'Undefined Number';
    break;
}

echo '<div>'.$first_number.' '.$operator.' '.$second_number.' = '.$sum.'</div>';