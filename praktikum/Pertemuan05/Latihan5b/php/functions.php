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

?>
