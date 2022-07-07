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
    <link rel="stylesheet" href="../owner/assets/icons/css/all.min.css">
    <title>Penyewaan</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
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
                        <h4 style="color:#2155CD ; font-weight:bold;">Penyewaan </h4>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container ps-4 pe-4 pt-5" style="margin-bottom:200px ;">
            <div class="row">
                <div class="col-md-5 col-sm-12">
                    <section class="informasi-kost mt-3">
                        <div class="nama-kost mb-3">
                            <h3 class="text-center">Ini nama kost</h3>
                        </div>
                        <div class="gambar text-center mb-3">
                            <img src="../user/assets/images/kamar_kos.jpg" alt="gambar kost" class="img-kost img-fluid" width="450" height="300">
                        </div>
                        <div class="informasi-pemilik ps-5">
                            <div class="nama-pemilik">
                                <h4> Pemilik: </h4>
                                <h6> Fajrun.... ini nama pemilik </h6>
                            </div>
                            <div class="contact-pemilik">
                                <h6> 081889785763.....No pemilik </h6>
                                <h6> fajrun@gmail.com .....Email pemilik </h6>
                            </div>
                            <div class="rekening-pemilik mt-3">
                                <h4> Rekening tujuan: </h4>
                                <h6 style="color:#2155CD;"> 3211198xxxxxx </h6>
                                <h6 style="color:#2155CD;"> BNI a.n. Fajrun Shubhi</h6>
                            </div>
                        </div>
                        <div class="waktu-pembayaran ms-5 mt-3">
                            <h4> Lakukan pembayaran sebelum: </h4>
                            <h6 class="tanggal" style="color:#2155CD;"> 30 Juni 2022 / 30/06/2022 dll</h6>
                            <h6 class="jam" style="color:#2155CD;"> 13:00 WIB </h6>
                        </div>
                    </section>
                    <section class="pembayaran text-center mt-2">
                        <label class="label-upload" style="color:#2155CD;">Upload Bukti Pembayaran</label>
                        <!-- Divider -->
                        <hr class="sidebar-divider mt-1 bg-light">
                        <form action="" class="mb-3 ms-5 me-5">
                            <input type="file" class="form-control" id="inputGroupFile02"><br><br>
                            <input type="submit" value="Konfirmasi Pembayaran" style="background-color: #2155CD; border:none; color:#ffffff;padding:10px 60px; border-radius:30px;">
                        </form>
                    </section>
                </div>
                <div class="col-md-7 col-sm-12">
                    <div class="detail-pembayaran card mt-3" style="border-radius:30px;">
                        <h5 class="card-header" style="background-color:#2155CD ; color:#ffffff;">Detail Pembayaran</h5>
                        <div class="card-body">
                            <table class="table">
                                <tbody>
                                    <tr style="height:60px">
                                        <th>Harga</th>
                                        <td>: Rp700000.00 / Bulan</td>
                                    </tr>
                                    <tr style="height:60px">
                                        <th>Tanggal Sewa</th>
                                        <td>: Tgl Mulai</td>
                                        <td>s/d</td>
                                        <td>Tgl Selesai</td>
                                    </tr>
                                    <tr style="height:60px">
                                        <th>Total Pembayaran</th>
                                        <td>
                                            <h6>: Rp700000.00</h6>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="pembayaran-bank card mt-4" style="border-radius:30px;">
                        <h5 class="card-header" style="background-color:#2155CD ; color:#ffffff;">Pilih Metode Pembayaran</h5>
                        <div class="card-body ms-3">
                            <h5 style="font-weight: bold;"> Transfer Bank </h5>
                            <div class="form-check mt-4">
                                <input class="form-check-input me-2" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Bank BCA (inc. Virtual Account)
                                </label>
                            </div>
                            <div class="form-check mt-3">
                                <input class="form-check-input me-2" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Bank Mandiri (inc. Virtual Account)
                                </label>
                            </div>
                            <div class="form-check mt-3">
                                <input class="form-check-input me-2" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Bank BNI (inc. Virtual Account)
                                </label>
                            </div>
                            <div class="form-check mt-3">
                                <input class="form-check-input me-2" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Bank BRI (inc. Virtual Account)
                                </label>
                            </div>
                            <div class="form-check mt-3">
                                <input class="form-check-input me-2" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Bank Syariah Indonesia (BSI) (inc. Virtual Account)
                                </label>
                            </div>
                            <div class="form-check mt-3">
                                <input class="form-check-input me-2" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Bank Mega (inc. Virtual Account)
                                </label>
                            </div>
                            <div class="form-check mt-3">
                                <input class="form-check-input me-2" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Bank Permata (inc. Virtual Account)
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
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
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/scripts.js"></script>

</body>

</html>