<?php
require 'functions.php';

$id = $_GET["id"];
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

if (isset($_POST["submit"])) {
    $nama = htmlspecialchars($_POST["nama"]);
    $nim = htmlspecialchars($_POST["nim"]);
    $email = htmlspecialchars($_POST["email"]);
    $jurusan = htmlspecialchars($_POST["jurusan"]);
    $gambar = htmlspecialchars($_POST["gambar"]);

    // Validasi data sebelum pembaruan
    if (empty($nama) || empty($nim) || empty($email) || empty($jurusan) || empty($gambar)) {
        echo "
        <script>
            alert('Mohon lengkapi semua field!');
            window.location.href = 'index.php';
        </script>";
        exit;
    }

    // Memperbarui data jika semua field terisi
    if (perbarui($_POST) > 0) {
        echo "
        <script>
            alert('Data berhasil diperbarui!');
            window.location.href = 'index.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Data gagal diperbarui!');
            window.location.href = 'index.php';
        </script>";
    }
}
?>

<body>
    <h1>Perbarui Data Mahasiswa</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
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
                <label for="gambar">Foto Mahasiswa:</label>
                <input type="text" name="gambar" id="gambar" autocomplete="off" value="<?= $mhs["gambar"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit">Perbarui!</button>
            </li>
        </ul>
    </form>
</body>