<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jQueeper</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/key.png') ?>" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-light">
            <div class="container-fluid">
                <a class="navbar-brand fw-bolder" href="<?php echo base_url() ?>home">jQueeper</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url() ?>home">Home</a>
                        </li>
                        <?php if ($this->session->userdata('is_logged_in')) : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url() ?>dashboard">Password Manager</a>
                            </li>
                        <?php endif; ?>
                        <?php if ($this->session->userdata('is_logged_in')) : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url() ?>generate_password">Key Generator</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <?php if (!$this->session->userdata('is_logged_in')) : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url() ?>login">Log in</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url() ?>sign-up">Sign up</a>
                            </li>
                        <?php endif; ?>
                        <?php if ($this->session->userdata('is_logged_in')) : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url() ?>Auth_controller/logout">Log out</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container" id="main_Container">