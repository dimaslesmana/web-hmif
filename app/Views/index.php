<?= $this->extend('layouts/main/template'); ?>

<?= $this->section('content'); ?>

<main>
    <!-- Carousel -->
    <div class="owl-carousel owl-theme" id="landing-carousel">
        <div>
            <div class="carousel-img-container">
                <img src="/assets/images/placeholder-1000x400.jpg" alt="event1">
            </div>
            <div class="d-flex flex-wrap justify-content-between p-4">
                <p class="my-auto">Nama & Keterangan Event</p>
                <a class="btn btn-tertiary-custom rounded-pill" href="#">Register Now</a>
            </div>
        </div>
        <div>
            <div class="carousel-img-container">
                <img src="/assets/images/placeholder-1000x400.jpg" alt="event1">
            </div>
            <div class="d-flex flex-wrap justify-content-between p-4">
                <p class="my-auto">Nama & Keterangan Event</p>
                <a class="btn btn-tertiary-custom rounded-pill" href="#">Register Now</a>
            </div>
        </div>
        <div>
            <div class="carousel-img-container">
                <img src="/assets/images/placeholder-1000x400.jpg" alt="event1">
            </div>
            <div class="d-flex flex-wrap justify-content-between p-4">
                <p class="my-auto">Nama & Keterangan Event</p>
                <a class="btn btn-tertiary-custom rounded-pill" href="#">Register Now</a>
            </div>
        </div>
        <div>
            <div class="carousel-img-container">
                <img src="/assets/images/placeholder-1000x400.jpg" alt="event1">
            </div>
            <div class="d-flex flex-wrap justify-content-between p-4">
                <p class="my-auto">Nama & Keterangan Event</p>
                <a class="btn btn-tertiary-custom rounded-pill" href="#">Register Now</a>
            </div>
        </div>
    </div>
    <!-- End of Carousel -->

    <!-- Timeline -->
    <section id="timeline" class="timeline bg-primary-custom">
        <div class="container py-5">
            <div class="row mb-2 text-center">
                <div class="col">
                    <h3>Timeline</h3>
                    <hr>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col">
                    <div class="horizontal-timeline" id="timeline-hmif">
                        <div class="events-content">
                            <ol style="list-style: none;">
                                <li class="selected bg-tertiary-custom" data-horizontal-timeline='{"date": "16/10/2021", "customDisplay": "Sabtu<br>16 Oktober"}'>
                                    <h2>Timeline 1</h2>
                                    <p>Keterangan</p>
                                </li>
                                <li class="bg-tertiary-custom" data-horizontal-timeline='{"date": "17/10/2021", "customDisplay": "Minggu<br>17 Oktober"}'>
                                    <h2>Timeline 2</h2>
                                    <p>Keterangan</p>
                                </li>
                                <li class="bg-tertiary-custom" data-horizontal-timeline='{"date": "18/10/2021", "customDisplay": "Senin<br>18 Oktober"}'>
                                    <h2>Timeline 3</h2>
                                    <p>Keterangan</p>
                                </li>
                                <li class="bg-tertiary-custom" data-horizontal-timeline='{"date": "19/10/2021", "customDisplay": "Selasa<br>19 Oktober"}'>
                                    <h2>Timeline 4</h2>
                                    <p>Keterangan</p>
                                </li>
                                <li class="bg-tertiary-custom" data-horizontal-timeline='{"date": "20/10/2021", "customDisplay": "Rabu<br>20 Oktober"}'>
                                    <h2>Timeline 5</h2>
                                    <p>Keterangan</p>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Timeline -->
</main>

<?= $this->endSection(); ?>