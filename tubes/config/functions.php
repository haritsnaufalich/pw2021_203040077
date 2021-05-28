<?php

function koneksi() {
    $conn = mysqli_connect("localhost", "pw20077", "#Akun#203040077#", "pw20077_tubes_203040077");
    return $conn;
}

function query($sql) {
    $conn   = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows   = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function addData($data) {
    $conn = koneksi();

    // $itemsIMG   = htmlspecialchars($data['itemsIMG']);
    $itemsName  = htmlspecialchars($data['itemsName']);
    $itemsColor = htmlspecialchars($data['itemsColor']);
    $itemsPrice = htmlspecialchars($data['itemsPrice']);
    $itemsStock = htmlspecialchars($data['itemsStock']);

    // Upload
    $img = upload();
    if(!$img) {
        return false;
    }

    $query = "INSERT INTO converse VALUES (NULL, '$itemsName', '$itemsColor', '$itemsPrice', '$itemsStock', '$img')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function upload() {
    $imgName  = $_FILES['itemsIMG']['name'];
    $imgSize  = $_FILES['itemsIMG']['size'];
    $imgError = $_FILES['itemsIMG']['error'];
    $imgTmp   = $_FILES['itemsIMG']['tmp_name'];

    // Check
    if($imgError === 4) {
        echo "  <script>
                    alert('Choose File First!')
                </script>";
        return false;
    }

    // Img Extensions
    $exImgValid = ['jpg', 'jpeg', 'png'];
    $exImg = explode('.', $imgName);
    $exImg = strtolower(end($exImg));
    if(!in_array($exImg, $exImgValid)) {
        echo "  <script>
                    alert('File not Valid!')
                </script>";
        return false;
    }

    // Size Check
    if($imgSize > 2000000) {
        echo "  <script>
                    alert('File Size Exceeds Limit')
                </script>";
        return false;
    }

    // Generate IMG Name
    $imgNewName = uniqid();
    $imgNewName .= '.';
    $imgNewName .= $exImg;

    // Upload
    move_uploaded_file($imgTmp, '../assets/img/' . $imgNewName);
    return $imgNewName;
}

function deleteData($id) {
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM converse WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function editData($data) {
    $conn = koneksi();

    $id         = htmlspecialchars($data['id']);
    // $itemsIMG   = htmlspecialchars($data['itemsIMG']);
    $itemsName  = htmlspecialchars($data['itemsName']);
    $itemsColor = htmlspecialchars($data['itemsColor']);
    $itemsPrice = htmlspecialchars($data['itemsPrice']);
    $itemsStock = htmlspecialchars($data['itemsStock']);
    $oldIMG     = htmlspecialchars($data['oldIMG']);

    // Cek Apakah User Pilih Gambar Baru atau Tidak
    if($_FILES['itemsIMG']['error'] === 4) {
        $itemsIMG = $oldIMG;
    } else {
        $itemsIMG = upload();
    }

    $query = "UPDATE converse SET itemsName = '$itemsName', itemsColor = '$itemsColor', itemsPrice = '$itemsPrice', itemsStock = '$itemsStock', itemsIMG = '$itemsIMG' WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function signup($data) {
    $conn = koneksi();

    $username  = strtolower(stripslashes($data['username']));
    $password  = mysqli_real_escape_string($conn, $data['password']);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);

    $user = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
    if (mysqli_fetch_assoc($user)) {
        echo "
            <script>
                alert('Username Already Exists');
            </script>";
        return false;
    }

    if ($password !== $password2) {
        echo "
            <script>
                alert('Confirmation Password Mismatch');
            </script>";
        return false;
    }
    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO users VALUES(NULL, '1', '$username', '$password')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

?>
