<?php

require 'koneksi.php';
    // Ambil data dari formulir pendaftaran
    $FullName = $_POST['Full_Name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

   
    // Membuat query untuk menyimpan data pendaftaran ke dalam database
    $sql = "INSERT INTO user (Name, email , password) VALUES ('$FullName', '$email', '$password')";

    // Setelah proses pendaftaran selesai, arahkan pengguna kembali ke halaman utama
    if (mysqli_query($conn, $sql)) {
        header("Location: login.html");
        } else {
        echo "Pendaftaran Gagal : ". mysqli_error($conn);
        }
    
?>
