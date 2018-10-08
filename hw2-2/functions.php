<?php
function solveTask($a,$b,$c){
  $result = ($b ** 2) - (4*$a*$c);
  return $result;
}

assert(25 == solveTask(1,3,-4));
assert(1 == solveTask(-6,-5,-1));




