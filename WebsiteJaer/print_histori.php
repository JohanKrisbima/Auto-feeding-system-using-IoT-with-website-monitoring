<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
    }

    p {
        font-size: 1.5em;
        font-weight: bold;
    }

    a {
        text-decoration: none;
        margin-right: 10px;
    }

    table {
        border-collapse: collapse;
        width: 100%;
        margin-top: 20px;
    }

    th,
    td {
        border: 1px solid black;
        text-align: left;
        padding: 8px;
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
        <a class="btn btn-secondary" href="print_histori.php?download_pdf" onclick="printData()">Download PDF</a>
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
            $no = 0;
            while($data = mysqli_fetch_array($sql)) {
                $no++;
                $id = $data['id_histori'];
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
        window.location.href = "histori.php";
    }

    function printData() {
        window.print();
        return false; // Prevent the default behavior of the anchor tag
    }
    </script>

    <?php
    if (filter_input(INPUT_GET, 'pdf', FILTER_SANITIZE_STRING) || filter_input(INPUT_GET, 'download_pdf', FILTER_SANITIZE_STRING)) {
        // Manually include the required files
        require_once 'dompdf/autoload.inc.php';
        require_once 'dompdf/src/autoloader.cls.php';

        $document = new \Dompdf\Dompdf();

        ob_start(); // Start output buffering

        // Output the content inside the buffer
        ?>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Jumlah Pakan</th>
            <th>Waktu</th>
            <th>Aksi</th>
        </tr>
        <?php 
            include 'histo.php';
            $sql = mysqli_query($conn, "SELECT * FROM table_histori ORDER BY jml_pakan") or die(mysqli_error($conn));
            $no = 0;
            while($data = mysqli_fetch_array($sql)) {
                $no++;
                $id = $data['id_histori'];
            ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $data['jml_pakan']; ?></td>
            <td><?php echo $data['waktu']; ?></td>
            <td>
                <a href="detail_histo.php<?php echo '?id=' . $id; ?>">detail</a> ||
                <a href="hapus_histo.php<?php echo '?id=' . $id; ?>">hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
    <?php
        $output = ob_get_clean(); // Get the content of the output buffer and clean it
        $document->loadHtml($output);
        $document->setPaper('A4', 'portrait');
        $document->render();

        if (filter_input(INPUT_GET, 'download_pdf', FILTER_SANITIZE_STRING)) {
            // Save PDF to a file
            $pdf_content = $document->output();
            $file_path = 'Laporan_Pakan.pdf'; // Update the path
            file_put_contents($file_path, $pdf_content);
            echo "<p class='btn btn-success'>PDF has been saved as <a href='$file_path' target='_blank'>Laporan_Pakan.pdf</a></p>";
            exit();
        } else {
            // Display PDF in the browser
            $document->stream("Laporan_Pakan.pdf", array("Attachment" => false));
            exit();
        }
    }
    ?>

</body>

</html>