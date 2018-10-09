<?php

require_once __DIR__.'/classes/User.php';
function sendMessage(User $user,string $message){
  echo $user->email . '->'. $message;
}

$user = new User;
$user->email = 'test@test.com';

sendMessage($user,'Hello!');