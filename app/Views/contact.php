<?= $this->extend('layouts/main/template'); ?>

<?= $this->section('content'); ?>

<main>
    <section id="contact" class="contact bg-primary-custom">
        <div class="container py-5">
            <div class="row text-center mb-2">
                <div class="col">
                    <h3>Contact Us</h3>
                    <hr>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col">
                    <form action="#" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="firstname">First Name</label>
                                <input type="text" class="form-control" id="firstname" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lastname">Last Name</label>
                                <input type="text" class="form-control" id="lastname" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="example@umn.ac.id" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" class="form-control" id="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" rows="7" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-tertiary-custom">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<?= $this->endSection(); ?>