<?php
require 'functions.php';
//  Tampung ke dalam variabel mahasiswa
$mahasiswa = query("SELECT * FROM mahasiswa");
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
            <th>Aksi</th>
        </tr>
        <?php $i =1; ?>
        <?php foreach ($mahasiswa as $mhs) : ?>
        <tr>
            <td><?php echo $i++ ; ?></td>
            <td><img src="../img/<?php echo $mhs['gambar']?>" width="50" alt=""></td>
            <td><?php echo $mhs['nama'] ?></td>
            <td>
                <a href="detail.php?id=<?= $mhs['id']; ?>">Detail</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>