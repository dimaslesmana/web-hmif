<?= $this->extend('layouts/main/template'); ?>

<?= $this->section('content'); ?>

<main>
    <!-- Event List -->
    <section id="event" class="event py-5">
        <div class="container">
            <div class="row mb-4 text-center text-white-custom">
                <div class="col">
                    <h3>Event List</h3>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="event-card-container">
                        <div class="card my-4">
                            <div class="row no-gutters">
                                <div class="col-md-2">
                                    <img src="/assets/images/placeholder.png" width="100%" alt="event poster">
                                </div>
                                <div class="col-md-10">
                                    <div class="card-body">
                                        <div class="row mb-4">
                                            <div class="col-sm-6">
                                                <h5 class="card-title">Event Title - Event ID</h5>
                                            </div>
                                            <div class="col-sm-6 text-right">
                                                <h5>Category Name</h5>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <p class="card-text">Event Start Date:</p>
                                                <p class="card-text">Event End Date:</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row align-items-center">
                                    <div class="col-sm-6">
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <button class="btn btn-primary-custom">Detail</button>
                                        <button class="btn btn-tertiary-custom">Daftar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card my-4">
                            <div class="row no-gutters">
                                <div class="col-md-2">
                                    <img src="/assets/images/placeholder.png" width="100%" alt="event poster">
                                </div>
                                <div class="col-md-10">
                                    <div class="card-body">
                                        <div class="row mb-4">
                                            <div class="col-sm-6">
                                                <h5 class="card-title">Event Title - Event ID</h5>
                                            </div>
                                            <div class="col-sm-6 text-right">
                                                <h5>Category Name</h5>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <p class="card-text">Event Start Date:</p>
                                                <p class="card-text">Event End Date:</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row align-items-center">
                                    <div class="col-sm-6">
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <button class="btn btn-primary-custom">Detail</button>
                                        <button class="btn btn-tertiary-custom">Daftar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card my-4">
                            <div class="row no-gutters">
                                <div class="col-md-2">
                                    <img src="/assets/images/placeholder.png" width="100%" alt="event poster">
                                </div>
                                <div class="col-md-10">
                                    <div class="card-body">
                                        <div class="row mb-4">
                                            <div class="col-sm-6">
                                                <h5 class="card-title">Event Title - Event ID</h5>
                                            </div>
                                            <div class="col-sm-6 text-right">
                                                <h5>Category Name</h5>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <p class="card-text">Event Start Date:</p>
                                                <p class="card-text">Event End Date:</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row align-items-center">
                                    <div class="col-sm-6">
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <button class="btn btn-primary-custom">Detail</button>
                                        <button class="btn btn-tertiary-custom">Daftar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Event List -->
</main>

<?= $this->endSection(); ?>