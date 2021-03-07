<!-- get header -->
<?php get_header(); ?>

<main id="main">
	<div class="contents__wrap">

		<?php
		$args = [
			'post_type' => 'item', // カスタム投稿名が「item」の場合
			'posts_per_page' => 1, // 表示させる数
		];
		$my_query = new WP_Query($args);
		?>
		<?php if ($my_query->have_posts()) : ?>
			<?php while ($my_query->have_posts()) : ?>
				<?php $my_query->the_post(); ?>

				<?php
				$leavedays = 7;  // NEWマークを表示する日数
				$now = date_i18n('U');  // 現在の日時のタイムスタンプを取得
				$entry = get_the_time('U');  // unixタイムから投稿した時間までの経過時間を取得
				$progress = date('U', ($now - $entry)) / 86400; //UNIXタイムをフォーマットにし、現在のローカル時間から投稿時間を引いて３日分の時間で割る
				?>
				<?php
				if ($leavedays > $progress) {
					echo '<p class="new-info__cap">New Item Arrival</p>';
				?>
					<a class="new-info__all-items__link" href="<?php echo get_post_type_archive_link('item'); ?>">check Items...</a>
				<?php
				}
				?>

			<?php endwhile; ?>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>

		<section id="about-nina" class="main__about">
			<h2 class="sub__title">About</h2>
			<div class="about-nina__details">
				<section class="about-nina__details__contents card-design fadeIn">
					<h3 class="contents__title">nina umbrella project</h3>
					<div class="details-container">
						<div class="about-nina__imgset">
							<img class="about-nina__logo_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/main_logo.png" alt="ninaプロジェクトのロゴ">
						</div>

						<p class="about-nina__description card-design__description">
							プロゴルファーであり、「nina」のアクセサリーを制作する岡村&ensp;咲自身も患う指定難病、全身性エリテマトーデス(SLE/Lupus)の患者さんへ、遮光100%の晴れ雨兼用日傘を届けるプロジェクトです。<br>
							SLE患者さんの抱える問題の１つとして日光過敏症に対して、少しでも快適に外出が出来るよう寄贈する傘は、「nina」で販売するアクセサリーの売り上げの一部を資金として使用致します。<br>
						</p>
					</div>
				</section>
				<section class="about-nina__details__contents card-design fadeIn">
					<h3 class="contents__title">遮光100%<br>UVカット100%<br>晴れ雨兼用日傘とは</h3>
					<div class="details-container">
						<picture class="about-nina__umbrella_img card-design__img">
							<source media="(min-width: 960px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/front-page__umbrella_desktop.jpg">
							<source media="(min-width: 560px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/front-page__umbrella_tablet.jpg">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-page__umbrella_sp.jpg" alt="遮光100%日傘の写真">
						</picture>
						<p class="about-umbrella__description card-design__description">
							遮光100%、UVカット100%の日傘と、一般的によく見られる遮光率99%やUVカット99%の日傘とは異なります。<br>
							1%の違いと聞くと、僅かな差に感じますが、実際には、紫外線・赤外線・可視光線が100%カットされ、傘を被った顔の周りは暗く、太陽が傘から透けて見えることもありません。<br>
							紫外線暴露が病気の悪化につながる患者さんにとっては、少しでも体のダメージを軽減することに役立つ日傘と言えます。そして、生地が破れるまで、その遮光率は落ちません。<br>
							そんな貴重な生地を使用した遮光100%の日傘の価格帯は、約1万円〜となります。<br>
							※この製品をプライベートで実際に使用している岡村の感想と、製品の説明を一部抜粋して書かせて頂いております。<br>
						</p>
					</div>
				</section>
				<section class="about-nina__details__contents card-design fadeIn">
					<h3 class="contents__title">プロゴルファー<br>岡村咲からのコメント</h3>
					<picture class="about-comments__img card-design__img">
						<source media="(min-width: 960px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/front-page__saki-coments_desktop.jpg">
						<source media="(min-width: 560px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/front-page__saki-coments_tablet.jpg">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-page__saki-coments_sp.jpg" alt="岡村咲からのコメント写真">
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
				</section>
			</div>
		</section>

		<section id="about-sle" class="main__about fadeIn">
			<h2 class="sub__title">About sle/lupus</h2>
			<div class="about-sle__details card-design">
				<picture class="about-sle__img card-design__img">
					<source media="(min-width: 960px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/front-page__about-sle_desktop.jpg">
					<source media="(min-width: 560px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/front-page__about-sle_tablet.jpg">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-page__about-sle_sp.jpg" alt="sleについての写真">
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
