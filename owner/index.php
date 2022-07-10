<?php

session_start();

echo "<script> console.log('Masuk') </script>";

if (isset($_POST['logout-owner-btn'])) {
    session_unset();
    session_destroy();
    header('Location: owner.login.php');
    exit;
}

if (!isset($_SESSION['login-admin'])) {
    header("Location: owner.login.php");
    exit;
}

?>

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
        <nav class="navbar navbar-light fixed-top">
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
                                            <a class="nav-link" href="owner.data.kost.php"><i
                                                    class="fa-solid fa-database me-3"></i>Data Kost</a>
                                        </li>
                                        <!-- Divider -->
                                        <hr class="sidebar-divider mt-2 bg-light">
                                        <li class="nav-item">
                                            <a class="nav-link" href="owner.data.kamar.php"><i
                                                    class="fa-solid fa-database me-3"></i>Data Kamar</a>
                                        </li>
                                        <!-- Divider -->
                                        <hr class="sidebar-divider mt-2 bg-light">
                                        <li class="nav-item">
                                            <a class="nav-link" href="owner.data.penyewa.php"><i
                                                    class="fa-solid fa-database me-3"></i>Data Penyewa</a>
                                        </li>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Divider -->
                        <hr class="sidebar-divider mt-2 bg-light">

                        <li class="nav-item">
                            <a class="nav-link" href="owner.pesanan.kost.php"><i
                                    class="fas fa-fw fa-tachometer-alt me-2"></i>Pesanan Kost</a>
                        </li>

                        <!-- Divider -->
                        <hr class="sidebar-divider mt-2 bg-light">

                        <div class="logout">
                            <li class="nav-item-logout">
                                <form method="POST">
                                    <button class="btn btn-primary" type="submit" name="logout-owner-btn"><i
                                            class="fa-solid fa-power-off me-2"></i>Log Out</button>
                                </form>
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
                                            <a class="dropdown-item" href="owner.profile.php">
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

                            <!-- Begin Page Content -->
                            <div class="container-fluid">
                                <!-- Page Heading -->
                                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                                </div>

                                <!-- Content Row -->
                                <div class="row">
                                    <!-- Earnings (Monthly) Card Example -->
                                    <div class="col-xl-3 col-md-6 mb-4">
                                        <div class="card border-left-primary shadow h-100 py-2">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                        <div
                                                            class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                            hmm</div>
                                                        <div class="h5 mb-0 font-weight-bold text-gray-800">3</div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Earnings (Monthly) Card Example -->
                                    <div class="col-xl-3 col-md-6 mb-4">
                                        <div class="card border-left-success shadow h-100 py-2">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                        <div
                                                            class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                            Y</div>
                                                        <div class="h5 mb-0 font-weight-bold text-gray-800">1m</div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Earnings (Monthly) Card Example -->
                                    <div class="col-xl-3 col-md-6 mb-4">
                                        <div class="card border-left-info shadow h-100 py-2">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                        <div
                                                            class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                            hi
                                                        </div>
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col-auto">
                                                                <div
                                                                    class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                                    2</div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="progress progress-sm mr-2">
                                                                    <div class="progress-bar bg-info" role="progressbar"
                                                                        style="width: 50%" aria-valuenow="50"
                                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Pending Requests Card Example -->
                                    <div class="col-xl-3 col-md-6 mb-4">
                                        <div class="card border-left-warning shadow h-100 py-2">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                        <div
                                                            class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                            T</div>
                                                        <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Content Row -->

                                <div class="row">
                                    <!-- Area Chart -->
                                    <div class="col-xl-8 col-lg-7">
                                        <div class="card shadow mb-4">
                                            <!-- Card Header - Dropdown -->
                                            <div
                                                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                                <h6 class="m-0 font-weight-bold text-primary">hhh</h6>
                                                <div class="dropdown no-arrow">
                                                    <a class="dropdown-toggle" href="#" role="button"
                                                        id="dropdownMenuLink" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                                        aria-labelledby="dropdownMenuLink">
                                                        <div class="dropdown-header">Dropdown Header:</div>
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="chart-area">
                                                    <canvas id="myChart"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Pie Chart -->
                                    <div class="col-xl-4 col-lg-5">
                                        <div class="card shadow mb-4">
                                            <!-- Card Header - Dropdown -->
                                            <div
                                                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                                <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                                                <div class="dropdown no-arrow">
                                                    <a class="dropdown-toggle" href="#" role="button"
                                                        id="dropdownMenuLink" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                                        aria-labelledby="dropdownMenuLink">
                                                        <div class="dropdown-header">Dropdown Header:</div>
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="chart-pie pt-4 pb-2">
                                                    <canvas id="myPieChart"></canvas>
                                                </div>
                                                <div class="mt-4 text-center small">
                                                    <span class="mr-2">
                                                        <i class="fas fa-circle text-primary"></i> Direct
                                                    </span>
                                                    <span class="mr-2">
                                                        <i class="fas fa-circle text-success"></i> Social
                                                    </span>
                                                    <span class="mr-2">
                                                        <i class="fas fa-circle text-info"></i> Referral
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Content Row -->
                                <div class="row">
                                    <!-- Content Column -->
                                    <div class="col-lg-6 mb-4">

                                        <!-- Project Card Example -->
                                        <div class="card shadow mb-4">
                                            <div class="card-header py-3">
                                                <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                                            </div>
                                            <div class="card-body">
                                                <h4 class="small font-weight-bold">Server Migration <span
                                                        class="float-right">20%</span></h4>
                                                <div class="progress mb-4">
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                        style="width: 20%" aria-valuenow="20" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                                <h4 class="small font-weight-bold">Sales Tracking <span
                                                        class="float-right">40%</span></h4>
                                                <div class="progress mb-4">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                        style="width: 40%" aria-valuenow="40" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                                <h4 class="small font-weight-bold">Customer Database <span
                                                        class="float-right">60%</span></h4>
                                                <div class="progress mb-4">
                                                    <div class="progress-bar" role="progressbar" style="width: 60%"
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <h4 class="small font-weight-bold">Payout Details <span
                                                        class="float-right">80%</span></h4>
                                                <div class="progress mb-4">
                                                    <div class="progress-bar bg-info" role="progressbar"
                                                        style="width: 80%" aria-valuenow="80" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                                <h4 class="small font-weight-bold">Account Setup <span
                                                        class="float-right">Complete!</span></h4>
                                                <div class="progress">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mb-4">
                                        <!-- Illustrations -->
                                        <div class="card shadow mb-4">
                                            <div class="card-header py-3">
                                                <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                                        src="img/undraw_posting_photo.svg" alt="...">
                                                </div>
                                                <p>Add some quality, svg illustrations to your project courtesy of <a
                                                        target="_blank" rel="nofollow"
                                                        href="https://undraw.co/">unDraw</a>, a
                                                    constantly updated collection of beautiful svg images that you can
                                                    use
                                                    completely free and without attribution!</p>
                                                <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse
                                                    Illustrations on
                                                    unDraw &rarr;</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Main Content -->

                        <!-- Footer -->
                        <footer class="sticky-footer bg-white fixed-bottom">
                            <div class="container">
                                <div class="copyright text-center">
                                    <span>Copyright &copy; Kolektif Team 2022</span>
                                </div>
                            </div>
                        </footer>
                        <!-- End of Footer -->
                    </div>
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
    <!-- <script src="/owner/dist/js/hehe.js"></script> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

    <script>
    new Chart("myChart", {
        type: "bar",
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                label: "Penambahan Penyewa (Tiap Bulan)",
                backgroundColor: ["#3e95cd", "#3e95cd", "#3e95cd",
                    "#3e95cd", "#3e95cd", "#3e95cd", "#3e95cd",
                    "#3e95cd", "#3e95cd", "#3e95cd", "#3e95cd", "#3e95cd"
                ],
                data: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]
            }]
        },
    });
    </script>

    </body>

</html>