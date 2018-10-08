<?php
include_once __DIR__.'/functions.php';
$login = $_POST['username'];
$pass = $_POST['password'];
if(checkPassword($login,$pass)){
  setcookie('username',$login);
  header('Location: index.php');
} else {
  header('Location: login.php');
}