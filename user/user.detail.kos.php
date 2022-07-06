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
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;900&family=Ubuntu:wght@500&display=swap"
        rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="assets/icon/favicon.ico">
    <title>Detail Kost</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">De'Kost</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
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
                    <img class="primary-img" src="assets/images/kamar_kos.jpg" alt="">
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <img class="secondary-img" src="assets/images/kamar_kos.jpg" alt="">
                        </div>
                    </div>
                    <div class="row lower-row-galery">
                        <div class="col">
                            <img class="secondary-img" src="assets/images/kamar_kos.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <section class="">
            <div class="row">
                <div class="col specification-section">

                    <div class="kos-info">
                        <h3 class="section-heading"> <?= $kos['nama']; ?> </h3>
                        <span class="section-col"> <?= $kos['jenis'] ?> </span>
                        <span class="section-col"> <?= $kos['alamat']; ?> </span>
                    </div>
                    <hr>
                    <div class="kos-specification">
                        <h4 class="section-heading"> Spesifikasi </h4>
                        <span class="section-col"> <?= $kos['jenis'] ?> </span>
                        <span class="section-col"> <?= $kos['alamat']; ?> </span>
                    </div>
                    <hr>
                    <div class="kos-facility">
                        <h4 class="section-heading"> Fasilitas </h4>

                        <?php
                        global $conn;
                        $fasilitas = [];
                        $query = mysqli_query($conn, "SELECT Fasilitas.nama FROM Fasilitas INNER JOIN Kost ON Fasilitas.id_kost=Kost.id");

                        while ($resQuery = mysqli_fetch_assoc($query)) {
                            array_push($fasilitas, $resQuery);
                        }

                        ?>

                        <?php foreach ($fasilitas as $value) : ?>
                        <p class="section-col"> <?= $value['nama'] ?> </p>
                        <?php endforeach; ?>
                    </div>
                    <hr>

                    <div class="kos-lokasi">
                        <h4 class="section-heading">Lokasi</h4>
                        <div class="mapouter">
                            <div class="gmap_canvas"><iframe width="400" height="300" id="gmap_canvas"
                                    src="https://maps.google.com/maps?q=Kost%20Ali%20Jl.%20Raya%20Tajem%20Gg%20Manduro%20No.km%206&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                                    href="https://123movies-to.org"></a><br>
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
                    </div>
                </div>
                <div class="col rent-section">

                </div>
            </div>

        </section>
    </main>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>