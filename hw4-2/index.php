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
<h1>Hello PHP</h1>

<section class="images">
  <?php
    $images = scandir(__DIR__.'/img');
    foreach ($images as $image){
      $extension = pathinfo($image)['extension'];
      if($extension == 'gif' || $extension == 'jpeg' || 'jpg' == $extension || 'png' == $extension){
        echo '<img src="img/' .$image. '" alt="image" class="image">';
      }
    }
  ?>
</section>
<form action="/hw4-2/upload.php" method="post" enctype="multipart/form-data" class="form-upload">
  <input type="file" name="picture[]" multiple>
  <button type="submit">Send</button>
</form>

</body>
</html>