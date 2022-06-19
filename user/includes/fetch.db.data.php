<?php

// all database realted functions is here

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
    global $conn;
    $query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");

    $verif = mysqli_num_rows($query)? TRUE: FALSE;

    if (!$verif){
        return FALSE;
    }

    $queryPassword = mysqli_fetch_assoc($query)['password'];
    $passwordVerif = password_verify($password, $queryPassword);

    if (!$passwordVerif){
        return FALSE;
    }

    return TRUE;
}

function checkRegistredUser($email){
    global $conn;
    $query = mysqli_query($conn, "SELECT email from users WHERE email='$email'");

    $isRegistred = mysqli_num_rows($query)? TRUE: FALSE;

    return $isRegistred;
}

function registerAccount($email, $password, $nama_depan, $nama_belakang, $jenis_kelamin){
    global $conn;

    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);
    $nama_depan = mysqli_real_escape_string($conn, $nama_depan);
    $nama_belakang = mysqli_real_escape_string($conn, $nama_belakang);
    $jenis_kelamin = mysqli_real_escape_string($conn, $jenis_kelamin);

    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = mysqli_query($conn, "INSERT INTO users(email, password, nama_depan, nama_belakang, jenis_kelamin) VALUES('$email', '$password', '$nama_depan', '$nama_belakang', '$jenis_kelamin') ");

    if ($query){
        $q = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
        $user = mysqli_fetch_assoc($q);

        return $user;
    }

    return FALSE;
}



?>