<?php
// Pertemuan 2 - PHP Dasar.
// Sintaks PHP.

//standar output -> Perintah untuk menanmpilkan sesuatu ke layar.
//echo, print -> Perintah untuk mencetak tulisan, variable dan lain sebagainya.
//print r -> Perintah untuk mencetak hasil dari suatu array. 
//var_dump-> Perintah ini untuk melihat isi dari suatu variable. Biasanya digunakan untuk debugging mencari program.


// Penulisan sintaks PHP 
// 1. PHP didalam HTML
// 2. HTML didalam PHP

// Variabel dan Tipe Data 
// Variabel :
// Menggunakan Tanda $.
// Tidak boleh diawali dengan angka tapi boleh mengandung angka.
// $nama = "Thoriqnurulfikri";
// echo "Nama Saya adalah $nama";

// Operator 
// aritmatika : + - / %->Modulus adalah sisa dari hasil pembagian. 
// echo 1 + 1;
// echo 2 * 9;
// echo 100 * 7;
// echo 10 % 3;

// $x = 10;
// $y = 20;
// echo $x * $y; 

// Operator penggabung string atau dikenal dengan istilah concatenation / concat yakni (.)

// $nama_depan = "thoriq";
// $nama_tengah = "nurul";
// $nama_belakang = "fikri";

// echo $nama_depan. " " .$nama_tengah." ".$nama_belakang;


// Operator Assignment
// =, +=, -=, /=, %=, .= 

// $x = 100; 
// $x += 5; 

// echo $x;

// $nama = "Thoriq";
// $umur = 21;

// echo "Nama Saya adalah $nama dan umur saya $umur tahun.";

// $nama = "Thoriq";
// $nama .= " ";
// $nama .= "nurul fikri";
// echo $nama;

// Operator Perbandingan, mengecek nilainya tapi tidak mengecek tipe datanya. 
// <, >, <=, >=, ==, !=

// var_dump(1 == 5); 

// Operator Identitas, mengecek nilai dan tipe datanya. 
// ===, !==

// var_dump(1 === 1);

// Operator Logika
// &&, ||, !
$x = 30;
var_dump($x < 20 || $x %2 == 0);


?>