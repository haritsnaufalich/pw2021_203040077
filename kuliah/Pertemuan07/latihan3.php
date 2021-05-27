<?php 

/*
Harits Naufal Ichsan
203040077
https://github.com/haritsnaufalich/pw2021_203040077
Pertemuan 7 - 19 Maret 2021
Mempelajari GET & POST PHP
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>

    <?php if( isset($_POST["submit"]) ) : ?>
    <h1>Halo, Selamat Datang <?= $_POST["nama"]; ?></h1>
    <?php endif; ?>

    <form action="" method="post">
        Masukkan Nama : 
        <input type="text" name="nama" id="">
        <br>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>