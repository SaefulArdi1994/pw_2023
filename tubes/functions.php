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

function tambah($data)
{
    $conn = koneksi();

    $nama = htmlspecialchars($data['nama']);
    $nik = htmlspecialchars($data['nik']);
    $email = htmlspecialchars($data['email']);
    $bagian = htmlspecialchars($data['bagian']);
    $departemen = htmlspecialchars($data['departemen']);
    $gambar = htmlspecialchars($data['gambar']);

    $query  =   "INSERT INTO karyawan VALUES
                    (null, '$nama', '$nik', '$email', '$bagian', '$departemen', '$gambar')
                ";
    mysqli_query($conn, $query);
    // menginformasikan jika ada eror pada koneksi
    echo mysqli_error($conn);
    // menginformaikan ke sql jika adad data yang berubah (crud)
    return mysqli_affected_rows($conn);
}
?>