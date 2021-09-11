<?= $this->extend('layouts/main/template'); ?>

<?= $this->section('content'); ?>

<main>
    <!-- About Us -->
    <section id="about" class="about">
        <div class="container">
            <div class="row mb-4 pt-5 text-center">
                <div class="col">
                    <h3>About Us</h3>
                    <hr>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="hmif-tab" data-toggle="tab" href="#hmif" role="tab" aria-controls="hmif" aria-selected="true">HMIF</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="serum-tab" data-toggle="tab" href="#serum" role="tab" aria-controls="serum" aria-selected="false">SERUM</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <!-- HMIF -->
                        <div class="tab-pane fade show active" id="hmif" role="tabpanel" aria-labelledby="hmif-tab">
                            <div class="container pb-4">
                                <div class="row mb-4 pt-5 text-justify">
                                    <div class="col-lg-6">
                                        <h5 class="font-weight-bold text-center">Visi</h5>
                                        <p>Mahasiswa informatika Universitas Multimedia Nusantara diharapkan dapat menjadi suatu kesatuan yang utuh dalam mewujudkan solidaritas dan sinergi.</p>
                                        <p>Selain itu mahasiswa informatika UMN bisa menjadi pribadi yang lebih aktif, berkompeten, kreatif, inovatif, dan mandiri.</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <h5 class="font-weight-bold text-center">Misi</h5>
                                        <ul>
                                            <li>Menaungi mahasiswa informatika UMN agar dapat menjadi pribadi yang bermafaat bagi masyarakat.</li>
                                            <li>Mempererat relasi antara mahasiswa dengan dosen dan staff untuk mencapai kesejahteraan sekaligus dapat membangun keharmonisan sebagai satu keluarga.</li>
                                            <li>Mengoptimalkan himpunan sebagai wadah aspirasi mahasiswa informatika UMN. </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of HMIF -->

                        <!-- SERUM -->
                        <div class="tab-pane fade" id="serum" role="tabpanel" aria-labelledby="serum-tab">
                            <div class="container pb-4">
                                <div class="row mb-4 pt-5">
                                    <div class="col-lg-3">
                                        <img src="/assets/images/serum-logo.png" width="200" alt="logo serum" style="margin-top: -32px;">
                                    </div>
                                    <div class="col-lg-9 text-justify">
                                        <h5 class="font-weight-bold">Tujuan</h5>
                                        <p>Tempat mahasiswa Informatika untuk melatih soft skill dengan mengembangkan kemampuan bersosialisasi dan berorganisasi mereka.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of SERUM -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of About Us -->

    <!-- Struktur Himpunan -->
    <section id="struktur-himpunan" class="struktur-himpunan bg-primary-custom">
        <div class="container py-5">
            <div class="row mb-2 text-center">
                <div class="col">
                    <h3>Struktur Himpunan</h3>
                    <hr>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 p-3 mx-3 my-1 nav-wrapper">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-bph-tab" data-toggle="pill" href="#v-pills-bph" role="tab" aria-controls="v-pills-bph" aria-selected="true">Badan Pengurus Harian</a>
                        <a class="nav-link" id="v-pills-pr-tab" data-toggle="pill" href="#v-pills-pr" role="tab" aria-controls="v-pills-pr" aria-selected="false">Public Relation</a>
                        <a class="nav-link" id="v-pills-kesma-tab" data-toggle="pill" href="#v-pills-kesma" role="tab" aria-controls="v-pills-kesma" aria-selected="false">Kesejahteraan Mahasiswa</a>
                        <a class="nav-link" id="v-pills-humaniora-tab" data-toggle="pill" href="#v-pills-humaniora" role="tab" aria-controls="v-pills-humaniora" aria-selected="false">Humaniora</a>
                        <a class="nav-link" id="v-pills-itdev-tab" data-toggle="pill" href="#v-pills-itdev" role="tab" aria-controls="v-pills-itdev" aria-selected="false">IT Development</a>
                    </div>
                </div>
                <div class="col-lg-8 my-1">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-bph" role="tabpanel" aria-labelledby="v-pills-bph-tab">
                            <div class="content-wrapper">
                                <div class="card-wrapper">
                                    <?php foreach ($anggota_hmif as $m) :
                                        if ($m['division_name'] === 'Badan Pengurus Harian') : ?>
                                            <div class="card">
                                                <div class="card-overlay bg-transparent text-white">
                                                    <img src="/assets/images/<?= $m['member_image'] ?>" class="card-img" alt="profile1" style="border: 4px solid hsl(207, 71%, 45%);">
                                                    <div class="card-img-overlay" data-member-name="<?= $m['member_name'] ?>" data-member-major="<?= $m['member_major'] ?>" data-member-year="<?= $m['member_year'] ?>" data-member-position="<?= $m['member_position'] ?>" data-member-type="<?= $m['member_type'] ?>" data-member-image="<?= $m['member_image'] ?>" data-toggle="modal" data-target="#memberModal">
                                                        <p class="card-title">Click to show detail</p>
                                                    </div>
                                                </div>
                                                <div class="card-body text-center">
                                                    <p class="font-weight-bold" style="background-color: hsl(207, 71%, 45%); border-radius: 10px"><?= $m['member_type'] ?></p>
                                                    <p class="card-title"><a href="#" data-toggle="modal" data-target="#memberModal"><?= $m['member_name'] ?></a></p>
                                                    <ul>
                                                        <li class="mx-2"><a href="mailto:<?= $m['member_email'] ?>" target="_blank"><i class="fas fa-envelope" aria-hidden="true"></i></a></li>
                                                        <li class="mx-2"><a href="https://liff.line.me/1645278921-kWRPP32q?accountId=<?= $m['member_line'] ?>&openerPlatform=native&openerKey=home%3Arecommend" target="_blank"><i class="fab fa-line" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                    <?php foreach ($anggota_serum as $m) :
                                        if ($m['division_name'] === 'Badan Pengurus Harian') : ?>
                                            <div class="card">
                                                <div class="card-overlay bg-transparent text-white">
                                                    <img src="/assets/images/<?= $m['member_image'] ?>" class="card-img" alt="profile1" style="border: 4px solid hsl(226, 38%, 38%);">
                                                    <div class="card-img-overlay" data-member-name="<?= $m['member_name'] ?>" data-member-major="<?= $m['member_major'] ?>" data-member-year="<?= $m['member_year'] ?>" data-member-position="<?= $m['member_position'] ?>" data-member-type="<?= $m['member_type'] ?>" data-member-image="<?= $m['member_image'] ?>" data-toggle="modal" data-target="#memberModal">
                                                        <p class="card-title">Click to show detail</p>
                                                    </div>
                                                </div>
                                                <div class="card-body text-center">
                                                    <p class="font-weight-bold" style="background-color: hsl(226, 38%, 38%); border-radius: 10px"><?= $m['member_type'] ?></p>
                                                    <p class="card-title"><a href="#" data-toggle="modal" data-target="#memberModal"><?= $m['member_name'] ?></a></p>
                                                    <ul>
                                                        <li class="mx-2"><a href="mailto:<?= $m['member_email'] ?>" target="_blank"><i class="fas fa-envelope" aria-hidden="true"></i></a></li>
                                                        <li class="mx-2"><a href="https://liff.line.me/1645278921-kWRPP32q?accountId=<?= $m['member_line'] ?>&openerPlatform=native&openerKey=home%3Arecommend" target="_blank"><i class="fab fa-line" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-pr" role="tabpanel" aria-labelledby="v-pills-pr-tab">
                            <div class="content-wrapper">
                                <div class="card-wrapper">
                                    <?php foreach ($anggota_hmif as $m) : ?>
                                        <?php if ($m['division_name'] === 'Public Relation') : ?>
                                            <div class="card">
                                                <div class="card-overlay bg-transparent text-white">
                                                    <img src="/assets/images/<?= $m['member_image'] ?>" class="card-img" alt="profile1" style="border: 4px solid hsl(207, 71%, 45%);">
                                                    <div class="card-img-overlay" data-member-name="<?= $m['member_name'] ?>" data-member-major="<?= $m['member_major'] ?>" data-member-year="<?= $m['member_year'] ?>" data-member-position="<?= $m['member_position'] ?>" data-member-type="<?= $m['member_type'] ?>" data-member-image="<?= $m['member_image'] ?>" data-toggle="modal" data-target="#memberModal">
                                                        <p class="card-title">Click to show detail</p>
                                                    </div>
                                                </div>
                                                <div class="card-body text-center">
                                                    <p class="font-weight-bold" style="background-color: hsl(207, 71%, 45%); border-radius: 10px"><?= $m['member_type'] ?></p>
                                                    <p class="card-title"><a href="#" data-toggle="modal" data-target="#memberModal"><?= $m['member_name'] ?></a></p>
                                                    <ul>
                                                        <li class="mx-2"><a href="mailto:<?= $m['member_email'] ?>" target="_blank"><i class="fas fa-envelope" aria-hidden="true"></i></a></li>
                                                        <li class="mx-2"><a href="https://liff.line.me/1645278921-kWRPP32q?accountId=<?= $m['member_line'] ?>&openerPlatform=native&openerKey=home%3Arecommend" target="_blank"><i class="fab fa-line" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                    <?php foreach ($anggota_serum as $m) :
                                        if ($m['division_name'] === 'Public Relation') : ?>
                                            <div class="card">
                                                <div class="card-overlay bg-transparent text-white">
                                                    <img src="/assets/images/<?= $m['member_image'] ?>" class="card-img" alt="profile1" style="border: 4px solid hsl(226, 38%, 38%);">
                                                    <div class="card-img-overlay" data-member-name="<?= $m['member_name'] ?>" data-member-major="<?= $m['member_major'] ?>" data-member-year="<?= $m['member_year'] ?>" data-member-position="<?= $m['member_position'] ?>" data-member-type="<?= $m['member_type'] ?>" data-member-image="<?= $m['member_image'] ?>" data-toggle="modal" data-target="#memberModal">
                                                        <p class="card-title">Click to show detail</p>
                                                    </div>
                                                </div>
                                                <div class="card-body text-center">
                                                    <p class="font-weight-bold" style="background-color: hsl(226, 38%, 38%); border-radius: 10px"><?= $m['member_type'] ?></p>
                                                    <p class="card-title"><a href="#" data-toggle="modal" data-target="#memberModal"><?= $m['member_name'] ?></a></p>
                                                    <ul>
                                                        <li class="mx-2"><a href="mailto:<?= $m['member_email'] ?>" target="_blank"><i class="fas fa-envelope" aria-hidden="true"></i></a></li>
                                                        <li class="mx-2"><a href="https://liff.line.me/1645278921-kWRPP32q?accountId=<?= $m['member_line'] ?>&openerPlatform=native&openerKey=home%3Arecommend" target="_blank"><i class="fab fa-line" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-kesma" role="tabpanel" aria-labelledby="v-pills-kesma-tab">
                            <div class="content-wrapper">
                                <div class="card-wrapper">
                                    <?php foreach ($anggota_hmif as $m) : ?>
                                        <?php if ($m['division_name'] === 'Kesejahteraan Mahasiswa') : ?>
                                            <div class="card">
                                                <div class="card-overlay bg-transparent text-white">
                                                    <img src="/assets/images/<?= $m['member_image'] ?>" class="card-img" alt="profile1" style="border: 4px solid hsl(207, 71%, 45%);">
                                                    <div class="card-img-overlay" data-member-name="<?= $m['member_name'] ?>" data-member-major="<?= $m['member_major'] ?>" data-member-year="<?= $m['member_year'] ?>" data-member-position="<?= $m['member_position'] ?>" data-member-type="<?= $m['member_type'] ?>" data-member-image="<?= $m['member_image'] ?>" data-toggle="modal" data-target="#memberModal">
                                                        <p class="card-title">Click to show detail</p>
                                                    </div>
                                                </div>
                                                <div class="card-body text-center">
                                                    <p class="font-weight-bold" style="background-color: hsl(207, 71%, 45%); border-radius: 10px"><?= $m['member_type'] ?></p>
                                                    <p class="card-title"><a href="#" data-toggle="modal" data-target="#memberModal"><?= $m['member_name'] ?></a></p>
                                                    <ul>
                                                        <li class="mx-2"><a href="mailto:<?= $m['member_email'] ?>" target="_blank"><i class="fas fa-envelope" aria-hidden="true"></i></a></li>
                                                        <li class="mx-2"><a href="https://liff.line.me/1645278921-kWRPP32q?accountId=<?= $m['member_line'] ?>&openerPlatform=native&openerKey=home%3Arecommend" target="_blank"><i class="fab fa-line" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                    <?php foreach ($anggota_serum as $m) :
                                        if ($m['division_name'] === 'Kesejahteraan Mahasiswa') : ?>
                                            <div class="card">
                                                <div class="card-overlay bg-transparent text-white">
                                                    <img src="/assets/images/<?= $m['member_image'] ?>" class="card-img" alt="profile1" style="border: 4px solid hsl(226, 38%, 38%);">
                                                    <div class="card-img-overlay" data-member-name="<?= $m['member_name'] ?>" data-member-major="<?= $m['member_major'] ?>" data-member-year="<?= $m['member_year'] ?>" data-member-position="<?= $m['member_position'] ?>" data-member-type="<?= $m['member_type'] ?>" data-member-image="<?= $m['member_image'] ?>" data-toggle="modal" data-target="#memberModal">
                                                        <p class="card-title">Click to show detail</p>
                                                    </div>
                                                </div>
                                                <div class="card-body text-center">
                                                    <p class="font-weight-bold" style="background-color: hsl(226, 38%, 38%); border-radius: 10px"><?= $m['member_type'] ?></p>
                                                    <p class="card-title"><a href="#" data-toggle="modal" data-target="#memberModal"><?= $m['member_name'] ?></a></p>
                                                    <ul>
                                                        <li class="mx-2"><a href="mailto:<?= $m['member_email'] ?>" target="_blank"><i class="fas fa-envelope" aria-hidden="true"></i></a></li>
                                                        <li class="mx-2"><a href="https://liff.line.me/1645278921-kWRPP32q?accountId=<?= $m['member_line'] ?>&openerPlatform=native&openerKey=home%3Arecommend" target="_blank"><i class="fab fa-line" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-humaniora" role="tabpanel" aria-labelledby="v-pills-humaniora-tab">
                            <div class="content-wrapper">
                                <div class="card-wrapper">
                                    <?php foreach ($anggota_hmif as $m) : ?>
                                        <?php if ($m['division_name'] === 'Humaniora') : ?>
                                            <div class="card">
                                                <div class="card-overlay bg-transparent text-white">
                                                    <img src="/assets/images/<?= $m['member_image'] ?>" class="card-img" alt="profile1" style="border: 4px solid hsl(207, 71%, 45%);">
                                                    <div class="card-img-overlay" data-member-name="<?= $m['member_name'] ?>" data-member-major="<?= $m['member_major'] ?>" data-member-year="<?= $m['member_year'] ?>" data-member-position="<?= $m['member_position'] ?>" data-member-type="<?= $m['member_type'] ?>" data-member-image="<?= $m['member_image'] ?>" data-toggle="modal" data-target="#memberModal">
                                                        <p class="card-title">Click to show detail</p>
                                                    </div>
                                                </div>
                                                <div class="card-body text-center">
                                                    <p class="font-weight-bold" style="background-color: hsl(207, 71%, 45%); border-radius: 10px"><?= $m['member_type'] ?></p>
                                                    <p class="card-title"><a href="#" data-toggle="modal" data-target="#memberModal"><?= $m['member_name'] ?></a></p>
                                                    <ul>
                                                        <li class="mx-2"><a href="mailto:<?= $m['member_email'] ?>" target="_blank"><i class="fas fa-envelope" aria-hidden="true"></i></a></li>
                                                        <li class="mx-2"><a href="https://liff.line.me/1645278921-kWRPP32q?accountId=<?= $m['member_line'] ?>&openerPlatform=native&openerKey=home%3Arecommend" target="_blank"><i class="fab fa-line" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                    <?php foreach ($anggota_serum as $m) :
                                        if ($m['division_name'] === 'Humaniora') : ?>
                                            <div class="card">
                                                <div class="card-overlay bg-transparent text-white">
                                                    <img src="/assets/images/<?= $m['member_image'] ?>" class="card-img" alt="profile1" style="border: 4px solid hsl(226, 38%, 38%);">
                                                    <div class="card-img-overlay" data-member-name="<?= $m['member_name'] ?>" data-member-major="<?= $m['member_major'] ?>" data-member-year="<?= $m['member_year'] ?>" data-member-position="<?= $m['member_position'] ?>" data-member-type="<?= $m['member_type'] ?>" data-member-image="<?= $m['member_image'] ?>" data-toggle="modal" data-target="#memberModal">
                                                        <p class="card-title">Click to show detail</p>
                                                    </div>
                                                </div>
                                                <div class="card-body text-center">
                                                    <p class="font-weight-bold" style="background-color: hsl(226, 38%, 38%); border-radius: 10px"><?= $m['member_type'] ?></p>
                                                    <p class="card-title"><a href="#" data-toggle="modal" data-target="#memberModal"><?= $m['member_name'] ?></a></p>
                                                    <ul>
                                                        <li class="mx-2"><a href="mailto:<?= $m['member_email'] ?>" target="_blank"><i class="fas fa-envelope" aria-hidden="true"></i></a></li>
                                                        <li class="mx-2"><a href="https://liff.line.me/1645278921-kWRPP32q?accountId=<?= $m['member_line'] ?>&openerPlatform=native&openerKey=home%3Arecommend" target="_blank"><i class="fab fa-line" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-itdev" role="tabpanel" aria-labelledby="v-pills-itdev-tab">
                            <div class="content-wrapper">
                                <div class="card-wrapper">
                                    <?php foreach ($anggota_hmif as $m) : ?>
                                        <?php if ($m['division_name'] === 'IT Development') : ?>
                                            <div class="card">
                                                <div class="card-overlay bg-transparent text-white">
                                                    <img src="/assets/images/<?= $m['member_image'] ?>" class="card-img" alt="profile1" style="border: 4px solid hsl(207, 71%, 45%);">
                                                    <div class="card-img-overlay" data-member-name="<?= $m['member_name'] ?>" data-member-major="<?= $m['member_major'] ?>" data-member-year="<?= $m['member_year'] ?>" data-member-position="<?= $m['member_position'] ?>" data-member-type="<?= $m['member_type'] ?>" data-member-image="<?= $m['member_image'] ?>" data-toggle="modal" data-target="#memberModal">
                                                        <p class="card-title">Click to show detail</p>
                                                    </div>
                                                </div>
                                                <div class="card-body text-center">
                                                    <p class="font-weight-bold" style="background-color: hsl(207, 71%, 45%); border-radius: 10px"><?= $m['member_type'] ?></p>
                                                    <p class="card-title"><a href="#" data-toggle="modal" data-target="#memberModal"><?= $m['member_name'] ?></a></p>
                                                    <ul>
                                                        <li class="mx-2"><a href="mailto:<?= $m['member_email'] ?>" target="_blank"><i class="fas fa-envelope" aria-hidden="true"></i></a></li>
                                                        <li class="mx-2"><a href="https://liff.line.me/1645278921-kWRPP32q?accountId=<?= $m['member_line'] ?>&openerPlatform=native&openerKey=home%3Arecommend" target="_blank"><i class="fab fa-line" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                    <?php foreach ($anggota_serum as $m) :
                                        if ($m['division_name'] === 'IT Development') : ?>
                                            <div class="card">
                                                <div class="card-overlay bg-transparent text-white">
                                                    <img src="/assets/images/<?= $m['member_image'] ?>" class="card-img" alt="profile1" style="border: 4px solid hsl(226, 38%, 38%);">
                                                    <div class="card-img-overlay" data-member-name="<?= $m['member_name'] ?>" data-member-major="<?= $m['member_major'] ?>" data-member-year="<?= $m['member_year'] ?>" data-member-position="<?= $m['member_position'] ?>" data-member-type="<?= $m['member_type'] ?>" data-member-image="<?= $m['member_image'] ?>" data-toggle="modal" data-target="#memberModal">
                                                        <p class="card-title">Click to show detail</p>
                                                    </div>
                                                </div>
                                                <div class="card-body text-center">
                                                    <p class="font-weight-bold" style="background-color: hsl(226, 38%, 38%); border-radius: 10px"><?= $m['member_type'] ?></p>
                                                    <p class="card-title"><a href="#" data-toggle="modal" data-target="#memberModal"><?= $m['member_name'] ?></a></p>
                                                    <ul>
                                                        <li class="mx-2"><a href="mailto:<?= $m['member_email'] ?>" target="_blank"><i class="fas fa-envelope" aria-hidden="true"></i></a></li>
                                                        <li class="mx-2"><a href="https://liff.line.me/1645278921-kWRPP32q?accountId=<?= $m['member_line'] ?>&openerPlatform=native&openerKey=home%3Arecommend" target="_blank"><i class="fab fa-line" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Struktur Himpunan -->

    <!-- Member Detail -->
    <div class="modal fade" id="memberModal" data-backdrop="static" tabindex="-1" aria-labelledby="memberModalType" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="memberModalType"></h5>
                </div>
                <div class="modal-body bg-dark-custom text-center">
                    <img id="memberModalImage" class="img-thumbnail my-4" src="" alt="" width="50%">
                    <h5>Nama</h5>
                    <p id="memberModalName"></p>
                    <h5>Jabatan</h5>
                    <p id="memberModalPosition"></p>
                    <h5>Jurusan</h5>
                    <p id="memberModalMajor"></p>
                    <h5>Angkatan</h5>
                    <p id="memberModalYear"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-custom" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Member Detail -->
</main>

<?= $this->endSection(); ?>