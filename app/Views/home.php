<?= $this->extend('layouts/main/template'); ?>

<?= $this->section('content'); ?>

<main>
    <!-- Hero -->
    <div class="jumbotron jumbotron-fluid mb-0">
        <div class="container text-center">
            <img src="/assets/images/logo.png" class="" width="300" alt="HMIF">
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
                    <hr class="toggle-hr-color">
                </div>
            </div>
            <div class="row">
                <div class="col mb-4">
                    <ul class="nav nav-pills flex-column flex-lg-row nav-justified nav-wrapper p-2 mb-4" id="pills-tab" role="tablist">
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
                            <a class="nav-link" id="pills-humaniora-tab" data-toggle="pill" href="#pills-humaniora" role="tab" aria-controls="pills-humaniora" aria-selected="false">Humaniora</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-itdev-tab" data-toggle="pill" href="#pills-itdev" role="tab" aria-controls="pills-itdev" aria-selected="false">IT Dev</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-bph" role="tabpanel" aria-labelledby="pills-bph-tab">
                            <?php foreach ($event_news_bph as $item) : ?>
                                <div class="row mb-4">
                                    <div class="col-12">
                                        <h4><?= $item['event_name']; ?></h4>
                                        <hr style="width: 100%;" class="toggle-hr-color">
                                    </div>

                                    <div class="col-12 owl-carousel news-carousel owl-theme">
                                        <?php foreach ($item['event_photos'] as $photo) : ?>
                                            <img class="img-thumbnail" src="/assets/images/event-news/<?= $photo; ?>" alt="<?= $item['event_name']; ?>">
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <div class="tab-pane fade" id="pills-pr" role="tabpanel" aria-labelledby="pills-pr-tab" style="border-radius: 10px;">
                            <?php foreach ($event_news_pr as $item) : ?>
                                <div class="row mb-4">
                                    <div class="col-12">
                                        <h4><?= $item['event_name']; ?></h4>
                                        <hr style="width: 100%;" class="toggle-hr-color">
                                    </div>

                                    <div class="col-12 owl-carousel news-carousel owl-theme">
                                        <?php foreach ($item['event_photos'] as $photo) : ?>
                                            <img class="img-thumbnail" src="/assets/images/event-news/<?= $photo; ?>" alt="<?= $item['event_name']; ?>">
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <div class="tab-pane fade" id="pills-kesma" role="tabpanel" aria-labelledby="pills-kesma-tab">
                            <?php foreach ($event_news_kesma as $item) : ?>
                                <div class="row mb-4">
                                    <div class="col-12">
                                        <h4><?= $item['event_name']; ?></h4>
                                        <hr style="width: 100%;" class="toggle-hr-color">
                                    </div>

                                    <div class="col-12 owl-carousel news-carousel owl-theme">
                                        <?php foreach ($item['event_photos'] as $photo) : ?>
                                            <img class="img-thumbnail" src="/assets/images/event-news/<?= $photo; ?>" alt="<?= $item['event_name']; ?>">
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <div class="tab-pane fade" id="pills-humaniora" role="tabpanel" aria-labelledby="pills-humaniora-tab">
                            <?php foreach ($event_news_humaniora as $item) : ?>
                                <div class="row mb-4">
                                    <div class="col-12">
                                        <h4><?= $item['event_name']; ?></h4>
                                        <hr style="width: 100%;" class="toggle-hr-color">
                                    </div>

                                    <div class="col-12 owl-carousel news-carousel owl-theme">
                                        <?php foreach ($item['event_photos'] as $photo) : ?>
                                            <img class="img-thumbnail" src="/assets/images/event-news/<?= $photo; ?>" alt="<?= $item['event_name']; ?>">
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <div class="tab-pane fade" id="pills-itdev" role="tabpanel" aria-labelledby="pills-itdev-tab">
                            <?php foreach ($event_news_itdev as $item) : ?>
                                <div class="row mb-4">
                                    <div class="col-12">
                                        <h4><?= $item['event_name']; ?></h4>
                                        <hr style="width: 100%;" class="toggle-hr-color">
                                    </div>

                                    <div class="col-12 owl-carousel news-carousel owl-theme">
                                        <?php foreach ($item['event_photos'] as $photo) : ?>
                                            <img class="img-thumbnail" src="/assets/images/event-news/<?= $photo; ?>" alt="<?= $item['event_name']; ?>">
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of News -->

    <!-- Media Partner -->
    <section id="media-partner" class="media-partner">
        <div class="container pt-5">
            <div class="row mb-2 text-center">
                <div class="col">
                    <h3>Media Partners</h3>
                    <hr class="toggle-hr-color">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <img class="m-2" src="/assets/images/placeholder.png" style="max-width: 120px;" alt="">
                    <img class="m-2" src="/assets/images/placeholder.png" style="max-width: 120px;" alt="">
                    <img class="m-2" src="/assets/images/placeholder.png" style="max-width: 120px;" alt="">
                    <img class="m-2" src="/assets/images/placeholder.png" style="max-width: 120px;" alt="">
                    <img class="m-2" src="/assets/images/placeholder.png" style="max-width: 120px;" alt="">
                    <img class="m-2" src="/assets/images/placeholder.png" style="max-width: 120px;" alt="">
                </div>
            </div>
    </section>
    <!-- End of Media Partner -->
</main>

<?= $this->endSection(); ?>