<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- google fonts notoserifjp lora -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@600&family=Noto+Serif+JP:wght@600&display=swap" rel="stylesheet">


    <!-- read fontsawesome -->
    <script src="https://kit.fontawesome.com/72a93cd7e4.js" crossorigin="anonymous"></script>

    <?php
    wp_head();
    ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header id="header top">
        <div class="header-wrap">
            <h1 class="top__title">
                <a class="top__link" href="index.html">
                    <img class="top__logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/small-device-logo.png" alt="nina-umbrella-projectのロゴ">
                </a>
            </h1>
            <ul class="container breadcrumb__list">
                <li class="breadcrumb__item"><a href="<?php echo esc_url(home_url('/')); ?>">HOME</a></li>
                <li class="breadcrumb__item">>></li>
                <li class="breadcrumb__item"><?php the_title(); ?></li>
            </ul>
        </div>
        <nav id="gnav" class="container gnav__container">
            <ul class="gnav__list">
                <li class="gnav__list__item"><a href="<?php echo esc_url(home_url('/')); ?>">HOME & About</a></li>
                <li class="gnav__list__item"><a href="<?php echo esc_url(home_url('/workshop')); ?>">Workshop</a></li>
                <li class="gnav__list__item"><a href="<?php echo esc_url(home_url('/archive')); ?>">Items</a></li>
            </ul>
        </nav>
        <div class="hamburger-icon">
            <i id="hamburger-btn" class="fas fa-list-ul"></i>
        </div>
    </header>