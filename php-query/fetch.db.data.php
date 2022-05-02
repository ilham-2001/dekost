<?php

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

function verifyLogin($email, $password)
{
    $users = getalldata("users");

    foreach ($users as $user) {
        if ($user['email'] == $email && $user['password'] == $password) {
            return true;
        }
    }

    return false;
}