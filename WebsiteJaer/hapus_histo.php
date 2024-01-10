<?php
include 'conn.php';

$id = $_GET['id_histori'];

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Delete query using prepared statement to prevent SQL injection
$stmt = $conn->prepare("DELETE FROM table_histori WHERE id_histori = ?");
$stmt->bind_param("i", $id);

// Execute the statement
if ($stmt->execute()) {
    echo "<script>alert('Data Berhasil dihapus')</script>";
    echo '<script type="text/javascript">window.location="mahasiswa.php"</script>';
} else {
    echo "<script>alert('Gagal Menghapus Data')</script>";
    echo '<script type="text/javascript">window.location="mahasiswa.php"</script>';
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>