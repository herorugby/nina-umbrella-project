<!-- get header -->
<?php get_header('sub'); ?>

<main id="main" class="main">

    <ul class="container breadcrumb__list">
        <li class="breadcrumb__item"><a href="<?php echo esc_url(home_url('/')); ?>">HOME</a></li>
        <li class="breadcrumb__item">>></li>
        <li class="breadcrumb__item"><a href="<?php echo get_post_type_archive_link('feedback'); ?>">感想の一覧</a></li>
    </ul>

    <div class="wrap">
        <section id="workshop" class="main__workshop">
            <?php
            $args = array(
                'post_type' => 'feedback',
                // 'posts_per_page' => 1,
                'orderby' => 'date'
            );
            $my_query = new WP_Query($args);
            ?>
            <?php if ($my_query->have_posts()) : ?>
                <?php while ($my_query->have_posts()) : ?>
                    <?php $my_query->the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="c-thumbnail">
                        <?php the_title(); ?>
                        <?php the_post_thumbnail('medium') ?>

                    </a>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </section>
    </div>
</main>

<!-- get footer -->
<?php get_footer(); ?>
