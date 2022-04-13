<?php

require("config/db.connect.php");

function getalldata($table)
{
    global $conn;

    $data_array = [];
    $data_query = mysqli_query($conn, "SELECT * FROM $table");

    while ($data = mysqli_fetch_assoc($data_query)) {
        array_push($data_array, $data);
    }

    return $data_array;
}