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
    <footer class="w-100 py-4 flex-shrink-0">
        <div class="container">
            <div class="row gy-4 gx-5">
                <div class="col-lg-4 col-md-6">
                    <h5 class="h1 text-black mb-2"><img src="../owner/assets/icons/logo.png" class="mb-3 me-2" width="50" height="50" alt="logo"> Dekost</h5>
                    <p class="small text-muted fw-bold">Mencari kost sangat mudah menggunakan dekost</p>
                    <ul class="list-unstyled text-muted">
                        <li><a href="#tentangkami">Tentang Kami</a></li>
                        <li><a href="#..">Promosikan Kos Anda</a></li>
                        <li><a href="#bantuan">Pusat Bantuan</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 pt-3">
                    <h5 class="text-black mb-3 fw-bold">Hubungi Kami</h5>

                    <ul class="list-unstyled text-muted">
                        <li>
                            <!-- Facebook -->
                            <a class="social-media-ref" href="#FacebookDEKOST">
                                <i class="fa-brands fa-facebook me-2"></i>Facebook
                            </a>
                        </li>
                        <li>
                            <!-- Twitter -->
                            <a class="social-media-ref" href="#TwitterDEKOST">
                                <i class="fa-brands fa-twitter me-2 "></i>Twitter
                            </a>
                        </li>
                        <li>
                            <!-- Instagram -->
                            <a class="social-media-ref" href="#InstagramDEKOST">
                                <i class="fa-brands fa-instagram me-2"></i>Instagram
                            </a>
                        </li>
                        <li>
                            <a class="social-media-ref" href="#LinkedInDEKOST">
                                <i class="fa-brands fa-linkedin me-2"></i>LinkedIn
                            </a>
                        </li>
                        <li>
                            <a class="social-media-ref" href="#FacebookDEKOST">
                                <i class="fa-regular fa-envelope me-2"></i>Dekost@gmail.com
                            </a>
                        </li>
                        <li>
                            <a class="social-media-ref" href="#WADEKOST">
                                <i class="fab fa-whatsapp-square me-2"></i> +6281668909890
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-black mb-3 fw-bold pt-3">Kebijakan</h5>
                    <ul class="list-unstyled text-muted">
                        <li><a href="#kebijakan">Kebijakan Privasi</a></li>
                        <li><a href="#syarat&ketentuan">Syarat dan Ketentuan Umum</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-Black fw-bold mb-3 pt-3">Yogyakarta, Indonesia</h5>
                    <p class="small text-muted">Jika ada sesuatu hal yang ingin disampaikan silahkan kirimkan pesan kepada kami.</p>
                    <form action="#">
                        <div class="input-group mb-3">
                            <input class="form-control" type="text" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-primary" id="button-addon2" type="button"><i class="fas fa-paper-plane"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Copyright -->
            <div class="text-center p-3 text-white fw-bold mt-3" style="background-color: #2155cd;">
                2022 © Copryright <a class="text-white" href="#dekost.com">DEKOST</a> - All rights reserved - Made in Yogyakarta
            </div>
        </div>
    </footer>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>