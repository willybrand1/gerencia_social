<?php
session_start();

include_once 'includes.php';

$code = isset($_REQUEST['code']) ? $_REQUEST['code'] : "";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="config/css/styles_dash.css" rel="stylesheet" />
        <link href="config/css/bootstrap.css" rel="stylesheet" crossorigin="anonymous" />
        <link rel="shortcut icon" href="favicon.icon"/>
        <script src="config/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <div>
            <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
                <a class="navbar-brand" href="index.html">Start Bootstrap</a>
                <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
                <!-- Navbar Search-->
                <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                    <div class="input-group">
                        <span style="color: rgba(255, 255, 255, 0.5);"><?php echo strtoupper($_SESSION['usu_nome']);?></span>
                    </div>
                </div>
                <!-- Navbar-->
                <ul class="navbar-nav ml-auto ml-md-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="logout.php">Logout</a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div id="layoutSidenav">
                <div id="layoutSidenav_nav">
                    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                        <div class="sb-sidenav-menu">
                            <div class="nav">
                                <div class="sb-sidenav-menu-heading">Principal</div>
                                <a class="nav-link" href="dashboard.php">
                                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                    Dashboard
                                </a>
                                <div class="sb-sidenav-menu-heading">Gerenciamento</div>
                                <a class="nav-link" href="#">
                                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                    Posts
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
                <div id="layoutSidenav_content">
                    <main>
                        <div class="container-fluid">
                            <h1 class="mt-4">Dashboard</h1>
                            <ol class="breadcrumb mb-4">
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                            
                        </div>
                    </main>
                </div>
            </div>
        </div>
        <script src="config/js/jquery-3.5.1.js" crossorigin="anonymous"></script>
        <script src="config/js/bootstrap.bundle.js" crossorigin="anonymous"></script>
        <script src="config/js/scripts_dash.js"></script>
    </body>
</html>
