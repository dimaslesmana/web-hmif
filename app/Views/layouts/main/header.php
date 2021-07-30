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
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">

    <title><?= $title; ?></title>
</head>

<body>
    <header>
        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-transparent scrolled">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="/assets/images/logo.png" width="100" alt="HMIF">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="/home">Home</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="/about">About</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>
                        <?php if (session()->get('logged_in')) : ?>
                            <li class="nav-item mx-2">
                                <a class="nav-link" href="/dashboard">Dashboard</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End of Navbar -->
    </header>