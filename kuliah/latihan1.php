<?php
// Koneksi ke DB
$conn = mysqli_connect('localhost', 'root', 'root', 'pw_2023');

// Query
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// Ubah data ke dalam array
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
    echo $row['nama'];
}

//  Tampung ke dalam variabel mahasiswa
$mahasiswa = $rows;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Daftar Mahasiswa</h3>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>NIK</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
        <tr>
            <td>1</td>
            <td><img src="img/img-01.jpg" width="50" alt=""></td>
            <td>Saeful Ardi</td>
            <td>001</td>
            <td>saefulardi@gmail.com</td>
            <td>Teknik Informatika</td>
            <td>
                <a href="">Edit</a> | <a href="">Hapus</a>
            </td>
        </tr>
    </table>
</body>
</html>