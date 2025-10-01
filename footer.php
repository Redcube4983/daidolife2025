<footer class="l-footer">
	<div class="l-footer__inner">
		<div class="l-footer__company">
			<a href="/" class="l-footer__companyName">
				<picture>
					<source media="(max-width: 1023px)" srcset="<?php echo get_template_directory_uri(); ?>/images/common/footer-logo-sp.webp" type="image/webp">
					<source srcset="<?php echo get_template_directory_uri(); ?>/images/common/footer-logo.webp" type="image/webp">
					<img src="<?php echo get_template_directory_uri(); ?>/images/common/footer-logo.webp" alt="株式会社大同ライフサービス" class="">
				</picture>
			</a>
			<span class="l-footer__address">〒726-0013　広島県府中市高木町1071番地</span>
			<span class="l-footer__tel">TEL：0847-45-3530（代表）</span>
		</div>
		<nav class="l-footer__nav">
			<div class="l-footer__nav-block">
				<div class="l-footer__nav-title-area">
					<a class="l-footer__nav-title c-icon__arrow--white" href="/">トップページ</a>
				</div>
				<div class="l-footer__nav-title-area">	
					<a class="l-footer__nav-title c-icon__arrow--white" href="/contact/">お問い合わせ</a>
				</div>
				<div class="l-footer__nav-title-area">	
					<a class="l-footer__nav-title c-icon__arrow--white" href="/privacy/">個人情報保護方針</a>
				</div>
				<div class="l-footer__nav-title-area">	
					<a class="l-footer__nav-title c-icon__arrow--white" href="https://privacymark.jp/">プライバシーマーク制度</a>
				</div>
				<div class="l-footer__nav-title-area">	
					<a class="l-footer__nav-title c-icon__arrow--white" href="/sitepolicy/">サイトのご利用について</a>
				</div>
				<div class="l-footer__nav-title-area">	
					<a class="l-footer__nav-title c-icon__arrow--white" href="/sitemap/">サイトマップ</a>
				</div>
			</div>
			<div class="l-footer__nav-block">
				<div class="l-footer__nav-title-area">
					<a class="l-footer__nav-title c-icon__arrow--white" href="/strong_point/">わたしたちの強み</a>
				</div>
				<div class="l-footer__nav-title-area">
					<a class="l-footer__nav-title l-footer__nav-title-parent c-icon__arrow--white" href="/service/">事業情報</a>
					<span class="c-btn__arrow l-footer__nav-title-arrow"></span>
				</div>
				<ul class="l-footer__nav-list">
					<li class="c-icon__arrow--accent"><a href="/service/insurance/">保険</a></li>
					<li class="c-icon__arrow--accent"><a href="/service/home/">不動産</a></li>
					<li class="c-icon__arrow--accent"><a href="/service/business/">ビジネス</a></li>
					<li class="c-icon__arrow--accent"><a href="/service/food/">フードサービス</a></li>
					<li class="c-icon__arrow--accent"><a href="/kisokomaclub/">大同木曽駒倶楽部</a></li>
				</ul>
			</div>
			<div class="l-footer__nav-block">
				<div class="l-footer__nav-title-area">
					<a class="l-footer__nav-title l-footer__nav-title-parent c-icon__arrow--white" href="/company/">会社情報</a>
					<span class="c-btn__arrow l-footer__nav-title-arrow"></span>
				</div>
				<ul class="l-footer__nav-list">
					<li class="c-icon__arrow--accent"><a href="/company/greeting/">ごあいさつ</a></li>
					<li class="c-icon__arrow--accent"><a href="/company/outline/">会社概要</a></li>
					<li class="c-icon__arrow--accent"><a href="/company/history">沿革</a></li>
					<li class="c-icon__arrow--accent"><a href="/company/publicnotice/">電子公告</a></li>
				</ul>
			</div>
			<div class="l-footer__nav-block">
				<div class="l-footer__nav-title-area">
					<a class="l-footer__nav-title l-footer__nav-title-parent c-icon__arrow--white" href="/sustainability/">サステナビリティ</a>
					<span class="c-btn__arrow l-footer__nav-title-arrow"></span>
				</div>
				<ul class="l-footer__nav-list">
					<li class="c-icon__arrow--accent"><a href="/sustainability/dx/">DX推進への取組み</a></li>
					<li class="c-icon__arrow--accent"><a href="/sustainability/sdgs/">SDG’sへの取組み</a></li>
					<li class="c-icon__arrow--accent"><a href="/sustainability/kenko/">健康経営</a></li>
				</ul>
			</div>
		</nav>
	</div>
	<div class="l-footer__bottom">
		<small class="l-footer__copyright">
			Copyright © Daido Life Service Co.,Ltd. All Rights Reserved.
		</small>
	</div>
