<?php

require 'functions.php';

// ambil id dari URL
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$mahasiswa = query("SELECT * FROM mahasiswa WHERE id = $id");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <h3>Detail Mahasiswa</h3>
    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <li><img src="../img/<?= $mhs['gambar']?>" width="100" alt=""></li>
        <li>NRP : <?= $mhs['nrp']?> </li>
        <li>Nama :<?= $mhs['nama']?></li>
        <li>Email : <?= $mhs['email']?></li>
        <li>Jurusan : <?= $mhs['jurusan']?></li>
        <li>Aksi : <a href="">Edit</a> | <a href="">Hapus</a> </li>
        <li><a href="latihan3.php">Kembali</a></li>
    </ul>
    <?php endforeach;?>
</body>
</html>