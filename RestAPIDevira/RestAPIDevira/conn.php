<?php

    $server = "localhost";
    $username = "root";
    $password = "";;
    $database = "wsmahasiswa";

    $conn = mysqli_connect($server, $username, $password, $database);
    if (!$conn) {
        die("Koneksi gagal!");
    }

?>