</footer>
<!--cookie-->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.cookie.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/permission_cookie.js"></script>
<!--scrollreveal-->
<script src="<?php echo get_template_directory_uri(); ?>/js/scrollreveal.min.js"></script>
<!--共通javascript-->
<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>

<!--ページ専用javascript-->
<?php if (is_front_page()) : ?>
<!--スライダー用ライブラリ-->
<script src="https://cdn.jsdelivr.net/npm/swiper@7/swiper-bundle.min.js"></script>
<!-- Initialize Swiper -->
<script>
var swiper = new Swiper(".p-swiper", {
	loop: true,
	loopedSlides: 2,
	loopAdditionalSlides: 2,
    autoplay: {
        delay: 10000,
        stopONLast: false,
        disableOnInteraction: false,
      },
      speed: 3000,
      slidesPerView: 1,
      // slidesPerView: 1.2, // 何枚のスライドを表示するか
      spaceBetween: 0, // スライド間の余白サイズ(ピクセル)
      direction: 'horizontal', // スライド方向。 'horizontal'(水平) か 'vertical'(垂直)。effectオプションが 'slide' 以外は無効。
      effect: 'slide', // "slide", "fade"(フェード), "cube"(キューブ回転), "coverflow"(カバーフロー) または "flip"(平面回転)
      //
      freeModeMomentumBounce: false,
      initialslide: 1,
      calculateHeight: true,
      centeredSlides: true,
      observer: true,
      observeParents: true,
	  pauseOnMouseEnter: true,
      //Enable lazy loading
	  preloadImages: true,
      lazy: {
        loadPrevNext: true,
        loadPrevNextAmount: 1,
        loadOnTransitionStart: true,
        elementClass: 'swiper-lazy',
        preloaderClass: 'swiper-lazy-preloader'
      },
      breakpoints: {
        // when window width is <= 768px
        1024: {
          slidesPerView: 1.3,
          spaceBetween: 0
        },
	},
	pagination: {
        el: ".swiper-pagination",
		clickable: true,
    }
 });

