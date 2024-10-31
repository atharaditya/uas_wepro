<?php
$host = 'localhost'; // Ganti dengan host database Anda
$db = 'uas_atha'; // Nama database yang telah dibuat
$user = 'root'; // Ganti dengan username database Anda
$pass = ''; // Ganti dengan password database Anda

// Membuat koneksi
$conn = new mysqli($host, $user, $pass, $db);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>