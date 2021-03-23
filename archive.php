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

                <!-- 個別リモーダルの表示 -->
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

            </div>
        </section>
    </div>
</main>

<!-- get footer -->
<?php get_footer(); ?>
