<?php require_once 'includes/form-sub.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Alex Maundrell</title>

    <script src="https://kit.fontawesome.com/27f634a908.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body class="bg-dark text-bg-dark contact-bg-image">

<!-- NAVIGATION -->
<a href="index.php"><img src="assets/logo-white.png" alt="Logo" class="brand brand-logo"></a>
<nav class="navbar navbar-expand-lg navbar-dark bg-transparent" role="navigation">
    <div class="container">
        <button
            class="navbar-toggler border-0"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbar-content"
            aria-expanded="false"
            aria-label="Toggle Navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-content">
            <ul class="navbar-nav mb-2 mt-2 mb-lg-0 ms-md-auto me-0">
                <li class="nav-item">
                    <a href="index.php" class="nav-link text-white fs-4">Home</a>
                </li>
                <!-- <li class="nav-item">
                    <a href="blog.php" class="nav-link text-white fs-4">Blog</a>
                </li> -->
                <li class="nav-item">
                    <a href="projects.php" class="nav-link text-white fs-4">Projects</a>
                </li>
                <li class="nav-item">
                    <a href="contact.php" class="nav-link active text-white fs-4" aria-current="page">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- NAVIGATION -->

<!-- CONTACT CONTENT -->
<section class="contact-content mt-5">
    <div class="container">
        <div class="row justify-content-center mb-3">
            <div class="col-md-6 p-4 left-column">
                <h2 class="mb-4">Connect With Me</h2>
                <ul class="list-unstyled">
                    <li class="mb-3"><a href="https://bsky.app/alex-maundrell.bsky.social" target="_blank" class="text-decoration-none text-white"><i class="fa-brands fa-square-bluesky my-font-size"></i> <span>Bluesky: @alex-maundrell.bsky.social</span></a></li>
                    <li class="mb-3"><a href="https://www.linkedin.com/in/alexander-maundrell" target="_blank" class="text-decoration-none text-white"><i class="fa-brands fa-linkedin my-font-size"></i> <span>LinkedIn: alexander-maundrell</span></a></li>
                    <li class="mb-3"><a href="#" id="copy-email" class="text-decoration-none text-white"><i class="fa-solid fa-envelope my-font-size"></i> <span>info@alex-maundrell.dev</span> </a><i class="fa-solid fa-copy my-font-size-2"></i></li>
                </ul>
            </div>
            <div class="col-md-6 right-column">
                <form action="" method="post" class="p-4">
                    <label for="name" class="form-label text-white"><span class="fs-4">Your Name </span> <span class="text-danger fs-5">*</span></label>
                    <input name="name" type="text" id="name" class="form-control mb-3" required>
                    <label for="email" class="form-label text-white"><span class="fs-4">Email address </span> <span class="text-danger fs-5">*</span></label>
                    <input name="email" type="email" id="email" class="form-control mb-3" required>
                    <label for="message" class="form-label text-white"><span class="fs-4">Your Message </span> <span class="text-danger fs-5">*</span></label>
                    <textarea name="message" id="message" class="form-control mb-3" rows="8" required></textarea>
                    <p class="text-white fs-4">Please pick the motorcycle:</p>
                    <div class="radio-container d-flex align-items-center mb-3">
                        <label class="me-3">
                            <input type="radio" name="human_check" value="bird" required>
                            <img src="assets/form-bird.jpg" alt="Bird" class="img-fluid">
                        </label>
                        <label class="me-3">
                            <input type="radio" name="human_check" value="motorcycle" required>
                            <img src="assets/form-motorcycle.jpg" alt="Motorcycle" class="img-fluid">
                        </label>
                        <label>
                            <input type="radio" name="human_check" value="scenery" required>
                            <img src="assets/form-scenery.jpg" alt="Scenery" class="img-fluid">
                        </label>
                    </div>
                    <button type="submit" class="btn btn-success float-end px-4 py-2 mb-3 fs-5" disabled>Disabled</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- CONTACT CONTENT -->




<!-- COPY FOOTER -->
<div class="copy py-4 small bg-dark text-bg-dark">
    <div class="container">
        <div class="row justify-content-center text-center">
            <p class="m-0 small">&copy; Copyright 2025 <i class="bi bi-vr mx-2"></i> All Rights Reserved</p>
            <p class="m-0 small">Site built by: Myself of Course</p>
        </div>
    </div>
</div>
<!-- COPY FOOTER -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="javascript/script.js"></script>
</body>
</html>