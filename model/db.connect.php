<?php

$mysql_server = "localhost";
$username = "ilham";
$password = "ilham2001#";


try {
    $conn = mysqli_connect($mysql_server, $username, $password);
} catch (Exception $e) {
    echo ("Terjadi error: $e");
}