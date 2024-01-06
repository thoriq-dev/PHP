<?php
// Koneksi ke Database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");



function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data_post)
{
    global $conn;
    // ambil data dari tiap elemen dalam form
    $nama = htmlspecialchars($data_post["nama"]);
    $nim = htmlspecialchars($data_post["nim"]);
    $email = htmlspecialchars($data_post["email"]);
    $jurusan = htmlspecialchars($data_post["jurusan"]);
    $gambar = htmlspecialchars($data_post["gambar"]);

    // query insert data
    $query = "INSERT INTO mahasiswa
     VALUES
     (NULL, '$nama', '$nim', '$email', '$jurusan', '$gambar')
     ";
    mysqli_query($conn, $query);

    // Menggunakan fungsi mysqli untuk mengecek apakah datanya sudah masuk ke database
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}
