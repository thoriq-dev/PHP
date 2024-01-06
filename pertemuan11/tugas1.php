<?php
// Menghubungkan file tugas1 dengan file tugas1functions
require 'tugas1functions.php';
$mylittlethings = mengquery("SELECT * FROM mylittlethings");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin My Little Things</title>
</head>

<body>
    <h1>Daftar Produk My Little Things</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Foto Produk</th>
            <th>Kode Produk</th>
            <th>Nama</th>
            <th>Stok</th>
            <th>Harga</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($mylittlethings as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="">Perbarui Produk</a> |
                    <a href="">Hapus Produk</a>
                </td>
                <td><img src="bungabuket/<?= $row["gambar"]; ?>" alt="Gambar Produk"></td>
                <td><?= $row["kode"]; ?></td>
                <td><?= $row["produk"]; ?></td>
                <td><?= $row["stok"]; ?></td>
                <td>Rp. <?= $row["harga"]; ?></td>
            </tr>
            <?= $i++; ?>
        <?php endforeach; ?>
    </table>
</body>

</html>