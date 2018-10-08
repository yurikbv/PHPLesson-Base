<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="style.css" rel="stylesheet">
</head>
<body>
<div class="wrapper">
  <div class="images">
    <?php
    include_once __DIR__.'/images-data.php';
    foreach ($images as $index => $image) {
      echo '<a href="image.php?id='.$index.'"><img src="' . $image . '"></a>';
    }
    ?>
  </div>
</div>
</body>
</html>