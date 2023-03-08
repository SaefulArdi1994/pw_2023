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
    // jika data hasilnya hanya 1
    if (mysqli_num_rows($result) ==1 ) {
        return mysqli_fetch_assoc($result);
    }

    // jika semua data
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}


?>