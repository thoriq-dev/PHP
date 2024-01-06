<!-- Numeric Array -->
<!-- Latihan menggunakan kasus yang lebih nyata -->
<!-- Jika menggunakan Teknik penulisan seperti ini, urutan penulisannya tidak boleh salah. -->
<!-- Array ini disebut dengan Array Numerik -->
<!-- Array Numerik adalah yang indeks-nya Angka -->
<!-- Untuk menghindari kesalahan penulisan array carannya adalah mengubah menjadi array assosiative -->

<?php
$mahasiswa = [
    ["Thoriq Nurul Fikri", 20190801054, "Teknik Informatika", "thoriqthoriqnurulfikri4@student.esaunggul.ac.id"],
    ["Idham Kholid", 20190801001, "Sistem Informatika", "idhamkholid@student.esaunggul.ac.id"],
    ["Muhammad Rizkal Abdillah", 20190201077, "Desain Komunikasi Visual", "muhammadrizkalabdillah@student.esaunggul.ac.id"],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3 | Kasus Nyata</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs[0]; ?></li>
            <li>NIM : <?= $mhs[1]; ?></li>
            <li>Jurusan : <?= $mhs[2]; ?></li>
            <li>Alamat Email :<?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>