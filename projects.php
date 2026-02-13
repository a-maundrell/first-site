<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects - Alex Maundrell</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body class="bg-dark text-bg-dark">

<!-- NAVIGATION -->
<a href="index.php"><img src="assets/logo-white.png" alt="Logo" class="brand brand-logo"></a>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" role="navigation">
    <div class="container">
        <button
            class="navbar-toggler border-0"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbar-content"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbar-content">
            <ul class="navbar-nav mb-2 mt-2 mb-lg-0 ms-md-auto me-0">
                <li class="nav-item">
                    <a href="index.php" class="nav-link text-white fs-4">Home</a>
                </li>
                <!-- <li class="nav-item">
                    <a href="blog.php" class="nav-link text-white fs-4">Blog</a>
                </li> -->
                <li class="nav-item">
                    <a href="projects.php" class="nav-link active text-white fs-4" aria-current="page">Projects</a>
                </li>
                <li class="nav-item">
                    <a href="contact.php" class="nav-link text-white fs-4">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- NAVIGATION -->

<!-- HEADER CONTENT -->
<header class="mb-4">
    <div class="header-content">
        <div class="container">
            <h1 class="text-center my-5">My Projects</h1>
            <div class="row justify-content-center mt-4 mb-4">                
                <div class="col-md-8">
                    <div class="slider-container">
                        <div class="slider">
                            <div class="slide">
                                <a href="#websites">
                                <img src="assets/websites-slider-img.jpg" alt="Websites Link" class="img-fluid">
                                </a>
                            </div>
                            <div class="slide">
                                <a href="#games">
                                    <img src="assets/games-slider-img.jpg" alt="Games link" class="img-fluid">
                                </a>
                            </div>
                            <div class="slide">
                                <a href="#apps">
                                <img src="assets/apps-slider-img.jpg" alt="Apps link" class="img-fluid">
                                </a>
                            </div>
                            <div class="slide">
                                <img src="assets/projects-slider-img.jpg" alt="Projects link" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-4 mt-4">
                <div class="col-md-8">
                    <p class="fs-5 text-center">
                        Welcome to a collection of all my projects! Some of these were built following tutorials, some sparked out of sheer boredom, and a few were born out of the need to learn something new; because sometimes, you've just got to dive in and force the knowledge to stick.
                    </p>
                    <p class="fs-5 text-center">
                        I'm constantly adding fresh work here, so be sure to swing by every now and then. Whenever something new pops up, I'll share the update on my social media, including <a href="https://bsky.app/alex-maundrell.bsky.social" target="_blank" class="text-decoration-none">Bluesky</a> and <a href="https://www.linkedin.com/in/alexander-maundrell" target="_blank" class="text-decoration-none">LinkedIn</a>. Stick around for the fun, learning, and the occasional quirky experiment!
                    </p>                    
                </div>
            </div>
        </div>
    </div>
</header>

<!-- HEADER CONTENT -->

