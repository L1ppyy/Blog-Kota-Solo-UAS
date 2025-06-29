<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "PasswordBaru123!";
    $db_name = "dbku";
    $conn = "";

  

  $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

 


?>