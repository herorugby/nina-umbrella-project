<!-- get header -->
<?php get_header('sub'); ?>

<main>
    <div class="main-wrap">
        <ul class="container breadcrumb__list">
            <li class="breadcrumb__item"><a href="<?php echo esc_url(home_url('/')); ?>">HOME</a></li>
            <li class="breadcrumb__item">>></li>
            <li class="breadcrumb__item">Items</li>
        </ul>
        <section id="items" class="main__items">
            <h2 class="sub__title">Items</h2>

            <div class="all-items">
                <p class="category__title">カテゴリーを選択</p>
                <div class="item-container">

                    <?php
                    $item_cate = get_terms(array('taxonomy' => 'item_cate'));
                    if (!empty($item_cate)) :
                    ?>
                        <div class="all-items__category">
                            <ul class="all-items__list">
                                <?php foreach ($item_cate as $item) : ?>
                                    <li class="all-items__list__item">
                                        <a href="<?php echo get_term_link($item); ?>">-<?php echo $item->name ?>-
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <p class="post__title">アイテム一覧</p>
                    <div class="all-items-container">

                        <!-- 投稿一覧の表示 -->
                        <?php
                        $args = [
                            'post_type' => 'item', // カスタム投稿名が「item」の場合
                            // 'posts_per_page' => 2, // 表示させる数
                        ];
                        $my_query = new WP_Query($args); ?>
                        <?php if ($my_query->have_posts()) : ?>
                            <?php while ($my_query->have_posts()) : ?>
                                <?php $my_query->the_post(); ?>

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
                        <?php
                        $args = [
                            'post_type' => 'item',
                            // 'posts_per_page' => 5,
                        ];
                        $my_query = new WP_Query($args); ?>
                        <?php if ($my_query->have_posts()) : ?>
                            <?php while ($my_query->have_posts()) : ?>
                                <?php $my_query->the_post(); ?>
                                <div class="remodal" data-remodal-id="<?php the_ID(); ?>">
                                    <p><?php the_title(); ?></p>
                                    <?php the_content(); ?>
                                    <br>
                                    <button data-remodal-action="cancel" class="remodal-cancel">閉じる</button>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>

                        <!-- テスト開始 -->
                        <!-- <div class="all-items__details">
                            <picture class="all-items__img">
                                <source media="(min-width: 960px)" srcset="images/test2.jpg">
                                <source media="(min-width: 560px)" srcset="images/test2.jpg">
                                <img src="images/test2.jpg" alt="test写真2">
                            </picture>
                        </div> -->
                        <!-- <div class="all-items__details">
                            <picture class="all-items__img">
                                <source media="(min-width: 960px)" srcset="images/test2.jpg">
                                <source media="(min-width: 560px)" srcset="images/test2.jpg">
                                <img src="images/test2.jpg" alt="test写真2">
                            </picture>
                        </div> -->
                        <!-- テスト終了 -->

                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<!-- get footer -->
<?php get_footer(); ?>
