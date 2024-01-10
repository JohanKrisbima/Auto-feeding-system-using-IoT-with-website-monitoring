<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_jaer";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
else{
    echo "terhubung";
}
?>
