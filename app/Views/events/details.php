<?= $this->extend('layouts/main/template'); ?>

<?= $this->section('content'); ?>

<main>
    <section id="event-detail" class="event-detail py-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col">
                    <a class="text-white" href="/events"><i class="fas fa-arrow-left"></i> Back to Events Page</a>
                </div>
            </div>
            <div class="row card flex-row mx-1 px-2 pt-4 pb-2">
                <div class="col-md-3">
                    <a href="/assets/images/event-poster/<?= $event['event_poster']; ?>" data-toggle="lightbox" data-gallery="<?= $event['event_title']; ?>">
                        <img class="img-thumbnail mb-3" src="/assets/images/event-poster/<?= $event['event_poster']; ?>" width="100%" alt="Poster Event">
                    </a>
                </div>
                <div class="col-md-9">
                    <div class="mb-1">
                        <span class="badge bg-secondary-custom"><?= $event['category_name']; ?></span>
                    </div>
                    <h1 class="mb-2"><?= $event['event_title']; ?></h1>
                    <table>
                        <tr>
                            <th>Mulai</th>
                            <td>:&nbsp;</td>
                            <td><?= strftime("%A, %e %B %Y - %H:%M", strtotime($event['event_start_date'])); ?></td>
                        </tr>
                        <tr>
                            <th>Selesai</th>
                            <td>:&nbsp;</td>
                            <td><?= strftime("%A, %e %B %Y - %H:%M", strtotime($event['event_end_date'])); ?></td>
                        </tr>
                    </table>
                    <a href="<?= $event['event_form_link']; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-tertiary-custom btn-block rounded-pill mt-3"><i class="fas fa-edit"></i> Register</a>
                </div>
                <div class="col-12 mt-2">
                    <hr style="width: 100%;" class="toggle-hr-color">
                    <div><?= htmlspecialchars_decode($event['event_body']); ?></div>
                </div>
            </div>
        </div>
    </section>
</main>

<?= $this->endSection(); ?>