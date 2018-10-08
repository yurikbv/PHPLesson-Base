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
<form action="index.php" method="get">
  <label for="first_number">Enter first number
    <input type="number" name="first_number" id="first_number" required placeholder="<?php echo $_GET['first_number'] ?? null; ?>">
  </label>
  <label for="second_number">Enter second number
    <input type="number" name="second_number" id="second_number" required placeholder="<?php echo $_GET['second_number'] ?? null; ?>">
  </label>
  <label for="operator">Selected action
    <select name="operator" id="operator">
      <option value="+">+</option>
      <option value="-">-</option>
      <option value="*">*</option>
      <option value="/">/</option>
      <option value="**">**</option>
    </select>
  </label>
  <button type="submit">=</button>
    <?php
      include_once __DIR__.'/functions.php';
      if($_GET){
        ?>
  <div class="result">Result:
    <?php
      $first_number = (int)$_GET['first_number'];
      $second_number = (int)$_GET['second_number'];
      $operator = $_GET['operator'];
      echo $first_number.' '.$operator.' '.$second_number.' = '.solveTask($first_number,$second_number,$operator);
    ?>
  </div>
    <?php
      }
    ?>

</form>
</body>
</html>