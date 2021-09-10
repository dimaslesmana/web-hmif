<?= $this->extend('layouts/dashboard/template'); ?>

<?= $this->section('content'); ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Daftar Anggota</h1>
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
                                <a href="/dashboard/member/add" class="btn btn-primary"><i class="fas fa-plus"></i> Anggota baru</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama</th>
                                            <th>Jurusan</th>
                                            <th>Divisi</th>
                                            <th>Jabatan</th>
                                            <th>Angkatan</th>
                                            <th>Email</th>
                                            <th>ID LINE</th>
                                            <th>Tipe</th>
                                            <th>Foto</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($members as $key => $m) : ?>
                                            <tr>
                                                <td><?= $key + 1; ?></td>
                                                <td><?= $m['member_name']; ?></td>
                                                <td><?= $m['member_major']; ?></td>
                                                <td><?= $m['division_name']; ?></td>
                                                <td><?= $m['member_position']; ?></td>
                                                <td><?= $m['member_year']; ?></td>
                                                <td><?= $m['member_email']; ?></td>
                                                <td><?= $m['member_line']; ?></td>
                                                <td><?= $m['member_type']; ?></td>
                                                <td>
                                                    <a href="/assets/images/anggota/<?= $m['member_image']; ?>">
                                                        <img src="/assets/images/anggota/<?= $m['member_image']; ?>" class="img-fluid mb-2" alt="<?= $m['member_name']; ?>" width="250" />
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="btn-group btn-block">
                                                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Manage
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <div class="dropdown-item">
                                                                <a class="btn btn-warning btn-block" href="/dashboard/member/edit/<?= $m['id']; ?>"><i class="fas fa-edit"></i></a>
                                                            </div>
                                                            <form action="/dashboard/member/delete/<?= $m['id']; ?>" method="post" class="dropdown-item">
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
                                            <th>Nama</th>
                                            <th>Jurusan</th>
                                            <th>Divisi</th>
                                            <th>Jabatan</th>
                                            <th>Angkatan</th>
                                            <th>Email</th>
                                            <th>ID LINE</th>
                                            <th>Tipe</th>
                                            <th>Foto</th>
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