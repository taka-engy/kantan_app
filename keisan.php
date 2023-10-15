<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>わりかん</title>
</head>
<body>
<?php
  $data1 = $_POST['data1'];
  $data2 = $_POST['data2'];
  $ans = $data1 / $data2 ;
  echo "$data1 / $data2 = $ans";
?>
</body>
</html>