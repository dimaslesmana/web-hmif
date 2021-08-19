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
                                        <th>Action</th>
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
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info">Manage</button>
                                                    <button type="button" class="btn btn-info dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown">
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <div class="dropdown-menu" role="menu">
                                                        <a href="/dashboard/events/edit/<?= $event['event_id']; ?>" class="btn btn-sm btn-warning btn-block"><i class="fas fa-edit"></i></a>
                                                        <form action="/dashboard/events/delete/<?= $event['event_id']; ?>" method="post" class="dropdown-item">
                                                            <?= csrf_field(); ?>
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <button type="submit" class="btn btn-sm btn-danger btn-block" onclick="return confirm('Are you sure?');"><i class="fas fa-trash"></i></button>
                                                        </form>
                                                    </div>
                                                </div>
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
                                        <th>Action</th>
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