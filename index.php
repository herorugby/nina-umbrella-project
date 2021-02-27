<div class="main__new-info">
    <p class="new-info__cap">!!New Item Arrival!!</p>
    <!-- 投稿一覧の表示 -->
    <?php
    $args = [
        'post_type' => 'item', // カスタム投稿名が「item」の場合
        'posts_per_page' => 2, // 表示させる数
    ];
    $my_query = new WP_Query($args); ?>
    <?php if ($my_query->have_posts()) : ?>
        <?php while ($my_query->have_posts()) : ?>
            <?php $my_query->the_post(); ?>

            <ul class="new-info__list">
                <li class="new-info__list__items"><span class="right-hand-icon"><i class="far fa-hand-point-right"></i>&ensp;</span><a class="item-jump-taxonomy" href="#<?php the_ID(); ?>"><?php the_title(); ?></a></li>
            </ul>

        <?php endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>

    <!-- 個別投稿を見るモーダル -->
    <!-- <?php
            $args = [
                'post_type' => 'item',
                // 'posts_per_page' => 5,
            ];
            $my_query = new WP_Query($args); ?> -->
    <?php if ($my_query->have_posts()) : ?>
        <?php while ($my_query->have_posts()) : ?>
            <?php $my_query->the_post(); ?>

            <div class="remodal" data-remodal-id="<?php the_ID(); ?>">
                <p>【<?php the_title(); ?>】</p>
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
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
    <a class="new-info__all-items__link" href="<?php echo get_post_type_archive_link('item'); ?>">check Items...</a>

</div>
