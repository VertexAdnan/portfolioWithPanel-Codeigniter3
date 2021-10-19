<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>AV - V3.0 |</title>
    <!--favicon-->
    <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
    <!-- Vector CSS -->
    <link href="<?= base_url('assets/admin/') ?>assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!--plugins-->
    <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>assets/plugins/notifications/css/lobibox.min.css" />
    <link href="<?= base_url('assets/admin/') ?>assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="<?= base_url('assets/admin/') ?>assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="<?= base_url('assets/admin/') ?>assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <link href="<?= base_url('assets/admin/') ?>assets/plugins/fancy-file-uploader/fancy_fileupload.css" rel="stylesheet" />

    <!-- loader-->
    <link href="<?= base_url('assets/admin/') ?>assets/css/pace.min.css" rel="stylesheet" />
    <script src="<?= base_url('assets/admin/') ?>assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>assets/css/bootstrap.min.css" />
    <!-- Animate CSS -->
    <link href="<?= base_url('assets/admin/') ?>assets/css/animate.css" rel="stylesheet" type="text/css" />
    <!-- Icons CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>assets/css/icons.css" />
    <!-- App CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>assets/css/app.css" />


</head>
<?php
$successmsg = $this->session->flashdata('success');
$errormsg = $this->session->flashdata('error');
if (isset($successmsg)) {
    echo '<script>window.onload = function() {
        success_notify();
    }</script>';
}
if (isset($errormsg)) {
    echo '<script>window.onload = function() {
        error_notify();
    }</script>';
}
?>

<script>
    function success_notify() {
        Lobibox.notify('success', {
            pauseDelayOnHover: true,
            continueDelayOnInactiveTab: false,
            position: 'top right',
            icon: 'bx bx-check-circle',
            msg: '<?= $successmsg ?>',
            title: 'Başarılı'
        });
    }

    function error_notify() {
        Lobibox.notify('error', {
            pauseDelayOnHover: true,
            continueDelayOnInactiveTab: false,
            position: 'top right',
            icon: 'bx bx-x-circle',
            msg: '<?= $errormsg ?>',
            title: 'Hata'
        });
    }
</script>

<body class="bg-theme bg-theme1">
    <!-- wrapper -->
    <div class="wrapper">
        <!--header-->