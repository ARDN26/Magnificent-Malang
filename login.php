<?php

require 'koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];

// Cek koneksi ke database
if (!$conn) {
    die("Koneksi Gagal: " . mysqli_connect_error());
}

// Query untuk memeriksa apakah email dan password cocok dengan yang ada di database
$sql = "SELECT * FROM user WHERE Email = '$email' AND Password = '$password'";
$result = mysqli_query($conn, $sql);

// Cek apakah kueri berhasil dieksekusi
if ($result === false) {
    die("Error: " . mysqli_error($conn));
}

// Cek apakah ada baris yang ditemukan
if (mysqli_num_rows($result) > 0) {
    // Password cocok, arahkan ke halaman utama
    header("Location: index.html");
    exit();
} else {
    // Password tidak cocok atau email tidak ditemukan
    echo "Email atau password yang Anda masukkan salah.";
}

mysqli_close($conn);
?>
