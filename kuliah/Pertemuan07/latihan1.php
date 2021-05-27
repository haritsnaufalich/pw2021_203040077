<?php 

/*
Harits Naufal Ichsan
203040077
https://github.com/haritsnaufalich/pw2021_203040077
Pertemuan 7 - 19 Maret 2021
Mempelajari GET & POST PHP
*/

// $_GET
// $_GET["nama"] = "Harits Naufal";
// $_GET["nrp"] = "203040077";
// var_dump($_GET);

$mahasiswa = [
    [
        "nama"    => "Harits Naufal",
        "nrp"     => "203040077",
        "email"   => "haritsnaufalichs11@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar"  => "1.jpg"
    ],
    [
        "nama"    => "Harits Naufal Ichsan",
        "nrp"     => "203040069",
        "email"   => "haritsnaufalich@outlook.com",
        "jurusan" => "Teknik Informatika",
        "gambar"  => "1.jpg"
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <ul>
    <?php foreach ( $mahasiswa as $mhs ) : ?>
    <li><a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></li></a>
    <?php endforeach; ?>
    </ul>

</body>
</html>