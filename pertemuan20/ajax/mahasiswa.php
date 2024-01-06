<?php
require '../functions.php';

$keyword = $_GET["keyword"];

$query = "SELECT * FROM mahasiswa 
WHERE
nama LIKE '%$keyword%' OR 
nim LIKE '%$keyword%'OR
email LIKE '%$keyword%' OR 
jurusan LIKE '%$keyword%'
";
$mahasiswa = query($query);
?>

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