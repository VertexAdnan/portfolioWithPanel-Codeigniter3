<div class="footer">
    <p class="mb-0">2021 | backend By : <a href="" target="_blank">Adnan Gulten</a>
    </p>
</div>
<!-- end footer -->
</div>
<!-- end wrapper -->

<!-- JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?= base_url('assets/admin/') ?>assets/js/jquery.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>assets/js/popper.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>assets/js/bootstrap.min.js"></script>
<!--plugins-->
<script src="<?= base_url('assets/admin/') ?>assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>assets/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<!-- Vector map JavaScript -->
<script src="<?= base_url('assets/admin/') ?>assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="<?= base_url('assets/admin/') ?>assets/plugins/vectormap/jquery-jvectormap-in-mill.js"></script>
<script src="<?= base_url('assets/admin/') ?>assets/plugins/vectormap/jquery-jvectormap-us-aea-en.js"></script>
<script src="<?= base_url('assets/admin/') ?>assets/plugins/vectormap/jquery-jvectormap-uk-mill-en.js"></script>
<script src="<?= base_url('assets/admin/') ?>assets/plugins/vectormap/jquery-jvectormap-au-mill.js"></script>
<script src="<?= base_url('assets/admin/') ?>assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>assets/js/index.js"></script>
<!--notification js -->
<script src="<?= base_url('assets/admin/') ?>assets/plugins/notifications/js/lobibox.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>assets/plugins/notifications/js/notifications.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>assets/plugins/notifications/js/notification-custom-script.js"></script>
<!-- App JS -->
<script src="<?= base_url('assets/admin/') ?>assets/js/app.js"></script>

<script src="<?= base_url('assets/admin/') ?>assets/plugins/fancy-file-uploader/jquery.ui.widget.js"></script>
<script src="<?= base_url('assets/admin/') ?>assets/plugins/fancy-file-uploader/jquery.fileupload.js"></script>
<script src="<?= base_url('assets/admin/') ?>assets/plugins/fancy-file-uploader/jquery.iframe-transport.js"></script>
<script src="<?= base_url('assets/admin/') ?>assets/plugins/fancy-file-uploader/jquery.fancy-fileupload.js"></script>
<script src="<?= base_url('assets/admin/') ?>assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js"></script>
<script>
    $('#fancy-file-upload').FancyFileUpload({
        params: {
            action: 'fileuploader'
        },
        maxfilesize: 1000000
    });
</script>
<script>
    $(document).ready(function() {
        $('#image-uploadify').imageuploadify();
    });
</script>
</body>

</html>