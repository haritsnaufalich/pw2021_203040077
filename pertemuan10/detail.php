<?php

/*
Harits Naufal Ichsan
203040077
https://github.com/haritsnaufalich/pw2021_203040077
Pertemuan 10 - 23 April 2021
*/

require 'functions.php';
// Ambil ID
$id  = $_GET['id'];
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <h3>Detail Mahasiswa</h3>
    <ul>
        <li><img src="img/<?= $mhs['gambar']; ?>" alt=""></li>
        <li>NRP : <?= $mhs['nrp']; ?></li>
        <li>Nama : <?= $mhs['nama']; ?></li>
        <li>Email : <?= $mhs['email']; ?></li>
        <li>Jurusan : <?= $mhs['jurusan']; ?></li>
        <li><a href="">Ubah</a> | <a href="">Hapus</a></li>
        <li><a href="latihan3.php">Kembali</a></li>
    </ul>
</body>
</html>