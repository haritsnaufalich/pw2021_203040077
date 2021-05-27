<?php

/*
Harits Naufal Ichsan
203040077
https://github.com/haritsnaufalich/pw2021_203040077
Pertemuan 7 - 19 Maret 2021
Mempelajari GET & POST PHP
*/

// Cek apakaha tombol submit sudah di tekan atau belum
// Cek username & password
// Jika benar, redirect ke halaman admin
// Jika salah tampilkan pesan kesalahan

if( isset($_POST["submit"]) ) {
    if ( $_POST["username"] == "admin" && $_POST["password"] == "123" ) {
        header("Location: admin.php");
        exit;
    } else {
        $error = true;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login Admin</h1>
    <?php if( isset($error) ) : ?>
    <p style="color: red; font-style:italic">Username/Password salah!</p>
    <?php endif; ?>
    <ul>
        <form action="login.php" method="POST">
            <li>
                <label for="username">Username : </label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password : </label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="submit">Login</button>
            </li>
        </form>
    </ul>
</body>
</html>