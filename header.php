<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <meta name="format-detection" content="telephone=no,address=no,email=no">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/common/dls_favi.png">
    <!--スタイルシート-->
    <link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/common.css" rel="stylesheet">
    <?php if (is_front_page()) : ?>
    <!--swiper-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="<?php echo get_template_directory_uri(); ?>/css/front-page.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/magnific-popup.css" />
    <?php elseif (is_home()) : ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/news-archive.css" />
    <?php elseif (is_page()) : ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page.css" />
		<?php if (is_page (array ('confilm','completion','error','business_contact','business_confilm','business_completion','business_error'))) : ?>
			<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/contact.css" />
		<?php endif; ?>
        <?php
        // slug名のcssがあれば読み込む
        global $post;
        $slugName = $post->post_name;
        if (isset($slugName)) :
        if (is_file(get_theme_file_path('css/' . $slugName . '.css')) && file_exists(get_theme_file_path('css/' . $slugName . '.css'))) :
        ?>
            <link rel="stylesheet" href="<?php echo get_theme_file_uri('css/' . $slugName . '.css'); ?>" />
        <?php
        endif;
        endif;
        ?>
    <?php elseif (is_search()) : ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/search.css" />
    <?php elseif (is_single()) : ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/single.css" />
    <?php elseif (is_archive()) : ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/single.css" />
    <?php elseif (is_post_type_archive('')) : ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page.css" />

    <?php elseif (is_404()) : ?>

    <?php else : ?>
    <?php endif; ?>
	<!--jquery-->
	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
	<!-- googlefont -->
	<!-- Nunito Sans -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wdth,wght,YTLC@0,6..12,75..125,200..1000,440..540;1,6..12,75..125,200..1000,440..540&display=swap" rel="stylesheet">
	<!-- PTSans -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-"></script>
	<!--</?php if (is_front_page()) : ?>
	<script>
	    $(window).on('load', function(){
			setTimeout(function () {
                $('.loading__ico').fadeIn();	
    			$('.loading').fadeOut()
            }, 4000);
		
    });
	</script>
	</?php endif; ?>-->
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', '');
	</script>
    <?php wp_head(); ?>
</head>
<body>
<!--</?php if (is_front_page()) : ?>
<div class="loading">
  <img class="loading__ico" src="</?php echo get_template_directory_uri(); ?>/images/common/loding.svg?2025" />
