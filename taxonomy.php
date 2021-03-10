<!-- get header -->
<?php get_header('sub'); ?>

<main>

    <?php
    // 開いているページ情報を取得する
    $item_slug = get_query_var('item_cate');
    $item = get_term_by('slug', $item_slug, 'item_cate');
    ?>

    <div class="main-wrap">

        <ul class="container breadcrumb__list">
            <li class="breadcrumb__item"><a href="<?php echo esc_url(home_url('/')); ?>">HOME</a></li>
            <li class="breadcrumb__item">>></li>
            <li class="breadcrumb__item"><a href="<?php echo get_post_type_archive_link('item'); ?>">Items</a></li>
            <li class="breadcrumb__item">>></li>
            <li class="breadcrumb__item"><?php echo $item->name; ?></li>
        </ul>

        <section id="items" class="main__items">
            <h2 class="sub__title"><?php echo $item->name; ?></h2>
            <div class="item-container">
                <!-- ターム一覧表示 -->
                <div class="all-items-container">

                    <!-- 投稿カテゴリー一覧 -->
                    <!-- <?php
                            $item_cate = get_terms(
                                array(
                                    'taxonomy' => 'item_cate'
                                )
                            );
                            if (!empty($item_cate)) :
                            ?>
                            <ul class="all-items__list">
                                <?php foreach ($item_cate as $item) : ?>
                                    <li class="all-items__list__item">
                                        <a href="<?php echo get_term_link($item); ?>">-<?php echo $item->name ?>-
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?> -->

                    <!-- 投稿一覧の表示 -->
                    <!-- <?php $item_cate_term = wp_get_object_terms($post->ID, 'item_cate'); ?> -->
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
                            <?php
                            $leavedays = 3;  // NEWマークを表示する日数
                            $now = date_i18n('U');  // 現在の日時のタイムスタンプを取得
                            $entry = get_the_time('U');  // unixタイムから投稿した時間までの経過時間を取得
                            $progress = date('U', ($now - $entry)) / 86400; //UNIXタイムをフォーマットにし、現在のローカル時間から投稿時間を引いて３日分の時間で割る
                            ?>

                            <a href="#<?php the_ID(); ?>" class="all-items__details">
                                <?php
                                if ($leavedays > $progress) {
                                    echo '<span class="new-mark">NEW</span>';
                                }
                                ?>
                                【<?php the_title(); ?>】
                                <div class="all-items__img">
                                    <?php the_post_thumbnail('thumbnail'); ?>
                                </div>
                            </a>

                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>


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

                            <?php
                            $leavedays = 3;  // NEWマークを表示する日数
                            $now = date_i18n('U');  // 現在の日時のタイムスタンプを取得
                            $entry = get_the_time('U');  // unixタイムから投稿した時間までの経過時間を取得
                            $progress = date('U', ($now - $entry)) / 86400; //UNIXタイムをフォーマットにし、現在のローカル時間から投稿時間を引いて３日分の時間で割る
                            ?>

                            <!-- ここにループ処理 -->
                            <div class="remodal" data-remodal-id="<?php the_ID(); ?>">
                                <?php
                                if ($leavedays > $progress) {
                                    echo '<span class="new-mark">NEW</span>';
                                }
                                ?>
                                【<?php the_title(); ?>】
                                <?php
                                $pic = get_field('pic');
                                $pic_url = $pic['url'];
                                ?>
                                <img class="remodal-pic" src="<?php echo $pic_url; ?>" alt="">
                                <div class="remodal-textleft">
                                    <?php the_content(); ?>
                                    <ul class="remodal-field__list">
                                        <li class="remodal-field__list__item">
                                            <b>価格：</b>
                                            <span><?php echo number_format(get_field('price')); ?>円</span>
                                        </li>
                                        <li class="remodal-field__list__item">
                                            <b>サイズ：</b>
                                            <span><?php the_field('size'); ?></span>
                                        </li>
                                        <li class="remodal-field__list__item">
                                            <b>素材：</b>
                                            <span><?php the_field('material'); ?></span>
                                        </li>
                                    </ul>
                                </div>
                                <button data-remodal-action="cancel" class="remodal-cancel">閉じる</button>
                            </div>

                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>


                </div>
            </div>
        </section>
    </div>
</main>

<!-- get footer -->
<?php get_footer(); ?>
