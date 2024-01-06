<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
require 'functions.php';
// ambil  data di url
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

// check apakah tombol submit sudah pernah di klik
if (isset($_POST["submit"])) {
    // check apakah data berhasi diubah atau tidak
    if (perbarui($_POST) > 0) {
        echo "
        <script>
            alert('Data Berhasil di Perbarui!')
            document.location.href ='index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data Gagal di Perbarui!')
            document.location.href ='index.php';
        </script>
        ";
    }
}

?>

<body>
    <h1>Perbarui Data Mahasiswa</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]; ?>">

        <ul>
            <li>
                <label for="nama">Nama Lengkap :</label>
                <input type="text" name="nama" id="nama" required autocomplete="off" value="<?= $mhs["nama"]; ?>">
            </li>
            <li>
                <label for="nim">NIM :</label>
                <input type="text" name="nim" id="nim" autocomplete="off" value="<?= $mhs["nim"]; ?>">
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email" autocomplete="off" value="<?= $mhs["email"]; ?>">
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan" autocomplete="off" value="<?= $mhs["jurusan"]; ?>">
            </li>
            <li>
                <label for="gambar">Foto Mahasiswa:</label><br>
                <img src="img/<?= $mhs['gambar']; ?>" alt="Foto-Mahasiswa" width="50"><br>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Perbarui!</button>
            </li>
        </ul>
    </form>
</body>