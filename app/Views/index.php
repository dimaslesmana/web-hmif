<?= $this->extend('layouts/main/template'); ?>

<?= $this->section('content'); ?>

<main>
    <!-- Carousel -->
    <!-- <div id="carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/assets/images/placeholder-1000x400.jpg" class="d-block w-100" alt="event1">
                <div class="carousel-caption d-none d-block mb-2">
                    <p>Nama & Keterangan Event</p>
                    <button class="btn btn-tertiary-custom rounded-pill" data-toggle="modal" data-target="#staticBackdrop">Register Now</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/assets/images/placeholder-1000x400.jpg" class="d-block w-100" alt="event2">
                <div class="carousel-caption d-none d-block mb-2">
                    <p>Nama & Keterangan Event</p>
                    <button class="btn btn-tertiary-custom rounded-pill" data-toggle="modal" data-target="#staticBackdrop">Register Now</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/assets/images/placeholder-1000x400.jpg" class="d-block w-100" alt="event3">
                <div class="carousel-caption d-none d-block mb-2">
                    <p>Nama & Keterangan Event</p>
                    <button class="btn btn-tertiary-custom rounded-pill" data-toggle="modal" data-target="#staticBackdrop">Register Now</button>
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
    </div> -->
    <!-- End of Carousel -->

    <div class="owl-carousel owl-theme" id="landing-carousel">
        <div>
            <div class="carousel-img-container">
                <img src="/assets/images/placeholder-1000x400.jpg" alt="event1">
            </div>
            <div class="d-flex flex-wrap justify-content-between bg-primary-custom p-4">
                <p class="my-auto">Nama & Keterangan Event</p>
                <button class="btn btn-tertiary-custom rounded-pill" data-toggle="modal" data-target="#staticBackdrop">Register Now</button>
            </div>
        </div>
        <div>
            <div class="carousel-img-container">
                <img src="/assets/images/placeholder-1000x400.jpg" alt="event1">
            </div>
            <div class="d-flex flex-wrap justify-content-between bg-primary-custom p-4">
                <p class="my-auto">Nama & Keterangan Event</p>
                <button class="btn btn-tertiary-custom rounded-pill" data-toggle="modal" data-target="#staticBackdrop">Register Now</button>
            </div>
        </div>
        <div>
            <div class="carousel-img-container">
                <img src="/assets/images/placeholder-1000x400.jpg" alt="event1">
            </div>
            <div class="d-flex flex-wrap justify-content-between bg-primary-custom p-4">
                <p class="my-auto">Nama & Keterangan Event</p>
                <button class="btn btn-tertiary-custom rounded-pill" data-toggle="modal" data-target="#staticBackdrop">Register Now</button>
            </div>
        </div>
        <div>
            <div class="carousel-img-container">
                <img src="/assets/images/placeholder-1000x400.jpg" alt="event1">
            </div>
            <div class="d-flex flex-wrap justify-content-between bg-primary-custom p-4">
                <p class="my-auto">Nama & Keterangan Event</p>
                <button class="btn btn-tertiary-custom rounded-pill" data-toggle="modal" data-target="#staticBackdrop">Register Now</button>
            </div>
        </div>
    </div>

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
                    <button type="button" class="btn btn-light-custom" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-tertiary-custom">Daftar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Modal -->
</main>

<?= $this->endSection(); ?>