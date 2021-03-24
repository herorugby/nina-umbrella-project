<!-- get header -->
<?php get_header('sub'); ?>

<main id="main" class="main">

    <?php
    $item_slug = get_query_var('item_cate');
    $item = get_term_by('slug', $item_slug, 'item_cate');
    ?>
    <ul class="container breadcrumb__list">
        <li class="breadcrumb__item"><a href="<?php echo esc_url(home_url('/')); ?>">HOME</a></li>
        <li class="breadcrumb__item">>></li>
        <li class="breadcrumb__item"><a href="<?php echo get_post_type_archive_link('item'); ?>">Items</a></li>
        <li class="breadcrumb__item">>></li>
        <li class="breadcrumb__item"><?php echo $item->name; ?></li>
    </ul>

    <div class="wrap">

        <section id="items" class="main__items">
            <h2 class="sub__title"><?php echo $item->name; ?></h2>

            <div class="all-items-container">
                <!-- 投稿一覧の表示 -->
                <?php
                $term = wp_get_object_terms($post->ID, 'item_cate'); //タクソノミーのタームを取得
                $args = array(
                    'post_type' => 'item', // 投稿タイプがitemを取得
                    'orderby'   => 'date', // 投稿日順に並び替え
                    'tax_query' => array(
                        'relation' => 'AND',
                        array(
                            'taxonomy' => 'item_cate',    // タクソノミーがitem_cateを指定する
                            'field'    => 'slug',         // スラッグを指定
                            'terms'    => $term[0]->name, // 現在表示しているタームを取得
                        ),
                    ),
                );
                $my_query = new WP_Query($args);
                ?>

                <?php if ($my_query->have_posts()) : ?>
                    <?php while ($my_query->have_posts()) : ?>
                        <?php $my_query->the_post(); ?>

                        <a href="#<?php the_ID(); ?>" class="all-items__details">
                            <?php
                            $leavedays = 2;                                  // NEWマークを表示する日数
                            $now       = date_i18n('U');                     // 現在の日時のタイムスタンプを取得
                            $entry     = get_the_time('U');                  // unixタイムから投稿した時間までの経過時間を取得
                            $progress  = date('U', ($now - $entry)) / 86400; //UNIXタイムをフォーマットにし、現在のローカル時間から投稿時間を引いて３日分の時間で割る
                            if ($leavedays > $progress) {
                                echo '<span class="new-mark">NEW</span>';
                            }
                            ?>
                            <div><?php the_title(); ?></div>
                            <div class="all-items__img">
                                <?php the_post_thumbnail('thumbnail'); ?>
                            </div>
                        </a>

                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>

            <!-- 個別投稿を見るモーダル -->
            <?php
            $term = wp_get_object_terms($post->ID, 'item_cate'); //タクソノミーのタームを取得
            $args = array(
                'post_type' => 'item', // 投稿タイプがitemを取得
                'orderby'   => 'date', // 投稿日順に並び替え
                'tax_query' => array(
                    'relation' => 'AND',
                    array(
                        'taxonomy' => 'item_cate',    // タクソノミーがitem_cateを指定する
                        'field'    => 'slug',         // スラッグを指定
                        'terms'    => $term[0]->name, // 現在表示しているタームを取得
                    ),
                ),
            );
            $my_query = new WP_Query($args);
            ?>
            <?php if ($my_query->have_posts()) : ?>
                <?php while ($my_query->have_posts()) : ?>
                    <?php $my_query->the_post(); ?>

                    <div class="remodal" data-remodal-id="<?php the_ID(); ?>">
                        <?php
                        $leavedays = 2;                                  // NEWマークを表示する日数
                        $now       = date_i18n('U');                     // 現在の日時のタイムスタンプを取得
                        $entry     = get_the_time('U');                  // unixタイムから投稿した時間までの経過時間を取得
                        $progress  = date('U', ($now - $entry)) / 86400; //UNIXタイムをフォーマットにし、現在のローカル時間から投稿時間を引いて３日分の時間で割る
                        if ($leavedays > $progress) {
                            echo '<span class="new-mark">NEW</span>';
                        }
                        ?>
                        <p><?php the_title(); ?></p>
                        <?php
                        $pic     = get_field('pic');  // フィールドの種類を取得
                        $pic_url = $pic['url'];       // フィールドに登録した画像urlを取得
                        ?>

                        <img class="remodal-pic" src="<?php echo $pic_url; ?>" alt="アイテム画像">
                        <div class="remodal-textleft">
                            <?php the_content(); ?>
                            <?php echo do_shortcode('[wp_ulike]'); ?>
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
        </section>
    </div>
</main>

<!-- get footer -->
<?php get_footer(); ?>
