<?= $this->extend('layouts/dashboard/template'); ?>

<?= $this->section('content'); ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Tambah Anggota</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tambah Anggota Baru</h3>
                </div>
                <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="member_name">Nama</label>
                                    <input type="text" name="member_name" id="member_name" class="form-control<?= ($validation->hasError('member_name')) ? ' is-invalid' : ''; ?>" placeholder="Nama" required autofocus>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('member_name'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="member_major">Jurusan</label>
                                    <select name="member_major" id="member_major" class="form-control<?= ($validation->hasError('member_major')) ? ' is-invalid' : ''; ?>" required>
                                        <option selected disabled>Pilih jurusan</option>
                                        <?php foreach ($list_major as $major) : ?>
                                            <option value="<?= $major; ?>"><?= $major; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('member_major'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="member_division">Divisi</label>
                                    <select name="member_division" id="member_division" class="form-control<?= ($validation->hasError('member_division')) ? ' is-invalid' : ''; ?>" required>
                                        <option selected disabled>Pilih divisi</option>
                                        <?php foreach ($divisions as $division) : ?>
                                            <option value="<?= $division['id']; ?>"><?= $division['division_name']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('member_division'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="member_position">Jabatan</label>
                                    <input type="text" name="member_position" id="member_position" class="form-control<?= ($validation->hasError('member_position')) ? ' is-invalid' : ''; ?>" placeholder="Jabatan" required>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('member_position'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="member_type">Tipe</label>
                                    <select name="member_type" id="member_type" class="form-control<?= ($validation->hasError('member_type')) ? ' is-invalid' : ''; ?>" required>
                                        <option selected disabled>Pilih tipe</option>
                                        <option value="HMIF">HMIF</option>
                                        <option value="SERUM">SERUM</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('member_type'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="member_year">Angkatan</label>
                                    <select name="member_year" id="member_year" class="form-control<?= ($validation->hasError('member_year')) ? ' is-invalid' : ''; ?>" required>
                                        <option selected disabled>Pilih tahun angkatan</option>
                                        <?php foreach ($list_year as $year) : ?>
                                            <option value="<?= $year; ?>"><?= $year; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('member_year'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="member_email">Email</label>
                                    <input type="text" name="member_email" id="member_email" class="form-control<?= ($validation->hasError('member_email')) ? ' is-invalid' : ''; ?>" placeholder="Email" required>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('member_email'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="member_line">ID LINE</label>
                                    <input type="text" name="member_line" id="member_line" class="form-control<?= ($validation->hasError('member_line')) ? ' is-invalid' : ''; ?>" placeholder="ID LINE">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('member_line'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <img src="/assets/images/anggota/avatar-placeholder.png" alt="Foto preview" class="img-thumbnail img-preview">
                            </div>
                            <div class="col-8">
                                <div class="form-group">
                                    <label for="member_image">Foto</label>
                                    <div class="custom-file">
                                        <label for="member_image" class="custom-file-label">Pilih foto</label>
                                        <input type="file" name="member_image" id="member_image" class="custom-file-input<?= ($validation->hasError('member_image')) ? ' is-invalid' : ''; ?>" accept=".jpg,.jpeg,.png" onchange="previewImage(this)">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('member_image'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <?= csrf_field(); ?>
                        <button type="submit" class="btn btn-primary float-right" name="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection(); ?>