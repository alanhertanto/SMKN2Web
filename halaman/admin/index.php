<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Panel Admin SMKN 2 Kuningan</title>
    <link rel="apple-touch-icon" sizes="57x57" href="../../assets//apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../../assets//apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../../assets//apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets//apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../../assets//apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../../assets//apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../../assets//apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../../assets//apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../../assets//apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../../assets//android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../assets//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../assets//favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets//favicon-16x16.png">
    <link rel="manifest" href="../../assets//manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../../assets//ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


    <!-- Custom fonts for this template-->
    <link href="../../assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../assets/admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Panel Admin <sup>SMKN 2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Beranda</span></a>
            </li>

            <!-- Nav Item - Charts -->
            <div class="sidebar-heading">
                Akun
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages1"
                    aria-expanded="true" aria-controls="collapsePages1">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Akun</span>
                </a>
                <div id="collapsePages1" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="../siswa/index.php" target="frame">Data & Akun Siswa</a>
                    </div>
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="../akunguru/index.php" target="frame">Data & Akun Guru</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="../../logout.php">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
               
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-xl-12 col-md-12 ">
                            <iframe src="beranda.php" id="frame" name="frame" style="width:100%; height:655px; display:block; border:none;"></iframe>
                        </div>
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
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../../assets/admin/vendor/jquery/jquery.min.js"></script>
    <script src="../../assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../assets/admin/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../../assets/admin/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../../assets/admin/js/demo/chart-area-demo.js"></script>
    <script src="../../assets/admin/js/demo/chart-pie-demo.js"></script>

</body>

</html>