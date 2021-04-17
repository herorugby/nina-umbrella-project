<!-- get header -->
<?php get_header('sub'); ?>

<main id="main" class="main">

    <ul class="container breadcrumb__list">
        <li class="breadcrumb__item"><a href="<?php echo esc_url(home_url('/')); ?>">HOME</a></li>
        <li class="breadcrumb__item">>></li>
        <li class="breadcrumb__item"><a href="<?php echo get_post_type_archive_link('feedback'); ?>">ご感想一覧</a></li>
    </ul>

    <div class="wrap">
        <section id="feedback" class="main__feedback">
            <h2 class="sub__title">ご感想一覧</h2>

            <div class="all-items-container">
                <?php
                $args = array(
                    'post_type' => 'feedback',
                    'orderby' => 'date'
                );
                $my_query = new WP_Query($args);
                ?>
                <?php if ($my_query->have_posts()) : ?>
                    <?php while ($my_query->have_posts()) : ?>
                        <?php $my_query->the_post(); ?>

                        <a href="#<?php the_ID(); ?>" class="all-items__details">
                            <div><?php the_title(); ?></div>
                            <div class="all-items__img">
                                <?php the_post_thumbnail('thumbnail'); ?>
                            </div>
                        </a>

                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>

            <?php
            $args = array(
                'post_type' => 'feedback',
                'orderby' => 'date'
            );
            $my_query = new WP_Query($args);
            ?>
            <?php if ($my_query->have_posts()) : ?>
                <?php while ($my_query->have_posts()) : ?>
                    <?php $my_query->the_post(); ?>

                    <div class="remodal" data-remodal-id="<?php the_ID(); ?>">
                        <p><?php the_title(); ?></p>
                        <?php the_content(); ?>
                        <button data-remodal-action="cancel" class="remodal-cancel">閉じる</button>
                    </div>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>

        </section>
    </div>
</main>

<!-- get footer -->
<?php get_footer(); ?>
