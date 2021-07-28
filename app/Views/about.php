<?= $this->extend('layouts/main/template'); ?>

<?= $this->section('content'); ?>

<main>
    <!-- About Us -->
    <section id="about" class="about">
        <div class="container" style="padding-top: 10vh;">
            <div class="row mb-4 pt-5 text-center text-white">
                <div class="col">
                    <h3>About Us</h3>
                    <hr>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="hmif-tab" data-toggle="tab" href="#hmif" role="tab" aria-controls="hmif" aria-selected="true">HMIF</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="serum-tab" data-toggle="tab" href="#serum" role="tab" aria-controls="serum" aria-selected="false">SERUM</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <!-- HMIF -->
                        <div class="tab-pane fade show active" id="hmif" role="tabpanel" aria-labelledby="hmif-tab">
                            <div class="container text-white pb-4">
                                <div class="row mb-4 pt-5 text-justify">
                                    <div class="col-lg-6">
                                        <h5 class="font-weight-bold text-center">Visi</h5>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi cupiditate explicabo ab soluta, ullam sequi laboriosam vel ea pariatur labore, atque porro, minus esse nam aperiam! Corporis quas aliquid laudantium.</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <h5 class="font-weight-bold text-center">Misi</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto cumque id unde quod doloremque rem, consequuntur dignissimos suscipit vel in neque ab, sequi beatae, fuga laborum quidem nostrum temporibus repellendus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of HMIF -->

                        <!-- SERUM -->
                        <div class="tab-pane fade" id="serum" role="tabpanel" aria-labelledby="serum-tab">
                            <div class="container text-white pb-4">
                                <div class="row mb-4 pt-5">
                                    <div class="col-lg-3">
                                        <img src="/assets/images/placeholder.png" width="200" alt="logo serum">
                                    </div>
                                    <div class="col-lg-9 text-justify">
                                        <h5 class="font-weight-bold text-center">Tujuan</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto cumque id unde quod doloremque rem, consequuntur dignissimos suscipit vel in neque ab, sequi beatae, fuga laborum quidem nostrum temporibus repellendus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of SERUM -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of About Us -->

    <section id="struktur-himpunan" class="struktur-himpunan bg-primary-custom">
        <div class="container py-5">
            <div class="row mb-2 text-center text-white">
                <div class="col">
                    <h3>Struktur Himpunan</h3>
                    <hr>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 p-3 mx-3 my-1 bg-dark-custom" style="border-radius: 10px;">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-bph-tab" data-toggle="pill" href="#v-pills-bph" role="tab" aria-controls="v-pills-bph" aria-selected="true">Badan Pengurus Harian</a>
                        <a class="nav-link" id="v-pills-pr-tab" data-toggle="pill" href="#v-pills-pr" role="tab" aria-controls="v-pills-pr" aria-selected="false">Public Relation</a>
                        <a class="nav-link" id="v-pills-kesma-tab" data-toggle="pill" href="#v-pills-kesma" role="tab" aria-controls="v-pills-kesma" aria-selected="false">Kesejahteraan Mahasiswa</a>
                        <a class="nav-link" id="v-pills-humaniora-tab" data-toggle="pill" href="#v-pills-humaniora" role="tab" aria-controls="v-pills-humaniora" aria-selected="false">Humaniora</a>
                        <a class="nav-link" id="v-pills-itdev-tab" data-toggle="pill" href="#v-pills-itdev" role="tab" aria-controls="v-pills-itdev" aria-selected="false">IT Development</a>
                    </div>
                </div>
                <div class="col-lg-8 my-1">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-bph" role="tabpanel" aria-labelledby="v-pills-bph-tab">
                            <div class="wrapper">
                                <div class="cardWrapper">
                                    <div class="card">
                                        <div class="card-overlay bg-transparent text-white">
                                            <img src="/assets/images/placeholder.png" class="card-img" alt="profile1">
                                            <div class="card-img-overlay">
                                                <p class="card-title">Nama - Jabatan</p>
                                            </div>
                                        </div>
                                        <div class="card-body text-center">
                                            <ul>
                                                <li class="mx-2"><a href="#" target="_blank"><i class="fas fa-envelope" aria-hidden="true"></i></a></li>
                                                <li class="mx-2"><a href="#" target="_blank"><i class="fab fa-line" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-overlay bg-transparent text-white">
                                            <img src="/assets/images/placeholder.png" class="card-img" alt="profile2">
                                            <div class="card-img-overlay">
                                                <p class="card-title">Nama - Jabatan</p>
                                            </div>
                                        </div>
                                        <div class="card-body text-center">
                                            <ul>
                                                <li class="mx-2"><a href="#" target="_blank"><i class="fas fa-envelope" aria-hidden="true"></i></a></li>
                                                <li class="mx-2"><a href="#" target="_blank"><i class="fab fa-line" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-overlay bg-transparent text-white">
                                            <img src="/assets/images/placeholder.png" class="card-img" alt="profile3">
                                            <div class="card-img-overlay">
                                                <p class="card-title">Nama - Jabatan</p>
                                            </div>
                                        </div>
                                        <div class="card-body text-center">
                                            <ul>
                                                <li class="mx-2"><a href="#" target="_blank"><i class="fas fa-envelope" aria-hidden="true"></i></a></li>
                                                <li class="mx-2"><a href="#" target="_blank"><i class="fab fa-line" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-overlay bg-transparent text-white">
                                            <img src="/assets/images/placeholder.png" class="card-img" alt="profile4">
                                            <div class="card-img-overlay">
                                                <p class="card-title">Nama - Jabatan</p>
                                            </div>
                                        </div>
                                        <div class="card-body text-center">
                                            <ul>
                                                <li class="mx-2"><a href="#" target="_blank"><i class="fas fa-envelope" aria-hidden="true"></i></a></li>
                                                <li class="mx-2"><a href="#" target="_blank"><i class="fab fa-line" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-pr" role="tabpanel" aria-labelledby="v-pills-pr-tab">
                            <img src="/assets/images/placeholder.png" width="300" alt="">
                        </div>
                        <div class="tab-pane fade" id="v-pills-kesma" role="tabpanel" aria-labelledby="v-pills-kesma-tab">
                            <img src="/assets/images/placeholder.png" width="300" alt="">
                        </div>
                        <div class="tab-pane fade" id="v-pills-humaniora" role="tabpanel" aria-labelledby="v-pills-humaniora-tab">
                            <img src="/assets/images/placeholder.png" width="300" alt="">
                        </div>
                        <div class="tab-pane fade" id="v-pills-itdev" role="tabpanel" aria-labelledby="v-pills-itdev-tab">
                            <img src="/assets/images/placeholder.png" width="300" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?= $this->endSection(); ?>