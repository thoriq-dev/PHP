<?php

$produk = [
    [
        "produk" => "Bunga Bang Cover Blue",
        "kode" => "BB01",
        "harga" => 50000,
        "stok" => "tersedia",
        "gambar" => "../img/bunga_bang/bunga_b01_790.jpg"
    ],
    [
        "produk" => "Bunga Bang Cover Purple ",
        "kode" => "BB02",
        "harga" => 55000,
        "stok" => "tersedia",
        "gambar" => "../img/bunga_bang/bunga_b02_300.jpg"
    ],
    [
        "produk" => "Bunga Bang Cover Red ",
        "kode" => "BB03",
        "harga" => 60000,
        "stok" => "tersedia",
        "gambar" => "../img/bunga_bang/bunga_b03_300.jpg"
    ],
    [
        "produk" => "Bunga Bang Cover Aqua",
        "kode" => "BB04",
        "harga" => 65000,
        "stok" => "tersedia",
        "gambar" => "../img/bunga_bang/bunga_b04_425.jpg"
    ],
    [
        "produk" => "Bunga Bang Cover Grey",
        "kode" => "BB05",
        "harga" => 70000,
        "stok" => "tersedia",
        "gambar" => "../img/bunga_bang/bunga_b05_400.jpg"
    ],
    [
        "produk" => "Bunga Bang Golden ",
        "kode" => "BB06",
        "harga" => 75000,
        "stok" => "tersedia",
        "gambar" => "../img/bunga_bang/bunga_b06_400.jpg"
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk My Little Things</title>
</head>

<body>
    <h1>Daftar Produk | My Little Things</h1>
    <ul>
        <?php foreach ($produk as $pr) : ?>
            <li>
                <a href="tugas2.php?produk=<?= $pr["produk"]; ?>&kode=<?= $pr["kode"]; ?>&harga=<?= $pr["harga"]; ?>&stok=<?= $pr["stok"]; ?>&gambar=<?= $pr["gambar"]; ?>"><?= $pr["produk"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>