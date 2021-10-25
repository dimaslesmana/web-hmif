<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Website HMIF">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="/assets/vendors/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/assets/vendors/fontawesome-free/css/all.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
    <!-- OwlCarousel2 -->
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">
    <!-- Horizontal Timeline 2.0 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/ycodetech/horizontal-timeline-2.0@2/css/horizontal_timeline.2.0.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <?php
    if (!empty($custom_css)) {
        foreach ($custom_css as $css) {
            echo $css;
        }
    }
    ?>

    <title><?= $title; ?></title>
</head>

<body>
    <div class="preloader">
        <div class="loading">
            <img src="/assets/images/logo.png" width="200">
        </div>
    </div>

    <header>
        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="/assets/images/logo.png" width="100" alt="HMIF">
                </a>
                <div class="d-flex" id="navbarNav">
                    <div class="nav-menu pr-2 mr-2">
                        <a class="btn <?php if ($request->uri->getSegment(1) === 'home') echo 'text-tertiary-custom'; ?>" href="/home">
                            <i class="fas fa-home"></i>
                            <small style="font-size: 1rem;">Home</small>
                        </a>
                        <a class="btn <?php if ($request->uri->getSegment(1) === 'about') echo 'text-tertiary-custom'; ?>" href="/about">
                            <i class="fas fa-users"></i>
                            <small style="font-size: 1rem;">About</small>
                        </a>
                        <a class="btn <?php if ($request->uri->getSegment(1) === 'contact') echo 'text-tertiary-custom'; ?>" href="/contact">
                            <i class="fas fa-address-book"></i>
                            <small style="font-size: 1rem;">Contact</small>
                        </a>
                        <a class="btn <?php if ($request->uri->getSegment(1) === 'events') echo 'text-tertiary-custom'; ?>" href="/events">
                            <i class="fas fa-bell"></i>
                            <small style="font-size: 1rem;">Events</small>
                        </a>
                    </div>
                    <?php if (session()->get('logged_in')) : ?>
                        <a class="btn" href="/dashboard"><i class="fas fa-wrench"></i></a>
                    <?php endif; ?>
                    <button class="btn switch-wrapper">
                        <div class="sun sun-logo">
                            <i class="fas fa-sun"></i>
                        </div>
                        <div class="moon moon-logo">
                            <i class="fas fa-moon"></i>
                        </div>
                    </button>
                </div>
            </div>
        </nav>
        <!-- End of Navbar -->
    </header>