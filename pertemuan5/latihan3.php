<?php 

/*
Harits Naufal Ichsan
203040077
https://github.com/haritsnaufalich/pw2021_203040077
Pertemuan 5 - 5 Maret 2021
Mempelajari Array PHP
*/

$mahasiswa = [
    ["Harits Naufal", 203040077, "Teknik Informatika", "haritsnaufalichs11@gmail.com"],
    ["Harits Naufal", 203040077, "Teknik Informatika", "haritsnaufalichs11@gmail.com"],
    ["Harits Naufal", 203040077, "Teknik Informatika", "haritsnaufalichs11@gmail.com"],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>


    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <!-- <?php foreach ( $mahasiswa as $mhs ) : ?>
        <li><?= $mhs; ?></li>
        <?php endforeach; ?> -->

        <li>Nama : <?= $mhs[0]; ?></li>
        <li>NRP : <?= $mhs[1]; ?></li>
        <li>Jurusan : <?= $mhs[2]; ?></li>
        <li>Email : <?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>


</body>
</html>