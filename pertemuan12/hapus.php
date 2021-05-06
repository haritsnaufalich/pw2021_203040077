<?php

/*
Harits Naufal Ichsan
203040077
https://github.com/haritsnaufalich/pw2021_203040077
Pertemuan 12 - 7 Mei 2021
*/

session_start();

if(!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

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