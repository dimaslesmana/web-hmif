<?= $this->extend('layouts/dashboard/template'); ?>

<?= $this->section('content'); ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Daftar Event</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Daftar Event</h3>
                            <div class="card-tools">
                                <a href="/dashboard/events/add" class="btn btn-primary"><i class="fas fa-plus"></i> Event baru</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>ID</th>
                                        <th>Nama / Judul</th>
                                        <th>Kategori</th>
                                        <th>Tanggal & Waktu Mulai</th>
                                        <th>Tanggal & Waktu Selesai</th>
                                        <th>Link Google Form</th>
                                        <th>Poster</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($events as $key => $event) : ?>
                                        <tr>
                                            <td><?= $key + 1; ?></td>
                                            <td><?= $event['event_id']; ?></td>
                                            <td><a href="/events/<?= $event['event_id']; ?>" target="_blank"><?= $event['event_title']; ?></a></td>
                                            <td><?= $event['category_name']; ?></td>
                                            <td><?= $event['event_start_date']; ?></td>
                                            <td><?= $event['event_end_date']; ?></td>
                                            <td><a href="<?= $event['event_form_link']; ?>" target="_blank">Click here</a></td>
                                            <td>
                                                <a href="/assets/images/event-poster/<?= $event['event_poster']; ?>">
                                                    <img src="/assets/images/event-poster/<?= $event['event_poster']; ?>" class="img-fluid mb-2" alt="<?= $event['event_title']; ?>" width="250" />
                                                </a>
                                            </td>

                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>ID</th>
                                        <th>Nama / Judul</th>
                                        <th>Kategori</th>
                                        <th>Tanggal & Waktu Mulai</th>
                                        <th>Tanggal & Waktu Selesai</th>
                                        <th>Link Google Form</th>
                                        <th>Poster</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection(); ?>