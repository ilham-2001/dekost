<?php

$mysql_server = "localhost";
$username = "ilham"; // root
$password = "ilham2001#"; // " "
$database = "investment";

try {
    $conn = mysqli_connect($mysql_server, $username, $password, $database);
} catch (Exception $e) {
    echo ("Terjadi error: $e");
}