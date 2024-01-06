<?php
// Menguhungkan file tambah dengan file functions
require 'functions.php';

// Check apakah tombol submit pernah diklik atau tidak 
if (isset($_POST["submit"])) {

    // Check Apakah Data berhasil ditambahkan atau tidak 
    if (tambah($_POST) > 0) {
        echo "
        <script>
                alert('data berhasil ditambahkan!');
                document.location.href ='index.php';
        </script>
        ";
    } else {
        echo "
        <script>
                alert('data gagal ditambahkan!');
                document.location.href ='index.php';
        </script>
        ";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Tambah Data Mahasiswa</title>
</head>

<body>
    <h1>Tambahkan Data Mahasiswa</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama Lengkap :</label>
                <input type="text" name="nama" id="nama" required autocomplete="off">
            </li>
            <li>
                <label for="nim">NIM :</label>
                <input type="text" name="nim" id="nim" required autocomplete="off">
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email" required autocomplete="off">
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan" required autocomplete="off">
            </li>
            <li>
                <label for="gambar">Foto Mahasiswa </label>
                <input type="text" name="gambar" id="gambar" autocomplete="off">
            </li>
            <li>
                <button type="submit" name="submit">Tambahkan!</button>
            </li>
        </ul>
    </form>
</body>

</html>