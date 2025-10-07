<?php
/*
Template Name: front-page
*/
?>
<?php get_header(); ?>
<main>
<div class="p-fv">
	<div class="p-fv__text-area">
		<h2>Life & Business<br><span>Support</span></h2>
		<h3>皆さまのライフやビジネスに寄り添うサービスを。</h3>
		<p>大同特殊鋼グループの皆さまの<br>暮らしやビジネスを<br>総合的にサポートいたします。</p>
	</div>
	<div class="p-fv__scroll-area"><a class="p-fv__scroll-area__link" href="#contents"><span>scroll</span></a></div>
	<button class="p-fv__btn"><img src="<?php echo get_template_directory_uri(); ?>/images/front-page/fv-ico.svg" alt="" class="p-fv__ico"></button>
	<div class="p-fv__menu">
		<div class="p-fv__menu__inner">
		<a class="fv-menu__title" href="#">工場</a>
		<ul class="fv-menu">
			<li><a href="#">火災・地震保険</a></li>
			<li><a href="#">清掃</a></li>
			<li><a href="#">警備</a></li>
			<li><a href="#">工場緑化</a></li>
			<li><a href="#">店舗運営</a></li>
			<li><a href="#">給食事業</a></li>
		</ul>
		</div>
		<button class="p-fv__buckbtn">戻る</button>
	</div>
	<picture>
		<source media="(max-width: 1023px)" srcset="<?php echo get_template_directory_uri(); ?>/images/front-page/bg.png" type="image/jpg">
		<source srcset="<?php echo get_template_directory_uri(); ?>/images/front-page/bg.jpg" type="image/jpg">
		<img src="<?php echo get_template_directory_uri(); ?>/images/front-page/bg.jpg" alt="" class="p-fv__bg">
	</picture>
