<?php

session_start();

if (isset($_POST["btn_submit"])) {
    // cek ketersediaan akun di DB
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <link rel="stylesheet" href="../style/custom.style.css">
    <title>User Login</title>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <?php if (isset($_SESSION['login'])) : ?>
                <a class="navbar-brand" href="home.php">De`Kost</a>
                <?php else : ?>
                <a class="navbar-brand" href="user.login.php">De`Kost</a>
                <?php endif; ?>
            </div>
        </nav>
    </header>


    <main>
        <div class="main-form">
            <form class="form-signin" method="POST">
                <img class="mb-4" src="/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
                <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"
                        name="email">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                        name="password">
                    <label for="floatingPassword">Password</label>
                </div>

                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="true" name="is_remember"> Remember me
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit" name="btn_submit">Sign in</button>
                <p class="mt-5 mb-3 text-muted cr-text">&copy;2022</p>
            </form>
        </div>

    </main>

    <script src="../js/bootstrap.bundle.min.js"></script>

</body>

</html>