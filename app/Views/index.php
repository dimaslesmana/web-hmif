<?= $this->extend('layouts/main/template'); ?>

<?= $this->section('content'); ?>

<main>
    <!-- Carousel -->
    <div class="owl-carousel owl-theme" id="landing-carousel">
        <?php foreach ($events as $event) : ?>
            <div>
                <div class="carousel-img-container">
                    <img src="/assets/images/event-poster/<?= $event['event_poster']; ?>" alt="Poster <?= $event['event_title']; ?>">
                </div>
                <div class="d-flex flex-wrap justify-content-between p-4">
                    <div>
                        <div>
                            <span class="badge bg-secondary-custom"><?= $event['category_name']; ?></span>
                        </div>
                        <p class="my-auto"><?= $event['event_title']; ?></p>
                    </div>
                    <div class="my-auto">
                        <a class="btn btn-tertiary-custom rounded-pill" href="<?= $event['event_form_link']; ?>" target="_blank" rel="noopener noreferrer"><i class="fas fa-edit"></i> Register Now</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <!-- End of Carousel -->

    <!-- Timeline -->
    <section id="timeline" class="timeline bg-primary-custom">
        <div class="container py-5">
            <div class="row mb-2 text-center">
                <div class="col">
                    <h3>Timeline</h3>
                    <hr class="toggle-hr-color">
                </div>
            </div>
            <div class="row mb-2">
                <div class="col">
                    <div class="horizontal-timeline" id="timeline-hmif">
                        <div class="events-content">
                            <ol style="list-style: none;">
                                <?php foreach ($events as $event) : ?>
                                    <li class="bg-tertiary-custom" data-horizontal-timeline='{"date": "<?= strftime("%d/%m/%YT%H:%M", strtotime($event['event_start_date'])); ?>", "customDisplay": "<?= strftime("%A<br>%e %B", strtotime($event['event_start_date'])); ?>"}'>
                                        <h2><?= $event['event_title']; ?></h2>
                                    </li>
                                <?php endforeach; ?>
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