<!-- MAIN CONTENT -->
<main class="projects-content mt-4">
    <div class="container">
        <div class="row justify-content-center mt-4 mb-4">
            <h2 id="websites" class="section-heading text-left"><span class="pulsating-text">Websites / Web Pages</span></h2>
            <hr>
            <!-- <div class="col-md-3 mb-4">
                <a href="#" class="text-decoration-none" target="_blank">
                    <div class="card mb-4 h-100 d-flex flex-column">
                        <img src="" alt="" class="projects-card-img card-img-top img-fluid">
                        <div class="card-body flex-grow-1">
                            <h5 class="card-title"></h5>
                        </div>
                    </div>
                </a>
            </div> -->
            <div class="col-md-3 mb-4">
                <a href="projects/websites/Education/index.html" class="text-decoration-none" target="_blank">
                    <div class="card mb-4 h-100 d-flex flex-column">
                        <img src="projects/websites/Education/education-site-screenshot.png" alt="Bootstrap education website" class="projects-card-img card-img-top img-fluid">
                        <div class="card-body flex-grow-1">
                            <h5 class="card-title">Education Site ~ Bootstrap</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="projects/websites/Blog/index.html" class="text-decoration-none" target="_blank">
                    <div class="card mb-4 h-100 d-flex flex-column">
                        <img src="projects/websites/Blog/blog-site-screenshot.png" alt="Bootstrap Blog website" class="projects-card-img card-img-top img-fluid">
                        <div class="card-body flex-grow-1">
                            <h5 class="card-title">Blog Site ~ Bootstrap</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="projects/websites/natours/index.html" class="text-decoration-none" target="_blank">
                    <div class="card mb-4 h-100 d-flex flex-column">
                        <img src="projects/websites/natours/natours-site-screenshot.png" alt="Tour site screenshot" class="projects-card-img card-img-top img-fluid">
                        <div class="card-body flex-grow-1">
                            <h5 class="card-title">Honed CSS skills ~ used Sass</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="projects/websites/EMS/index.html" class="text-decoration-none" target="_blank">
                    <div class="card mb-4 h-100 d-flex flex-column">
                        <img src="projects/websites/EMS/cms-dashboard-screenshot.png" alt="CMS dashboard screenshot" class="projects-card-img card-img-top img-fluid">
                        <div class="card-body flex-grow-1">
                            <h5 class="card-title">CMS Dashboard ~ Bootstrap</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="projects/websites/dev-camp-fries/index.html" class="text-decoration-none" target="_blank">
                    <div class="card mb-4 h-100 d-flex flex-column">
                        <img src="projects/websites/dev-camp-fries/dev-camp-fries-screenshot.png" alt="Dev Camp Fries website screenshot" class="projects-card-img card-img-top img-fluid">
                        <div class="card-body flex-grow-1">
                            <h5 class="card-title">Dev Camp Fries</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>        
        <div class="row justify-content-center mt-4 mb-4">
            <h2 id="games" class="section-heading text-left"><span class="pulsating-text">Games</span></h2>
            <hr>
            <!-- <div class="col-md-3 mb-4">
                <a href="#" class="text-decoration-none" target="_blank">
                    <div class="card mb-4 h-100 d-flex flex-column">
                        <img src="" alt="" class="projects-card-img card-img-top img-fluid">
                        <div class="card-body flex-grow-1">
                            <h5 class="card-title"></h5>
                        </div>
                    </div>
                </a>
            </div> -->
            <div class="col-md-3 mb-4">
                <a href="projects/games/dice-game/dice-game.html" class="text-decoration-none" target="_blank">
                    <div class="card mb-4 h-100 d-flex flex-column">
                        <img src="projects/games/dice-game/dice-game-screenshot.png" alt="Dice game screenshot" class="projects-card-img card-img-top img-fluid">
                        <div class="card-body flex-grow-1">
                            <h5 class="card-title">Dice Game ~ JavaScript</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="projects/games/guess-my-number/guess-my-number.html" class="text-decoration-none" target="_blank">
                    <div class="card mb-4 h-100 d-flex flex-column">
                        <img src="projects/games/guess-my-number/guess-my-number-screenshot.png" alt="Guess my Number game screenshot" class="projects-card-img card-img-top img-fluid">
                        <div class="card-body flex-grow-1">
                            <h5 class="card-title">Guess My Number ~ JavaScript</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>        
        <div class="row justify-content-center mt-4 mb-4">
            <h2 id="apps" class="section-heading text-left"><span class="pulsating-text">Apps</span></h2>
            <hr>
            <!-- <div class="col-md-3 mb-4">
                <a href="#" class="text-decoration-none" target="_blank">
                    <div class="card mb-4 h-100 d-flex flex-column">
                        <img src="" alt="" class="projects-card-img card-img-top img-fluid">
                        <div class="card-body flex-grow-1">
                            <h5 class="card-title"></h5>
                        </div>
                    </div>
                </a>
            </div> -->
            <div class="col-md-3 mb-4">
                <a href="#" class="text-decoration-none" target="_blank">
                    <div class="card mb-4 h-100 d-flex flex-column">
                        <img src="assets/inspiration.jpg" alt="" class="projects-card-img card-img-top img-fluid">
                        <div class="card-body flex-grow-1">
                            <h5 class="card-title">Waiting for Inspiration</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>        
    </div>
</main>

<!-- MAIN CONTENT -->



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