<?php

require('core/init.php');

$response = ['error' => FALSE];

if (isset($_POST['button_signup'])){
    var_dump($_POST);
    $nama_depan = $_POST['nama_depan'];
    $nama_belakang = $_POST['nama_belakang'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $jenis_kelamin = $_POST['jenis_kelamin'];


    $isComplete = checkCompleteess($nama_depan, $nama_belakang, $email, $password, $jenis_kelamin);
    var_dump($isComplete);

    if ($isComplete){
        // procees to checking
    } else {
        // give warnings
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - De'kost</title>
</head>

<body>

    <form method="POST">
        <input type="email" name="email">
        <input type="password" name="password">
        <input type="text" name="nama_depan">
        <input type="text" name="nama_belakang">
        <input type="text" name="jenis_kelamin">

        <button type="submit" name="button_signup">Submit</button>

    </form>

</body>

</html>