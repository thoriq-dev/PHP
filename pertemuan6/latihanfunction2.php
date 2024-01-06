<?php
// Mendefinisikan harga menggunakan tipe data float
$harga = 100000;

// Menampilkan harga dengan format mata uang
echo "Harga: IDR " . number_format($harga, 2); // Output Harga
echo "<br>";

// Melakukan Operasi matematika pada harga
$diskon = $harga * 0.2;
$totalHarga = $harga - $diskon;

echo "Diskon: IDR " . number_format($diskon, 2); // Output Diskon
echo "<br>";
echo "Total Harga: IDR " . number_format($totalHarga, 2); // Output Total Harga
