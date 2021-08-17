<?= $this->extend('layouts/main/template'); ?>

<?= $this->section('content'); ?>

<main>
    <section id="detail-event" class="detail-event">
        <div class="container">
            <h1><?= $event['event_title']; ?></h1>
            <h2><?= $event['category_name']; ?></h2>
            <p>Last Edit: <?= $event['updated_at']; ?></p>
            <p>Start Date <?= $event['event_start_date']; ?></p>
            <p>End Date <?= $event['event_end_date']; ?></p>
            <p>Form Link <a href="<?= $event['event_form_link']; ?>"><?= $event['event_form_link']; ?></a></p>
            <img src="/assets/images/event-poster/<?= $event['event_poster']; ?>" alt="Poster Event">
            <div><?= htmlspecialchars_decode($event['event_body']); ?></div>
        </div>
    </section>
</main>

<?= $this->endSection(); ?>