<?php 
/*
Harits Naufal Ichsan
203040077
https://github.com/haritsnaufalich/pw2021_203040077/tree/master/praktikum/pertemuan3
Jum'at 10.00 - 11.00
*/

$player = [
    "Juventus" => "Cristiano Ronaldo",
    "Barcelona" => "Lionel Messi",
    "Real Madrid" => "Luca Modric",
    "Liverpool" => "Mohammad Salah",
    "Paris Saint Germain" => "Neymar Jr",
    "Liverpool" => "Sadio Mane",
    "AC Milan" => "Zlatan Ibrahimovic",
];
asort($player);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3c</title>
</head>
<style>
    *{
        font-size: 16px;
        font-family: Arial, Helvetica, sans-serif;
    }
    table tr td b {
        padding-right: 20px;
    }
    table tr td {
        padding-bottom: 8px;
    }
</style>
<body>
    <h4>Daftar pemain bola terkenal dan clubnya</h4>
    <table>
        <?php foreach($player as $tim => $orang) : ?>
            <tr>
                <td><b><?= $orang; ?></b></td>
                <td>:</td>
                <td><?= $tim; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>