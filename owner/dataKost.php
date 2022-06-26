<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Pemilik Kost</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <!-- FontAwesome Icons -->
    <link href="../owner/assets/icons/css/all.min.css" rel="stylesheet">
    <!-- CSS Bootstrap -->
    <link href="../owner/assets/app/css/bootstrap.min.css" rel="stylesheet">
    <!--  CSS File -->
    <link href="../owner/dist/css/index.css" rel="stylesheet"">
</head>
<body>
    <!-- PAGE WRAPPER -->
    <div class=" wrapper">
    <div class="container-fluid">
        <!-- navbar header -->
        <nav class="navbar navbar-light bg-primary fixed-top">
            <div class="container-fluid justify-content-center">
                <h4 class="navbar-header text-white">
                    Selamat Datang di Sistem Informasi Kostan | DEKOST
                </h4>
            </div>
        </nav>
        <!--  CONTENT -->
        <div class="content mt-5">
            <div class="row">
                <div class="side-nav1 col-sm-4 col-md-3 col-lg-3 col-xxl-2" id="side-nav1"></div>
                <div class="side-nav col-sm-4 col-md-3 col-lg-3 col-xxl-2" id="side-nav">
                    <ul class="nav flex-column">
                        <a class="sidebar-brand d-flex align-items-center justify-content-center mb-3 text-decoration-none"
                            href="index.php">
                            <div class="sidebar-brand-icon">
                                <img src="../owner/assets/icons/logo.png" alt="#logo">
                            </div>
                            <h4 class="sidebar-brand-text ms-1 text-white mt-3">DEKOST</h4>
                        </a>

                        <!-- Divider -->
                        <hr class="sidebar-divider mt-2 bg-light">

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php"><i
                                    class="fas fa-fw fa-tachometer-alt me-2 active"></i>
                                Dashboard
                            </a>
                        </li>

                        <!-- Divider -->
                        <hr class="sidebar-divider mt-2 bg-light">
                        <div class="accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseOne">
                                        <i class="fa-solid fa-database me-3"></i>
                                        Master Data
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body">
                                        <li class="nav-item">
                                            <a class="nav-link" href="dataKost.php"><i
                                                    class="fa-solid fa-database me-3"></i>Data Kost</a>
                                        </li>
                                        <!-- Divider -->
                                        <hr class="sidebar-divider mt-2 bg-light">
                                        <li class="nav-item">
                                            <a class="nav-link" href="dataKamar.php"><i
                                                    class="fa-solid fa-database me-3"></i>Data Kamar</a>
                                        </li>
                                        <!-- Divider -->
                                        <hr class="sidebar-divider mt-2 bg-light">
                                        <li class="nav-item">
                                            <a class="nav-link" href="dataPenyewa.php"><i
                                                    class="fa-solid fa-database me-3"></i>Data Penyewa</a>
                                        </li>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Divider -->
                        <hr class="sidebar-divider mt-2 bg-light">

                        <li class="nav-item">
                            <a class="nav-link" href="pesananKost.php"><i
                                    class="fas fa-fw fa-tachometer-alt me-2 active"></i>Pesanan Kost</a>
                        </li>

                        <!-- Divider -->
                        <hr class="sidebar-divider mt-2 bg-light">

                        <div class="logout">
                            <li class="nav-item-logout">
                                <button class="btn btn-primary" type="submit"><i
                                        class="fa-solid fa-power-off me-2"></i>Log Out</button>
                            </li>
                        </div>

                    </ul>
                </div>
                <div class="main-content-header col-sm-8 col-md-9 col-lg-9 col-xxl-10" id="main-content-header">
                    <!-- Content Wrapper -->
                    <div id="content-wrapper" class="d-flex flex-column">

                        <!-- Main Content -->
                        <div id="main-content">

                            <!-- Topbar -->
                            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 shadow">

                                <!-- Sidebar Toggle (Topbar) -->
                                <button id="sidebarToggleTop" onclick="myFunction()"
                                    class="btn btn-link rounded-circle d-sm-none mr-3">
                                    <i class="fa fa-bars"></i>
                                </button>

                                <!-- Topbar Navbar -->
                                <ul class="navbar-nav ms-auto me-4">
                                    <!-- Nav Item - User Information -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton1"
                                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span>Ini Nama Pemilik Kost</span>
                                            <img class="img-profile rounded-circle ms-2 mb-1" width="20px" height="20px"
                                                src="../owner/assets/icons/logo.png">
                                        </a>
                                        <!-- Dropdown - User Information -->
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                            aria-labelledby="userDropdown">
                                            <a class="dropdown-item" href="#profile">
                                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                                Profile
                                            </a>
                                            <a class="dropdown-item" href="#setting">
                                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                                Settings
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </nav>
                            <!-- End of Topbar -->

                            <!-- Begin Page Content -->
                            <div class="container-fluid">

                                <!-- Page Heading -->
                                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                    <h1 class="h3 mb-0 text-gray-800">Data Kost</h1>

                                </div>

                            </div>
                            <!-- /.container-fluid -->

                        </div>
                        <!-- End of Main Content -->

                        <!-- Footer -->
                        <footer class="sticky-footer bg-white">
                            <div class="container my-auto">
                                <div class="copyright text-center my-auto">
                                    <span>Copyright &copy; Your Website 2021</span>
                                </div>
                            </div>
                        </footer>
                        <!-- End of Footer -->

                    </div>
                    <!-- End of Content Wrapper -->
                </div>


            </div>
        </div>
    </div>

    </div>
    <script>
    function myFunction() {
        var x = document.getElementById("side-nav");
        var y = document.getElementById("side-nav1");
        var a = document.getElementById("main-content-header");
        if (x.style.display === "block") {
            x.style.display = "none";
            y.style.display = "none";
        } else {
            x.style.display = "block";
            y.style.display = "block";
            a.style.width = "none";
        }
    }
    </script>






    <!-- <script src="../owner/assets/app/js/bootstrap.min.js"></script> -->
    <script src="../owner/dist/js/jquery.js"></script>
    <script src="../owner/assets/app/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/owner/dist/js/hehe.js"></script>

    </body>

</html>