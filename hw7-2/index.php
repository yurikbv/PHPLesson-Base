<?php
  include_once __DIR__.'/functions.php';
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Photo Gallery</title>
  <link href="style.css" rel="stylesheet">
</head>
<body>
<h1>Hello<?php echo ' '. getCurrentUser()?>.Welcome to Your Photo Gallery</h1>
<?php if (!getCurrentUser()){?>
<a href="login.php">Sign In</a><?php } ?>
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
<?php
  include_once __DIR__.'/functions.php';
  if(existsUser(getCurrentUser())){
?>
  <form action="upload.php" method="post" enctype="multipart/form-data" class="form__upload">
    <input type="file" name="picture[]" multiple>
    <button type="submit">Send</button>
  </form>
<?php } ?>
</body>
</html>