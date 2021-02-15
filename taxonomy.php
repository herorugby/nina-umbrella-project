<!-- get header -->
<?php get_header('sub'); ?>

<main>
    <?php
    // 開いているページ情報を取得する
    $item_slug = get_query_var('item_cate');
    $item = get_term_by('slug', $item_slug, 'item_cate')
    ?>
    <div class="main-wrap">
        <ul class="container breadcrumb__list">
            <li class="breadcrumb__item"><a href="<?php echo esc_url(home_url('/')); ?>">HOME</a></li>
            <li class="breadcrumb__item">>></li>
            <li class="breadcrumb__item">Items</li>
            <li class="breadcrumb__item">>></li>
            <li class="breadcrumb__item"><?php echo $item->name; ?></li>
        </ul>
        <section id="items" class="main__items">
            <h2 class="sub__title"><?php echo $item->name; ?></h2>
            <section class="all-items">
                <div class="item-container">

                    <!-- ターム一覧表示 -->
                    <ul class="category-btn">
                        <?php
                        $catargs = array(
                            'taxonomy' => 'item_cate',
                        );
                        ?>
                        <?php $catlists = get_categories($catargs); ?>
                        <!-- 『全て』のボタンを別で出力 -->
                        <li><a href=" " class="all is-current">全て</a></li>
                        <!-- 『各タクソノミー』一覧を出力 -->
                        <?php foreach ($catlists as $category) : ?>
                            <li><a href="" class="<?php echo $category->slug ?>"><?php echo $category->name ?></a></li>
                        <?php endforeach; ?>
                    </ul>

                    <div class="all-items-container">

                        <!-- 投稿一覧の表示 -->
                        <?php $item_cate_term = wp_get_object_terms($post->ID, 'item_cate'); ?>
                        <?php
                        $args = array(
                            'post_type' => 'item',
                            'taxonomy' => 'item_cate',
                            'term' => $item_cate_term[0]->name,
                            // 'posts_per_page' => 10,
                        );
                        ?>
                        <?php $custom_query = new WP_Query($args); ?>
                        <?php if ($custom_query->have_posts()) : ?>
                            <?php while ($custom_query->have_posts()) : ?>
                                <?php $custom_query->the_post(); ?>

                                <!-- ここにループ処理 -->
                                <a href="#<?php the_ID(); ?>" class="all-items__details">
                                    <?php the_title(); ?>
                                    <div class="all-items__img">
                                        <?php the_post_thumbnail('thumbnail'); ?>
                                    </div>
                                </a>

                            <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>

                        <!-- 個別投稿を見るモーダル -->
                        <?php $item_cate_term = wp_get_object_terms($post->ID, 'item_cate'); ?>
                        <?php $args = array(
                            'post_type' => 'item',
                            'taxonomy' => 'item_cate',
                            'term' => $item_cate_term[0]->name,
                            // 'posts_per_page' => 10,
                        );
                        ?>
                        <?php $custom_query = new WP_Query($args); ?>
                        <?php if ($custom_query->have_posts()) : ?>
                            <?php while ($custom_query->have_posts()) : ?>
                                <?php $custom_query->the_post(); ?>

                                <!-- ここにループ処理 -->
                                <div class="remodal" data-remodal-id="<?php the_ID(); ?>">
                                    <button data-remodal-action="close" class="remodal-close"></button>
                                    <h1><?php the_title(); ?></h1>
                                    <?php the_content(); ?>
                                    <br>
                                    <button data-remodal-action="cancel" class="remodal-cancel">閉じる</button>
                                    <button data-remodal-action="confirm" class="remodal-confirm">アイテム一覧</button>
                                </div>

                            <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>


                        <!-- <div class="all-items__details">
                            <picture class="all-items__img">
                                <source media="(min-width: 960px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/test2.jpg">
                                <source media="(min-width: 560px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/test2.jpg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/test2.jpg" alt="test写真2">
                            </picture>
                        </div> -->
                        <!-- <div class="all-items__details">
                            <picture class="all-items__img">
                                <source media="(min-width: 960px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/test2.jpg">
                                <source media="(min-width: 560px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/test2.jpg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/test2.jpg" alt="test写真2">
                            </picture>
                        </div> -->
                        <!-- <div class="all-items__details">
                            <picture class="all-items__img">
                                <source media="(min-width: 960px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/test1.jpg">
                                <source media="(min-width: 560px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/test1.jpg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/test1.jpg" alt="test写真1">
                            </picture>
                        </div> -->
                        <!-- <div class="all-items__details">
                            <picture class="all-items__img">
                                <source media="(min-width: 960px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/test2.jpg">
                                <source media="(min-width: 560px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/test2.jpg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/test2.jpg" alt="test写真2">
                            </picture>
                        </div> -->
                    </div>
                </div>
            </section>
        </section>
    </div>
</main>

<!-- get footer -->
<?php get_footer(); ?>
