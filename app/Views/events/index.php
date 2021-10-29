<?= $this->extend('layouts/main/template'); ?>

<?= $this->section('content'); ?>

<main>
    <!-- Event List -->
    <section id="event" class="event py-5">
        <div class="container">
            <div class="row mb-4 text-center text-white-custom">
                <div class="col">
                    <h3>Events</h3>
                    <hr class="toggle-hr-color">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="event-card-container">
                        <div class="row">
                            <?php foreach ($events as $event) : ?>
                                <div class="col-lg-4 col-md-6 my-2">
                                    <div class="card">
                                        <img class="card-img-top" src="/assets/images/event-poster/<?= $event['event_poster']; ?>" alt="Poster Event">
                                        <div class="card-body">
                                            <div class="mb-2">
                                                <span class="badge bg-secondary-custom"><?= $event['category_name']; ?></span>
                                            </div>
                                            <h5 class="card-title mb-2"><strong><a href="/events/<?= $event['event_id']; ?>"><?= $event['event_title']; ?></a></strong></h5>
                                            <small class="card-text"><?= ellipsize(htmlspecialchars_decode($event['event_body']), 128); ?></small>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row align-items-center p-2">
                                                <div class="col-6">
                                                    <small class="card-text"><small class="text-muted"><?= $event['event_remaining_days']; ?></small></small>
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