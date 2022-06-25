<?php

session_start();

if (!isset($_SESSION["login"])) {
    header('Location: user.login.php');
    exit;
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
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;900&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <title>Home</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">De'Kost</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="user.carikos.php">Cari Kos</a>
                        </li>
                        <!-- <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled">Disabled</a>
                            </li> -->
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-primary" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main class="container-fluid">
        <section id="slider" class="pt-5">
            <div class="container">
                <!-- <h1 class="text-center"><b>Cari Kos</b></h1> -->
                <div class="slider">
                    <div class="owl-carousel">
                        <div class="slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="assets/images/img.jpg" alt="">
                            </div>
                            <h5 class="mb-0 text-center"><b>HTML CSS3 Tutorials</b></h5>
                            <p class="text-center p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam
                                temporibus quidem magni qui doloribus quasi natus inventore nisi velit minima.</p>
                        </div>
                        <div class="slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="assets/images/img.jpg" alt="">
                            </div>
                            <h5 class="mb-0 text-center"><b>Wordpress Tutorials</b></h5>
                            <p class="text-center p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam
                                temporibus quidem magni qui doloribus quasi natus inventore nisi velit minima.</p>
                        </div>
                        <div class="slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="assets/images/img.jpg" alt="">
                            </div>
                            <h5 class="mb-0 text-center"><b>PHP MySQL Tutorials</b></h5>
                            <p class="text-center p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam
                                temporibus quidem magni qui doloribus quasi natus inventore nisi velit minima.</p>
                        </div>
                        <div class="slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="assets/images/img.jpg" alt="">
                            </div>
                            <h5 class="mb-0 text-center"><b>Javascript Tutorials</b></h5>
                            <p class="text-center p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam
                                temporibus quidem magni qui doloribus quasi natus inventore nisi velit minima.</p>
                        </div>
                        <div class="slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="assets/images/img.jpg" alt="">
                            </div>
                            <h5 class="mb-0 text-center"><b>Bootstrap Tutorials</b></h5>
                            <p class="text-center p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam
                                temporibus quidem magni qui doloribus quasi natus inventore nisi velit minima.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="content-section">
            <div class="row">
                <div class="col">
                    <img src="assets/images/bed.jpg" alt="">
                </div>
                <div class="col ">
                    <h3>Cari Kos dengan mudah dan Terpecaya</h3>
                    <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis nostrum quidem similique
                        soluta
                        distinctio autem adipisci deleniti rem amet perferendis libero porro, ducimus optio velit quasi
                        explicabo consequatur nemo veritatis
                    </p>
                </div>
            </div>
        </section>

        <section class="content-section">
            <div class="row">
                <div class="col ">
                    <h3>Cari Kos di mana saja, kapan saja</h3>
                    <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis nostrum quidem similique
                        soluta
                        distinctio autem adipisci deleniti rem amet perferendis libero porro, ducimus optio velit quasi
                        explicabo consequatur nemo veritatis
                    </p>
                </div>
                <div class="col">
                    <img class="promote-section" src="assets/images/bed2.jpg" alt="">
                </div>
            </div>
        </section>

        <footer class="">
            <div class="row">
                <div class="col-lg-4">
                    <h2 class="header-footer">Contact me</h2>
                    <p><i class="fas fa-envelope-square"></i> arizqyakbar@gmail.com</p>
                    <p><i class="fab fa-whatsapp-square"></i></i> +6281326768372</p>
                </div>
                <div class="col-lg-4 social-media-row">
                    <h3>Social Media</h3>
                    <div class="row">
                        <div class="col-lg-4">
                            <a class="social-media-ref" href="https://www.instagram.com/irizqy_/">
                                <p><i class="fab fa-instagram"></i> Instagram</p>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a class="social-media-ref" href="https://www.linkedin.com/in/irizqyakbr/">
                                <p><i class="fab fa-linkedin"></i> Linkedin</p>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a class="social-media-ref" href="https://vsco.co/irizqy/gallery">
                                <p><i class="fas fa-camera"></i> VSCO</p>
                            </a>
                        </div>
                    </div>
                    <p id="copyright">Copyright <i class="far fa-copyright"></i> Ilham Rizqyakbar</p>
                </div>
            </div>
        </footer>

    </main>

    <form action="index.php" method="POST">
        <button name="logout" type="submit">Logout</button>
    </form>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/scripts.js"></script>

</body>

</html>