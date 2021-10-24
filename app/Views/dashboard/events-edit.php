<?= $this->extend('layouts/dashboard/template'); ?>

<?= $this->section('content'); ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Edit Event</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Event - #<?= $event['event_id']; ?></h3>
                </div>
                <form action="/dashboard/events/edit/submit" method="post" enctype="multipart/form-data" autocomplete="off">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div class="form-group">
                                    <label for="event_title">Nama / Judul</label>
                                    <input type="text" name="event_title" id="event_title" class="form-control<?= ($validation->hasError('event_title')) ? ' is-invalid' : ''; ?>" placeholder="Masukkan Nama / Judul event" value="<?= $event['event_title']; ?>" required autofocus>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('event_title'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="event_categories">Kategori</label>
                                    <select name="event_categories" id="event_categories" class="form-control<?= ($validation->hasError('event_categories')) ? ' is-invalid' : ''; ?>" required>
                                        <option disabled>Pilih kategori event</option>
                                        <?php foreach ($event_categories as $category) : ?>
                                            <?php if ($category['id'] === $event['event_category_id']) : ?>
                                                <option value="<?= $category['id']; ?>" selected><?= $category['category_name']; ?></option>
                                            <?php else : ?>
                                                <option value="<?= $category['id']; ?>"><?= $category['category_name']; ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('event_categories'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Body</label>
                                    <div id="ckeditor-toolbar-container"></div>
                                    <div id="ckeditor-container"></div>
                                    <textarea name="event_body" id="event_body" class="form-control<?= ($validation->hasError('event_body')) ? ' is-invalid' : ''; ?>" style="display: none;"><?= htmlspecialchars_decode($event['event_body']); ?></textarea>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('event_body'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="event_start_date">Tanggal & Waktu Mulai</label>
                                    <input type="text" name="event_start_date" id="event_start_date" class="form-control<?= ($validation->hasError('event_start_date')) ? ' is-invalid' : ''; ?>" placeholder="Masukkan tanggal & waktu mulai" value="<?= $event['event_start_date']; ?>" data-datetimepicker required>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('event_start_date'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="event_end_date">Tanggal & Waktu Selesai</label>
                                    <input type="text" name="event_end_date" id="event_end_date" class="form-control<?= ($validation->hasError('event_end_date')) ? ' is-invalid' : ''; ?>" placeholder="Masukkan tanggal & waktu selesai" value="<?= $event['event_end_date']; ?>" data-datetimepicker required>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('event_end_date'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="event_form_link">Link Google Form</label>
                                    <input type="text" name="event_form_link" id="event_form_link" class="form-control<?= ($validation->hasError('event_form_link')) ? ' is-invalid' : ''; ?>" placeholder="Contoh: https://docs.google.com/forms/d/e/1FAIpQLSfBRmhcuDf0NLmxiXodz8eiSF7zBFC8dDYhNgEdwZy6LtPSRw/viewform" value="<?= $event['event_form_link']; ?>" required>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('event_form_link'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <img src="/assets/images/event-poster/<?= $event['event_poster']; ?>" alt="Poster preview" class="img-thumbnail img-preview">
                            </div>
                            <div class="col-8">
                                <div class="form-group">
                                    <label for="event_poster">Poster</label>
                                    <div class="custom-file">
                                        <label for="event_poster" class="custom-file-label"><?= $event['event_poster']; ?></label>
                                        <input type="file" name="event_poster" id="event_poster" class="custom-file-input<?= ($validation->hasError('event_poster')) ? ' is-invalid' : ''; ?>" accept=".jpg,.jpeg,.png" onchange="previewImage(this)">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('event_poster'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="event_id" value="<?= $event['event_id']; ?>">
                        <input type="hidden" name="old_poster_image" value="<?= $event['event_poster']; ?>">
                        <button type="submit" class="btn btn-primary float-right" name="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection(); ?>