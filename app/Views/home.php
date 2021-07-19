<?= $this->extend('layouts/main/template'); ?>

<?= $this->section('content'); ?>

<main>
    <!-- Carousel -->
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active test">
                <img src="/assets/images/placeholder-1000x400.jpg" class="d-block w-100" alt="event1">
                <div class="carousel-caption d-none d-md-block mb-2">
                    <p>Nama & Keterangan Event</p>
                    <button class="btn rounded-pill" data-toggle="modal" data-target="#staticBackdrop">Register Now</button>
                </div>
            </div>
            <div class="carousel-item test">
                <img src="/assets/images/placeholder-1000x400.jpg" class="d-block w-100" alt="event2">
                <div class="carousel-caption d-none d-md-block mb-2">
                    <p>Nama & Keterangan Event</p>
                    <button class="btn rounded-pill" data-toggle="modal" data-target="#staticBackdrop">Register Now</button>
                </div>
            </div>
            <div class="carousel-item test">
                <img src="/assets/images/placeholder-1000x400.jpg" class="d-block w-100" alt="event3">
                <div class="carousel-caption d-none d-md-block mb-2">
                    <p>Nama & Keterangan Event</p>
                    <button class="btn rounded-pill" data-toggle="modal" data-target="#staticBackdrop">Register Now</button>
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
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary">Daftar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Modal -->

    <!-- Profile -->
    <!-- <section id="about" class="about">
        <div class="container text-center text-white pb-4">
            <div class="row mb-4 pt-5">
                <div class="col">
                    <h3>Profile</h3>
                    <hr>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <h5 class="font-weight-bold">Visi</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi cupiditate explicabo ab soluta, ullam sequi laboriosam vel ea pariatur labore, atque porro, minus esse nam aperiam! Corporis quas aliquid laudantium.</p>
                </div>
                <div class="col">
                    <h5 class="font-weight-bold">Misi</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto cumque id unde quod doloremque rem, consequuntur dignissimos suscipit vel in neque ab, sequi beatae, fuga laborum quidem nostrum temporibus repellendus.</p>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <h5 class="font-weight-bold">Susunan Himpunan</h5>
                    <div style="background-color: aliceblue; height: 40vh;"></div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <a href="/about" type="button" class="btn btn-block">View All</a>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End of Profile -->
</main>

<?= $this->endSection(); ?>