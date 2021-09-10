<?= $this->extend('layouts/main/template'); ?>

<?= $this->section('content'); ?>

<main>
    <!-- Carousel -->
    <div class="owl-carousel owl-theme" id="landing-carousel">
        <div>
            <div class="carousel-img-container">
                <img src="/assets/images/placeholder-1000x400.jpg" alt="event1">
            </div>
            <div class="d-flex flex-wrap justify-content-between bg-primary-custom p-4">
                <p class="my-auto">Nama & Keterangan Event</p>
                <a class="btn btn-tertiary-custom rounded-pill" href="#">Register Now</a>
            </div>
        </div>
        <div>
            <div class="carousel-img-container">
                <img src="/assets/images/placeholder-1000x400.jpg" alt="event1">
            </div>
            <div class="d-flex flex-wrap justify-content-between bg-primary-custom p-4">
                <p class="my-auto">Nama & Keterangan Event</p>
                <a class="btn btn-tertiary-custom rounded-pill" href="#">Register Now</a>
            </div>
        </div>
        <div>
            <div class="carousel-img-container">
                <img src="/assets/images/placeholder-1000x400.jpg" alt="event1">
            </div>
            <div class="d-flex flex-wrap justify-content-between bg-primary-custom p-4">
                <p class="my-auto">Nama & Keterangan Event</p>
                <a class="btn btn-tertiary-custom rounded-pill" href="#">Register Now</a>
            </div>
        </div>
        <div>
            <div class="carousel-img-container">
                <img src="/assets/images/placeholder-1000x400.jpg" alt="event1">
            </div>
            <div class="d-flex flex-wrap justify-content-between bg-primary-custom p-4">
                <p class="my-auto">Nama & Keterangan Event</p>
                <a class="btn btn-tertiary-custom rounded-pill" href="#">Register Now</a>
            </div>
        </div>
    </div>
    <!-- End of Carousel -->

    <!-- Modal -->
    <!-- <div class="modal fade text-dark-custom" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Daftar Event</h5>
                    </div>
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="firstname">First Name</label>
                                <input type="text" class="form-control" id="firstname" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lastname">Last Name</label>
                                <input type="text" class="form-control" id="lastname" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="example@umn.ac.id" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-custom" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-tertiary-custom">Daftar</button>
                    </div>
                </form>
            </div>
        </div>
    </div> -->
    <!-- End of Modal -->
</main>

<?= $this->endSection(); ?>