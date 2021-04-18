<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Kosugi+Maru&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header id="header">

        <div class="header-wrap">
            <h1 class="other-main__title">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sub_logo.png" alt="nina-umbrella-projectのロゴ">
                </a>
            </h1>
        </div>

        <nav id="gnav" class="container gnav__container">
            <ul class="gnav__list">
                <li class="gnav__list__item"><a href="<?php echo esc_url(home_url('/')); ?>">HOME & About</a></li>
                <li class="gnav__list__item"><a href="<?php echo esc_url(home_url('/workshop')); ?>">Workshop</a></li>
                <li class="gnav__list__item"><a href="<?php echo get_post_type_archive_link('item'); ?>">Items</a></li>
            </ul>
        </nav>

        <div class="hamburger-icon">
            <i id="hamburger-btn" class="fas fa-list-ul"></i>
        </div>

    </header>
