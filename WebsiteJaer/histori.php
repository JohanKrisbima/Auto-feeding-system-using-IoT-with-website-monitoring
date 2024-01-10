<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f8f9fa;
    }

    .container {
        margin-top: 50px;
    }

    p {
        font-size: 1.8em;
        font-weight: bold;
        margin-bottom: 20px;
    }

    a {
        text-decoration: none;
        margin-right: 10px;
    }

    table {
        border-collapse: collapse;
        width: 100%;
        margin-bottom: 20px;
    }

    th,
    td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 12px;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .btn-container {
        margin-top: 20px;
    }
    </style>
</head>

<body>
    <div class="container">
        <p>Histori Pakan</p>
        <a class="btn btn-primary" href="mahasiswa_tambah.php">Tambah Data</a>
        <a class="btn btn-secondary" href="print_histori.php">Cetak Data</a>
        <table class="table">
            <tr>
                <th>No</th>
                <th>Jumlah Pakan</th>
                <th>Waktu</th>
                <th>Aksi</th>
            </tr>
            <?php 
                include 'histo.php';
                $sql = mysqli_query($conn, "SELECT * FROM table_histori ORDER BY jml_pakan") or die(mysqli_error($conn));
                $no=0;
                while($data = mysqli_fetch_array($sql))
                {
                    $no++;
                    $id=$data['id_histori'];
            ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $data['jml_pakan']; ?></td>
                <td><?php echo $data['waktu']; ?></td>
                <td>
                    <a class="btn btn-warning" href="detail_histo.php<?php echo '?id=' . $id; ?>">Detail</a>
                    <a class="btn btn-danger" href="hapus_histo.php<?php echo '?id=' . $id; ?>">Hapus</a>
                </td>
            </tr>
            <?php } ?>
        </table>
        <div class="btn-container">
            <button class="btn btn-primary" onclick="goToIndex()">Kembali</button>
        </div>
    </div>

    <script>
    function goToIndex() {
        window.location.href = "index.php";
    }
    </script>
</body>

</html>