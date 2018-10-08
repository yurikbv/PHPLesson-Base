<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    table {
      display: inline-block;
      border-collapse: collapse;
    }
    th {
      background: #ccc;
      text-align: center;
    }
    td, th {
      border: 1px solid #800;
      padding: 4px;
    }
    thead{
      text-align: center;
    }
  </style>
</head>
<body>
<table>
  <thead>
  <tr>
    <td colspan="3">AND</td>
  </tr>
  </thead>
  <tr>
    <th>a</th>
    <th>b</th>
    <th>result</th>
  </tr>
<?php
  include __DIR__.'/functions.php';
  $zero = 0;
  $one = 1;
  echo solveTask($zero,$zero,'and');
  echo solveTask($one,$zero,'and');
  echo solveTask($zero,$one,'and');
  echo solveTask($one,$one,'and');
?>
</table>
<table>
  <thead>
  <tr>
    <td colspan="3">OR</td>
  </tr>
  </thead>
  <tr>
    <th>a</th>
    <th>b</th>
    <th>result</th>
  </tr>
  <?php
  echo solveTask($zero,$zero,'or');
  echo solveTask($one,$zero,'or');
  echo solveTask($zero,$one,'or');
  echo solveTask($one,$one,'or');
  ?>
</table>
<table>
  <thead>
  <tr>
    <td colspan="3">XOR</td>
  </tr>
  </thead>
  <tr>
    <th>a</th>
    <th>b</th>
    <th>result</th>
  </tr>
  <?php
  echo solveTask($zero,$zero,'xor');
  echo solveTask($one,$zero,'xor');
  echo solveTask($zero,$one,'xor');
  echo solveTask($one,$one,'xor');
  ?>
</table>
</body>
</html>