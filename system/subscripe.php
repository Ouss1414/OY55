<?php

$con = new mysqli('localhost', 'root','' , 'db_progfields_8003112356_v');

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = $_POST['email'];

    $sql = "INSERT INTO subscripe (Email)
                            VALUES ('$email')";

    if (mysqli_query($con, $sql)) {
        echo '<meta http-equiv="Refresh" content="0; \'../index.php?pid='.$_GET['pid'].'\'">';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
        echo '<meta http-equiv="Refresh" content="3; \'../index.php?pid='.$_GET['pid'].'\'">';
    }

}


?>