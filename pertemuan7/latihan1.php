<?php

// $_GET
$mahasiswa = [
    [
        "nama" => "Thoriq Nurul Fikri",
        "nim" => "20190801054",
        "email" => "thoriqthoriqnurulfikri4@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "animals1.jpeg"
    ],
    [
        "nama" => "Muhammad Magfur",
        "nim" => "20190801001",
        "email" => "muhammadmagfur@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "animals2.jpeg"
    ],
    [
        "nama" => "Firlan Prayoga",
        "nim" => "20190801009",
        "email" => "firlanprayoga@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "animals3.jpeg"
    ],
    [
        "nama" => "Danu Faisal Pangestu",
        "nim" => "20190801081",
        "email" => "danufaisalpangestu@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "animals4.jpeg"
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa Esa Unggul</title>
</head>

<body>
    <h1>Daftar Mahasiswa | Esa Unggul</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nim=<?= $mhs["nim"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>