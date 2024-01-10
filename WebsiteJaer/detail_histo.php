<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f8f9fa;
        margin: 20px;
    }

    p {
        font-size: 24px;
        color: #007bff;
    }

    form {
        margin-top: 20px;
        max-width: 400px;
        background-color: #ffffff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
    }

    label {
        font-weight: bold;
    }

    input[type="text"],
    input[type="date"] {
        width: 100%;
        padding: 8px;
        margin: 6px 0;
        box-sizing: border-box;
        border: 1px solid #ced4da;
        border-radius: 4px;
    }

    input[type="submit"] {
        background-color: #007bff;
        color: #ffffff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }

    a {
        display: block;
        margin-top: 10px;
        text-decoration: none;
        color: #007bff;
    }

    a:hover {
        color: #0056b3;
    }
    </style>
</head>

<body>
    <p>Detail Histori</p>
    <?php
    include 'conn.php';
    $id = $_GET['id'];

    // Assuming $koneksi is the variable holding your MySQLi connection
    $sql = mysqli_query($conn, "SELECT * FROM table_histori WHERE id_histori='$id'") or die(mysqli_error($conn));
    $data = mysqli_fetch_array($sql);
    ?>

    <form action="detail_bgt.php" method="POST">
        <input type="hidden" name="id_histori" value="<?php echo $data['id_histori'] ?>" required>
        <label>Jumlah Pakan</label>
        <input type="text" name="jml_pakan" value="<?php echo $data['jml_pakan'] ?>" required><br>
        <label>Waktu</label>
        <input type="text" name="waktu" value="<?php echo $data['waktu'] ?>" required><br>
        <input type="submit" class="btn btn-primary" value="Simpan">
    </form>
    <a href="histori.php" class="btn btn-link">Kembali</a>

    <!-- Bootstrap JS and Popper.js (required for Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>