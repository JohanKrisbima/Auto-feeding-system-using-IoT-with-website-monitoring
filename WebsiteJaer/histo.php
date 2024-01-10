<?php 
include "conn.php";

if(isset($_POST["jml_pakan"])) {
    $pkn = $_POST["jml_pakan"];

    $sql = "INSERT INTO table_histori (jml_pakan) VALUES ('$pkn')";

    if (mysqli_query($conn, $sql)){
        echo "<br> \nData Telah Ditambahkan";
    } else {
        echo "Error: " .$sql . "<br>" .mysqli_error($conn);
    }
} else {
    echo "Data turbidity tidak diterima";
}
?>
