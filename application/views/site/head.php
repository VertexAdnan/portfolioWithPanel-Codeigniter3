<!DOCTYPE html>
<html lang="tr">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <!-- Required meta tags-->
    <meta charset="utf-8">
    <!-- Title-->
    <title><?= getmyname()->myname ?> | Freelance</title>
    <!-- Description-->
    <meta name="description" content="Personal Portfolio Template">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicons-->
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/favicon-16x16.png">
    <!-- Web fonts-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i&amp;display=swap" rel="stylesheet">
    <!-- CSS vendors-->
    <link rel="stylesheet" href="<?= base_url('assets/site/') ?>css/bootstrap-custom.css">
    <link rel="stylesheet" href="<?= base_url('assets/site/') ?>css/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/site/') ?>css/tiny-slider.css">
    <link rel="stylesheet" href="<?= base_url('assets/site/') ?>css/lity.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/site/') ?>css/simplebar.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/site/') ?>css/jquery.mb.YTPlayer.min.css">
    <!-- Main CSS-->
    <link rel="stylesheet" href="<?= base_url('assets/site/') ?>css/main.css">
    <!-- CSS Color scheme-->
    <link id="color-scheme" rel="stylesheet" href="<?= base_url('assets/site/') ?>css/colors/main-darkgreen.css">
    <!-- Custom CSS (Add your custom CSS styles to this file)-->
    <link rel="stylesheet" href="<?= base_url('assets/site/') ?>css/custom.css">
</head>


<body class="theme-dark">
    <!-- Preloader-->
    <div class="preloader">
        <div class="preloader-block">
            <div class="preloader-icon"><span class="loading-dot loading-dot-1"></span><span class="loading-dot loading-dot-2"></span><span class="loading-dot loading-dot-3"></span></div>
        </div>
    </div>
    <div id="overlay-effect"></div>
    <!-- Navbar-->
    <nav class="navbar-expand-md navbar fixed-top" id="navbar"><a class="navbar-brand" data-scroll="" href="#home-area">
            <!-- Navbar Logo-->
            <img class="img-fluid" src="<?= base_url('assets/site/img/'.getsitelogo()->logo) ?>" alt="Logo">
        </a>
        <span class="navbar-menu ml-auto" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" role="button"><span class="btn-line"></span></span>
        <div class="collapse navbar-collapse order-1 order-lg-0" id="navbarSupportedContent">
            <!-- Navbar menu-->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="#about">Hakkımda</a></li>
                <li class="nav-item"><a class="nav-link" href="#resume">Deneyim</a></li>
                <li class="nav-item"><a class="nav-link" href="#portfolio">Çalışmalar</a></li>
                <li class="nav-item"><a class="nav-link" href="#blog">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">İletişim</a></li>
            </ul>
        </div>
    </nav>