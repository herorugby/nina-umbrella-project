<!-- get header -->
<?php get_header('sub'); ?>

<main id="main" class="main">

    <ul class="container breadcrumb__list">
        <li class="breadcrumb__item"><a href="<?php echo esc_url(home_url('/')); ?>">HOME</a></li>
        <li class="breadcrumb__item">>></li>
        <li class="breadcrumb__item"><?php the_title(); ?></li>
    </ul>

    <div class="wrap">

        <section id="workshop" class="main__workshop">
            <h2 class="sub__title">Workshop</h2>

            <section class="workshop__details__contents card-design fadeIn">
                <h3 class="contents__title">ninaで制作する<br>アクセサリーの素材について</h3>
                <picture class="workshop__img--mgtp card-design__img">
                    <source media="(min-width: 960px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/workshop__material_img_desktop.JPG">
                    <source media="(min-width: 560px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/workshop__material_img_tablet.jpg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/workshop__material_img_sp.jpg" alt="アクセサリー制作風景">
                </picture>
                <p class="workshop__description--mgtp card-design__description">
                    nina で制作するアクセサリーに使用する素材は以下の通りです。<br>
                    ・14kgf / 14金ゴールドフィルド
                    (ピアスホール、キャッチ、全ての連結パーツ、
                    ワイヤー、チェーン、アレンジパーツ)<br>
                    ・淡水パール<br>
                    ・シェルパール<br>
                    ・シェル<br>
                    ・天然石<br>
                    ・ガラスビーズ<br>
                    ・アクリルビーズ<br>
                    ・シリコンキャッチ<br>
                    ・樹脂ノンホールピアス<br>
                    ※予告なく、素材が変更、追加される場合があります。<br>
                    ※アクセサリーをご購入の際は、各商品の商品説明を必ずお読みください。
                </p>
            </section>

            <section class="workshop__details__contents card-design fadeIn">
                <h3 class="contents__title">「14kgf」とは</h3>
                <picture class="workshop__img card-design__img">
                    <source media="(min-width: 960px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/workshop__14kgf_img_desktop.jpg">
                    <source media="(min-width: 560px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/workshop__14kgf_img_tablet.jpg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/workshop__14kgf_img_sp.jpg" alt="素材紹介画像">
                </picture>
                <p class="workshop__description card-design__description">
                    手軽に本物の金の輝きを楽しめる、欧米ではポピュラーな素材です。<br>
                    金属の総重量のうち、1/20以上が14金で出来ている金張り加工のことを言います。<br>
                    また、通常の金メッキよりはるかに金の層が厚く、長期間使用しても剥がれることなく、金属アレルギーに優しい素材とされています。<br>
                    また、その輝きはゴールドアクセサリーと程近く、美しいと言われています。<br>
                    (一般的な金メッキは薄く"コーティング"されているのに比べ、ゴールドフィルドは、厚い金のプレートを"圧着"しており、厚みが約100倍あります。)
                </p>
            </section>

            <section class="workshop__details__contents card-design fadeIn">
                <h3 class="contents__title">「14kgf」のお手入れ方法</h3>
                <p class="workshop__description_care card-design__description">
                    14kgfは、ゴールドアクセサリーと同様、着用後に柔らかいコットンや布（メガネ用の布がおすすめ）で、包み込むように汗や皮脂を拭き取ることで美しく長く使用する事ができます。<br>
                    また、身に着けたままお風呂に入るのは、劣化を加速させる原因となることがあります。<br>
                    天然石や真珠が付いている場合は、破損防止のため優しくお手入れしてください。<br>
                    普段のお手入れは拭くだけで結構ですが、長く愛用しているうちに稀に酸化して黒ずみが気になる可能性があります。<br>
                    その場合は市販のジュエリークリーナーの使用をお勧めします。
                </p>
            </section>

            <section class="workshop__details__contents card-design fadeIn">
                <h3 class="contents__title">お取り扱いの注意点</h3>
                <p class="workshop__description_care card-design__description">
                    繊細な天然パーツや柔らかい14kgfのピアスポスト、連結パーツを使用しておりますので、お取り扱いには十分お気をつけ下さい。<br>
                    洋服の脱着には、ピアスを外した状態をお勧めします。
                </p>
            </section>

        </section>

    </div>

</main>

<!-- get footer -->
<?php get_footer(); ?>
