<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/stylesheets/front-page.css"> -->

    <!-- google fonts notoserifjp lora dancingscript -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Lora:wght@600&family=Noto+Serif+JP:wght@600&display=swap" rel="stylesheet">

    <!-- read fontsawesome -->
    <script src="https://kit.fontawesome.com/72a93cd7e4.js" crossorigin="anonymous"></script>

    <?php
    wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header id="header">

        <div class="top__logo-place">
            <img class="top__logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/main_logo.png" alt="nina-umbrella-projectのロゴ">
            <div class="top__logo-place--flex">
                <h1 class="top__title">nina</h1>
                <p class="top__title__catch">be with you</p>
            </div>
            <div class="hamburger-icon">
                <i id="hamburger-btn" class="fas fa-list-ul"></i>
            </div>
        </div>

        <div class="header__img-slide-show">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header__img-slide-show1.jpg" alt="トップページのスライド画像">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header__img-slide-show2.jpg" alt="トップページのスライド画像">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header__img-slide-show3.jpg" alt="トップページのスライド画像">
        </div>
        <!-- <span id="mouse"></span> -->

        <nav id="gnav" class="container gnav__container">
            <ul class="gnav__list">
                <li class="gnav__list__item"><a href="<?php echo esc_url(home_url('/')); ?>">HOME & About</a></li>
                <li class="gnav__list__item"><a href="<?php echo esc_url(home_url('/workshop')); ?>">Workshop</a></li>
                <li class="gnav__list__item"><a href="<?php echo get_post_type_archive_link('item'); ?>">Items</a></li>
            </ul>
        </nav>



    </header>
