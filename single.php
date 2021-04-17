<!-- get header -->
<?php get_header('sub'); ?>

<main id="main" class="main">

    <ul class="container breadcrumb__list">
        <li class="breadcrumb__item"><a href="<?php echo esc_url(home_url('/')); ?>">HOME</a></li>
        <li class="breadcrumb__item">>></li>
        <li class="breadcrumb__item"><a href="<?php echo get_post_type_archive_link('feedback'); ?>">感想の一覧</a></li>
        <li class="breadcrumb__item">>></li>
        <li class="breadcrumb__item"><?php the_title(); ?></li>
    </ul>

    <div class="wrap">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : ?>
                <?php the_post(); ?>
                <?php the_content(); ?>
                <div class="nav-previous"><?php previous_post_link(); ?></div>
                <div class="nav-next"><?php next_post_link(); ?></div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</main>

<!-- get footer -->
<?php get_footer(); ?>
