<?php
require 'functions.php';

$karyawan = query("SELECT * FROM karyawan");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Karyawan</title>
</head>
<body>
    <h3>Daftar Karyawan</h3>
    <a href="tambah.php">Tambah Data Karyawan</a>
    <br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>NIK</th>
            <th>Detail</th>
        </tr>
        <?php $i=0 ?>
        <?php foreach($karyawan as $k) :?>
        <tr>
            <td>1</td>
            <td>
                <img src="../tubes/img/<?= $k['gambar'] ?>" width="50" alt="">
            </td>
            <td><?= $k['nama'] ?></td>
            <td><?= $k['nik'] ?></td>
            <td><a href="detail.php?id=<?= $k['id']?>">Detail</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
