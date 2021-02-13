<!-- get header -->
<?php get_header('sub'); ?>

<main>
    <div class="main-wrap">
        <section id="items" class="main__items">
            <h2 class="sub__title">Items</h2>
            <section class="all-items">
                <div class="item-container">
                    <div class="widget-area">
                        <p class="widget-cap">ウィジェット</p>
                    </div>

                    <div class="all-items-container">
                        <?php
                        $args = array(
                            'post_type' => 'item',
                        );
                        $news_query = new WP_Query($args);
                        if ($news_query->have_posts()) :
                            while ($news_query->have_posts()) :
                                $news_query->the_post();
                        ?>
                                <div class="all-items__details">
                                    <?php the_title(); ?>
                                    <div class="all-items__img">
                                        <?php the_post_thumbnail('thumbnail'); ?>
                                    </div>

                                    <!-- <?php the_content(); ?> -->
                                </div>

                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?>

                        <div class="all-items__details">
                            <picture class="all-items__img">
                                <source media="(min-width: 960px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/test2.jpg">
                                <source media="(min-width: 560px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/test2.jpg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/test2.jpg" alt="test写真2">
                            </picture>
                        </div>
                        <div class="all-items__details">
                            <picture class="all-items__img">
                                <source media="(min-width: 960px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/test2.jpg">
                                <source media="(min-width: 560px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/test2.jpg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/test2.jpg" alt="test写真2">
                            </picture>
                        </div>
                        <div class="all-items__details">
                            <picture class="all-items__img">
                                <source media="(min-width: 960px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/test1.jpg">
                                <source media="(min-width: 560px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/test1.jpg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/test1.jpg" alt="test写真1">
                            </picture>
                        </div>
                        <div class="all-items__details">
                            <picture class="all-items__img">
                                <source media="(min-width: 960px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/test2.jpg">
                                <source media="(min-width: 560px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/test2.jpg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/test2.jpg" alt="test写真2">
                            </picture>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </div>
</main>

<!-- get footer -->
<?php get_footer(); ?>
