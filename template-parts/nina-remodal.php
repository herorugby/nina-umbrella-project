<div class="remodal" data-remodal-id="<?php the_ID(); ?>">
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

    <p><?php the_title(); ?></p>
    <?php
    $pic     = get_field('pic');  // フィールドの種類を取得
    $pic_url = $pic['url'];       // フィールドに登録した画像urlを取得
    ?>
    <img class="remodal-pic" src="<?php echo $pic_url; ?>" alt="アイテム画像">
    <div class="remodal-textleft">
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
            <li class="remodal-field__list__item">
                <b>詳細：</b>
                <?php if (get_field('soldout')) : ?>
                    <span class="sold-mark">Sold Out</span>
                <?php else : ?>
                    <a href="<?php the_field('buy'); ?>" target="_blank" rel="noopener">BASEへ</a>
                <?php endif; ?>
            </li>
        </ul>
    </div>
    <button data-remodal-action="cancel" class="remodal-cancel">閉じる</button>
</div>