const slideLength = document.querySelectorAll('.p-swiper2 .swiper-slide').length
if (slideLength > 1) {
  const swiper = new Swiper('.p-swiper2', {
    loop: true,
	loopedSlides: 2,
	loopAdditionalSlides: 2,
    autoplay: {
        delay: 10000,
        stopONLast: false,
        disableOnInteraction: false,
      },
      speed: 3000,
      slidesPerView: 1,
      // slidesPerView: 1.2, // 何枚のスライドを表示するか
      spaceBetween: 0, // スライド間の余白サイズ(ピクセル)
      direction: 'horizontal', // スライド方向。 'horizontal'(水平) か 'vertical'(垂直)。effectオプションが 'slide' 以外は無効。
      effect: 'slide', // "slide", "fade"(フェード), "cube"(キューブ回転), "coverflow"(カバーフロー) または "flip"(平面回転)
      //
      freeModeMomentumBounce: false,
      initialslide: 1,
      calculateHeight: true,
      centeredSlides: true,
      observer: true,
      observeParents: true,
	  pauseOnMouseEnter: true,
      //Enable lazy loading
	  preloadImages: true,
      lazy: {
        loadPrevNext: true,
        loadPrevNextAmount: 1,
        loadOnTransitionStart: true,
        elementClass: 'swiper-lazy',
        preloaderClass: 'swiper-lazy-preloader'
      },
      breakpoints: {
        // when window width is <= 768px
        1024: {
          slidesPerView: 1.3,
          spaceBetween: 0
        },
	},
	}
  )
}
</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/easyResponsiveTabs.js"></script>
<script type = "text/javascript" >
$(document).ready(function () {
  //Horizontal Tab
  $('#parentHorizontalTab').easyResponsiveTabs({
    type: 'default', //Types: default, vertical, accordion
    width: 'auto', //auto or any width like 600px
    fit: true, // 100% fit in a container
    tabidentify: 'hor_1', // The tab groups identifier
    activate: function (event) { // Callback function if tab is switched
      var $tab = $(this);
      var $info = $('#nested-tabInfo');
      var $name = $('span', $info);
      $name.text($tab.text());
      $info.show();
    }
  });
}); 
$(document).ready(function () {
  //Horizontal Tab
  $('#parentHorizontalTab2').easyResponsiveTabs({
    type: 'default', //Types: default, vertical, accordion
    width: 'auto', //auto or any width like 600px
    fit: true, // 100% fit in a container
    tabidentify: 'hor_2', // The tab groups identifier
    activate: function (event) { // Callback function if tab is switched
      var $tab = $(this);
      var $info = $('#nested-tabInfo');
      var $name = $('span', $info);
      $name.text($tab.text());
      $info.show();
    }
  });
});
$(document).ready(function () {
  //Horizontal Tab
  $('#parentHorizontalTab3').easyResponsiveTabs({
    type: 'default', //Types: default, vertical, accordion
    width: 'auto', //auto or any width like 600px
    fit: true, // 100% fit in a container
    tabidentify: 'hor_3', // The tab groups identifier
    activate: function (event) { // Callback function if tab is switched
      var $tab = $(this);
      var $info = $('#nested-tabInfo');
      var $name = $('span', $info);
      $name.text($tab.text());
      $info.show();
    }
  });
});
$(document).ready(function () {
  //Horizontal Tab3
  $('.hor_4 .resp-accordion').on('click', function () {
	if ($('.hor_4 .resp-accordion').hasClass('resp-tab-active')) {
	  $(this).removeClass('resp-tab-active');
	  $(this).next('.tab_content').slideUp(300).removeClass('resp-tab-content-active');
    } else {
	  $(this).addClass('resp-tab-active');
	  $(this).next('.tab_content').slideDown(300).addClass('resp-tab-content-active');
    }
  })
}); 
</script>
<script>
$('main').append('<div id="tagetTop"><a href="#" class="smooth"><span></span></a></div>');
$('#tagetTop').css('display', 'none' );
$(window).bind('scroll load', function() {
	var documentHeight = $('body').height();
	var windowHeight = window.innerHeight;
	var i = $(window).scrollTop();
	var headH = $('.l-header').height();
	var footH = $('.l-footer').height();
	var keyvisualH = $('.p-fv').height();
	var tagetTop = $('#tagetTop').height();
	if (i >= keyvisualH ) {
        $('.l-header').addClass("top");
    } else {
        $('.l-header').removeClass("top");
    }
	if ( i >= keyvisualH - headH - 30 ) {
		$('#tagetTop').fadeIn();
	}
	else {
		$('#tagetTop').fadeOut();
	}
    if ((documentHeight - (footH + windowHeight)) < i) {
       $('#tagetTop').removeClass("fixed").css('bottom', 0 );
    }else{
       $('#tagetTop').addClass("fixed").css('bottom', 0 ); 
    }
	});
	jQuery(function ($) {
	$('.p-fv__btn').on('click', function () {
		$('.p-fv__menu').addClass('is-open').fadeIn(300).css('display', 'flex');
		$('.p-fv__text-area').addClass('is-fade');
		$('.p-fv__scroll-area').addClass('is-fade');	
	});
	});
	jQuery(function ($) {
	$('.p-fv__buckbtn').on('click', function () {
		$('.p-fv__menu').removeClass('is-open').fadeOut(300);
		$('.p-fv__text-area').removeClass('is-fade');
		$('.p-fv__scroll-area').removeClass('is-fade');
	});
	});
