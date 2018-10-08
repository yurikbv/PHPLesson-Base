<?php

function solveTask($a,$b,$op){
  $result = '<tr><td>'.$a.'</td><td>'.$b.'</td><td>';

  switch ($op){
    case 'and':
      if((bool)$a && (bool)$b){
        $result .=1;
      }else $result .=0;
      break;
    case 'or':
      if((bool)$a || (bool)$b){
        $result .=1;
      }else $result .=0;
      break;
    case 'xor':
      if((bool)$a xor (bool)$b){
        $result .=1;
      }else $result .=0;
      break;
  }
  $result .='</td></tr>';
  return $result;
}