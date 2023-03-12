<?php
require 'functions.php';

// cek apakah tombol tambah sudah di tekan
if (isset($_POST['tambah'])) {
    // var_dump($_POST);
    if(tambah($_POST) > 0) {
        echo "<script>
                alert('Data berhasil ditambah!');
                document.location.href = 'latihan3.php';
              </script>";
    } else {
        echo "Data gagal ditambahkan!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h3>Form Tambah Data Mahasiswa</h3>
    <form action="" method="Post">
        <ul>
            <li>
                <label for="">Nama :</label>
                <input type="text" name="nama" autofocus required>
            </li>
            <li>
                <label for="">NRP :</label>
                <input type="text" name="nrp" required>
            </li>
            <li>
                <label for="">Email :</label>
                <input type="text" name="email" required>
            </li>
            <li>
                <label for="">Jurusan :</label>
                <input type="text" name="jurusan" required>
            </li>
            <li>
                <label for="">Gambar</label>
                <input type="text" name="gambar">
            </li>
            <li>
                <button type="submit" name="tambah">Tambah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>