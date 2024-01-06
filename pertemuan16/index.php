<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
// Menghubungkan file index dengan file functions
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

// tombol cari
if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin | Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa Universitas Esa Unggul</h1>
    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <a href="logout.php">Logout</a>
    <br><br>

    <form action="" method="post">

        <input type="text" name="keyword" size="30" autofocus placeholder="cari data ..." autocomplete="off">
        <button type="submit" name="cari">Cari </button>

    </form>

    <br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Foto Mahasiswa</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="perbarui.php?id=<?= $row["id"]; ?>">Perbarui</a> |
                    <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah data ingin dihapus?');">Hapus</a>
                </td>
                <td><img src="img/<?= $row["gambar"]; ?>" alt="foto-mahasiswa"></td>
                <td><?= $row["nim"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>

</html>