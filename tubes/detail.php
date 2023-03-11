<?php

require 'functions.php';

$id = $_GET['id'];

$karyawan = query("SELECT * FROM karyawan WHERE id = $id");
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
    <!-- <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>NIK</th>
            <th>Email</th>
            <th>Bagian</th>
            <th>Departemen</th>
            <th>Aksi</th>
        </tr>
        <tr>
            <td>1</td>
            <td>
                <img src="../tubes/img/img-01.jpg" width="50" alt="">
            </td>
            <td>Saeful Ardi</td>
            <td>302300001</td>
            <td>saefulardi@gmail.com</td>
            <td>Production Planning</td>
            <td>Produksi</td>
            <td><a href="">Edit</a> | <a href="">Hapus</a></td>
        </tr>
    </table> -->

    <?php foreach($karyawan as $k) :?>
    <h3>Detail Karyawan</h3>
    <ul>
        <li><img src="../tubes/img/<?= $k['gambar']?>" width="100" alt=""></li>
        <li>Nama : <?= $k['nama']?></li>
        <li>NIK : <?= $k['nik']?></li>
        <li>Email : <?= $k['email']?></li>
        <li>Bagian : <?= $k['bagian']?></li>
        <li>Departemen : <?= $k['departemen']?></li>
    </ul>
    <?php endforeach ; ?>
    <a href="index.php">Kembali</a>
</body>
</html>

