<footer>
    <div class="container text-center">
        <div class="row">
            <div class="col-md-6 my-auto">
                <h3>Contact Us</h3>
                <p>Sponsors, Seminars, Events, or anything interesting working with us?</p>
                <ul>
                    <li>
                        <a href="mailto:hmif@umn.ac.id" target="_blank" rel="noopener noreferrer"><i class="fas fa-envelope" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/hmif.umn/" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="https://liff.line.me/1645278921-kWRPP32q?accountId=682fnddg&openerPlatform=native&openerKey=home%3Arecommend" target="_blank" rel="noopener noreferrer"><i class="fab fa-line" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/hmif_umn/" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 my-4">
                <img src="/assets/images/logo.png" width="50%" alt="HMIF">
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col">
                <p>&copy; HMIF 2021 &bull; All Rights Reserved</p>
            </div>
        </div>
    </div>
</footer>

<a href="#" id="back-to-top" class="btn btn-tertiary-custom btn-lg back-to-top"><i class="fas fa-chevron-up"></i></a>

<!-- jQuery -->
<script src="/assets/vendors/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- OwlCarousel2 -->
<script src="/assets/vendors/owl-carousel/js/owl.carousel.min.js"></script>
<!-- Horizontal Timeline 2.0 -->
<script src="https://cdn.jsdelivr.net/gh/ycodetech/horizontal-timeline-2.0@2/JavaScript/horizontal_timeline.2.0.min.js"></script>
<!-- ekko-lightbox -->
<script src="/assets/vendors/ekko-lightbox/js/ekko-lightbox.min.js"></script>
<!-- Script JS -->
<script src="/assets/js/script.js"></script>
<?php
if (!empty($custom_js)) {
    foreach ($custom_js as $js) {
        echo $js;
    }
}
?>
</body>

</html>