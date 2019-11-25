<?php
if (isset($_POST['delete'])) {
    $nume = $_POST['nume'];
    $conn = new mysqli('localhost', 'Vitomir Dragan', '1234', 'housesdatabase');
    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    }

    $sql = "DELETE FROM housestable WHERE Nume='$nume'";

    if ($conn->query($sql) === TRUE) {
        header("Location: http://localhost/myProject/PHP/CautaAdmin.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
}