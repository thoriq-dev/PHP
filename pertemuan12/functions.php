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

function perbarui($data_post)
{
    global $conn;
    $id = $data_post["id"];
    $nama = htmlspecialchars($data_post["nama"]);
    $nim = htmlspecialchars($data_post["nim"]);
    $email = htmlspecialchars($data_post["email"]);
    $jurusan = htmlspecialchars($data_post["jurusan"]);
    $gambar = htmlspecialchars($data_post["gambar"]);

    // Prepared statement
    $query = "UPDATE mahasiswa SET 
                nama = ?,
                nim = ?,
                email = ?,
                jurusan = ?,
                gambar = ?
                WHERE id = ?
    ";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "sssssi", $nama, $nim, $email, $jurusan, $gambar, $id);
    mysqli_stmt_execute($stmt);

    // Menggunakan fungsi mysqli untuk mengecek apakah datanya sudah masuk ke database
    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $query = "SELECT * FROM mahasiswa 
        WHERE
    nama LIKE '%$keyword%' OR 
    nim LIKE '%$keyword%'OR
    email LIKE '%$keyword%' OR 
    jurusan LIKE '%$keyword%'
    ";
    return query($query);
}
