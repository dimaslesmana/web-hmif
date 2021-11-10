<?= $this->extend('layouts/main/template'); ?>

<?= $this->section('content'); ?>

<main>
    <!-- Carousel -->
    <div class="owl-carousel owl-theme" id="landing-carousel">
        <?php foreach ($events as $event) : ?>
            <div class="landing-carousel mt-3 mb-2 mx-2">
                <img src="/assets/images/event-poster/<?= $event['event_poster']; ?>" alt="Poster <?= $event['event_title']; ?>" style="border-radius: 8px 8px 0 0;">
                <div class=" p-4">
                    <div class="my-1">
                        <div class="mb-1">
                            <span class="badge bg-secondary-custom"><?= $event['category_name']; ?></span>
                        </div>
                        <p><?= $event['event_title']; ?></p>
                    </div>
                    <div class="d-flex">
                        <a class="btn btn-tertiary-custom rounded-pill flex-grow-1 mr-1" href="<?= $event['event_form_link']; ?>" target="_blank" rel="noopener noreferrer"><i class="fas fa-edit"></i> Register</a>
                        <a class="btn btn-primary-custom rounded-pill flex-grow-1 ml-1" href="/events/<?= $event['event_id']; ?>"><i class="fas fa-info-circle"></i> Detail</a>
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
                                    <li class="bg-secondary-custom" data-horizontal-timeline='{"date": "<?= strftime("%d/%m/%YT%H:%M", strtotime($event['event_start_date'])); ?>", "customDisplay": "<?= strftime("%A<br>%e %B", strtotime($event['event_start_date'])); ?>"}'>
                                        <h2><?= $event['event_title']; ?></h2>
                                        <table class="text-left mx-auto">
                                            <tbody>
                                                <tr>
                                                    <th>Mulai</th>
                                                    <td>:&nbsp;</td>
                                                    <td><?= strftime("%A, %e %B %Y - %H:%M WIB", strtotime($event['event_start_date'])); ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Selesai</th>
                                                    <td>:&nbsp;</td>
                                                    <td><?= strftime("%A, %e %B %Y - %H:%M WIB", strtotime($event['event_end_date'])); ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
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