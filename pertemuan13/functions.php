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

    // Upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    // query insert data
    $query = "INSERT INTO mahasiswa
     VALUES
     (NULL, '$nama', '$nim', '$email', '$jurusan', '$gambar')
     ";
    mysqli_query($conn, $query);

    // Menggunakan fungsi mysqli untuk mengecek apakah datanya sudah masuk ke database
    return mysqli_affected_rows($conn);
}

// Fungsi Upload Gambar
function upload()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // Check Apakah ada file gambar yang diupload
    if ($error === 4) { // Check apakah user sudah memasukkan gambar(pesan tidak ada file yang diunggah)
        echo "
        <script>
            alert ('Mohon masukkan File Gambar!');
        </script>
        ";
        return false;
    }
    // Check Type File yang diunggah oleh user
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "
        <script>
            alert ('Mohon Pastikan Ekstensi File!');
        </script>
        ";
    }
    // Check Ukuran File yang Diunggah
    if ($ukuranFile > 1000000) {
        echo "
        <script>
            alert ('Ukuran File Terlalu besar');
        </script>
        ";
    }



    // Finish Checking data akan dimasukkan ke dalam database 
    // Catatan: untuk file yang akan diupload harus memiliki hak akses untuk dipindahkan atau Write dan Read.
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
    return $namaFileBaru;
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
    $gambarLama = htmlspecialchars($data_post["gambarLama"]);

    // Check User Memasukkan Gambar Baru atau Tidak 
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }


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
