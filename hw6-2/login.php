<?php
  include_once __DIR__.'/functions.php';
  if(getCurrentUser()){
    header('Location: index.php');
  }
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="send.php" class="form__send" method="post">
  <label for="username"><span>Login</span>
    <input type="text" name="username" id="username">
  </label>
  <label for="password"><span>Password</span>
    <input type="password" name="password" id="password">
  </label>
  <button type="submit">Submit</button>
</form>
</body>
</html>