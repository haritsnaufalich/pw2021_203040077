<?php 
/*
Harits Naufal Ichsan
203040077
https://github.com/haritsnaufalich/pw2021_203040077/tree/master/praktikum/pertemuan3
Jum'at 10.00 - 11.00
*/

$player = [
    [
        "nama" => "Cristiano Ronaldo",
        "club" => "Juventus",
        "caps" => 100,
        "goals" => 76,
        "assist" => 30
    ],
    [
        "nama" => "Lionel Messi",
        "club" => "Barcelona",
        "caps" => 120,
        "goals" => 80,
        "assist" => 12
    ],
    [
        "nama" => "Luca Modric",
        "club" => "Real Madrid",
        "caps" => 87,
        "goals" => 12,
        "assist" => 48
    ],
    [
        "nama" => "Mohammad Salah",
        "club" => "Liverpool",
        "caps" => 90,
        "goals" => 103,
        "assist" => 8
    ],
    [
        "nama" => "Neymar Jr",
        "club" => "Paris Saint Germain",
        "caps" => 109,
        "goals" => 56,
        "assist" => 15
    ],
    [
        "nama" => "Sadio Mane",
        "club" => "Liverpool",
        "caps" => 63,
        "goals" => 30,
        "assist" => 70
    ],
    [
        "nama" => "Zlatan Ibrahimovic",
        "club" => "Ac Milan",
        "caps" => 100,
        "goals" => 10,
        "assist" => 12
    ]
];

$totalMain = 0;
$totalGol = 0;
$totalAssist = 0;
for($i=0; $i<count($player); $i++){
    $totalMain += $player[$i]["caps"];
    $totalGol += $player[$i]["goals"];
    $totalAssist += $player[$i]["assist"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3d</title>
    <style>
        table, th, td{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
    </style>
</head>
<body>

    <table>
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>CLUB</th>
            <th>MAIN</th>
            <th>GOL</th>
            <th>ASSIST</th>
        </tr>
        <?php foreach ($player as $urutan => $pemain) : ?>
            <tr>
                <td><?= $urutan+1; ?></td>
                <td><?= $pemain["nama"]; ?></td>
                <td><?= $pemain["club"]; ?></td>
                <td><?= $pemain["caps"]; ?></td>
                <td><?= $pemain["goals"]; ?></td>
                <td><?= $pemain["assist"]; ?></td>
            </tr>
        <?php endforeach; ?>
        <tr style="font-weight:bold">
            <td>#</td>
            <td colspan="2" style="text-align: center;">Jumlah</td>
            <td><?= $totalMain; ?></td>
            <td><?= $totalGol; ?></td>
            <td><?= $totalAssist; ?></td>
        </tr>
    </table>
</body>
</html>