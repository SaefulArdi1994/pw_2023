<?php 

function koneksi()
{
    // Koneksi ke DB
    return mysqli_connect('localhost', 'root', '', 'pw_2023');
}

function query($query)
{
    // koneksi
    $conn = koneksi();
    // Query
    $result = mysqli_query($conn, $query);

    // Ubah data ke dalam array
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
    $nrp = htmlspecialchars($data['nrp']);
    $email = htmlspecialchars($data['email']);
    $jurusan = htmlspecialchars($data['jurusan']);
    $gambar = htmlspecialchars($data['gambar']);

    $query = "INSERT INTO mahasiswa VALUES 
                (null, '$nama', '$nrp', '$email', '$jurusan', '$gambar')
            ";
    mysqli_query($conn, $query);
    // menginformasikan jika ada eror dari koneksi
    echo mysqli_error($conn);
    // memberitau ke mysql jika ada data yang berubah(crud)
    return mysqli_affected_rows($conn);
}

?>