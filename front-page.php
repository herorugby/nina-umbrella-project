<!-- get header -->
<?php get_header(); ?>

<main id="main">
	<div class="contents__wrap">

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
			<?php
			$args = [
				'post_type' => 'item',
				// 'posts_per_page' => 5,
			];
			$my_query = new WP_Query($args); ?>
			<?php if ($my_query->have_posts()) : ?>
				<?php while ($my_query->have_posts()) : ?>
					<?php $my_query->the_post(); ?>
					<div class="remodal" data-remodal-id="<?php the_ID(); ?>">
						<button data-remodal-action="close" class="remodal-close"></button>
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
						<br>
						<button data-remodal-action="cancel" class="remodal-cancel">閉じる</button>
						<button data-remodal-action="confirm" class="remodal-confirm">アイテム一覧</button>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>

		</div>


		<section id="about-nina" class="main__about">
			<h2 class="sub__title">About</h2>
			<div class="about-nina__details">
				<div class="about-nina__details__contents card-design">
					<h3 class="contents__title">nina umbrella project</h3>
					<div class="details-container">
						<picture class="about-nina__img card-design__img">
							<source media="(min-width: 960px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/test1.jpg">
							<source media="(min-width: 560px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/test1.jpg">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/test1.jpg" alt="test写真1">
						</picture>
						<p class="about-nina__description card-design__description">
							プロゴルファーであり、「nina」のアクセサリーを制作する岡村&ensp;咲自身も患う指定難病、全身性エリテマトーデス(SLE/Lupus)の患者さんへ、遮光100%の晴れ雨兼用日傘を届けるプロジェクトです。<br>
							SLE患者さんの抱える問題の１つとして日光過敏症に対して、少しでも快適に外出が出来るよう寄贈する傘は、「nina」で販売するアクセサリーの売り上げの一部を資金として使用致します。<br>
						</p>
					</div>
				</div>
				<div class="about-nina__details__contents card-design">
					<h3 class="contents__title">遮光100%<br>UVカット100%<br>晴れ雨兼用日傘とは</h3>
					<div class="details-container">
						<picture class="about-nina__img card-design__img">
							<source media="(min-width: 960px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/test1.jpg">
							<source media="(min-width: 560px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/test1.jpg">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/test1.jpg" alt="test写真1">
						</picture>
						<p class="about-umbrella__description card-design__description">
							遮光100%、UVカット100%の日傘と、一般的によく見られる遮光率99%やUVカット99%の日傘とは異なります。<br>
							1%の違いと聞くと、僅かな差に感じますが、実際には、紫外線・赤外線・可視光線が100%カットされ、傘を被った顔の周りは暗く、太陽が傘から透けて見えることもありません。<br>
							紫外線暴露が病気の悪化につながる患者さんにとっては、少しでも体のダメージを軽減することに役立つ日傘と言えます。そして、生地が破れるまで、その遮光率は落ちません。<br>
							そんな貴重な生地を使用した遮光100%の日傘の価格帯は、約1万円〜となります。<br>
							※この製品をプライベートで実際に使用している岡村の感想と、製品の説明を一部抜粋して書かせて頂いております。<br>
						</p>
					</div>
				</div>
				<div class="about-nina__details__contents card-design">
					<h3 class="contents__title">プロゴルファー<br>岡村咲からのコメント</h3>
					<picture class="about-comments__img card-design__img">
						<source media="(min-width: 960px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/test1.jpg">
						<source media="(min-width: 560px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/test1.jpg">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/test1.jpg" alt="test写真1">
					</picture>
					<p class="about-comments__description card-design__description">
						本業であるプロゴルファーの活動とは違った、ハンドメイドアクセサリーと言う分野でこのような取り組みをする事になるとは予想もできませんでした。
						しかし、病気になったから、と言う理由に変わりはありませんが、決してマイナスな意味ではなく、自宅で過ごす時間を、同じ病気の方と繋がる時間に出来ないだろうか。<br>
						自宅にいながら、私たち患者とこの病気をまだ知らない、たくさんの方が繋がる方法はないだろうか、と考えた時、大好きなアクセサリーが思い浮かびました。<br>
						私自身も全身性エリテマトーデスを始め、食物アレルギーや、体調によっては金属アレルギーも出ることがあります。<br>
						今回は、比較的金属アレルギーの出にくいとされる、14kgf (14金ゴールドフィルド)と言う素材を主に使用する事にしました。
						全ての方にアレルギーが起こらない保証はありませんが、金メッキとは違い、ゴールドフィルド素材のコーティングの厚さや製法は、錆び難く劣化しにくいものになっています。<br>
						「nina」のアクセサリーを手に取って頂いた事をキッカケに、SLEの事を知ってもらい、たくさんの方に病気を理解して貰えたら、結果として、患者さんがより普通に、ナチュラルに皆さんと社会で交われると思います。<br>
						私たちは助けが必要なのではありません。知ってもらえれば、それだけで充分に、大きな助けになります。理解を得られるだけで、病気を個性として生きられると、私は思っています。<br>
						全身性エリテマトーデス(SLE/Lupus)の方へ日傘を届けるプロジェクトにご賛同いただいた方が、このプロジェクトに参加したと言う思い出とともに、nina のアクセサリーを長く愛用して頂けるよう、制作に全力を尽くしますので、サポートの程よろしくお願い致します！
					</p>
				</div>
			</div>
		</section>

		<section id="about-sle" class="main__about">
			<h2 class="sub__title">About sle/lupus</h2>
			<div class="about-sle__details card-design">
				<picture class="about-sle__img card-design__img">
					<source media="(min-width: 960px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/test1.jpg">
					<source media="(min-width: 560px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/test1.jpg">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/test1.jpg" alt="test写真1">
				</picture>
				<p class="about-sle__description card-design__description">
					膠原病のひとつとして知られている国の指定難病、全身性エリテマトーデス(英名の頭文字を取ってSLE/英語で通称Lupus)の症状はきわめて多彩で、
					“全身性”という病名のとおり、全身の様々な臓器に障害を起こしやすいという特徴があります。<br>
					ただし、現れる症状やその組み合わせ、重症度などは個々の患者さんによって異なります。<br>
					病気の悪化、または再熱の原因として、紫外線暴露・ストレス・睡眠不足・疲れ等が挙げられ、
					患者は日頃から日中の外出を控えたり、最善の紫外線対策をしての外出を求められます。
				</p>
				<p class="about-sle__description card-design__description">
					下記サイトでは、全身性エリテマトーデス(SLE/Lupus)についての説明がされています。<br>
					<a href="https://www.sanofi-sle.jp/" target="_blank" rel="noopener">SANOFI</a>
				</p>
				<p class="about-sle__description card-design__description about-sle__description__last-child">
					下記サイトでは、ninaのアクセサリーデザインを手掛けるプロゴルファー岡村咲のエピソードが公開されています。<br>
					<a href="https://www.sanofi-sle.jp/cope/case_03" target="_blank" rel="noopener">岡村&ensp;咲のエピソード</a>
				</p>
			</div>
		</section>

	</div>

</main>

<!-- get footer -->
<?php get_footer(); ?>
