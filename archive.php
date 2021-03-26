<!-- get header -->
<?php get_header('sub'); ?>

<main id="main" class="main">

    <ul class="container breadcrumb__list">
        <li class="breadcrumb__item"><a href="<?php echo esc_url(home_url('/')); ?>">HOME</a></li>
        <li class="breadcrumb__item">>></li>
        <li class="breadcrumb__item">Items</li>
    </ul>

    <div class="wrap">

        <section id="items" class="main__items">
            <h2 class="sub__title">Items</h2>

            <div class="item-container">
                <!-- 投稿カテゴリー一覧 -->
                <?php
                // get_termsでtaxonomyがitem_cateのタームを取得する
                $item_cate = get_terms(
                    array(
                        'taxonomy' => 'item_cate', // タクソノミーがitem_cateを指定する
                        'orderby'  => 'name',      // 名前順に並び変え
                    ),
                );
                ?>
                <?php if (!empty($item_cate)) : ?>
                    <ul class="all-items__list">
                        <?php foreach ($item_cate as $item) : ?>
                            <li class="all-items__list__item">
                                <a href="<?php echo get_term_link($item); ?>">-<?php echo $item->name ?>-
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                <div class="all-items-container">

                    <?php
                    $args = [
                        'post_type'      => 'item', // カスタム投稿名が「item」の場合
                        'posts_per_page' => 10,     // 投稿数を10個に限定する
                        'orderby'        => 'date', // 投稿日順に並び替え
                    ];
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

                <!-- 個別リモーダルの表示 -->
                <?php if ($my_query->have_posts()) : ?>
                    <?php while ($my_query->have_posts()) : ?>
                        <?php $my_query->the_post(); ?>

                        <?php get_template_part('template-parts/nina', 'remodal'); ?>

                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>

            </div>
        </section>
    </div>
</main>

<!-- get footer -->
<?php get_footer(); ?>
