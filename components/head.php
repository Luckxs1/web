<!DOCTYPE html>
<html data-bs-theme="dark" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($pageTitle) ? $pageTitle : "404 - Page Not Found"; ?></title>
    <link rel="icon" type="image/PNG" href="<?= $BASE_DIR ?>/library/assets/icons8-blockchain-technology-doodle-32.png"> 
        <link rel="stylesheet" href="<?= $BASE_DIR ?>/library/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= $BASE_DIR ?>/library/css/dataTables.bootstrap5.min.css">
        <link rel="stylesheet" href="<?= $BASE_DIR ?>/library/css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    </head>
    <body>
        <?php 
            require_once "navbar.php";
            require_once "offcanvas.php";
        ?>
        <main class="mt-5 pt-3">
        <div class="container-fluid">
                <div class="row">
    