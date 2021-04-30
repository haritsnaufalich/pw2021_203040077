<?php

/*
Harits Naufal Ichsan
203040077
https://github.com/haritsnaufalich/pw2021_203040077
Pertemuan 11 - 30 April 2021
*/

require 'functions.php';

// Jika Tidak ada ID
if(!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}

// Ambil ID
$id = $_GET['id'];

if(hapus($id) > 0) {
    echo "<script>
            alert('Data Berhasil Dihapus!');
            document.location.href = 'index.php';
                </script>";
    } else {
        echo "Data Gagal Dihapus!";
}

?>