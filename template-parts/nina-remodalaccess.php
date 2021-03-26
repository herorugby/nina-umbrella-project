<a href="#<?php the_ID(); ?>" class="all-items__details">
    <?php
    $leavedays = 7;                                  // NEWマークを表示する日数
    $now       = date_i18n('U');                     // 現在の日時のタイムスタンプを取得
    $entry     = get_the_time('U');                  // unixタイムから投稿した時間までの経過時間を取得
    $progress  = date('U', ($now - $entry)) / 86400; //UNIXタイムをフォーマットにし、現在のローカル時間から投稿時間を引いて３日分の時間で割る
    ?>

    <?php if (get_field('soldout')) : ?>
        <span class="sold-mark">Sold Out</span>
    <?php elseif ($leavedays > $progress) : ?>
        <span class="new-mark">NEW</span>
    <?php endif; ?>

    <div><?php the_title(); ?></div>
    <div class="all-items__img">
        <?php the_post_thumbnail('thumbnail'); ?>
    </div>
</a>
