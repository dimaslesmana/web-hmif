<?= $this->extend('layouts/main/template'); ?>

<?= $this->section('content'); ?>

<main>
    <!-- Event List -->
    <section id="event" class="event py-5">
        <div class="container">
            <div class="row mb-4 text-center text-white-custom">
                <div class="col">
                    <h3>Events</h3>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="event-card-container">
                        <div class="row">
                            <?php foreach ($events as $event) : ?>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card my-2">
                                        <img class="card-img-top" src="/assets/images/event-poster/<?= $event['event_poster']; ?>" alt="event poster">
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <span class="badge bg-secondary-custom"><?= $event['category_name']; ?></span>
                                            </div>
                                            <h5 class="card-title mb-3"><?= $event['event_title']; ?></h5>
                                            <div id="<?= $event['event_id']; ?>" hidden><?= $event['event_body']; ?></div>
                                            <p class="card-text">test</p>
                                            <!-- <div class="row">
                                                <div class="col-2">
                                                    <small class="card-text">Start</small>
                                                </div>
                                                <div class="col-10">
                                                    <small class="card-text">: <?= strftime("%A, %e %B %Y - %H:%M", strtotime($event['event_start_date'])); ?></small>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-2">
                                                    <small class="card-text">End</small>
                                                </div>
                                                <div class="col-10">
                                                    <small class="card-text">: <?= strftime("%A, %e %B %Y - %H:%M", strtotime($event['event_end_date'])); ?></small>
                                                </div>
                                            </div> -->
                                        </div>
                                        <div class="card-footer">
                                            <div class="row align-items-center p-2">
                                                <div class="col-6">
                                                    <small class="card-text"><small class="text-muted">X days left / Finished</small></small>
                                                </div>
                                                <div class="col-6 text-right">
                                                    <a href="/events/<?= $event['event_id']; ?>" class="btn btn-primary-custom rounded-pill"><i class="fas fa-info-circle"></i> Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Event List -->
</main>

<?= $this->endSection(); ?>