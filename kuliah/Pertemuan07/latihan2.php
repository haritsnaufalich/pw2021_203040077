<?php 

/*
Harits Naufal Ichsan
203040077
https://github.com/haritsnaufalich/pw2021_203040077
Pertemuan 7 - 19 Maret 2021
Mempelajari GET & POST PHP
*/

// Cek Apakah Tidak Ada Data di $_GET
if( !isset($_GET["nama"]) || !isset($_GET["nrp"]) || !isset($_GET["email"]) || !isset($_GET["jurusan"]) || !isset($_GET["gambar"])) {
    header("Location: latihan1.php");
    exit;
}
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
    <ul>
        <li><img src="img/<?= $_GET["gambar"]; ?>" alt=""></li>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["nrp"]; ?></li>
        <li><?= $_GET["email"]; ?></li>
        <li><?= $_GET["jurusan"]; ?></li>
    </ul>

    <a href="latihan1.php">Kembali ke daftar Mahasiswa</a>  
</body>
</html>