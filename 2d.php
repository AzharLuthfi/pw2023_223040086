<?php
$amount = 5;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>tugas 2d</title>
  <style>
    .kotak {
      width: 48px;
      aspect-ratio: 1;
      text-align: center;
      line-height: 48px;
      border: 1px solid black;
    }

    .flex {
      display: flex;
    }

    .white {
      background-color: white;
    }

    .black {
      background-color: black;
    }
  </style>
</head>

<body>
  <?php
  for ($i = 0; $i < $amount; $i++) {
    echo "<div class=\"flex\">";
    for ($j = 0; $j < $amount; $j++) {
      echo ($j + $i) % 2 == 0 ? "<div class=\"kotak white\"></div>" : "<div class=\"kotak black\"></div>";
    }
    echo "</div>";
  }
  ?>
</body>

</html>