<?php

require("config/db.connect.php");
$data_query = mysqli_query($conn, "SELECT * FROM asset_manager");

function getalldata()
{
    global $data_query;
    $data_array = [];

    while ($data = mysqli_fetch_assoc($data_query)) {
        array_push($data_array, $data);
    }

    return $data_array;
}