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


?>