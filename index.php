<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo('name'); ?></title>

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/stylesheets/reset.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/stylesheets/index.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/stylesheets/footer.css">

	<!-- google fonts notoserifjp lora dancingscript -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Lora:wght@600&family=Noto+Serif+JP:wght@600&display=swap" rel="stylesheet">

	<!-- read css of slick -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Lora:wght@600&family=Noto+Serif+JP:wght@600&display=swap" rel="stylesheet">

	<!-- read css of modaal
	 -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/modaal@0.4.4/dist/css/modaal.min.css">

	<!-- cdn of jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- cdn of slick -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

	<!-- cdn of modal -->
	<script src="https://cdn.jsdelivr.net/npm/modaal@0.4.4/dist/js/modaal.min.js"></script>

	<!-- read fontsawesome -->
	<script src="https://kit.fontawesome.com/72a93cd7e4.js" crossorigin="anonymous"></script>






</head>

<body>
	<div class="all-wrap">
		<!-- 上のwrapは不要かも -->
		<header id="header top">
			<a class="top__link" href="<?php echo home_url(); ?>">
				<img class="top__logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/large-device-logo.png" alt="nina-umbrella-projectのロゴ">
				<h1 class="top__title">nina</h1>
				<p class="top__title__catch"><?php bloginfo('description'); ?></p>
			</a>

			<div class="header__img-slide-show">
				<picture class="top__img">
					<source media="(min-width: 960px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/test-main-img1.jpeg">
					<source media="(min-width: 560px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/test-main-img1.jpeg">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/test-main-img1.jpeg" alt="test写真1">
				</picture>
				<picture class="top__img">
					<source media="(min-width: 960px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/test-main-img2.jpg">
					<source media="(min-width: 560px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/test-main-img2.jpg">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/test-main-img2.jpg" alt="test写真2">
				</picture>
				<picture class="top__img">
					<source media="(min-width: 960px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/test-main-img3.jpeg">
					<source media="(min-width: 560px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/test-main-img3.jpeg">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/test-main-img3.jpeg" alt="test写真3">
				</picture>
				<picture class="top__img">
					<source media="(min-width: 960px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/test-main-img2.jpg">
					<source media="(min-width: 560px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/test-main-img2.jpg">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/test-main-img2.jpg" alt="test写真2">
				</picture>
			</div>

			<nav id="gnav" class="container gnav__container">
				<ul class="gnav__list">
					<li class="gnav__list__item"><a href="index.html">HOME & About</a></li>
					<li class="gnav__list__item"><a href="workshop.html">Workshop</a></li>
					<li class="gnav__list__item"><a href="items.html">Items</a></li>
				</ul>
			</nav>
			<div class="hamburger-icon">
				<i id="hamburger-btn" class="fas fa-list-ul"></i>
			</div>
		</header>

		<main id="main">
			<div class="contents__wrap">
				<div class="main__new-info">
					<ul class="new-info__list">
						<li class="new-info__list__items"><a href="items.html#latest">New Item Arrival!!</a></li>
						<li class="new-info__list__items"><a href="items.html#latest">New Item Arrival!!</a></li>
					</ul>
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

		<footer id="footer">
			<div class="footer-wrap">
				<p class="footer__base-link">各アクセサリーのご購入は、下記をクリックしてください。<br>※BASEネットショップ管理画面へ移動します。</p>
				<div class="links__btn">
					<a href="https://ninaumbrella.thebase.in/" target="_blank" rel="noopener"><img class="links__base-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/base_logo_horizontal_black.png" alt="BASEネットショップへ"></a>
				</div>
				<p class="official-sns">公式SNS</p>
				<ul class="container footer__sns-icon">
					<li class="sns-icon__instagram">
						<a href="https://www.instagram.com/nina_bysakiokamura/?igshid=ir99440gxhwq" target="_blank" rel="noopener">
							<i class="fab fa-instagram-square"></i>
						</a>
					</li>
					<li class="sns-icon__facebook">
						<a href="https://www.facebook.com/nina.umbrella.project/" target="_blank" rel="noopener">
							<i class="fab fa-facebook"></i>
						</a>
					</li>
				</ul>
				<div class="container footer__policy">
					<p class="policy__privacy"><a href="privacy-policy.html">プライバシーポリシー</a></p>
					<p class="policy__trade"><a href="trade-policy.html">特定商取引法に基づく表記</a></p>
				</div>
				<div class="footer__contents__copy-right">
					<p><small>&copy; <span id="copyRight"></span>nina umbrella project</small></p>
				</div>
			</div>
		</footer>

	</div>

	<!-- read js file -->
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/index.js"></script>
</body>

</html>
