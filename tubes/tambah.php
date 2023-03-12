<?php 

require 'functions.php';

if (isset($_POST['tambah'])) {
    if(tambah($_POST) > 0 ) {
        echo "  <script>
                alert('Data berhasil ditambah!');
                document.location.href = 'index.php';
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
    <title>Form Tambah Data Karyawan</title>
</head>
<body>
    <h3>Form Tambah Data Karyawan</h3>
    <form action="" method="post">
        <ul>
            <li>
                <label>Nama :</label>
                <input type="text" name="nama" autofocus required>
            </li>
            <li>
                <label>NIK :</label>
                <input type="text" name="nik" required>
            </li>
            <li>
                <label>Email :</label>
                <input type="email" name="email"  required>
            </li>
            <li>
                <label>Bagian :</label>
                <input type="text" name="bagian"  required>
            </li>
            <li>
                <label>Departemen :</label>
                <input type="text" name="departemen"  required>
            </li>
            <li>
                <label>Gambar :</label>
                <input type="text" name="gambar"  required>
            </li>
            <li>
                <button type="submit" name="tambah">Tambah</button>
            </li>
        </ul>
    </form>
</body>
</html>