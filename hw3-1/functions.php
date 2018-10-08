<?php

function solveTask($first_number,$second_number,$operator){
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
  return $sum;
}