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

function getDataFromId($table, $id)
{
    global $conn;

    $data_query = mysqli_query($conn, "SELECT * FROM $table WHERE `id`=$id");

    $fetched = mysqli_num_rows($data_query) ? TRUE : FALSE;

    if (!$fetched) {
        return;
    }

    return mysqli_fetch_assoc($data_query);
}

function verifyLogin($email, $password)
{
    global $conn;
    $query = mysqli_query($conn, "SELECT * FROM pemilik WHERE email='$email'");

    $verif = mysqli_num_rows($query) ? TRUE : FALSE;

    if (!$verif) {
        echo "MAsuk";
        return FALSE;
    }

    $queryPassword = mysqli_fetch_assoc($query)['keypassword'];
    $passwordVerif = password_verify($password, $queryPassword);

    if (!$passwordVerif) {
        return FALSE;
    }

    return TRUE;
}

function checkRegistredUser($email)
{
    global $conn;
    $query = mysqli_query($conn, "SELECT email from users WHERE email='$email'");

    $isRegistred = mysqli_num_rows($query) ? TRUE : FALSE;

    return $isRegistred;
}

function registerAccount($email, $password, $nama_depan, $nama_belakang, $nik, $alamat, $noTelepon)
{
    global $conn;

    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);
    $nama_depan = mysqli_real_escape_string($conn, $nama_depan);
    $nama_belakang = mysqli_real_escape_string($conn, $nama_belakang);
    $nik = mysqli_real_escape_string($conn, $nik);
    $alamat = mysqli_real_escape_string($conn, $alamat);
    $noTelepon = mysqli_real_escape_string($conn, $noTelepon);
    $nama = "$nama_depan $nama_belakang";

    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = mysqli_query($conn, "INSERT INTO pemilik(NIK, nama,  noTelp, email, keypassword, alamat) VALUES('$nik', '$nama', '$noTelepon', '$email', '$password', '$alamat') ");

    if ($query) {
        $q = mysqli_query($conn, "SELECT * FROM pemilik WHERE email='$email'");
        $user = mysqli_fetch_assoc($q);

        var_dump($user);
        return $user['NIK'];
    }

    return FALSE;
}

// function findMaxHarga()
// {
//     global $conn;

//     $query = mysqli_query($conn, "SELECT `harga` FROM kost ORDER BY harga DESC LIMIT 0, 1");
//     $maxValue = mysqli_fetch_assoc($query);

//     return $maxValue['harga'];
// }

// function findMinHarga()
// {
//     global $conn;

//     $query = mysqli_query($conn, "SELECT `harga` FROM kost ORDER BY harga ASC LIMIT 0, 1");
//     $minValue = mysqli_fetch_assoc($query);

//     return $minValue['harga'];
// }

// function filterSearch($jenis, $minHarga, $maxHarga)
// {
//     global $conn;
//     $retVal = [];

//     if (!$minHarga) {
//         $minHarga = findMinHarga() - 1000;
//     }

//     if (!$maxHarga) {
//         $maxHarga = findMaxHarga() + 1000;
//     }

//     if (!$jenis && !$minHarga && !$maxHarga) {
//         $query = mysqli_query($conn, "SELECT * FROM kost");
//     } else if (!$jenis) {
//         $query = mysqli_query($conn, "SELECT * FROM kost WHERE harga BETWEEN $minHarga AND $maxHarga");
//     } else {
//         $query = mysqli_query($conn, "SELECT * FROM kost WHERE jenis='$jenis' AND (harga BETWEEN $minHarga AND $maxHarga)");
//     }

//     while ($data = mysqli_fetch_assoc($query)) {
//         array_push($retVal, $data);
//     }

//     return $retVal;
// }

function uploadImage($imgURL)
{
    $imageName = $imgURL['name'];
    $imageSize = $imgURL['size'];
    $err = $imgURL['error'];
    $tmp = $imgURL['tmp_name'];

    if ($err === 4) {
        echo "<script> 
                alert('Please upload an image');
            </script>";

        return false;
    }

    $VALID_EXTENSION = ['jpg', 'jpeg', 'png'];

    $imgFormat = explode('.', $imageName);
    $imgFormat = strtolower($imgFormat[count($imgFormat) - 1]);

    // another way to get image extension
    // $format = pathinfo($imageName, PATHINFO_EXTENSION);

    // check file format
    if (!in_array($imgFormat, $VALID_EXTENSION)) {
        echo "<script> 
                alert('Format not supported');
            </script>";

        return false;
    }

    // check file size
    // valid if size is < 2mb
    if ($imageSize > 2000000) {
        echo "<script> 
                alert('Size too large');
            </script>";

        return false;
    }

    // generate new name for the image
    $newName = uniqid() . ".$imgFormat";

    // upload the image into permanent folder
    // the path view is from where we use the function
    move_uploaded_file($tmp, '../assets/upload/' . $newName);

    return $newName;
}

function registerKost($namaKos, $alamat, $jumlahKamar, $harga, $jenis, $gambar, $idPemilik)
{
    global $conn;

    $namaKos = mysqli_real_escape_string($conn, $namaKos);
    $jumlahKamar = mysqli_real_escape_string($conn, $jumlahKamar);
    $harga = mysqli_real_escape_string($conn, $harga);
    $jenis = mysqli_real_escape_string($conn, $jenis);
    $alamat = mysqli_real_escape_string($conn, $alamat);
    $gambar = uploadImage($gambar);

    if (!$gambar) {
        return FALSE;
    }

    $query = mysqli_query($conn, "INSERT INTO kost(nama, alamat, jumlahKamar, NIK_Pemilik, harga, jenis, gambar_preview) VALUES ('$namaKos', '$alamat', '$jumlahKamar', '$idPemilik', $harga, '$jenis', '$gambar')");

    if (!$query) {
        return FALSE;
    }

    return TRUE;
}