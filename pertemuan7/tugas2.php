<?php
// check apakah tidak ada data di $_GET
if (
    !isset($_GET["produk"]) ||
    !isset($_GET["kode"]) ||
    !isset($_GET["harga"]) ||
    !isset($_GET["stok"]) ||
    !isset($_GET["gambar"])
) {
    // redirect atau mengembalikkan dengan paksa
    header("Location: tugas1.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk | Bunga Bang</title>
</head>

<body>
    <h1>Pilihan Bagus Kamu Memilih, <?= $_GET["produk"]; ?> </h1>
    <ul>
        <li><img src="img/<?= $_GET["gambar"]; ?>" alt="Gambar Produk"></li>
        <li><?= $_GET["produk"]; ?></li>
        <li><?= $_GET["kode"]; ?></li>
        <li><?= $_GET["harga"]; ?></li>
        <li><?= $_GET["stok"]; ?></li>
    </ul>
    <a href="tugas1.php">Kembali | Daftar Produk </a>
</body>

</html>