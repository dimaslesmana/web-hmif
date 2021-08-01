<?= $this->extend('layouts/main/template'); ?>

<?= $this->section('content'); ?>

<main>
    <!-- Hero -->
    <div class="jumbotron jumbotron-fluid hero mb-0">
        <div class="container text-center">
            <img src="/assets/images/logo.png" class="" width="50%" alt="">
            <h1 class="display-4">Welcome!</h1>
            <p class="lead">Himpunan Mahasiswa Informatika</p>
        </div>
    </div>
    <!-- End of Hero -->

    <!-- News -->
    <section id="news" class="news bg-primary-custom">
        <div class="container py-5">
            <div class="row mb-2 text-center text-white">
                <div class="col">
                    <h3>News</h3>
                    <hr>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <div class="card bg-dark text-white">
                        <img src="/assets/images/placeholder-1000x400.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text">Last updated 3 mins ago</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-6">
                    <div class="card bg-dark text-white">
                        <img src="/assets/images/placeholder-1000x400.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text">Last updated 3 mins ago</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card bg-dark text-white">
                        <img src="/assets/images/placeholder-1000x400.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text">Last updated 3 mins ago</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button class="btn btn-tertiary-custom btn-block">View All <i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </section>
    <!-- End of News -->
</main>

<?= $this->endSection(); ?>