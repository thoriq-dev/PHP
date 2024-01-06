<?php

function rupiah($angka)
{
    $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
    return $hasil_rupiah;
}

$produk = [
    [
        "produk" => "Bunga Bang",
        "kode" => "BB01",
        "harga" => 50000,
        "stok" => "tersedia",
        "gambar" => "bunga_bang_img/bunga_b01_790.jpg"
    ],
    [
        "produk" => "Bunga Bang",
        "kode" => "BB02",
        "harga" => 55000,
        "stok" => "tersedia",
        "gambar" => "bunga_bang_img/bunga_b02_300.jpg"
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas | Array Assosiatif</title>
</head>

<body>
    <h1>Daftar List Produk My Little Things</h1>
    <?php foreach ($produk as $pr) : ?>
        <ul>
            <li>Gambar Produk:
                <img src="img/<?= $pr["gambar"]; ?>" alt="Gambar Produk">
            </li>
            <li>Nama Produk: <?= $pr["produk"]; ?></li>
            <li>Kode Produk: <?= $pr["kode"]; ?></li>
            <li>Harga: Rp <?= $pr["harga"]; ?></li>
            <li>Stok: <?= $pr["stok"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>