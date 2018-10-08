<?php
  require_once __DIR__.'/classes/Table.php';
  require_once __DIR__.'/classes/Wardrobe.php';
?>
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
<?php
  $table1 = new Table(1000);
  $table1->setLegs(4);
  echo $table1->show();


  $wardrobe = new Wardrobe(5000,2);
  echo $wardrobe->show();
?>
</body>
</html>