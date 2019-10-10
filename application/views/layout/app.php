<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
    <meta name="generator" content="Jekyll v3.8.5" />

    <title><?= isset($title) ? $title : 'CISHOP' ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url(); ?>assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <!-- custom styles css -->
    <link href="<?= base_url(); ?>assets/css/app.css" rel="stylesheet" />
    <!-- font awesome -->
    <link href="<?= base_url(); ?>assets/libs/fontawesome/css/all.min.css" rel="stylesheet" />
    <style></style>
    <!-- Custom styles for this template -->
    <!-- <link href="navbar-top-fixed.css" rel="stylesheet" /> -->
</head>

<body>

    <!-- navbar  -->
    <?php $this->load->view('layout/_navbar'); ?>
    <!-- end navbar  -->

    <!-- content -->
    <?php $this->load->view($page); ?>

    <!-- end content -->
    <script src="<?= base_url(); ?>assets/libs/jquery/jquery-3.4.1.min.js"></script>
    <script src="<?= base_url(); ?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assetsjs/app.js"></script>