</script>
<?php elseif (is_page('privacy')) : ?>
<script>
$(function(){
var timer = false;
var prewidth = $(window).width();
$(window).resize(function() {
	if (timer !== false) {
	clearTimeout(timer);
	}
	timer = setTimeout(function() {
	var nowWidth = $(window).width();
	if(prewidth !== nowWidth){
	// リロード
	location.reload();
	}
	prewidth = nowWidth;
	}, 300);
});
});
$('main').append('<div id="tagetTop"><a href="#" class="smooth"><span></span></a></div>');
$('#tagetTop').css('display', 'none' );
$(window).bind('scroll load', function() {
	var documentHeight = $('body').height();
	var windowHeight = window.innerHeight;
	var i = $(window).scrollTop();
	var headH = $('.l-header').height();
	var headOuterH = $('.l-header').outerHeight(); 
	var footH = $('.l-footer').height();
	var keyvisualH = $('.p-fv').height();
	var tagetTop = $('#tagetTop').height();
	var breadcrumb = $('.c-breadcrumb').height();
	var floatMemu = $('.p-privacy__floatMemu').outerHeight(); 
	var floatMemuH = $('.p-privacy__floatMemu').height(); 
	var privacyArea = $('.p-privacy').outerHeight(); 
	
	if (i >= keyvisualH - headOuterH  ) {
        $('.l-header').addClass("top");
		$('#tagetTop').fadeIn();
		$('.p-privacy__floatMemu').addClass("fixed").css('top', ( headOuterH ) ); 
		$('#privacy01').css({ paddingTop: floatMemu}); 
		$('#privacy02').css({ paddingTop: floatMemu , marginTop: - floatMemu}); 
		$('#privacy03').css({ paddingTop: floatMemu , marginTop: - floatMemu}); 
		$('#privacy04').css({ paddingTop: floatMemu , marginTop: - floatMemu}); 
		$('#privacy05').css({ paddingTop: floatMemu , marginTop: - floatMemu}); 
		$('#privacy06').css({ paddingTop: floatMemu , marginTop: - floatMemu}); 
		$('.p-privacy').css({ paddingTop: floatMemuH } ); 
	} else {
		$('#tagetTop').fadeOut();
		$('.l-header').removeClass("top");
		$('.p-privacy__floatMemu').removeClass("fixed").css('top', 0 );
		$('#privacy01').css('padding-top','' ); 
		$('#privacy02').css('padding-top','' );
		$('#privacy03').css('padding-top','' );
		$('#privacy04').css('padding-top','' ); 
		$('#privacy05').css('padding-top','' ); 
		$('#privacy06').css('padding-top','' ); 
		$('.p-privacy').css('padding-top', '' ); 
	}
	if (i >= keyvisualH + breadcrumb + privacyArea - floatMemu ) {
		$('.p-privacy__floatMemu').fadeOut();
	} else{
        $('.p-privacy__floatMemu').fadeIn();
    }
    if ((documentHeight - (footH + windowHeight)) < i) {
       $('#tagetTop').removeClass("fixed").css('bottom', 0 );
    } else{
       $('#tagetTop').addClass("fixed").css('bottom', 0 ); 
    }
	});
</script>
<script>
	$(function () {
	//ページ内スクロール処理
		var headerHeight = $('.l-header').outerHeight(); 
		var floatMemu = $('.p-privacy__floatMemu').outerHeight(); 
		var breadcrumbOuter = $('.c-breadcrumb').outerHeight(); 
		$('.Memu-scroll').on('click', function (e) {
		var speed = 800;
		var href = $(this).attr("href");
		var $target = href === "#" || href === "" ? $('html') : $(href);
	
		if ($target.length) {
			var position = $target.offset().top - headerHeight - floatMemu - breadcrumbOuter;
			$('html, body').animate({ scrollTop: position }, speed, 'swing');
			e.preventDefault();
		}
		});
	});
</script>
<?php else : ?>
<script>
$('main').append('<div id="tagetTop"><a href="#" class="smooth"><span></span></a></div>');
$('#tagetTop').css('display', 'none' );
$(window).bind('scroll load', function() {
	var documentHeight = $('body').height();
	var windowHeight = window.innerHeight;
	var i = $(window).scrollTop();
	var headH = $('.l-header').height();
	var footH = $('.l-footer').height();
	var keyvisualH = $('.p-fv').height();
	var tagetTop = $('#tagetTop').height();
	if (i >= keyvisualH ) {
        $('.l-header').addClass("top");
    } else {
        $('.l-header').removeClass("top");
    }
	if ( i >= keyvisualH - headH - 30 ) {
		$('#tagetTop').fadeIn();
	}
	else {
		$('#tagetTop').fadeOut();
	}
    if ((documentHeight - (footH + windowHeight)) < i) {
       $('#tagetTop').removeClass("fixed").css('bottom', 0 );
    }else{
       $('#tagetTop').addClass("fixed").css('bottom', 0 ); 
    }
	});
</script>
<?php endif; ?>
<script>
	$(function () {
	//ページ内スクロール処理
		var headerHeight = $('.l-header').outerHeight(); 
		$('a[href^="#"]').on('click', function (e) {
		var speed = 800;
		var href = $(this).attr("href");
		var $target = href === "#" || href === "" ? $('html') : $(href);
	
		if ($target.length) {
			var position = $target.offset().top - headerHeight;
			$('html, body').animate({ scrollTop: position }, speed, 'swing');
			e.preventDefault();
		}
		});
	});
</script>
<?php wp_footer(); ?>
</body>
</html> 