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
        <nav class="navbar fixed-top navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="/assets/images/logo.png" width="100" alt="HMIF">
                </a>
                <div class="justify-content-end" id="navbarNav">
                        <a class="btn" href="/home"><i class="fas fa-home"></i></a>
                        <a class="btn" href="/about"><i class="fas fa-users"></i></a>
                        <a class="btn" href="/contact"><i class="fas fa-address-book"></i></a>
                        <?php if (session()->get('logged_in')) : ?>
                            <a class="btn" href="/dashboard"><i class="fas fa-wrench"></i></a>
                        <?php endif; ?>
                    </ul>
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