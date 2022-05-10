<?php

require('core/init.php');

$response = ['error' => FALSE];

if (isset($_POST['button_signup'])){
    $nama_depan = $_POST['nama_depan'];
    $nama_belakang = $_POST['nama_belakang'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $jenis_kelamin = $_POST['jenis_kelamin'];


    $isComplete = checkCompleteess($nama_depan, $nama_belakang, $email, $password, $jenis_kelamin);

    if ($isComplete){
        // procees to checking regitered account by email
        $isRegistred = checkRegistredUser($email);

        if (!$isRegistred){
            // make account if email is not set yet in the database
            $regis = registerAccount($email, $password, $nama_depan, $nama_belakang, $jenis_kelamin);

            if ($regis){
                // regis is success 
                $response['error'] = FALSE;
                $response['user']['name'] = $regis['email'];
                $response['user']['key'] = $regis['user_id'];

                echo json_encode($response);
            } else {
                // give warnings about failing to insert
                $response['error'] = TRUE;
                $response['error_msg'] = "failed insertion";

                echo json_encode($response);
            }

        } else {
            // give warnings if email is used before
            $response['error'] = TRUE;
            $response['error_msg'] = "email is already registred";
            echo json_encode($response);
        }   

    } else {
        // give warnings unfinished data fillings
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
        <div>
            <label for="email">Email: </label>
            <input type="email" name="email" id="email">   
        </div>

        <div>
            <label for="password">Password: </label>
            <input type="password" name="password" id="password">
        </div>

        <div>
            <label for="nama-depan">Nama Depan: </label>
            <input type="text" name="nama_depan" id="nama-depan">
        </div>

        <div>
            <label for="nama-belakang">Nama Belakang: </label>
            <input type="text" name="nama_belakang" id="nama-belakang">
        </div>

        <div>
            <label for="jenis-kelamin">Jenis Kelamin: </label>
            <input type="text" name="jenis_kelamin" id="jenis-kelamin">
        </div>
        
        <button type="submit" name="button_signup">Submit</button>

    </form>

</body>

</html>