<?= $this->extend('layouts/main/template'); ?>

<?= $this->section('content'); ?>

<main>
    <section id="contact" class="contact bg-primary-custom">
        <div class="container py-5">
            <div class="row text-center mb-2">
                <div class="col">
                    <h3>Contact Us</h3>
                    <hr class="toggle-hr-color">
                </div>
            </div>

            <?php if (session()->getFlashdata('contact-alert-success')) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= session()->getFlashdata('contact-alert-success') ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <?php if (session()->getFlashdata('contact-alert-danger')) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= session()->getFlashdata('contact-alert-danger') ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>

            <div class="row mb-2">
                <div class="col">
                    <form action="" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control<?= ($validation->hasError('name')) ? ' is-invalid' : ''; ?>" id="name" name="name" placeholder="Masukkan Nama Anda" required autofocus>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('name'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control<?= ($validation->hasError('email')) ? ' is-invalid' : ''; ?>" id="email" name="email" placeholder="Masukkan Email Anda" required>
                            <div class="invalid-feedback">
                                <?= $validation->getError('email'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subjek</label>
                            <input type="text" class="form-control<?= ($validation->hasError('subject')) ? ' is-invalid' : ''; ?>" id="subject" name="subject" required>
                            <div class="invalid-feedback">
                                <?= $validation->getError('subject'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message">Pesan</label>
                            <textarea class="form-control<?= ($validation->hasError('message')) ? ' is-invalid' : ''; ?>" id="message" name="message" rows="7" required></textarea>
                            <div class="invalid-feedback">
                                <?= $validation->getError('message'); ?>
                            </div>
                        </div>
                        <?= csrf_field(); ?>
                        <button type="submit" class="btn btn-tertiary-custom rounded-pill float-right"><i class="fas fa-paper-plane"></i> Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<?= $this->endSection(); ?>