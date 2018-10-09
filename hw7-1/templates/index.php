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
<?php foreach ($this->data['guestbook']->getRecords() as $record) {?>
  <article style="border: 1px dashed gray ; margin-top: 15px; padding: 10px">
    <?php echo $record->getMessage() ?>
  </article>
<?php } ?>
<form action="form.php" method="post">
  <textarea name="message" title="Write your message"></textarea>
  <button type="submit">Send</button>
</form>
</body>
</html>