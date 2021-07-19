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
        <nav class="navbar navbar-expand navbar-dark bg-transparent">
            <div class="container">
                <div class="navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/home">Go to Home</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End of Navbar -->
    </header>

    <main>
        <section id="landing" class="landing">
            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <img src="/assets/images/logo.png" width="70%" alt="HMIF">
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>

    </footer>

    <!-- jQuery -->
    <script src="/assets/vendors/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>
</body>

</html>