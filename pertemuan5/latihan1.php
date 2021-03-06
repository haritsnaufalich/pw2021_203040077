<?php 

/*
Harits Naufal Ichsan
203040077
https://github.com/haritsnaufalich/pw2021_203040077
Pertemuan 5 - 5 Maret 2021
Mempelajari Array PHP
*/

/*
Array
Variabel yang dapat memiliki banyak nilai
Elemen pada array boleh memeliki ipe data yang berbeda
Pasangan antara key dan value
Key-nya adalah index, yang dimulai dari 0
*/

/*
Membuat Array
Cara lama
*/

$hari = array("Senin", "Selasa", "Rabu");

/*
Cara baru
*/

$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "Tulisan", false];

/*
Menampilkan array
var_dump() atau print_r
*/

// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

/*
Menampilkan 1 elemen pada array
*/

// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];

/*
Menambahkan elemen baru pada array
*/

var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";
echo "<br>";
var_dump($hari);

?>