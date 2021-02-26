<?php 

/*
Harits Naufal Ichsan
203040077
https://github.com/haritsnaufalich/pw2021_203040077
Pertemuan 4 - 26 Februari 2021
Mempelajari Function PHP
*/

?>

<?php

/*
Date
Untuk menampilkan tanggal dengan format tertentu
echo date("l, d-M-Y");
*/

/*
Time
UNIX Timestamp / EPOCH Time
Detik yang sudah berlalu sejak 1 Januari 1970
echo time();
echo date("l, d-M-Y", time()-60*60*24*100);
*/

/*
mktime
Membuat detik sendiri
mktime(0,0,0,0,0,0)
Jam, Menit, Detik, Bulan, Tanggal, Tahun
echo date("l", mktime(0, 0, 0, 5, 11, 2001));
*/

/*
strtotime
echo date("l", strtotime("11 May 2001"));
*/



?>