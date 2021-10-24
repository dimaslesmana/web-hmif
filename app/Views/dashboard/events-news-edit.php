<?= $this->extend('layouts/dashboard/template'); ?>

<?= $this->section('content'); ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Edit Event News</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Event News - #<?= $event_news['event_news_id']; ?></h3>
                </div>
                <form action="/dashboard/events-news/edit/submit" method="post" autocomplete="off" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="event_name">Nama Event</label>
                                    <input type="text" name="event_name" id="event_name" class="form-control<?= ($validation->hasError('event_name')) ? ' is-invalid' : ''; ?>" placeholder="Masukkan nama event" value="<?= $event_news['event_name']; ?>" required autofocus>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('event_name'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="event_description">Deskripsi Event</label>
                                    <input type="text" name="event_description" id="event_description" class="form-control<?= ($validation->hasError('event_description')) ? ' is-invalid' : ''; ?>" placeholder="Masukkan deskripsi event" value="<?= $event_news['event_description']; ?>" required>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('event_description'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="event_date">Tanggal Event</label>
                                    <input type="text" name="event_date" id="event_date" class="form-control<?= ($validation->hasError('event_date')) ? ' is-invalid' : ''; ?>" placeholder="Masukkan tanggal event" value="<?= $event_news['event_date']; ?>" data-datepicker required>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('event_date'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="event_division">Divisi Event</label>
                                    <select name="event_division" id="event_division" class="form-control<?= ($validation->hasError('event_division')) ? ' is-invalid' : ''; ?>" required>
                                        <option selected disabled>Pilih divisi event</option>
                                        <?php foreach ($divisions as $division) : ?>
                                            <?php if ($division['division_name'] === $event_news['event_division']) : ?>
                                                <option value="<?= $division['id']; ?>" selected><?= $division['division_name']; ?></option>
                                            <?php else : ?>
                                                <option value="<?= $division['id']; ?>"><?= $division['division_name']; ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('event_division'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="event_photo_file">Foto Event</label>
                                <input type="file" name="event_photo_file[]" id="event_photo_file" class="filepond" accept=".jpg,.jpeg,.png" multiple required>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="event_news_id" value="<?= $event_news['event_news_id']; ?>">
                        <button type="submit" class="btn btn-primary float-right" name="submit">Submit</button>
                    </div>

                    <?php foreach ($event_news['event_photos'] as $photo) : ?>
                        <input type="hidden" name="event_photo[]" value="<?= $photo; ?>">
                    <?php endforeach; ?>
                </form>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection(); ?>