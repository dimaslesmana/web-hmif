<?= $this->extend('layouts/dashboard/template'); ?>

<?= $this->section('content'); ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Daftar Event News</h1>
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
                            <div class="card-tools mr-0">
                                <a href="/dashboard/events-news/add" class="btn btn-primary"><i class="fas fa-plus"></i> News baru</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>ID</th>
                                            <th>Nama Event</th>
                                            <th>Deskripsi</th>
                                            <th>Tanggal</th>
                                            <th>Divisi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($events_news as $key => $event) : ?>
                                            <tr>
                                                <td><?= $key + 1; ?></td>
                                                <td><?= $event['event_news_id']; ?></td>
                                                <td><?= $event['event_name']; ?></td>
                                                <td><?= $event['event_description']; ?></td>
                                                <td><?= $event['event_date']; ?></td>
                                                <td><?= $event['event_division']; ?></td>
                                                <td>
                                                    <div class="btn-group btn-block">
                                                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Manage
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <div class="dropdown-item">
                                                                <a class="btn btn-warning btn-block" href="/dashboard/events-news/edit/<?= $event['event_news_id']; ?>"><i class="fas fa-edit"></i></a>
                                                            </div>
                                                            <form action="/dashboard/events-news/delete/<?= $event['event_news_id']; ?>" method="post" class="dropdown-item">
                                                                <?= csrf_field(); ?>
                                                                <input type="hidden" name="_method" value="DELETE">
                                                                <button type="submit" class="btn btn-danger btn-block" onclick="return confirm('Are you sure?');"><i class="fas fa-trash"></i></button>
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
                                            <th>Nama Event</th>
                                            <th>Deskripsi</th>
                                            <th>Tanggal</th>
                                            <th>Divisi</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection(); ?>