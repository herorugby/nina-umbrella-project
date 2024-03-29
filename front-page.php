<!-- get header -->
<?php get_header(); ?>

<main id="main" class="main">
	<div class="wrap">

		<?php
		$args = [
			'post_type'      => 'item', // カスタム投稿名が「item」の場合
			'posts_per_page' => 1,      // 表示させる数
		];
		$my_query = new WP_Query($args);
		?>
		<?php if ($my_query->have_posts()) : ?>
			<?php while ($my_query->have_posts()) : ?>
				<?php $my_query->the_post(); ?>

				<?php
				$leavedays = 7;                                 // NEWマークを表示する日数
				$now       = date_i18n('U');                     // 現在の日時のタイムスタンプを取得
				$entry     = get_the_time('U');                  // unixタイムから投稿した時間までの経過時間を取得
				$progress  = date('U', ($now - $entry)) / 86400; //UNIXタイムをフォーマットにし、現在のローカル時間から投稿時間を引いて３日分の時間で割る
				if ($leavedays > $progress) {
					echo '<p class="new-info__cap">New Item Arrival</p>';
					echo '<a class="new-info__all-items__link" href=" ' . get_post_type_archive_link('item') . ' ">check Items...</a>';
				}
				?>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>

		<section id="about-nina" class="main__about">
			<h2 class="sub__title">About</h2>

			<section class="card-design fadeIn">
				<h3 class="contents__title">nina umbrella project</h3>
				<img class="about-nina__logo_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/main_logo.png" alt="ninaプロジェクトのロゴ">
				<p class="about-nina__description card-design__description">
					&ensp;プロゴルファーであり、「nina」のアクセサリーを制作する岡村&ensp;咲自身も患う指定難病、全身性エリテマトーデス(SLE/Lupus)の患者さんへ遮光100%の晴れ雨兼用日傘を届けるプロジェクトです。<br>
					&ensp;SLE患者さんの抱える問題の１つとして日光過敏症に対して少しでも快適に外出が出来るよう寄贈する傘は、「nina」で販売するアクセサリーの売り上げの一部を資金として使用致します。
				</p>
			</section>

			<section class="about-nina__details__contents card-design fadeIn">
				<h3 class="contents__title">遮光100%<br>UVカット100%<br>晴れ雨兼用日傘とは</h3>
				<picture class="about-nina__umbrella_img card-design__img">
					<source media="(min-width: 960px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/front-page__umbrella_desktop.jpeg">
					<source media="(min-width: 560px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/front-page__umbrella_tablet.jpeg">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-page__umbrella_sp.jpeg" alt="遮光100%日傘の写真">
				</picture>
				<p class="about-umbrella__description card-design__description mgtp">
					&ensp;遮光100%、UVカット100%の日傘と、一般的によく見られる遮光率99%やUVカット99%の日傘とは異なります。<br>
					&ensp;1%の違いと聞くと、僅かな差に感じますが、実際には、紫外線・赤外線・可視光線が100%カットされ、傘を被った顔の周りは暗く、太陽が傘から透けて見えることもありません。
				</p>
				<p class="about-umbrella__description card-design__description mgtp">
					&ensp;紫外線暴露が病気の悪化につながる患者さんにとっては、少しでも体のダメージを軽減することに役立つ日傘と言えます。そして、生地が破れるまで、その遮光率は落ちません。そんな貴重な生地を使用した遮光100%の日傘の価格帯は、約1万円〜となります。
				</p>
				<p class="about-umbrella__description card-design__description mgtp">
					※この製品をプライベートで実際に使用している岡村の感想と、製品の説明を一部抜粋して書かせて頂いております。
				</p>
				<p class="about-umbrella__description card-design__description mgtp">
					これまでの寄贈者の感想は、下記よりご覧いただけます。<br>
					<a href="<?php echo get_post_type_archive_link('feedback'); ?>">-感想の一覧-</a>
				</p>
			</section>

			<section class="about-nina__details__contents card-design fadeIn">
				<h3 class="contents__title">プロゴルファー<br>岡村咲からのコメント</h3>
				<picture class="about-comments__img card-design__img">
					<source media="(min-width: 960px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/front-page__saki-coments_desktop.jpeg">
					<source media="(min-width: 560px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/front-page__saki-coments_tablet.jpeg">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-page__saki-coments_sp.jpeg" alt="岡村咲からのコメント写真">
				</picture>
				<p class="about-comments__description card-design__description mgtp">
					&ensp;本業であるプロゴルファーの活動とは違ったハンドメイドアクセサリーと言う分野でこのような取り組みをする事になるとは、予想もできませんでした。<br>
					&ensp;しかし、病気になったからと言う理由に変わりはありませんが、決してマイナスな意味ではなく自宅で過ごす時間を同じ病気の方と繋がる時間に出来ないだろうか。<br>
					&ensp;自宅にいながら、私たち患者とこの病気をまだ知らないたくさんの方が繋がる方法はないだろうか、と考えた時に大好きなアクセサリーが思い浮かびました。
				</p>
				<p class="about-comments__description card-design__description mgtp">
					&ensp;私自身も全身性エリテマトーデスを始め、食物アレルギーや体調によっては金属アレルギーも出ることがあります。<br>
					&ensp;今回は、比較的金属アレルギーの出にくいとされる14kgf (14金ゴールドフィルド)と言う素材を主に使用する事にしました。<br>
					&ensp;全ての方にアレルギーが起こらない保証はありませんが、金メッキとは違いゴールドフィルド素材のコーティングの厚さや製法は、錆び難く劣化しにくいものになっています。
				</p>
				<p class="about-comments__description card-design__description mgtp">
					&ensp;「nina」のアクセサリーを手に取って頂いた事をキッカケにSLEの事を知ってもらい、たくさんの方に病気を理解して貰えたら結果として、患者さんがより普通にナチュラルに皆さんと社会で交われると思います。
				</p>
				<p class="about-comments__description card-design__description mgtp">
					&ensp;私たちは助けが必要なのではありません。知ってもらえればそれだけで充分に大きな助けになります。理解を得られるだけで病気を個性として生きられると私は思っています。<br>
					&ensp;全身性エリテマトーデス(SLE/Lupus)の方へ日傘を届けるプロジェクトにご賛同いただいた方が、このプロジェクトに参加したと言う思い出とともにninaのアクセサリーを長く愛用して頂けるよう制作に全力を尽くしますので、サポートの程よろしくお願い致します！
				</p>
			</section>

		</section>

		<section id="about-sle" class="main__about fadeIn">
			<h2 class="sub__title last_subtitle">About sle/lupus</h2>

			<div class="about-sle__details card-design">
				<picture class="about-sle__img card-design__img">
					<source media="(min-width: 960px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/front-page__about-sle_desktop.jpeg">
					<source media="(min-width: 560px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/front-page__about-sle_tablet.jpeg">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-page__about-sle_sp.jpeg" alt="sleについての写真">
				</picture>
				<p class="about-sle__description card-design__description mgtp">
					&ensp;膠原病のひとつとして知られている国の指定難病、全身性エリテマトーデス(英名の頭文字を取ってSLE/英語で通称Lupus)の症状はきわめて多彩で、“全身性”という病名のとおり全身の様々な臓器に障害を起こしやすいという特徴があります。<br>
					&ensp;ただし、現れる症状やその組み合わせ、重症度などは個々の患者さんによって異なります。<br>
					&ensp;病気の悪化、または再熱の原因として紫外線暴露・ストレス・睡眠不足・疲れ等が挙げられ、患者は日頃から日中の外出を控えたり最善の紫外線対策をしての外出を求められます。
				</p>
				<p class="about-sle__description card-design__description">
					下記サイトでは、全身性エリテマトーデス(SLE/Lupus)についての説明がされています。<br>
					<a href="https://www.sanofi-sle.jp/" target="_blank" rel="noopener">-SANOFI-</a>
				</p>
				<p class="about-sle__description card-design__description about-sle__description__last-child">
					下記サイトでは、ninaのアクセサリーデザインを手掛けるプロゴルファー岡村咲のエピソードが公開されています。<br>
					<a href="https://www.sanofi-sle.jp/cope/case_03" target="_blank" rel="noopener">-岡村&ensp;咲のエピソード-</a>
				</p>
			</div>
		</section>

		<section id="about-ninakaars" class="main__about fadeIn">

		</section>

	</div>

</main>

<!-- get footer -->
<?php get_footer(); ?>
