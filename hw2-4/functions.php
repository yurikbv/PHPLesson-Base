<?php
function findGender($name){
  $male = 'David Bill Jack Gordon Maurice Oliver Ignatius Arnold Donald Hamish Max Augusta Gary Cecil Christopher Clarence Mathew Kenneth Oscar Derek Murphy Frank Damian Denis George Christian Robert Stuart Elvis Casey Norman Alfred Edmund Bruce Jim Benjamin Dominic Anthony Alban Louis Elton Edward Milton Alan Charles Austin Noel Neville Benedict Ricky';
  $female = 'valaria andromache ardine elbertine kim sashenka ashla caroline ruby natalina amy constance anna-diane ethelin annamaria flore desiree rheta jaquenetta kip alethea nerita shae marylin ysabel madonna tamar tallie dinnie laney thia maia kata yettie miquela sandy samara raine aloisia micki kirstin ashlen trina lorinda happy aigneis adelaida merla rosamond jenilee dinny selie dani carlyn kippy daisy ramonda jenica catha bekki arlinda bethanne netta lorettalorna bernete jenifer jennie vivie eartha kalindi meaghan shawnee  malanie joly angelina marie judith noreen ainslee annadiana georgetta delora collie verile justina amberly ingaberg melanie cairistiona karylin reggie stephi cassy theo gilberta maria susi merrile christine lita';
  if(stristr($male,$name) !== false) {
    $result = 'male';
  }elseif (stristr($female,$name) !== false){
    $result = 'female';
  } else{
    $result = null;
  }
  return $result;
}

assert('male' == findGender('Christopher'));
assert('male' == findGender('louis'));
assert('male' == findGender('Max'));
assert('female' == findGender('amy'));
assert('female' == findGender('Sandy'));
assert('female' == findGender('bekki'));