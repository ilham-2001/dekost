<?php

require('core/init.php');

session_start();

var_dump($_SESSION);

if (isset($_POST['btn-kos-singup'])) {
    var_dump($_POST);
    var_dump($_FILES);

    $namaKos = $_POST['nama-kos'];
    $alamatKos = $_POST['alamat-kos'];
    $jumlahKamarKos = $_POST['jmlh-kamar'];
    $hargaKos = $_POST['harga'];
    $jenisKos = $_POST['jenis'];
    $idPemilik = $_SESSION['NIK'];
    $gambar = $_FILES['kost-gambar'];

    $regis = registerKost($namaKos, $alamatKos, $jumlahKamarKos, $hargaKos, $jenisKos, $gambar, $idPemilik);

    if ($regis) {
        header("Location: owner.login.php");
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
    <title>Sign Up - De'kost</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/app/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/app/css/custom.style.css">
    <!-- Favicon -->
    <link rel="icon" href="assets/icon/favicon.ico">
</head>

<body>

    <!-- MAIN BARU -->
    <main>
        <section class="section-sign-up" style="background-color: #ffffff;">
            <div class="container py-5">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-xl-10">
                        <div class="card rounded-3 text-black">
                            <div class="row">
                                <div class="col-lg-6 d-flex align-items-center gradient-custom-2 bg-primary">
                                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel"
                                            data-bs-interval=3500>
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#carouselExampleCaptions"
                                                    data-bs-slide-to="0" class="active" aria-current="true"
                                                    aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#carouselExampleCaptions"
                                                    data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#carouselExampleCaptions"
                                                    data-bs-slide-to="2" aria-label="Slide 3"></button>
                                            </div>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="assets/app/images/login.png" class="d-block w-100"
                                                        alt="...">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h5>First slide label</h5>
                                                        <p>Some representative placeholder content for the first slide.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="assets/app/images/login2.png" class="d-block w-100"
                                                        alt="...">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h5>Second slide label</h5>
                                                        <p>Some representative placeholder content for the second slide.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="assets/app/images/login3.png" class="d-block w-100"
                                                        alt="...">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h5>Third slide label</h5>
                                                        <p>Some representative placeholder content for the third slide.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button"
                                                data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button"
                                                data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-body p-md-5">
                                        <div class="text-center">
                                            <h4> <img class="pb-2 pe-2" src="../owner/assets/icons/logo.png"
                                                    style="width: 50px; height:50px;" alt="logo">De'Kost</h4>
                                        </div>
                                        <form class="form-signin" method="POST" enctype="multipart/form-data">
                                            <p class="fw-bold text-center">CREATE KOST</p>
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingInput"
                                                    placeholder="name@example.com" name="nama-kos" autocomplete="off">
                                                <label for="floatingInput">Nama</label>
                                            </div>

                                            <div class="form-floating">
                                                <input type="text" class="form-control sign-up-input"
                                                    id="floatingPassword" placeholder="alamat" name="alamat-kos"
                                                    autocomplete="off">
                                                <label for="floatingPassword">Alamat</label>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col">
                                                    <div class="form-floating">
                                                        <input type="number" class="form-control sign-up-input"
                                                            id="floatingInput" placeholder="nama depan"
                                                            name="jmlh-kamar" autocomplete="off">
                                                        <label for="floatingInput">Jumlah Kamar</label>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-floating">
                                                        <input type="text" class="form-control sign-up-input"
                                                            id="floatingInput" placeholder="nama belakang" name="harga"
                                                            autocomplete="off">
                                                        <label for="floatingInput">Harga</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-floating">
                                                <select class="form-select" aria-label="Default select example"
                                                    name="jenis">
                                                    <option value="Putra" selected>Putra</option>
                                                    <option value="Putri">Putri</option>
                                                    <option value="Campuran">Campuran</option>
                                                </select>
                                            </div>

                                            <div class="mt-2">
                                                <label class="label-upload" style="color:#2155CD;">Upload Foto
                                                    Kost</label>
                                                <!-- <hr class="sidebar-divider bg-light"> -->
                                                <input type="file" class="form-control" id="inputGroupFile02"
                                                    name="kost-gambar"><br><br>
                                            </div>


                                            <button class="w-100 btn btn-lg btn-primary btn-login mt-4" type="submit"
                                                name="btn-kos-singup">Sign Up
                                            </button>
                                            <div class="d-flex align-items-center justify-content-center">
                                                <p class="me-2 mt-3 ms-2">Have an account?</p>
                                                <a class="user-signup" href="owner.login.php">Sign In</a>
                                            </div>
                                        </form>
                                        <p class="mb-2 text-center" style="color:#2155CD ;">&copy;2022 De'kost All
                                            rights reserved</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


    <!-- MAIN LAMA -->
    <!-- <main class="container-fluid">

        <div class="row align-items-start">
            <div class="col">

            </div>

            <div class="col">
                <div class="main-form">
                    <form class="form-signin" method="POST">

                        <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" autocomplete="off">
                            <label for="floatingInput">Email address</label>
                        </div>

                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="password" name="password" autocomplete="off">
                            <label for="floatingPassword">Password</label>
                        </div>

                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInput" placeholder="nama depan" name="nama_depan" autocomplete="off">
                            <label for="floatingInput">Nama Depan</label>
                        </div>

                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInput" placeholder="nama belakang" name="nama_belakang" autocomplete="off">
                            <label for="floatingInput">Nama Belakang</label>
                        </div>

                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInput" placeholder="NIK" name="nik" autocomplete="off">
                            <label for="floatingInput">NIK</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="flexRadioDefault1" value="L">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Laki-laki
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="flexRadioDefault2" checked value="P">
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


    </main> -->


    <script src="assets/app/js/bootstrap.bundle.min.js"></script>
    <script src="assets/app/js/jquery.min.js"></script>

</body>

</html>