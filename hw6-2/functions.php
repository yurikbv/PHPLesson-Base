<?php
function getUsersList(){
  return ['admin' => '$2y$10$3zCCYweVDLmESLsw/7lC/ezw9EggtCtBIqppX4MBWMmwnLu.gnqKi', 'yurik' => '$2y$10$5GA3Y2nCL30tj5hhABBqvOI9gB4YL8jUfPYD4N0Fkli9UeUc9TYMe',
      'Vasya' => '$2y$10$EyaBBk2sWy0IlWzUgCv3IeqeCvC2gBt5J2QMyt5DEusObiKat8ip6'];
}

function existsUser($login){
  if(isset(getUsersList()[$login])){
    return true;
  }
  return false;
}

function checkPassword($login, $password){
    if(isset(getUsersList()[$login]) && password_verify($password,getUsersList()[$login])){
      return true;
    }
  return false;
}

function getCurrentUser(){
  return $_COOKIE['username'] ?? null;
}

