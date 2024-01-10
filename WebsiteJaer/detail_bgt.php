<?php
include 'histo.php';

$id        = $_POST['id_histori'];
$pakan       = $_POST['jml_pakan'];
$waktu     = $_POST['waktu'];


// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Update query using prepared statement to prevent SQL injection
$stmt = $conn->prepare("UPDATE table_histori SET jml_pakan=?, waktu=? WHERE id_histori=?");
$stmt->bind_param("sssssi", $pakan, $waktu, $id);

// Execute the statement
if ($stmt->execute()) {
    echo "<script>alert('Data Berhasil disimpan')</script>";
    echo '<script type="text/javascript">window.location="histori.php"</script>';
} else {
    echo "<script>alert('Gagal Menyimpan Data')</script>";
    echo '<script type="text/javascript">window.location="histori.php"</script>';
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>