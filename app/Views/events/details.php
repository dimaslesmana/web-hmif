<?= $this->extend('layouts/main/template'); ?>

<?= $this->section('content'); ?>

<main>
    <section id="event-detail" class="event-detail bg-primary-custom py-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col">
                    <a class="text-white" href="/events"><i class="fas fa-arrow-left"></i> Back to Events Page</a>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-3 image">
                    <img class="img-thumbnail mb-3" src="/assets/images/event-poster/<?= $event['event_poster']; ?>" width="100%" alt="Poster Event">
                </div>
                <div class="col-md-9 detail">
                    <div class="mb-2">
                        <span class="badge bg-secondary-custom"><?= $event['category_name']; ?></span>
                    </div>
                    <h1 class="mb-3"><?= $event['event_title']; ?></h1>
                    <div class="row">
                        <div class="col-2">
                            <p>Mulai</p>
                        </div>
                        <div class="col-10">
                            <p>: <?= strftime("%A, %e %B %Y @ %H:%M", strtotime($event['event_start_date'])); ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <p>Selesai</p>
                        </div>
                        <div class="col-10">
                            <p>: <?= strftime("%A, %e %B %Y @ %H:%M", strtotime($event['event_end_date'])); ?></p>
                        </div>
                    </div>
                    <a href="<?= $event['event_form_link']; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-tertiary-custom btn-block rounded-pill mt-3"><i class="fas fa-edit"></i> Register</a>
                </div>
            </div>
            <hr style="width: 100%;" class="toggle-hr-color">
            <div class="text-white-custom"><?= htmlspecialchars_decode($event['event_body']); ?></div>
        </div>
    </section>
</main>

<?= $this->endSection(); ?>