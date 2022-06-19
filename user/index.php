<?php

session_start();

if (!isset($_SESSION["login"])) {
    header('Location: user.login.php');
}

if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header('Location: user.login.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="assets/own.carousel.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;900&family=Ubuntu:wght@500&display=swap"
        rel="stylesheet">
    <title>Home</title>
</head>

<body>
    <main class="container-fluid">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">De'Kost</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled">Disabled</a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </header>


        <section id="slider" class="pt-5">
            <div class="container">
                <h1 class="text-center"><b>Responsive Owl Carousel</b></h1>
                <div class="slider">
                    <div class="owl-carousel">
                        <div class="slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="assets/images/img.jpg" alt="">
                            </div>
                            <h5>HTML CSS Tutorials</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus necessitatibus dolor
                                totam eum vero praesentium asperiores! Quia odit quas corporis quibusdam impedit!
                                Provident laboriosam beatae commodi nisi tenetur aperiam illum.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <form action="index.php" method="POST">
        <button name="logout" type="submit">Logout</button>
    </form>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <!-- <script src="assets/js/scripts.js"></script> -->
    <script src="assets/js/owl.carousel.min.js"></script>
</body>

</html>