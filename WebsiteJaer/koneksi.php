<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'tutorialphp';

// Membuat koneksi
$koneksi = new mysqli($host, $user, $pass, $db);

// Memeriksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Sekarang Anda dapat menggunakan $koneksi untuk operasi database
?>