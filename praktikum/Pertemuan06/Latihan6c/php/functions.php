<?php

function koneksi() {
    $conn = mysqli_connect("localhost", "pw20777", "#Akun#203040077#");
    mysqli_select_db($conn, "pw20077_tubes_203040077");

    return $conn;
}

function query($sql) {
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function addData($data) {
    $conn = koneksi();

    $itemsIMG   = htmlspecialchars($data['itemsIMG']);
    $itemsName  = htmlspecialchars($data['itemsName']);
    $itemsColor = htmlspecialchars($data['itemsColor']);
    $itemsPrice = htmlspecialchars($data['itemsPrice']);
    $itemsStock = htmlspecialchars($data['itemsStock']);

    $query = "INSERT INTO converse VALUES ('', '$itemsName', '$itemsColor', '$itemsPrice', '$itemsStock', '$itemsIMG')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function deleteData($id) {
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM converse WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function editData($data) {
    $conn = koneksi();

    $id = htmlspecialchars($data['id']);
    $itemsIMG = htmlspecialchars($data['itemsIMG']);
    $itemsName = htmlspecialchars($data['itemsName']);
    $itemsColor = htmlspecialchars($data['itemsColor']);
    $itemsPrice = htmlspecialchars($data['itemsPrice']);
    $itemsStock = htmlspecialchars($data['itemsStock']);

    $query = "UPDATE converse SET itemsName = '$itemsName', itemsColor = '$itemsColor', itemsPrice = '$itemsPrice', itemsStock = '$itemsStock', itemsIMG = '$itemsIMG' WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function signup($data) {
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
    if(mysqli_fetch_assoc($result)) {
        echo "
            <script>
                alert('Username Already Exists');
            </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    $query_add = "INSERT INTO users VALUES('', '', '$username', '$password')";
    mysqli_query($conn, $query_add);

    return mysqli_affected_rows($conn);
}

?>
