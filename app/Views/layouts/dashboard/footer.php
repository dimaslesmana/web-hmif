<footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io/" target="_blank">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.1.0
    </div>
</footer>
</div>

<!-- jQuery -->
<script src="/assets/vendors/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>
<!-- DataTables -->
<script src="/assets/vendors/datatables/js/datatables.min.js"></script>
<!-- bs-custom-file-input -->
<script src="/assets/vendors/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- CKEditor 5 -->
<script src="/assets/vendors/ckeditor5/ckeditor.js"></script>
<!-- flatpickr -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.9/dist/flatpickr.min.js"></script>
<!-- AdminLTE -->
<script src="/assets/js/adminlte.min.js"></script>
<!-- Script JS -->
<script src="/assets/js/dashboard.js"></script>
<!-- Custom Script -->
<?php
if (!empty($custom_js)) {
    foreach ($custom_js as $js) {
        echo $js;
    }
}
?>
</body>

</html>
