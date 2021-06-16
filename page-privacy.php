<!-- get header -->
<?php get_header('sub'); ?>

<main id="main" class="main">

    <ul class="container breadcrumb__list">
        <li class="breadcrumb__item"><a href="<?php echo esc_url(home_url('/')); ?>">HOME</a></li>
        <li class="breadcrumb__item">>></li>
        <li class="breadcrumb__item"><?php the_title(); ?></li>
    </ul>

    <div class="wrap">

        <section class="sec-block--mgnone">
            <h2>プライバシーポリシー</h2>
            <p class="description">当社では、お客様の個人情報について以下のとおり取り扱い、サービスを提供いたします。</p>
        </section>

        <section class="sec-block">
            <h3>個人情報取り扱い事業者 (当社) の名称</h3>
            <p class="description">小野 咲</p>
        </section>

        <section class="sec-block">
            <h3>個人情報の管理者の氏名および連絡先</h3>
            <p class="description"><a href="#">特定商取引に基づく表記</a>をご覧ください。</p>
        </section>

        <section class="sec-block">
            <h3>取得する個人情報と利用目的</h3>
            <p class="description">
                1,取得する個人情報<br>
                 住所、氏名、電話番号、電子メールアドレス<br>
                2,利用目的<br>
                 サービスの提供（商品の発送や管理、資料の提供等）や当社からの連絡（お客様からのお問い合わせに対する回答やアンケート、新しいサービスや商品のご案内・広告等）
            </p>
        </section>

        <section class="sec-block">
            <h3>個人情報の第三者提供に関する制限</h3>
            <p class="description">当社は、次に掲げる場合を除くほか、あらかじめご本人の同意を得ないで、お客様の個人情報を第三者に提供致しません。</p>
            <p class="description">
                1,法令に基づく場合<br>
                2,人の生命、身体または財産の保護のために必要がある場合であって、ご本人の同意を得ることが困難であるとき<br>
                3,公衆衛生の向上または児童の健全な育成の推進のために特に必要がある場合であって、ご本人の同意を得ることが困難であるとき<br>
                4,国の機関もしくは地方公共団体またはその委託を受けた者が法令の定める事務を遂行することに対して協力する必要がある場合であって、ご本人の同意を得ることにより当該事務の遂行に支障を及ぼすおそれがあるとき<br>
                5,あらかじめ次の事項を告知あるいは公表をしている場合<br>
                (1) 利用目的に第三者への提供を含むこと<br>
                (2) 第三者に提供されるデータの項目<br>
                (3) 第三者への提供の手段または方法<br>
                (4) ご本人の求めに応じて個人情報の第三者への提供を停止すること<br>
                ただし次に掲げる場合は上記に定める第三者には該当しません。<br>
                (4-1) 当社が利用目的の達成に必要な範囲内において個人情報の取り扱いの全部または一部を委託する場合<br>
                (4-2) 合併その他の事由による事業の承継に伴って個人情報が提供される場合
            </p>
        </section>

        <section class="sec-block">
            <h3>個人情報の取り扱いの委託</h3>
            <p class="description">
                当社はサービスを提供する上で、業務の一部（商品の発送や代金決裁等）を外部に委託することがあります。<br>
                この場合、個人情報を法令に従い適切に取り扱う委託先を選定し、お客様の個人情報が流出・漏洩したりすることがないよう委託先の管理体制を含め契約で取り決め適切に管理させます。
            </p>
        </section>

        <section class="sec-block">
            <h3>個人情報の開示、訂正・追加・削除等</h3>
            <p class="description">
                当社は、ご本人（または代理人）から、ご自身の個人情報についての開示、内容の訂正、追加または削除を求められたときは、ご本人に対し、当社所定の手続きにて対応します。
            </p>
        </section>

        <section class="sec-block">
            <h3>クッキー</h3>
            <p class="description">
                クッキーについては、お客様によるサービスの利用を便利にするために利用しますが、ブラウザの設定で拒否することが可能です。<br>
                また、クッキーを拒否するとサービスが受けられない場合は、その旨も公表します。
            </p>
        </section>
    </div>
</main>

<!-- get footer -->
<?php get_footer(); ?>
