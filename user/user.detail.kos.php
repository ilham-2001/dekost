<?php


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
                    <div class="row">
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