</div>
<div id="contents" class="contents">
	<section class="p-catch animate-fade">
		<h2 class="p-catch__title">経験豊富な<span>ライフ</span>サポーターが<br>様々なライフステージ、<br class="sp">ビジネスシーンにおけるご相談に<br>的確にお応えします。</h2>
	</section>
	<section class="p-service p-service__grpup">
		<h2 class="p-service__title animate-bottom">大同グループ向けサービス</h2>
		<!--Horizontal Tab-->
		<div id="parentHorizontalTab" class="p-service__tabarea">
			<ul class="resp-tabs-list tab_list hor_1">
				<li class="tab_1_1 animate-bottom">大同グループ従業員・ご家族の皆さま</li>
				<li class="tab_1_2 animate-bottom">大同グループ会社の担当者さま</li>
			</ul>
			<div class="resp-tabs-container hor_1">
				<div class="tab_content tab_1_1">
					<p class="tab_content__text animate-bottom">大同グループならではの<br class="sp">安心＆お得なサービスを<br class="sp">ご提供いたします。<br class="sp"><br class="tab">お気軽にご相談ください。</p>
					<ul class="p-service__list">
						<li class="p-service__list__item">
							<h3>保険</h3>
							<ul class="p-service__linklist">
								<li class="p-service__linklist__item w50"><a href="/service/insurance/employee_automobile/">自動車保険</a></li>
								<li class="p-service__linklist__item w50"><a href="/service/insurance/employee_group/">団体傷害保険</a></li>
								<li class="p-service__linklist__item w50"><a href="/service/insurance/employee_iryo/">医療保険</a></li>
								<li class="p-service__linklist__item w50"><a href="/service/insurance/employee_gan/">がん保険</a></li>
							</ul>
							<img class="p-service__image" src="<?php echo get_template_directory_uri(); ?>/images/front-page/service-image01.webp" type="immage/webp">
						</li>
						<li class="p-service__list__item">
							<h3>不動産</h3>
							<ul class="p-service__linklist">
								<li class="p-service__linklist__item w50"><a href="/service/home/rent/">賃貸物件</a></li>
								<li class="p-service__linklist__item w50"><a href="/service/home/agency/">仲介</a></li>
								<li class="p-service__linklist__item w100"><a href="/service/home/alliance/">企業提携</a></li>
							</ul>
							<img class="p-service__image" src="<?php echo get_template_directory_uri(); ?>/images/front-page/service-image02.webp" type="immage/webp">
						</li>
						<li class="p-service__list__item">
							<h3>ベーカリー運営</h3>
							<ul class="p-service__linklist">
								<li class="p-service__linklist__item w100"><a href="/service/food/bakery/">焼きたてパンの製造販売</a></li>
							</ul>
							<img class="p-service__image" src="<?php echo get_template_directory_uri(); ?>/images/front-page/service-image03.svg" type="immage/svg">
						</li>
					</ul>
					<div class="swiper p-swiper animate-bottom">
						<div class="swiper-wrapper">
							<div class="swiper-slide"><a class="swiper-link" href="#"><img class="swiper-image" src="<?php echo get_template_directory_uri(); ?>/images/front-page/slider01.webp" type="immage/webp"></a></div>
							<div class="swiper-slide"><a class="swiper-link" href="#"><img class="swiper-image" src="<?php echo get_template_directory_uri(); ?>/images/front-page/slider02.webp" type="immage/webp"></a></div>
						</div>
						<div class="swiper-pagination"></div>
					</div>
				</div>
				<div class="tab_content tab_1_2">
					<p class="tab_content__text animate-bottom">貴社のお役に立てる<br class="sp">様々なサービスをご提供いたします。<br class="sp"><br class="tab">お気軽にご相談ください。</p>
					<ul class="p-service__list">
						<li class="p-service__list__item">
							<h3>保険</h3>
							<ul class="p-service__linklist">
								<li class="p-service__linklist__item w50"><a href="/service/insurance/houjin/">法人向け保険</a></li>
								<li class="p-service__linklist__item w50"><a href="/insurance/assets/pdf/habitation_2022.pdf" target="_blank">寮・社宅の保険</a></li>
								<li class="p-service__linklist__item w100"><a href="/service/insurance/jiko/">事故保険金請求</a></li>
							</ul>
							<img class="p-service__image" src="<?php echo get_template_directory_uri(); ?>/images/front-page/service2-image01.webp" type="immage/webp">
						</li>
						<li class="p-service__list__item">
							<h3>不動産</h3>
							<ul class="p-service__linklist">
								<li class="p-service__linklist__item w50"><a href="/service/home/alliance/">企業提携</a></li>
								<li class="p-service__linklist__item w50"><a href="/service/home/agency/">仲介</a></li>
								<li class="p-service__linklist__item w100"><a href="/service/home/rent/">賃貸物件</a></li>
							</ul>
							<img class="p-service__image" src="<?php echo get_template_directory_uri(); ?>/images/front-page/service2-image02.webp" type="immage/webp">
						</li>
						<li class="p-service__list__item">
							<h3>デジタルサイネージ</h3>
							<ul class="p-service__linklist">
								<li class="p-service__linklist__item w60"><a href="/service/business/signage/#">コンテンツの制作</a></li>
								<li class="p-service__linklist__item w40"><a href="/service/business/signage/#">配信管理</a></li>
								<li class="p-service__linklist__item w100"><a href="/service/business/signage/#">ハードウェアの提供</a></li>
							</ul>
							<img class="p-service__image" src="<?php echo get_template_directory_uri(); ?>/images/front-page/service2-image03.webp" type="immage/webp">
						</li>
						<li class="p-service__list__item">
							<h3>受託管理</h3>
							<ul class="p-service__linklist">
								<li class="p-service__linklist__item w100"><a href="#">福利厚生施設運営</a></li>
								<li class="p-service__linklist__item w100"><a href="#">寮・クラブ・保養所など</a></li>
							</ul>
							<img class="p-service__image" src="<?php echo get_template_directory_uri(); ?>/images/front-page/service2-image04.webp" type="immage/webp">
						</li>
						<li class="p-service__list__item">
							<h3>リース</h3>
							<ul class="p-service__linklist">
								<li class="p-service__linklist__item w30"><a href="#">乗用車</a></li>
								<li class="p-service__linklist__item w30"><a href="#">トラック</a></li>
								<li class="p-service__linklist__item w30"><a href="#">パソコン</a></li>
								<li class="p-service__linklist__item w70"><a href="#">フォークリフト</a></li>
								<li class="p-service__linklist__item w30-2"><a href="#">事務機器</a></li>
							</ul>
							<img class="p-service__image" src="<?php echo get_template_directory_uri(); ?>/images/front-page/service2-image05.webp" type="immage/webp">
						</li>
						<li class="p-service__list__item">
							<h3>印刷・WEB情報発信</h3>
							<ul class="p-service__linklist">
								<li class="p-service__linklist__item w30"><a href="#">広報誌</a></li>
								<li class="p-service__linklist__item w30"><a href="#">カタログ</a></li>
								<li class="p-service__linklist__item w30"><a href="#">記念誌</a></li>
								<li class="p-service__linklist__item w50"><a href="#">展示会</a></li>
								<li class="p-service__linklist__item w50"><a href="#">印刷・製本</a></li>
								<li class="p-service__linklist__item w100"><a href="#">Webサイト構築</a></li>
							</ul>
							<img class="p-service__image" src="<?php echo get_template_directory_uri(); ?>/images/front-page/service2-image06.webp" type="immage/webp">
						</li>
						<li class="p-service__list__item">
							<h3>清掃</h3>
							<ul class="p-service__linklist">
								<li class="p-service__linklist__item w100"><a href="#">定期清掃</a></li>
								<li class="p-service__linklist__item w100"><a href="#">特殊清掃</a></li>
							</ul>
							<img class="p-service__image" src="<?php echo get_template_directory_uri(); ?>/images/front-page/service2-image07.webp" type="immage/webp">
						</li>
						<li class="p-service__list__item">
							<h3>警備</h3>
							<ul class="p-service__linklist">
								<li class="p-service__linklist__item w100"><a href="#">工場警備</a></li>
							</ul>
							<img class="p-service__image" src="<?php echo get_template_directory_uri(); ?>/images/front-page/service2-image08.webp" type="immage/webp">
						</li>
						<li class="p-service__list__item">
							<h3>工場緑化</h3>
							<ul class="p-service__linklist">
								<li class="p-service__linklist__item w50"><a href="#">工場緑化管理</a></li>
								<li class="p-service__linklist__item w50"><a href="#">バス運行業務</a></li>
								<li class="p-service__linklist__item w100"><a href="#">工場内掲示看板製作</a></li>
							</ul>
							<img class="p-service__image" src="<?php echo get_template_directory_uri(); ?>/images/front-page/service2-image09.webp" type="immage/webp">
						</li>
						<li class="p-service__list__item">
							<h3>物品販売</h3>
							<ul class="p-service__linklist">
								<li class="p-service__linklist__item w70"><a href="#">大同オリジナル商品</a></li>
								<li class="p-service__linklist__item w30-2"><a href="#">自動車</a></li>
								<li class="p-service__linklist__item w50"><a href="#">防災備蓄品</a></li>
								<li class="p-service__linklist__item w50"><a href="#">各種記念品</a></li>
							</ul>
							<img class="p-service__image" src="<?php echo get_template_directory_uri(); ?>/images/front-page/service2-image10.webp" type="immage/webp">
						</li>
						<li class="p-service__list__item">
							<h3>店舗運営</h3>
							<ul class="p-service__linklist">
								<li class="p-service__linklist__item w100"><a href="#">構内売店・コンビニ運営</a></li>
							</ul>
							<img class="p-service__image" src="<?php echo get_template_directory_uri(); ?>/images/front-page/service2-image11.webp" type="immage/webp">
						</li>
						<li class="p-service__list__item">
							<h3>給食事業</h3>
							<ul class="p-service__linklist">
								<li class="p-service__linklist__item w100"><a href="#">社員食堂運営</a></li>
							</ul>
							<img class="p-service__image" src="<?php echo get_template_directory_uri(); ?>/images/front-page/service2-image12.webp" type="immage/webp">
						</li>
						<li class="p-service__list__item">
							<h3>大同木曽駒倶楽部</h3>
							<ul class="p-service__linklist">
								<li class="p-service__linklist__item w100"><a href="#">予約受付</a></li>
								<li class="p-service__linklist__item w100"><a href="#">予約状況確認</a></li>
							</ul>
							<img class="p-service__image" src="<?php echo get_template_directory_uri(); ?>/images/front-page/service2-image13.webp" type="immage/webp">
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section class="p-service p-service__general">
		<h2 class="p-service__title animate-bottom">一般の皆さま向けサービス</h2>
		<!--Horizontal Tab-->
		<div id="parentHorizontalTab2" class="p-service__tabarea">
			<ul class="resp-tabs-list tab_list hor_2">
				<li class="tab_2_1 animate-bottom">個人の皆さま</li>
				<li class="tab_2_2 animate-bottom">法人の皆さま</li>
			</ul>
			<div class="resp-tabs-container hor_2">
				<div class="tab_content tab_2_1">
					<p class="tab_content__text animate-bottom">大同グループならではの<br class="sp">安心＆お得なサービスを<br class="sp">ご提供いたします。<br class="sp"><br class="tab">お気軽にご相談ください。</p>
					<ul class="p-service__list">
						<li class="p-service__list__item">
							<h3>保険</h3>
							<ul class="p-service__linklist">
								<li class="p-service__linklist__item w50"><a href="/service/insurance/customer_seimei/">生命保険</a></li>
								<li class="p-service__linklist__item w50"><a href="/service/insurance/customer_automobile/">自動車保険</a></li>
								<li class="p-service__linklist__item w100"><a href="/service/insurance/customer_habitation/">火災・地震保険</a></li>
							</ul>
							<img class="p-service__image" src="<?php echo get_template_directory_uri(); ?>/images/front-page/service-image01.webp" type="immage/webp">
						</li>
						<li class="p-service__list__item">
							<h3>不動産</h3>
							<ul class="p-service__linklist">
								<li class="p-service__linklist__item w50"><a href="/service/home/rent/">賃貸物件</a></li>
								<li class="p-service__linklist__item w50"><a href="/service/home/agency/">仲介</a></li>
							</ul>
							<img class="p-service__image" src="<?php echo get_template_directory_uri(); ?>/images/front-page/service3-image02.webp" type="immage/webp">
						</li>
						<li class="p-service__list__item">
							<h3>ベーカリー運営</h3>
							<ul class="p-service__linklist">
								<li class="p-service__linklist__item w100"><a href="/service/food/bakery/">焼きたてパンの製造販売</a></li>
							</ul>
							<img class="p-service__image" src="<?php echo get_template_directory_uri(); ?>/images/front-page/service-image03.svg" type="immage/svg">
						</li>
					</ul>
					<div class="swiper p-swiper2 animate-bottom">
						<div class="swiper-wrapper">
							<div class="swiper-slide"><a class="swiper-link" href="#"><img class="swiper-image" src="<?php echo get_template_directory_uri(); ?>/images/front-page/slider02.webp" type="immage/webp"></a></div>
						</div>
						<div class="swiper-pagination"></div>
					</div>
				</div>
				<div class="tab_content tab_2_2">
					<p class="tab_content__text animate-bottom">貴社のお役に立てる<br class="sp">様々なサービスをご提供いたします。<br class="sp"><br class="tab">お気軽にご相談ください。</p>
					<ul class="p-service__list">
						<li class="p-service__list__item">
							<h3>保険</h3>
							<ul class="p-service__linklist">
								<li class="p-service__linklist__item w50"><a href="#">法人向け保険</a></li>
								<li class="p-service__linklist__item w50"><a href="#">寮・社宅の保険</a></li>
								<li class="p-service__linklist__item w100"><a href="#">事故保険金請求 など</a></li>
							</ul>
							<img class="p-service__image" src="<?php echo get_template_directory_uri(); ?>/images/front-page/service4-image01.webp" type="immage/webp">
						</li>
						<li class="p-service__list__item">
							<h3>不動産</h3>
							<ul class="p-service__linklist">
								<li class="p-service__linklist__item w50"><a href="#">賃貸物件</a></li>
								<li class="p-service__linklist__item w50"><a href="#">仲介</a></li>
							</ul>
							<img class="p-service__image" src="<?php echo get_template_directory_uri(); ?>/images/front-page/service4-image02.webp" type="immage/webp">
						</li>
						<li class="p-service__list__item">
							<h3>物品販売</h3>
							<ul class="p-service__linklist">
								<li class="p-service__linklist__item w70"><a href="#">大同オリジナル商品</a></li>
								<li class="p-service__linklist__item w30-2"><a href="#">自動車</a></li>
								<li class="p-service__linklist__item w50"><a href="#">防災備蓄品</a></li>
								<li class="p-service__linklist__item w50"><a href="#">各種記念品</a></li>
							</ul>
							<img class="p-service__image" src="<?php echo get_template_directory_uri(); ?>/images/front-page/service2-image10.webp" type="immage/webp">
						</li>
						<li class="p-service__list__item">
							<h3>デジタルサイネージ</h3>
							<ul class="p-service__linklist">
								<li class="p-service__linklist__item w60"><a href="#">コンテンツの制作</a></li>
								<li class="p-service__linklist__item w40"><a href="#">配信管理</a></li>
								<li class="p-service__linklist__item w100"><a href="#">ハードウェアの提供</a></li>
							</ul>
							<img class="p-service__image" src="<?php echo get_template_directory_uri(); ?>/images/front-page/service2-image03.webp" type="immage/webp">
						</li>
						<li class="p-service__list__item">
							<h3>リース</h3>
							<ul class="p-service__linklist">
								<li class="p-service__linklist__item w30"><a href="#">乗用車</a></li>
								<li class="p-service__linklist__item w30"><a href="#">トラック</a></li>
								<li class="p-service__linklist__item w30"><a href="#">パソコン</a></li>
								<li class="p-service__linklist__item w70"><a href="#">フォークリフト</a></li>
								<li class="p-service__linklist__item w30-2"><a href="#">事務機器</a></li>
							</ul>
							<img class="p-service__image" src="<?php echo get_template_directory_uri(); ?>/images/front-page/service2-image05.webp" type="immage/webp">
						</li>
						<li class="p-service__list__item">
							<h3>印刷・WEB情報発信</h3>
							<ul class="p-service__linklist">
								<li class="p-service__linklist__item w30"><a href="#">広報誌</a></li>
								<li class="p-service__linklist__item w30"><a href="#">カタログ</a></li>
								<li class="p-service__linklist__item w30"><a href="#">記念誌</a></li>
								<li class="p-service__linklist__item w50"><a href="#">展示会</a></li>
								<li class="p-service__linklist__item w50"><a href="#">印刷・製本</a></li>
								<li class="p-service__linklist__item w100"><a href="#">Webサイト構築</a></li>
							</ul>
							<img class="p-service__image" src="<?php echo get_template_directory_uri(); ?>/images/front-page/service2-image06.webp" type="immage/webp">
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section class="p-news">
		<h2 class="p-news__title animate-bottom"><span>NEWS</span>お知らせ</h2>
		<div id="parentHorizontalTab3" class="p-news___tabarea">
			<ul class="resp-tabs-list tab_list hor_3">
				<li class="tab_3_1 animate-bottom">すべて</li>
				<li class="tab_3_2 animate-bottom">保険</li>
				<li class="tab_3_2 animate-bottom">不動産</li>
				<li class="tab_3_1 animate-bottom">ビジネスサポート</li>
				<li class="tab_3_2 animate-bottom">その他</li>
			</ul>
			<div class="resp-tabs-container hor_3">
				<div class="tab_content tab_3_1">
					<?php
						$args = array(
							'post_type' => array('post'),
							'posts_per_page' => 4,
							'post_status' => 'publish',
							'orderby' => 'date',
							'order' => 'DESC',
						);
						$news_query = new WP_Query($args);
					?>
						<?php if ($news_query->have_posts()) : ?>
						<ul class="p-news__list">
							<?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
							<?php
								// カテゴリーのデータを取得
								$cat = get_the_category();
								$cat = $cat[0];
							?>
								<li class="p-news__list__item">
								<div class="p-news__item-top">
									<time class="p-news__date" datetime="<?php echo get_the_date('Y-m-d'); ?>">
										<?php echo get_the_date('Y.m.d'); ?>
									</time>
									<div class="p-news__cat">
										<?php echo $cat->cat_name; ?>
									</div>
								</div>
								<a href="<?php the_permalink(); ?>" class="p-news__link">
									<?php the_title(); ?>
								</a>
								</li>
							<?php endwhile; ?>
						</ul>
						<?php wp_reset_postdata(); ?>
						<?php else : ?>
							<p>最新のお知らせはありません。</p>
						<?php endif; ?>
					</ul>
				</div>
				<div class="tab_content tab_3_2">
					<?php
						$args = array(
							'post_type' => array('post'),
							'posts_per_page' => 4,
							'post_status' => 'publish',
							'orderby' => 'date',
							'order' => 'DESC',
							'category_name' => 'cat-insurance',
						);
						$news_query = new WP_Query($args);
					?>
						<?php if ($news_query->have_posts()) : ?>
						<ul class="p-news__list">
							<?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
							<?php
								// カテゴリーのデータを取得
								$cat = get_the_category();
								$cat = $cat[0];
							?>
								<li class="p-news__list__item">
								<div class="p-news__item-top">
									<time class="p-news__date" datetime="<?php echo get_the_date('Y-m-d'); ?>">
										<?php echo get_the_date('Y.m.d'); ?>
									</time>
									<div class="p-news__cat">
										<?php echo $cat->cat_name; ?>
									</div>
								</div>
								<a href="<?php the_permalink(); ?>" class="p-news__link">
									<?php the_title(); ?>
								</a>
								</li>
							<?php endwhile; ?>
						</ul>
						<?php wp_reset_postdata(); ?>
						<?php else : ?>
							<p>最新のお知らせはありません。</p>
						<?php endif; ?>
					</ul>
				</div>
				<div class="tab_content tab_3_3">
					<?php
						$args = array(
							'post_type' => array('post'),
							'posts_per_page' => 4,
							'post_status' => 'publish',
							'orderby' => 'date',
							'order' => 'DESC',
							'category_name' => 'cat-home',
						);
						$news_query = new WP_Query($args);
					?>
						<?php if ($news_query->have_posts()) : ?>
						<ul class="p-news__list">
							<?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
							<?php
								// カテゴリーのデータを取得
								$cat = get_the_category();
								$cat = $cat[0];
							?>
								<li class="p-news__list__item">
								<div class="p-news__item-top">
									<time class="p-news__date" datetime="<?php echo get_the_date('Y-m-d'); ?>">
										<?php echo get_the_date('Y.m.d'); ?>
									</time>
									<div class="p-news__cat">
										<?php echo $cat->cat_name; ?>
									</div>
								</div>
								<a href="<?php the_permalink(); ?>" class="p-news__link">
									<?php the_title(); ?>
								</a>
								</li>
							<?php endwhile; ?>
						</ul>
						<?php wp_reset_postdata(); ?>
						<?php else : ?>
							<p>最新のお知らせはありません。</p>
						<?php endif; ?>
					</ul>
				</div>
				<div class="tab_content tab_3_4">
					<?php
						$args = array(
							'post_type' => array('post'),
							'posts_per_page' => 4,
							'post_status' => 'publish',
							'orderby' => 'date',
							'order' => 'DESC',
							'category_name' => 'cat-business',
						);
						$news_query = new WP_Query($args);
					?>
						<?php if ($news_query->have_posts()) : ?>
						<ul class="p-news__list">
							<?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
							<?php
								// カテゴリーのデータを取得
								$cat = get_the_category();
								$cat = $cat[0];
							?>
								<li class="p-news__list__item">
								<div class="p-news__item-top">
									<time class="p-news__date" datetime="<?php echo get_the_date('Y-m-d'); ?>">
										<?php echo get_the_date('Y.m.d'); ?>
									</time>
									<div class="p-news__cat">
										<?php echo $cat->cat_name; ?>
									</div>
								</div>
								<a href="<?php the_permalink(); ?>" class="p-news__link">
									<?php the_title(); ?>
								</a>
								</li>
							<?php endwhile; ?>
						</ul>
						<?php wp_reset_postdata(); ?>
						<?php else : ?>
							<p>最新のお知らせはありません。</p>
						<?php endif; ?>
					</ul>
				</div>
				<div class="tab_content tab_3_5">
					<?php
						$args = array(
							'post_type' => array('post'),
							'posts_per_page' => 4,
							'post_status' => 'publish',
							'orderby' => 'date',
							'order' => 'DESC',
							'category_name' => 'cat-other',
						);
						$news_query = new WP_Query($args);
					?>
						<?php if ($news_query->have_posts()) : ?>
						<ul class="p-news__list">
							<?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
							<?php
								// カテゴリーのデータを取得
								$cat = get_the_category();
								$cat = $cat[0];
							?>
								<li class="p-news__list__item">
								<div class="p-news__item-top">
									<time class="p-news__date" datetime="<?php echo get_the_date('Y-m-d'); ?>">
										<?php echo get_the_date('Y.m.d'); ?>
									</time>
									<div class="p-news__cat">
										<?php echo $cat->cat_name; ?>
									</div>
								</div>
								<a href="<?php the_permalink(); ?>" class="p-news__link">
									<?php the_title(); ?>
								</a>
								</li>
							<?php endwhile; ?>
						</ul>
						<?php wp_reset_postdata(); ?>
						<?php else : ?>
							<p>最新のお知らせはありません。</p>
						<?php endif; ?>
					</ul>
				</div>
				<a href="/news/" class="p-newslist__link c-btn_top c-btn__newslist animate-bottom">一覧を見る<span class="arrow"></span></a>
			</div>
		</div>
	</section>
	<section class="p-sustainability">
		<div id="parentHorizontalTab4" class="p-sustainability___tabarea">
			<div class="resp-tabs-container hor_4">
				<h3 class="resp-accordion animate-bottom">サスティナビリティへの取り組み<span></span></h3>
				<div class="tab_content tab_4_1">
					<p class="tab_content__text animate-bottom">持続可能な社会の実現に向けて、様々な活動に取り組んでいます。</p>
					<ul class="p-sustainability__list">
						<li class="p-sustainability__list__item">
							<h3>DX推進への取組み</h3>
							<ul class="p-sustainability__linklist">
								<li class="p-sustainability__linklist__item w100"><a href="/sustainability/dx/">詳細</a></li>
							</ul>
							<img class="p-sustainability__image" src="<?php echo get_template_directory_uri(); ?>/images/front-page/sustainability-image01.webp" type="immage/webp">
						</li>
						<li class="p-sustainability__list__item">
							<h3>SDG’sへの取組み</h3>
							<ul class="p-sustainability__linklist">
								<li class="p-sustainability__linklist__item w100"><a href="/sustainability/sdgs/">詳細</a></li>
							</ul>
							<img class="p-sustainability__image" src="<?php echo get_template_directory_uri(); ?>/images/front-page/sustainability-image02.webp" type="immage/webp">
						</li>
						<li class="p-sustainability__list__item">
							<h3>健康経営</h3>
							<ul class="p-sustainability__linklist">
								<li class="p-sustainability__linklist__item w100"><a href="/sustainability/kenko/">詳細</a></li>
							</ul>
							<img class="p-sustainability__image" src="<?php echo get_template_directory_uri(); ?>/images/front-page/sustainability-image03.webp" type="immage/webp">
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<?php get_contact(); ?>
</div>
</main>
<?php get_footer(); ?>