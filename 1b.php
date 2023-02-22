<?php 
$npm = "86";
$kali5 = $npm*5;
$dibagi2 = $kali5 / 2;
$ditambah75 = $dibagi2 + 75;
$dikurang20 = $ditambah75 - 20; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator PHP</title>
</head>
<body>

    <?php echo "Aku adalah angka"; ?> 
    <b><?php echo "$npm"; ?></b> <br>

    <?php echo "Jika aku dikali 5, maka aku akan menjadi"; ?> 
    <b><?php echo "$kali5"; ?></b> <br>
    
    <?php echo "Jika aku dibagi 2, maka aku akan menjadi"; ?> 
    <b><?php echo "$dibagi2"; ?></b> <br>

    <?php echo "Jika aku ditambah 75, maka aku akan menjadi"; ?> 
    <b><?php echo "$ditambah75"; ?></b> <br>

    <?php echo "Jika aku dikurang 20, maka aku akan menjadi"; ?> 
    <b><?php echo "$dikurang20"; ?></b> <br>
</body>
</html>