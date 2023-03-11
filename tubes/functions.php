<?php
function koneksi() {
    //koneksi ke database
    return mysqli_connect('localhost', 'root', '', 'db_karyawan');
}

function query($query) {
    //koneksi
    $conn = koneksi();

    // query
    $result = mysqli_query($conn, $query);

    // mengubah data kedalam array
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}
?>