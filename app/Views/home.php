<?= $this->extend('layouts/main/template'); ?>

<?= $this->section('content'); ?>

<main>
    <!-- Hero -->
    <div class="jumbotron jumbotron-fluid mb-0">
        <div class="container text-center">
            <img src="/assets/images/logo.png" class="" width="300" alt="">
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
            <div class="row">
                <div class="col mb-4">
                    <ul class="nav nav-pills nav-justified nav-wrapper p-2 mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="pills-bph-tab" data-toggle="pill" href="#pills-bph" role="tab" aria-controls="pills-bph" aria-selected="true">BPH</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-pr-tab" data-toggle="pill" href="#pills-pr" role="tab" aria-controls="pills-pr" aria-selected="false">Public Relation</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-kesma-tab" data-toggle="pill" href="#pills-kesma" role="tab" aria-controls="pills-kesma" aria-selected="false">Kesma</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-itdev-tab" data-toggle="pill" href="#pills-itdev" role="tab" aria-controls="pills-itdev" aria-selected="false">IT Dev</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-humaniora-tab" data-toggle="pill" href="#pills-humaniora" role="tab" aria-controls="pills-humaniora" aria-selected="false">Humaniora</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-bph" role="tabpanel" aria-labelledby="pills-bph-tab">
                            <div class="nav-wrapper p-4">
                                <div class="row mb-4">
                                    <div class="col-12">
                                        <h4>Nama Acara 1</h4>
                                    </div>
                                    <div class="col-12 owl-carousel news-carousel owl-theme">
                                        <div style="height: 30vh;">
                                            <img class="img-thumbnail" src="/assets/images/placeholder-1000x400.jpg" style="height: 100%; object-fit: cover;" alt="">
                                        </div>
                                        <div style="height: 30vh;">
                                            <img class="img-thumbnail" src="/assets/images/placeholder.png" style="height: 100%; object-fit: cover;" alt="">
                                        </div>
                                        <div style="height: 30vh;">
                                            <img class="img-thumbnail" src="/assets/images/placeholder.png" style="height: 100%; object-fit: cover;" alt="">
                                        </div>
                                        <div style="height: 30vh;">
                                            <img class="img-thumbnail" src="/assets/images/placeholder.png" style="height: 100%; object-fit: cover;" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-12">
                                        <h4>Nama Acara 2</h4>
                                    </div>
                                    <div class="col-12 owl-carousel news-carousel owl-theme">
                                        <div style="height: 30vh;">
                                            <img class="img-thumbnail" src="/assets/images/placeholder-1000x400.jpg" style="height: 100%; object-fit: cover;" alt="">
                                        </div>
                                        <div style="height: 30vh;">
                                            <img class="img-thumbnail" src="/assets/images/placeholder.png" style="height: 100%; object-fit: cover;" alt="">
                                        </div>
                                        <div style="height: 30vh;">
                                            <img class="img-thumbnail" src="/assets/images/placeholder.png" style="height: 100%; object-fit: cover;" alt="">
                                        </div>
                                        <div style="height: 30vh;">
                                            <img class="img-thumbnail" src="/assets/images/placeholder.png" style="height: 100%; object-fit: cover;" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade bg-dark-custom" id="pills-pr" role="tabpanel" aria-labelledby="pills-pr-tab" style="border-radius: 10px;">
                            <div class="nav-wrapper p-4">
                                <h1>Duplicate components from above.</h1>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-kesma" role="tabpanel" aria-labelledby="pills-kesma-tab">
                            <div class="nav-wrapper p-4">
                                <h1>Duplicate components from above.</h1>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-itdev" role="tabpanel" aria-labelledby="pills-itdev-tab">
                            <div class="nav-wrapper p-4">
                                <h1>Duplicate components from above.</h1>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-humaniora" role="tabpanel" aria-labelledby="pills-humaniora-tab">
                            <div class="nav-wrapper p-4">
                                <h1>Duplicate components from above.</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of News -->

    <!-- Media Partner -->
    <section id="media-partner" class="media-partner">
        <div class="container py-5">
            <div class="row mb-2 text-center">
                <div class="col">
                    <h3>Media Partner</h3>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <img src="/assets/images/placeholder.png" width="100%" alt="">
                </div>
                <div class="col-3">
                    <img src="/assets/images/placeholder.png" width="100%" alt="">
                </div>
                <div class="col-3">
                    <img src="/assets/images/placeholder.png" width="100%" alt="">
                </div>
                <div class="col-3">
                    <img src="/assets/images/placeholder.png" width="100%" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End of Media Partner -->
</main>

<?= $this->endSection(); ?>