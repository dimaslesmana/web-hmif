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
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="/assets/images/logo.png" width="100" alt="HMIF">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <a href="/home" class="btn btn-primary-custom rounded-pill"><i class="fas fa-home"></i> Home</a>
                </div>
            </div>
        </nav>
        <!-- End of Navbar -->
    </header>

    <main>
        <!-- Carousel -->
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/assets/images/placeholder-1000x400.jpg" class="d-block w-100" alt="event1">
                    <div class="carousel-caption d-none d-md-block mb-2">
                        <p>Nama & Keterangan Event</p>
                        <button class="btn btn-warning-custom rounded-pill" data-toggle="modal" data-target="#staticBackdrop">Register Now</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/assets/images/placeholder-1000x400.jpg" class="d-block w-100" alt="event2">
                    <div class="carousel-caption d-none d-md-block mb-2">
                        <p>Nama & Keterangan Event</p>
                        <button class="btn btn-warning-custom rounded-pill" data-toggle="modal" data-target="#staticBackdrop">Register Now</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/assets/images/placeholder-1000x400.jpg" class="d-block w-100" alt="event3">
                    <div class="carousel-caption d-none d-md-block mb-2">
                        <p>Nama & Keterangan Event</p>
                        <button class="btn btn-warning-custom rounded-pill" data-toggle="modal" data-target="#staticBackdrop">Register Now</button>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- End of Carousel -->

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Daftar Event</h5>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="firstname">First Name</label>
                                    <input type="text" class="form-control" id="firstname">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="lastname">Last Name</label>
                                    <input type="text" class="form-control" id="lastname">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="example@umn.ac.id">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-warning-custom">Daftar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Modal -->
    </main>

    <footer>
        <div class="container text-center text-white my-4">
            <div class="row">
                <div class="col-md-6 my-auto">
                    <h3>Contact Us</h3>
                    <p>Sponsors, Seminars, Events, anything Interesting working with us?</p>
                    <ul>
                        <li>
                            <a href="mailto:hmif@umn.ac.id" target="_blank"><i class="fas fa-envelope" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/hmif.umn/" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://liff.line.me/1645278921-kWRPP32q?accountId=682fnddg&openerPlatform=native&openerKey=home%3Arecommend" target="_blank"><i class="fab fa-line" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/hmif_umn/" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 mb-4">
                    <img src="/assets/images/logo.png" width="50%" alt="HMIF">
                </div>
            </div>
            <hr style="border-bottom: 1px solid var(--white);">
            <div class="row">
                <div class="col">
                    <p>&copy; HMIF 2021 &bull; All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="/assets/vendors/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>
</body>

</html>