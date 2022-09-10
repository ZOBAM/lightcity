<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Light City Int'l</title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="" style="">
        <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
            <!-- <div class="logo-container">
                <a href="/">
                    <img src="<?php echo get_theme_file_uri('/images/lc_logo.png'); ?>" class="h-20 w-20" alt="logo" />
                </a>
            </div> -->
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <a class="navbar-brand" href="#">
                        <img src="<?php echo get_theme_file_uri('/images/lc_logo.png'); ?>" class="h-20 w-20" alt="light city logo" />
                    </a>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/support">Support Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/our_belief">Our Belief</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="hero-section">
            <img src="<?php echo get_theme_file_uri('/images/lc_header.png'); ?>" class="img-fluid" alt="light city header image" />
        </section>
    </header>