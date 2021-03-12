<?php 

/*
Harits Naufal Ichsan
203040077
https://github.com/haritsnaufalich/pw2021_203040077
Pertemuan 6 - 12 Maret 2021
Mempelajari Array Associative PHP
*/

?>

<?php 

// $mahasiswa = [
//     ["Harits Naufal", "203040077", "haritsnaufalichs11@gmail.com", "Teknik Informatika"],
//     ["Harits Naufal", "203040077", "haritsnaufalichs11@gmail.com", "Teknik Informatika"],
// ];

/*
Array Associative
definisinya sama seerti array numerik
key-nya adalah strin yang kita buat sendiri
*/

$mahasiswa = [
    [
        "nama"    => "Harits Naufal",
        "nrp"     => "203040077",
        "email"   => "haritsnaufalichs11@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar"  => "1.jpg"
    ],
    [
        "nama"    => "Harits Naufal",
        "nrp"     => "203040077",
        "email"   => "haritsnaufalichs11@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar"  => "1.jpg"
    ],
];

//echo $mahasiswa[1]["tugas"];

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
    <?php foreach ( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
        </li>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NRP : <?= $mhs["nrp"]; ?></li>
        <li>Email : <?= $mhs["email"]; ?></li>
        <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>