<!-- get header -->
<?php get_header('sub'); ?>

<main id="main" class="main">

    <ul class="container breadcrumb__list">
        <li class="breadcrumb__item"><a href="<?php echo esc_url(home_url('/')); ?>">HOME</a></li>
        <li class="breadcrumb__item">>></li>
        <li class="breadcrumb__item"><?php the_title(); ?></li>
    </ul>

    <div class="wrap">

        <h2>特定商取引法に基づく表記</h2>

        <section class="sec-block">
            <h3>事業者の名称</h3>
            <p class="description">小野 咲</p>
        </section>

        <section class="sec-block">
            <h3>事業者の所在地</h3>
            <p class="description">〒：772-0051<br>
                住所：徳島県鳴門市鳴門町高島字竹島324ふるさと君362
            </p>
        </section>

        <section class="sec-block">
            <h3>事業者の連絡先</h3>
            <p class="description">電話番号：090-6284-5577<br>
                営業時間：10:00〜18:00 定休日：不定休
            </p>
        </section>

        <section class="sec-block">
            <h3>販売価格について</h3>
            <p class="description">販売価格は、表示された金額（表示価格/消費税込）と致します。</p>
        </section>

        <section class="sec-block">
            <h3>代金 (対価) の支払い方法と時期</h3>
            <p class="description">支払方法：クレジットカードによる決済がご利用頂けます。<br>
                支払時期：商品注文確定時でお支払いが確定致します。
            </p>
        </section>

        <section class="sec-block">
            <h3>返品についての特約に関する事項</h3>
            <p class="description">商品に欠陥がある場合を除き、基本的には返品には応じません。</p>
        </section>

        <section class="sec-block">
            <h3>役務または商品の引き渡し時期</h3>
            <p class="description">配送のご依頼を受けてから1週間以内に発送いたします。</p>
        </section>
    </div>
</main>

<!-- get footer -->
<?php get_footer(); ?>
