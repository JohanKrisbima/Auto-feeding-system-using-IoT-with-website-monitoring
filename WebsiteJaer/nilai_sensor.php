<?php 
include "conn.php";

if(isset($_POST["turbidity"]) && isset($_POST["ph"])  ) {
    $tbd = $_POST["turbidity"];
    $ph = $_POST["ph"];

    $sql = "INSERT INTO table_sensor (ph, turbidity) VALUES ('$ph','$tbd')";

    if (mysqli_query($conn, $sql)){
        echo "<br> \nData Telah Ditambahkan";
    } else {
        echo "Error: " .$sql . "<br>" .mysqli_error($conn);
    }
} else {
    echo "Data turbidity tidak diterima";
}
?>