</div>
</?php endif; ?>-->
<header class="l-header">
	<?php if (is_front_page()) : ?>
	<h1 class="l-header__title"><a href="/" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/images/common/logo.webp" alt="株式会社大同ライフサービス"></a></h1>
	<?php else : ?>
	<div class="l-header__title"><a href="/" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/images/common/logo.webp" alt="株式会社大同ライフサービス"></a></div>
    <?php endif; ?>
	<button class="l-header__menu-btn js-sp-btnMenu">
		<span class="l-header__menu-bar"></span>
		<span class="l-header__menu-bar"></span>
		<span class="l-header__menu-bar"></span>
		<span class="l-header__menu-label">MENU</span>
	</button>
	<div class="l-header__right">
		<nav id="global_nav" class="l-nav">
			<div class="l-nav__menu">
				<div class="l-nav__inner">
					<ul class="l-navList">
						<li class="l-navList__item">
							<div class="l-navList__item-title-area l-navList__item-title-area-red">
								<a class="l-navList__item-title c-icon__arrow--white" href="#">大同グループの皆さま</a>
								<span class="c-btn__arrow l-navList__item-title-arrow"></span>
							</div>
							<ul class="l-submenu l-submenu__colum">
								<li class="l-submenu__item l-submenu__item__colum">
									<a class="c-icon__arrow--accent l-submenu__item__link l-submenu__item__link-blue" href="#"><span>大同グループ従業員・ご家族の皆さま</span></a>
									<ul class="l-grandchildmenu">
										<li class="l-grandchildmenu__item"><a href="/service/insurance/">保険</a></li>
										<li class="l-grandchildmenu__item"><a href="/service/home/">不動産</a></li>
										<li class="l-grandchildmenu__item"><a href="service/food/bakery/">ベーカリー運営</a></li>
									</ul>
								</li>
								<li class="l-submenu__item l-submenu__item__colum">
									<a class="c-icon__arrow--accent l-submenu__item__link l-submenu__item__link-deepblue"  href="#"><span>大同グループ会社の担当者さま</span></a>
									<ul class="l-grandchildmenu">
										<li class="l-grandchildmenu__item"><a href="/service/insurance/">保険</a></li>
										<li class="l-grandchildmenu__item"><a href="/service/home/">不動産</a></li>
										<li class="l-grandchildmenu__item"><a href="/business/signage/">デジタルサイネージ</a></li>
										<li class="l-grandchildmenu__item"><a href="/business/jutaku/">受託管理</a></li>
										<li class="l-grandchildmenu__item"><a href="/business/lease/">リース</a></li>
										<li class="l-grandchildmenu__item"><a href="/business/media/">印刷・WEB情報発信</a></li>
										<li class="l-grandchildmenu__item"><a href="/business/cleaning/">清掃</a></li>
										<li class="l-grandchildmenu__item"><a href="/business/keibi/">警備</a></li>
										<li class="l-grandchildmenu__item"><a href="/business/green/">工場緑化</a></li>
										<li class="l-grandchildmenu__item"><a href="/service/sales/">物品販売</a></li>
										<li class="l-grandchildmenu__item"><a href="/service/sales/shop/">店舗運営</a></li>
										<li class="l-grandchildmenu__item"><a href="/service/food/kyusyoku/">給食事業</a></li>
										<li class="l-grandchildmenu__item"><a href="/kisokomaclub/">保養施設（大同木曽駒倶楽部）</a></li>
									</ul>
								</li>
								<li class="l-submenu__item l-submenu__item__colum">
									<a class="c-icon__arrow--accent l-submenu__item__link l-submenu__item__link-deepblue"  href="#"><span>大同ライフサービス従業員用</span></a>
									<ul class="l-grandchildmenu">
										<li class="l-grandchildmenu__item"><a href="https://www.catapoke.com/" target="_brank">ウェブ社内報</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="l-navList__item">
							<div class="l-navList__item-title-area l-navList__item-title-area-brown">
								<a class="l-navList__item-title c-icon__arrow--white" href="#">一般の皆さま</a>
								<span class="c-btn__arrow l-navList__item-title-arrow"></span>
							</div>
							<ul class="l-submenu l-submenu__colum">
								<li class="l-submenu__item l-submenu__item__colum">
									<a class="c-icon__arrow--accent l-submenu__item__link l-submenu__item__link-orange"  href="#"><span>個人の皆さま</span></a>
									<ul class="l-grandchildmenu">
										<li class="l-grandchildmenu__item"><a href="/service/insurance/">保険</a></li>
										<li class="l-grandchildmenu__item"><a href="/service/home/">不動産</a></li>
										<li class="l-grandchildmenu__item"><a href="/service/food/bakery/">ベーカリー運営</a></li>
									</ul>
								</li>
								<li class="l-submenu__item l-submenu__item__colum">
									<a class="c-icon__arrow--accent l-submenu__item__link l-submenu__item__link-darkbrown" href="#"><span>法人の皆さま</span></a>
									<ul class="l-grandchildmenu">
										<li class="l-grandchildmenu__item"><a href="/service/insurance/">保険</a></li>
										<li class="l-grandchildmenu__item"><a href="/service/home/">不動産</a></li>
										<li class="l-grandchildmenu__item"><a href="/service/sales/">物品販売</a></li>
										<li class="l-grandchildmenu__item"><a href="/business/signage/">デジタルサイネージ</a></li>
										<li class="l-grandchildmenu__item"><a href="/business/lease/">リース</a></li>
										<li class="l-grandchildmenu__item"><a href="/business/media/">印刷・WEB情報発信</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="l-navList__item">
							<div class="l-navList__item-title-area">
								<a class="l-navList__item-title c-icon__arrow--white c-icon__arrow--accent" href="/strong_point/">わたしたちの強み</a>
							</div>
						</li>
						<li class="l-navList__item">
							<div class="l-navList__item-title-area">
								<a class="l-navList__item-title c-icon__arrow--white" href="/service/">事業情報</a>
								<span class="c-btn__arrow l-navList__item-title-arrow"></span>
							</div>
							<ul class="l-submenu">
								<li class="l-submenu__item"><a href="/service/insurance/">保険</a></li>
								<li class="l-submenu__item"><a href="/service/home/">不動産</a></li>
								<li class="l-submenu__item"><a href="/service/business/">ビジネス</a></li>
								<li class="l-submenu__item"><a href="/service/food/">フードサービス</a></li>
								<li class="l-submenu__item"><a href="/kisokomaclub/">大同木曽駒倶楽部</a></li>
							</ul>
						</li>
						<li class="l-navList__item">
							<div class="l-navList__item-title-area">
								<a class="l-navList__item-title c-icon__arrow--white" href="/company/">会社情報</a>
								<span class="c-btn__arrow l-navList__item-title-arrow"></span>
							</div>
							<ul class="l-submenu">
								<li class="l-submenu__item"><a href="/company/greeting/">ごあいさつ</a></li>
								<li class="l-submenu__item"><a href="/company/outline/">会社概要</a></li>
								<li class="l-submenu__item"><a href="/company/history/">沿革</a></li>
								<li class="l-submenu__item"><a href="/company/publicnotice/">電子公告</a></li>
							</ul>
						</li>
						<li class="l-navList__item">
							<div class="l-navList__item-title-area">
								<a class="l-navList__item-title c-icon__arrow--white" href="/sustainability/">サステナビリティ</a>
								<span class="c-btn__arrow l-navList__item-title-arrow"></span>
							</div>
							<ul class="l-submenu">
								<li class="l-submenu__item"><a href="/sustainability/dx/">DX推進への取組み</a></li>
								<li class="l-submenu__item"><a href="/sustainability/sdgs/">SDG’sへの取組み</a></li>
								<li class="l-submenu__item"><a href="/sustainability/kenko/">健康経営</a></li>
							</ul>
						</li>
						<li class="l-navList__item">
							<div class="l-navList__item-title-area">
								<a class="l-navList__item-title c-icon__arrow--white" href="/contact/">お問い合わせ</a>
								<span class="c-btn__arrow l-navList__item-title-arrow"></span>
							</div>
							<ul class="l-submenu">
								<li class="l-submenu__item"><a href="/business_contact/">ビジネスのお問い合わせ</a></li>
								<li class="l-submenu__item"><a href="/realestate_contact/">不動産のお問い合わせ</a></li>
								<li class="l-submenu__item"><a href="/contact/">その他のお問い合わせ</a></li>
							</ul>
						</li>
						<li class="l-navList__item disp-hamburger">
							<div class="l-navList__item-title-area">
							<a class="l-navList__item-title c-icon__arrow--white" href="/privacy/">個人情報保護方針</a>
							</div>
						</li>
						<li class="l-navList__item disp-hamburger">
							<div class="l-navList__item-title-area">
								<a class="l-navList__item-title c-icon__arrow--white" href="https://privacymark.jp/" target="_brank">プライバシーマーク制度</a>
							</div>
						</li>
						<li class="l-navList__item disp-hamburger">
							<div class="l-navList__item-title-area">
								<a class="l-navList__item-title c-icon__arrow--white" href="/sitepolicy/">サイトのご利用にあたって</a>
							</div>
						</li>
						<li class="l-navList__item disp-hamburger">
							<div class="l-navList__item-title-area">
								<a class="l-navList__item-title c-icon__arrow--white" href="/sitemap/">サイトマップ</a>
							</div>
						</li>
					</ul>
					<div class="l-nav__top">
						<div class="c-icon__group-logo"><a href="https://www.daido.co.jp/"><img src="<?php echo get_template_directory_uri(); ?>/images/common/group-logo.svg" alt="DAIDO STEEL GROUP"></a></div>
						<div class="c-icon__pmark">
							<img src="<?php echo get_template_directory_uri(); ?>/images/common/pmark-logo.webp" alt="たいせつにしますプライバシー">
						</div>
						<div class="c-icon__kenko">
							<img src="<?php echo get_template_directory_uri(); ?>/images/common/kenko-logo.webp" alt="健康経営優良法人">
						</div>
					</div>
				</div>
			</div>
		</nav>
	</div>
</header>