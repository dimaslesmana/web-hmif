<?= $this->extend('layouts/main/template'); ?>

<?= $this->section('content'); ?>

<main>
    <section id="event-detail" class="event-detail bg-primary-custom py-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col">
                    <a class="btn btn-light-custom rounded-pill" href="/events"><i class="fas fa-arrow-left"></i> Back</a>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-3">
                    <img class="img-thumbnail mb-3" src="/assets/images/event-poster/<?= $event['event_poster']; ?>" width="100%" alt="Poster Event">
                </div>
                <div class="col-md-9">
                    <div class="mb-2">
                        <span class="badge bg-secondary-custom"><?= $event['category_name']; ?></span>
                    </div>
                    <h1><?= $event['event_title']; ?></h1>
                    <div class="row">
                        <div class="col-3">
                            <p>Start Date</p>
                        </div>
                        <div class="col-9">
                            <p>: <?= strftime("%A, %e %B %Y - %H:%M", strtotime($event['event_start_date'])); ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <p>End Date</p>
                        </div>
                        <div class="col-9">
                            <p>: <?= strftime("%A, %e %B %Y - %H:%M", strtotime($event['event_end_date'])); ?></p>
                        </div>
                    </div>
                    <a href="<?= $event['event_form_link']; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-tertiary-custom rounded-pill"><i class="fas fa-edit"></i> Register</a>
                </div>
            </div>
            <hr style="width: 100%;">
            <div><?= htmlspecialchars_decode($event['event_body']); ?></div>
        </div>
    </section>
</main>

<?= $this->endSection(); ?>