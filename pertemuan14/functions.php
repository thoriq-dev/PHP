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

function registrasi($data_post)
{
    global $conn;

    $username = strtolower(stripslashes($data_post["username"]));
    $password = mysqli_real_escape_string($conn, $data_post["password"]);
    $password2 = mysqli_real_escape_string($conn, $data_post["password2"]);

    // Check username apakah sudah terdaftar sebelumnya
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (!$result) {
        // Handle kesalahan saat menjalankan query
        echo "
        <script>
            alert('Terjadi kesalahan pada query. Silakan coba lagi!');
        </script>
        ";
        return false;
    }

    if (mysqli_num_rows($result) > 0) {
        // Jika username sudah terdaftar
        echo "
        <script>
            alert('Username Sudah Terdaftar, Coba Lagi!');
        </script>
        ";
        return false;
    }

    // Check konfirmasi password
    if ($password !== $password2) {
        echo "
        <script>
            alert('Password Tidak Sesuai!');
        </script>";
        return false;
    }

    // Enkripsi Password User
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Tambahkan akun user baru ke database
    $query = "INSERT INTO user (username, password) VALUES ('$username', '$password')";
    if (mysqli_query($conn, $query)) {
        return mysqli_affected_rows($conn);
    } else {
        // Handle kesalahan saat memasukkan data ke database
        echo "
        <script>
            alert('Terjadi kesalahan saat menyimpan data. Silakan coba lagi!');
        </script>
        ";
        return false;
    }
}
