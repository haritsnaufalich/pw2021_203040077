<?php

/*
Harits Naufal Ichsan
203040077
https://github.com/haritsnaufalich/pw2021_203040077
Pertemuan 11 - 30 April 2021
*/

function koneksi() {
    return mysqli_connect('localhost', 'pw20077', '#Akun#203040077#', 'pw20077_pw_203040077');
}

function query($query) {
    $conn   = koneksi();
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    }
    $rows   = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    $conn  = koneksi();

    $nama     = htmlspecialchars($data['nama']);
    $nrp      = htmlspecialchars($data['nrp']);
    $email    = htmlspecialchars($data['email']);
    $jurusan  = htmlspecialchars($data['jurusan']);
    $gambar   = htmlspecialchars($data['gambar']);

    $query = "INSERT INTO mahasiswa VALUES
              (null, '$nama', '$nrp', '$email', '$jurusan', '$gambar')";
    mysqli_query($conn, $query);

    echo mysqli_errno($conn);
    return mysqli_affected_rows($conn);
}

function hapus($id) {
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id") or die(mysqli_errno($conn));
    return mysqli_affected_rows($conn);
}

function ubah($data) {
    $conn  = koneksi();

    $id       = $data['id'];
    $nama     = htmlspecialchars($data['nama']);
    $nrp      = htmlspecialchars($data['nrp']);
    $email    = htmlspecialchars($data['email']);
    $jurusan  = htmlspecialchars($data['jurusan']);
    $gambar   = htmlspecialchars($data['gambar']);

    $query = "UPDATE mahasiswa SET
            nama = '$nama',
            nrp = '$nrp',
            email = '$email',
            jurusan = '$jurusan',
            gambar = '$gambar'
            WHERE id = $id";
    mysqli_query($conn, $query);

    echo mysqli_errno($conn);
    return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $conn = koneksi();
    $query = "SELECT * FROM mahasiswa WHERE nama LIKE '%$keyword%' OR nrp LIKE '%$keyword%'";
    $result = mysqli_query($conn, $query);

    $rows   = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

?>
