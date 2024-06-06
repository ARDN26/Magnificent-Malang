<?php
$servername = "localhost"; // Nama host MySQL, umumnya "localhost"
$username = "root"; // Nama pengguna MySQL
$password = ""; // Kata sandi MySQL
$database = "magnificent"; // Nama database yang Anda buat

// Membuat koneksi
$conn =new mysqli($servername, $username, $password, $database);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi Gagal : ". mysqli_connect_error());
    } else {
    echo "Koneksi Berhasil";
    
    }
?>
