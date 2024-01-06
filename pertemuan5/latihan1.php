<?php

// Pengelolaan Array Sederhana untuk debugging 

// array 
// variabel yang dapat memiliki banyak nilai
// Didalam PHP ada dua cara dalam membuat sebuah array yakni sebagai berikut:
// Elemen adalah nilai yang ada didalam array
// Elemen pada array boleh memiliki tipe data yang berbeda
// *Definisi lain Array: Array adalah pasangan antara key dan value, key-nya adalah index yang dimulai dari 0.


// Cara Pertama atau Cara Lama Sebelum PHP Versi 5.4 
$hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu");

// Cara Kedua atau Cara Baru Setelah Sesudah PHP Versi 5.4 
$bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

// Elemen pada array yang berbeda tipe datanya 
$thoriq = ["Thoriq", 21, false];

// Untuk menampilkan array kita tidak dapat langsung menggunakan echo 

// Cara Pertama untuk menampilkan array: Menggunakan var_dump()
// var_dump($hari);
// echo ("<br>");

// Cara Kedua untuk menampilkan array: Menggunakan print_r()
// print_r($bulan);
// echo ("<br>");

// Menampilkan 1 elemen pada array 
// echo $thoriq[0];
// echo ("<br>");
// echo $thoriq[1];

// Menambahkan elemen baru pada array
var_dump($thoriq);
$thoriq[] = "single";
$thoriq[] = "pemberani";
echo "<br>";
var_dump($thoriq);
