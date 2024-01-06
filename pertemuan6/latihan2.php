<?php
// $mahasiswa = [
//     ["Thoriq Nurul Fikri", 20190801054, "thoriqthoriqnurulfikri4@student.esaunggul.ac.id", "Teknik Informatika"],
//     ["Muhammad Magfur", 20190801001, "muhammadmagfur@student.esaunggul.ac.id", "Teknik Informatika"],
//     ["Firlan Prayoga", 20190801002, "firlanprayoga@student.esaunggul.ac.id", "Teknik Informatika"],
//     ["Muhamad Syadi Aqil", 20190801077, "sayidaqil@student.esaunggul.ac.id", "Teknik Informatika"]
// ];

// Array Assosiatif 
// Array Assosiatif adalah Variabel yang memiliki banyak nilai.
// Array Assosiatif key-nya adalah string yang kita buat sendiri bukan indeks dari nilai default, 

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
    <title>Latihan Array Assosiatif</title>
</head>

<body>
    <h1>Daftar Mahasiswa Esa Unggul</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>" alt="gambar-mahasiswa">
            </li>
            <li>Nama: <?= $mhs["nama"]; ?></li>
            <li>Nim: <?= $mhs["nim"]; ?></li>
            <li>Email: <?= $mhs["email"]; ?></li>
            <li>Jurusan: <?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>