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
                        <!-- <?php
                                $args = array(
                                    'post_type' => 'item',
                                );
                                $news_query = new WP_Query($args);
                                if ($news_query->have_posts()) :
                                    while ($news_query->have_posts()) :
                                        $news_query->the_post(); ?>
                                <a data-remodal-target="modal" class="all-items__details">
                                    <?php the_title(); ?>
                                    <div class="all-items__img">
                                        <?php the_post_thumbnail('thumbnail'); ?>
                                    </div>
                                </a>
                                <div class="remodal" data-remodal-id="modal">
                                    <h1><?php the_title(); ?></h1>
                                    <?php the_content(); ?>
                                    <br>
                                    <button data-remodal-action="cancel" class="remodal-cancel">閉じる</button>
                                    <button data-remodal-action="confirm" class="remodal-confirm">アイテム一覧</button>
                                </div>

                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?> -->


                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : ?>
                                <?php the_post(); ?>

                                <a data-remodal-target="modal" class="all-items__details">
                                    <?php the_title(); ?>
                                    <div class="all-items__img">
                                        <?php the_post_thumbnail('thumbnail'); ?>
                                    </div>
                                </a>
                                <div class="remodal" data-remodal-id="modal">
                                    <h1><?php the_title(); ?></h1>
                                    <?php the_content(); ?>
                                    <br>
                                    <button data-remodal-action="cancel" class="remodal-cancel">閉じる</button>
                                    <button data-remodal-action="confirm" class="remodal-confirm">アイテム一覧</button>
                                </div>

                            <?php endwhile; ?>
                        <?php endif; ?>



                        <!-- <a data-remodal-target="modal" class="all-items__details">
                            <?php the_post_thumbnail('thumbnail'); ?>
                            <picture class="all-items__img">
                                <source media="(min-width: 960px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/test1.jpg">
                                <source media="(min-width: 560px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/test1.jpg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/test1.jpg" alt="test写真1">
                            </picture>
                        </a> -->

                        <!-- <picture class="all-items__img">
                                <source media="(min-width: 960px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/test1.jpg">
                                <source media="(min-width: 560px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/test1.jpg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/test1.jpg" alt="test写真1">
                            </picture> -->
                        <!-- <p>testtesttesttesttesttestてすとてすとてすとてすとてすとてすとてすとてすとテストテストテストテストテストテストテストテストテストテストテストテスト</p> -->




                        <!-- <div class="remodal" data-remodal-id="modal">
                            <button data-remodal-action="close" class="remodal-close"></button>
                            <h1>ring01</h1>
                            <picture class="all-items__img">
                                <source media="(min-width: 960px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/test1.jpg">
                                <source media="(min-width: 560px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/test1.jpg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/test1.jpg" alt="test写真1">
                            </picture>
                            <p>testtesttesttesttesttestてすとてすとてすとてすとてすとてすとてすとてすとテストテストテストテストテストテストテストテストテストテストテストテスト</p>
                            <?php the_content(); ?>
                            <br>
                            <button data-remodal-action="cancel" class="remodal-cancel">閉じる</button>
                            <button data-remodal-action="confirm" class="remodal-confirm">アイテム一覧</button>
                        </div> -->


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
