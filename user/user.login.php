<?php

require('config/db.connect.php');
require('includes/fetch.db.data.php');

session_start();

if (isset($_SESSION['login'])) {
    header("Location: index.php");
}

if (isset($_POST["btn_submit"])) {
    // cek ketersediaan akun di DB
    $email = $_POST['email'];
    $password = $_POST['password'];

    $verify = verifyLogin($email, $password);

    if ($verify) {
        $_SESSION['login'] = true;
        header('Location: index.php');
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/custom.style.css">
    <title>Login - De'kost</title>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <?php if (isset($_SESSION['login'])) : ?>
                    <a class="navbar-brand" href="index.php">De`Kost</a>
                <?php else : ?>
                    <a class="navbar-brand" href="user.login.php">De`Kost</a>
                <?php endif; ?>
            </div>
        </nav>
    </header>

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </symbol>
        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
        </symbol>
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </symbol>
    </svg>

    <div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
            <use xlink:href="#exclamation-triangle-fill" />
        </svg>
        <div>
            incorrect email or password
        </div>
    </div>

    <main>

        <div class="container">
            <div class="row align-items-start">
                
            </div>
        </div>

        <div class="main-form">
            <form class="form-signin" method="POST">
                <img class="mb-4" src="" alt="" width="72" height="57">
                <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" autocomplete="off">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                    <label for="floatingPassword">Password</label>
                </div>

                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="true" name="is_remember"> Remember me
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit" name="btn_submit">Sign in</button>
            </form>

            <a class="user-signup" href="signup.user.php">Sign Up</a>
            <p class="mt-5 mb-3 text-muted cr-text">&copy;2022</p>


        </div>

    </main>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>

    <!-- Alert saat salah password atau username -->

    <?php if (isset($_POST['btn_submit'])) : ?>
        <script type="text/javascript">
            let isVerify = "<?= $verify; ?>"
            let alert = document.querySelector(".alert-danger");
            
            
            if (!isVerify){
                alert.classList.add('alert-on');
                setTimeout(() => {
                alert.classList.remove('alert-on');
            }, 2500);
        }
        </script>
    <?php endif; ?>

</body>

</html>