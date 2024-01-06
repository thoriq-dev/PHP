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
    <style>
        .loader {
            width: 100px;
            position: absolute;
            top: 79px;
            left: 275px;
            z-index: -1;
            display: none;
        }

        @media print {

            .logout,
            .tambah,
            .form-cari,
            .aksi {
                display: none;
            }
        }
    </style>
    <script src="js/jquery-3.7.0.min.js"></script>
    <script src="js/script.js"></script>
</head>

<body>
    <h1>Daftar Mahasiswa Universitas Esa Unggul</h1>
    <a href="tambah.php" class="tambah">Tambah Data Mahasiswa</a> |
    <a href="logout.php" class="logout">Logout</a> | <a href="cetak.php">Cetak</a>
    <br><br>

    <form action="" method="post" class="form-cari">

        <input type="text" name="keyword" size="30" autofocus placeholder="Masukkan Keyword Data ..." autocomplete="off" id="keyword">
        <button type="submit" name="cari" id="tombol-cari">Cari </button>
        <img src="img/loading.gif" class="loader">

    </form>

    <br>

    <div id="container" class="container">

        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th class="aksi">Aksi</th>
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
                    <td class="aksi">
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
    </div>
</body>

</html>