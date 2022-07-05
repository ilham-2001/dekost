<?php

require('core/init.php');

$response = ['error' => FALSE];

if (isset($_POST['button_signup'])) {
    $nama_depan = $_POST['nama_depan'];
    $nama_belakang = $_POST['nama_belakang'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $nik = $_POST['nik'];

    $isComplete = checkCompleteess($email, $password, $nik);

    if ($isComplete) {
        // procees to checking regitered account by email
        $isRegistred = checkRegistredUser($email);

        if (!$isRegistred) {
            // make account if email is not set yet in the database
            $regis = registerAccount($email, $password, $nama_depan, $nama_belakang, $jenis_kelamin, $nik);

            if ($regis) {
                // regis is success 
                $response['error'] = FALSE;
                $response['user']['name'] = $regis['email'];
                $response['user']['key'] = $regis['NIK'];

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
        echo "
        <script> alert('Some fields are not filled'); </script>
        ";
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

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/app/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/app/css/custom.style.css">
    <!-- Favicon -->
    <link rel="icon" href="assets/icon/favicon.ico">
</head>

<body>

    <main class="container-fluid">

        <div class="row align-items-start">
            <div class="col">

            </div>

            <div class="col">
                <div class="main-form">
                    <form class="form-signin" method="POST">

                        <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"
                                name="email" autocomplete="off">
                            <label for="floatingInput">Email address</label>
                        </div>

                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="password"
                                name="password" autocomplete="off">
                            <label for="floatingPassword">Password</label>
                        </div>

                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInput" placeholder="nama depan"
                                name="nama_depan" autocomplete="off">
                            <label for="floatingInput">Nama Depan</label>
                        </div>

                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInput" placeholder="nama belakang"
                                name="nama_belakang" autocomplete="off">
                            <label for="floatingInput">Nama Belakang</label>
                        </div>

                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInput" placeholder="NIK" name="nik"
                                autocomplete="off">
                            <label for="floatingInput">NIK</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="flexRadioDefault1"
                                value="L">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Laki-laki
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="flexRadioDefault2"
                                checked value="P">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Perempuan
                            </label>
                        </div>

                        <button type="submit" name="button_signup">Submit</button>
                    </form>
                    <a href="index.php">Home</a>
                </div>
            </div>
        </div>


    </main>


    <script src="assets/app/js/bootstrap.bundle.min.js"></script>
    <script src="assets/app/js/jquery.min.js"></script>

</body>

</html>