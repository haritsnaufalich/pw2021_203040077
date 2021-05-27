<?php 
/*
Harits Naufal Ichsan
203040077
https://github.com/haritsnaufalich/pw2021_203040077/tree/master/praktikum/pertemuan3
Jum'at 10.00 - 11.00
*/

$player = [
    "Mohammad Salah",
    "Cristiano Ronaldo",
    "Lionel Messi",
    "Zlatan Ibrahimovic",
    "Neymar Jr"
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3b</title>
</head>
<body>
    <h3>Daftar pemain bola terkenal</h3>
    <ol>
        <?php foreach($player as $orang) : ?>
            <li><?= $orang ?></li>
        <?php endforeach; ?>
    </ol>

    <?php 
    array_push($player, "Luca Modric", "Sadio Mane");
    sort($player);
    ?>

    <h3>Daftar pemain bola terkenal baru</h3>
    <ol>
        <?php foreach($player as $orangBaru) : ?>
            <li><?= $orangBaru ?></li>
        <?php endforeach; ?>
    </ol>
</body>
</html>