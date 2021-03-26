<!-- get header -->
<?php get_header('sub'); ?>

<main id="main" class="main">

    <!-- 現在のページの情報を取得する -->
    <?php
    $item_slug = get_query_var('item_cate');
    $item_term = get_term_by('slug', $item_slug, 'item_cate');
    ?>

    <ul class="container breadcrumb__list">
        <li class="breadcrumb__item"><a href="<?php echo esc_url(home_url('/')); ?>">HOME</a></li>
        <li class="breadcrumb__item">>></li>
        <li class="breadcrumb__item"><a href="<?php echo get_post_type_archive_link('item'); ?>">Items</a></li>
        <li class="breadcrumb__item">>></li>
        <li class="breadcrumb__item"><?php echo $item_term->name; ?></li>
    </ul>

    <div class="wrap">

        <section id="items" class="main__items">
            <h2 class="sub__title"><?php echo $item_term->name; ?></h2>

            <div class="all-items-container">
                <!-- 投稿一覧の表示 -->
                <?php
                // $term = get_the_terms($post->ID, 'item_cate'); //タクソノミーのタームを取得
                $item_term = get_term_by('slug', $item_slug, 'item_cate');
                $args = array(
                    'post_type' => 'item', // 投稿タイプがitemを取得
                    'orderby'   => 'date', // 投稿日順に並び替え
                    'tax_query' => array(
                        'relation' => 'AND',
                        array(
                            'taxonomy' => 'item_cate',    // タクソノミーがitem_cateを指定する
                            'field'    => 'slug',         // スラッグを指定
                            'terms'    => $item_term->name, // 現在表示しているタームを取得
                        ),
                    ),
                );
                $my_query = new WP_Query($args);
                ?>

                <?php if ($my_query->have_posts()) : ?>
                    <?php while ($my_query->have_posts()) : ?>
                        <?php $my_query->the_post(); ?>

                        <?php get_template_part('template-parts/nina', 'remodalaccess'); ?>

                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>

            <!-- 個別投稿を見るモーダル -->
            <?php
            // $term = get_the_terms($post->ID, 'item_cate'); //タクソノミーのタームを取得
            $item_term = get_term_by('slug', $item_slug, 'item_cate');
            $args = array(
                'post_type' => 'item', // 投稿タイプがitemを取得
                'orderby'   => 'date', // 投稿日順に並び替え
                'tax_query' => array(
                    'relation' => 'AND',
                    array(
                        'taxonomy' => 'item_cate',    // タクソノミーがitem_cateを指定する
                        'field'    => 'slug',         // スラッグを指定
                        'terms'    => $item_term->name, // 現在表示しているタームを取得
                    ),
                ),
            );
            $my_query = new WP_Query($args);
            ?>
            <?php if ($my_query->have_posts()) : ?>
                <?php while ($my_query->have_posts()) : ?>
                    <?php $my_query->the_post(); ?>

                    <?php get_template_part('template-parts/nina', 'remodal'); ?>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </section>
    </div>
</main>

<!-- get footer -->
<?php get_footer(); ?>
