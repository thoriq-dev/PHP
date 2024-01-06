<?php

// Contoh penggunaan date 
// echo $today = date("Y-m-d H:i:s");

// Contoh penggunaan time (UNIX Timestamp / EPOCH time)
// Detik yang sudah berlalu sejak 1 januari 1970 
// echo time();

// Contoh penggabungan 2 fungsi yakni date dan time untuk menghitung hari. (UNIX timestamp)
// echo ("Hari apa dari hari sekarang ? <br> :");
// echo date("l-j-M-Y", time() + 60 * 60 * 24 * 3);

// Menggunakan mktime, membuat sendiri detik 
// mktime (0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun.
// echo ("saya lahir : <br>");
// echo date("l-j-M-Y", mktime(0, 0, 0, 7, 11, 2001));

// strtotime
echo ("Saya Lahir : <br>");
echo date("l-j-M-Y", strtotime("11 July 2001"));
