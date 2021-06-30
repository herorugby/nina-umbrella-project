<!DOCTYPE html>
<html lang="ja">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-196038900-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-196038900-1');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header id="header">

        <div class="top__logo-place">
            <img class="top__logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/main_logo.png" alt="nina-umbrella-projectのロゴ">
            <div class="main-title__block">
                <h1 class="main-title">nina</h1>
                <p class="main-title__catch">be with you</p>
            </div>
            <div class="hamburger-icon">
                <i id="hamburger-btn" class="fas fa-list-ul"></i>
            </div>
        </div>

        <div class="header__img-slide-show">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header__img-slide-show1.jpeg" alt="トップページのスライド画像">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header__img-slide-show2.jpeg" alt="トップページのスライド画像">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header__img-slide-show3.jpeg" alt="トップページのスライド画像">
        </div>

        <nav id="gnav" class="container gnav__container">
            <ul class="gnav__list">
                <li class="gnav__list__item"><a href="<?php echo esc_url(home_url('/')); ?>">HOME & About</a></li>
                <li class="gnav__list__item"><a href="<?php echo esc_url(home_url('/workshop/')); ?>">Workshop</a></li>
                <li class="gnav__list__item"><a href="<?php echo get_post_type_archive_link('item'); ?>">Items</a></li>
            </ul>
        </nav>

    </header>
