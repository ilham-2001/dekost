<?php

require('core/init.php');

session_start();

$dataKost = getalldata('Kost');

if (isset($_POST['set-filter'])) {
    $filterJenis = $_POST['jenis-filter'];
    $minHarga = $_POST['min-harga'];
    $maxHarga = $_POST['max-harga'];
    $dataKost = filterSearch($filterJenis, $minHarga, $maxHarga);
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
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;900&family=Ubuntu:wght@500&display=swap"
        rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="assets/icon/favicon.ico">
    <!-- Star Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Cari Kos</title>
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
                        <button class="btn btn-outline-primary" type="submit" name="search">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main class="container-fluid">
        <section class="filter-field">
            <form method="POST">
                <select class="form-select" aria-label="Default select example" name="jenis-filter">
                    <option selected value="">Semua</option>
                    <option value="Putra">Putra</option>
                    <option value="Putri">Putri</option>
                    <option value="Campur">Campur</option>
                </select>
                <input type="text" class="form-control filter-input" placeholder="Rp. 0" name="min-harga">
                <input type="text" class="form-control filter-input" placeholder="Rp. 1.000.000" name="max-harga">
                <button class="btn btn-primary" type="submit" name="set-filter">Set</button>
            </form>
        </section>

        <section class="kos-field">
            <div class="row">
                <?php foreach ($dataKost as $kos) : ?>
                <div class="col-3">
                    <a href="user.detail.kos.php?q=<?= $kos['id'] ?>">
                        <div class="card" style="width: 18.1rem;">
                            <img src="assets/images/kamar_kos.jpg" class="card-img-top">
                            <div class="card-body">
                                <h4 class="card-text card-title">
                                    <?= $kos['nama']; ?>
                                </h4>
                                <p class="card-text">
                                    <?php if (strlen($kos['alamat'] > 35)) : ?>
                                    <?= substr($kos['alamat'], 0, 31) . "..." ?>
                                    <?php else : ?>
                                    <?php echo "$kos[alamat]"; ?>
                                    <?php endif; ?>
                                </p>
                                <p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span>3</span>
                                </p>
                                <p class="card-text harga-text">
                                    <?php
                                        $floatHarga = (float) $kos['harga'];
                                        $hargaFormatted = number_format($floatHarga);
                                        echo "Rp $hargaFormatted.00";
                                        ?>
                                    <span class="subs-text">/ bulan</span>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endforeach; ?>
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

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>