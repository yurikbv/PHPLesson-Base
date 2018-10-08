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
<section class="reviews">
  <?php
    include_once __DIR__.'/functions.php';
    $path = __DIR__.'/reviews.txt';
    if(is_readable($path)){
      $fh = fopen($path,'r');
      $reviews = getArrayFromFile($fh);
      foreach ($reviews as $review){
        echo '<p class="review__item">'.$review.'</p>';
      }
      fclose($fh);
    }
  ?>
</section>
<form action="form.php" method="post" enctype="multipart/form-data">
  <label for="review">
    <input type="text" name="review" id="review">
  </label>
  <button type="submit">Send review</button>
</form>
</body>
</html>