<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<h2>Вычисление дискриминанта квадратного уравнения</h2>
<strong>x<sup>2</sup>+ 3x - 4 = 0</strong><br>
<span>Дискримент:</span><br>
<em> D =
<?php
  include __DIR__ .'/functions.php';
  echo solveTask(1,3,-4);
?></em><br>
<strong>-6x<sup>2</sup>- 5x - 1 = 0</strong><br>
<span>Дискримент:</span><br>
<em> D =
  <?php
  echo solveTask(-6,-5,-1);
  ?></em>
</body>
</html>