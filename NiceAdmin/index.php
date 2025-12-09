<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>NiceAdmin - Dashboard</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    
    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
    
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between w-100">
            <div class="d-flex align-items-center">
                <a href="index.php" class="logo d-flex align-items-center">
                    <img src="assets/img/logo.png" alt="">
                    <span class="d-none d-lg-block">𝟑Ꝋ𝟑 Store</span>
                </a>
                <i class="bi bi-list toggle-sidebar-btn"></i>
            </div><!-- End Logo -->
            
            <div class="search-bar flex-grow-1 mx-4">
                <form class="search-form d-flex align-items-center" method="POST" action="#">
                    <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                    <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                </form>
            </div><!-- End Search Bar -->
            
            <nav class="header-nav ms-auto">
                <ul class="d-flex align-items-center list-unstyled">
                    <li class="nav-item d-hide-mobile">
                        <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                            <i class="bi bi-bell"></i>
                            <span class="badge bg-primary badge-number">4</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                            <li class="dropdown-header">
                                You have 4 new notifications
                                <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li class="notification-item">
                                <i class="bi bi-exclamation-circle text-warning"></i>
                                <div>
                                    <h4>Lorem Ipsum</h4>
                                    <p>Quae illum recusandae itaque et expedita saepe</p>
                                    <p>30 min. ago</p>
                                </div>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li class="notification-item">
                                <i class="bi bi-x-circle text-danger"></i>
                                <div>
                                    <h4>Atque rerum nesciunt</h4>
                                    <p>Quae illum recusandae itaque et expedita saepe</p>
                                    <p>1 hour ago</p>
                                </div>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="nav-item dropdown pe-3">
                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                            <img src="assets/img/j.jpg" alt="Profile" class="rounded-circle">
                            <span class="d-none d-md-block dropdown-toggle ps-2">J. Sabillo</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                            <li class="dropdown-header">
                                <h6>J. Sabillo</h6>
                                <span>Web Designer</span>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="index.php?page=Profile">
                                    <i class="bi bi-person"></i>
                                    <span>My Profile</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <i class="bi bi-gear"></i>
                                    <span>Account Settings</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <i class="bi bi-question-circle"></i>
                                    <span>Need Help?</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="modules/login.php">
                                    <i class="bi bi-box-arrow-right"></i>
                                    <span>Sign Out</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div><!-- End Header Nav -->
    </header><!-- End Header -->
    
    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-heading">FORMS</li>
            
            <li class="nav-item">
                <a class="nav-link collapsed" href="index.php?page=Sales">
                    <i class="bi bi-file-earmark"></i>
                    <span>Sales</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link collapsed" href="index.php?page=Records">
                    <i class="bi bi-file-earmark"></i>
                    <span>Records</span>
                </a>
            </li>
            
            <li class="nav-heading">PAGES</li>
            
            <li class="nav-item">
                <a class="nav-link collapsed" href="index.php?page=Profile">
                    <i class="bi bi-person"></i>
                    <span>Profile</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link collapsed" href="index.php?page=London">
                    <i class="bi bi-geo-alt"></i>
                    <span>London</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link collapsed" href="index.php?page=Paris">
                    <i class="bi bi-geo-alt"></i>
                    <span>Paris</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link collapsed" href="index.php?page=Tokyo">
                    <i class="bi bi-geo-alt"></i>
                    <span>Tokyo</span>
                </a>
            </li>
        </ul>
    </aside><!-- End Sidebar -->
    
    <main id="main" class="main">
        <div class="pagetitle">
            <h1></h1>
        </div><!-- End Page Title -->
        
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <?php
                            $page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
                            
                            switch($page) {
                                case 'Sales':
                                    include 'modules/registration_form.php';
                                    break;
                                case 'Records':
                                    include 'modules/records.php';
                                    break;
                                case 'Profile':
                                    include 'modules/profile.php';
                                    break;
                                case 'Paris':
                                    include 'modules/paris.php';
                                    break;
                                case 'London':
                                    include 'modules/london.php';
                                    break;
                                case 'Tokyo':
                                    include 'modules/tokyo.php';
                                    break;
                                default:
                                    echo "<h5 class='card-title'>Welcome to 𝟑Ꝋ𝟑's Store</h5>";
                                    echo "<h2>Buy Now!!</h2>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->
    
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    
    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.min.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>
</html>
