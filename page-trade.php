<!-- get head template -->
<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : ?>
        <?php the_post(); ?>

        <main>
            <div class="main-wrap">
                <h2 class="sub__title">特定商取引法に基づく表記</h2>

                <section class="sec-block">
                    <h3 class="contents__title">事業者の名称</h3>
                    <p class="description">小野&ensp;咲</p>
                </section>

                <section class="sec-block">
                    <h3 class="contents__title">事業者の所在地</h3>
                    <p class="description">〒：772-0051<br>
                        住所：徳島県鳴門市鳴門町高島字竹島324ふるさと君362
                    </p>
                </section>

                <section class="sec-block">
                    <h3 class="contents__title">事業者の連絡先</h3>
                    <p class="description">電話番号：090-6284-5577<br>
                        営業時間：10:00〜18:00 定休日：不定休
                    </p>
                </section>

                <section class="sec-block">
                    <h3 class="contents__title">販売価格について</h3>
                    <p class="description">販売価格は、表示された金額（表示価格/消費税込）と致します。</p>
                </section>

                <section class="sec-block">
                    <h3 class="contents__title">代金 (対価) の支払い方法と時期</h3>
                    <p class="description">支払方法：クレジットカードによる決済がご利用頂けます。<br>
                        支払時期：商品注文確定時でお支払いが確定致します。
                    </p>
                </section>

                <section class="sec-block">
                    <h3 class="contents__title">返品についての特約に関する事項</h3>
                    <p class="description">商品に欠陥がある場合を除き、基本的には返品には応じません。</p>
                </section>

                <section class="sec-block">
                    <h3 class="contents__title">役務または商品の引き渡し時期</h3>
                    <p class="description">配送のご依頼を受けてから1週間以内に発送いたします。</p>
                </section>
            </div>
        </main>

    <?php endwhile; ?>
<?php endif; ?>

<!-- get footer template -->
<?php get_footer(); ?>
