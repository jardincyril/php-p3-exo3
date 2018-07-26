<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>exo3</title>
</head>
<body>
  <p>
  <?php
  $count= 100;
  $number = 1;
  while ($count >= 10) {
    --$count;
    echo $count * $number;
  }
  ?>
</p>
</body>
</html>
