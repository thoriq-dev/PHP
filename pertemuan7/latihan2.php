<?php
// check apakah tidak ada data di $_GET
if (
    !isset($_GET["nama"]) ||
    !isset($_GET["nim"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["gambar"])
) {
    // redirect atau mengembalikkan dengan paksa
    header("Location: latihan1.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>

<body>
    <h1><?= $_GET["nama"]; ?></h1>
    <ul>
        <li><img src="img/<?= $_GET["gambar"]; ?>" alt="Gambar Mahasiswa"></li>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["nim"]; ?></li>
        <li><?= $_GET["email"]; ?></li>
        <li><?= $_GET["jurusan"]; ?></li>
    </ul>
    <a href="latihan1.php">Kembali | Daftar Mahasiswa</a>
</body>

</html>