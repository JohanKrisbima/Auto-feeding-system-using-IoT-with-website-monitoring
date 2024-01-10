<?php
// Sertakan file koneksi.php yang berisi kode koneksi ke database
include 'conn.php';

// Query untuk mengambil nilai dari tabel
$sql = "SELECT turbidity FROM table_sensor ORDER BY id_sensor DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Ambil nilai dari hasil query
    $row = $result->fetch_assoc();
    $sensor_tur_value = $row['turbidity'];
} else {
    // Set nilai default jika tidak ada data
    $sensor_tur_value = 0;
}

// Tutup koneksi
$conn->close();
?>