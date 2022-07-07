<?php

require('core/init.php');

$kosId = $_GET['q'];
$kos = getDataFromId("Kost", $kosId);
// var_dump($kos);

$mapKosAddr = explode(" ", $kos['alamat']);
$mapKosNama = explode(" ", $kos['nama']);
// var_dump($mapKosAddr);

// var_dump($mapKosNama);

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
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;900&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="assets/icon/favicon.ico">
    <link rel="stylesheet" href="../owner/assets/icons/css/all.min.css">
    <title>Detail Kost</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">De'Kost</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="user.carikos.php">Cari Kos</a>
                        </li>
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

        <section class="display-kos-image">
            <div class="row">
                <div class="col">
                    <img src="assets/images/kamar_kos.jpg" alt="" width="500">
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <img src="assets/images/kamar_kos.jpg" alt="" width="250">
                        </div>
                    </div>
                    <div class="row lower-row-galery">
                        <div class="col">
                            <img src="assets/images/kamar_kos.jpg" alt="" width="250">
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <section class="">
            <div class="row">
                <div class="col specification-section">
                    <div>
                        <span> <?= $kos['nama']; ?> </span>
                        <span> Jenis Kos </span>
                        <span> <?= $kos['alamat']; ?> </span>
                    </div>
                </div>
                <div class="col rent-section">

                </div>
            </div>

            <div class="mapouter">
                <div class="gmap_canvas"><iframe width="400" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=Kost%20Ali%20Jl.%20Raya%20Tajem%20Gg%20Manduro%20No.km%206&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br>
                    <style>
                        .mapouter {
                            position: relative;
                            text-align: right;
                            height: 300px;
                            width: 400px;
                        }
                    </style><a href="https://www.embedgooglemap.net">google maps iframe embed</a>
                    <style>
                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                            height: 300px;
                            width: 400px;
                        }
                    </style>
                </div>
            </div>

        </section>
    </main>
    <footer class="container bg-light text-center pt-3">
        <!-- Grid container -->
        <div class="container">
            <!-- Section: Social media -->
            <div class="row">
                <div class="col">
                    <section class="social-media mb-4">
                        <h3 class=" pb-5 fw-bold">Social Media</h3>
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-3">
                                <!-- Facebook -->
                                <a class="social-media-ref" href="#FacebookDEKOST">
                                    <i class="fa-brands fa-facebook me-2"></i>Facebook
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3">
                                <!-- Twitter -->
                                <a class="social-media-ref" href="#TwitterDEKOST">
                                    <i class="fa-brands fa-twitter me-2 "></i>Twitter
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3">
                                <!-- Instagram -->
                                <a class="social-media-ref" href="#InstagramDEKOST">
                                    <i class="fa-brands fa-instagram me-2"></i>Instagram
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3">
                                <!-- Linkedin -->
                                <a class="social-media-ref" href="#LinkedInDEKOST">
                                    <i class="fa-brands fa-linkedin me-2"></i>LinkedIn
                                </a>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col">
                    <section class="contact mb-4">
                        <h3 class="header-footer pb-5">Contact me</h3>
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-6">
                                <a class="social-media-ref" href="#FacebookDEKOST">
                                    <i class="fa-regular fa-envelope me-2"></i>Dekost@gmail.com
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6">
                                <i class="fab fa-whatsapp-square me-2"></i> +6281668909890
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            2022 © Copryright <a class="text-white" href="#dekost.com">DEKOST</a> - All rights reserved - Made in Yogyakarta
        </div>
    </footer>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>