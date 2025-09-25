$(function () {
	// 360サイズ以下の時はviewportを変更して崩れないようにする
	const viewport = document.querySelector('meta[name="viewport"]');
	function switchViewport() {
		const value =
			window.innerWidth > 360
				? 'width=device-width,initial-scale=1'
				: 'width=360';
		if (viewport.getAttribute('content') !== value) {
			viewport.setAttribute('content', value);
		}
	}
	//// クッキーが無ければ表示
  if (!$.cookie('cookie_consent')) {
    $('.cookiebox').fadeIn();
  }
	//// ボタンをクリックしたらクッキーを保存し、非表示にする
  $('.js-cookie').on('click', function() {
	$.cookie('cookie_consent', 'accepted', { expires: 7, path: '/' });
	  $('.cookiebox').fadeOut();
	});


	
});

// メニュー開閉
jQuery(function ($) {
  var scrollPos;//グローバルで初期かしておかないと上にもどっちゃう
  $('.js-sp-btnMenu').on('click', function () {
    $('.l-nav').toggleClass('is-open').slideToggle(500);
    $('.l-header__menu-btn').toggleClass('is-open');
    if ($('body').hasClass('fixed')) {
      $('body').removeClass('fixed').css('top', 0 + 'px');
      window.scrollTo(0, scrollPos);//初期化
      $('.animate-fade').removeClass('fixed');
      $('.animate-bottom').removeClass('fixed');
      $('.animate-left').removeClass('fixed');
      $('.animate-right').removeClass('fixed');
    } else {
      scrollPos = $(window).scrollTop();//現在のスクロール位置
      $('body').addClass('fixed').css('top', -scrollPos + 'px');
      $('.animate-fade').addClass('fixed');
      $('.animate-bottom').addClass('fixed');
      $('.animate-left').addClass('fixed');
      $('.animate-right').addClass('fixed');
    }
	if ($('.l-header__menu-btn').hasClass('is-open')) {
		$('.l-header__menu-label').html('close');
    $('.l-nav').addClass('is-open');
     
	} else {
		$('body').css('overflow', 'auto'); // ← スクロール復帰
		$('.l-header__menu-label').html('MENU');
    $('.l-nav').removeClass('is-open');
	}
  });
});
$(window).on('load resize', function () {
  $('.l-navList__item-title-arrow').off();
  $('.l-footer__nav-title-arrow').off();
  if (window.matchMedia('(max-width:1023px)').matches) {
   // SPの処理
   if ($('.js-sp-btnMenu').hasClass("is-open")) {
      //open表示中の場合
      scrollPos = $(window).scrollTop();//現在のスクロール位置
       $('body').addClass('fixed').css('top', -scrollPos + 'px');
        
    } else {
      //open非表示の場合
      $('.l-nav').css('display', '');
      $('body').removeClass('fixed').css('top', 0 + 'px');
    }
   // サブメニュー開閉
    $('.l-navList__item-title-arrow').on('click', function () {
      const $btn = $(this);
      const $item = $btn.closest('.l-navList__item');
      $item.toggleClass('is-open');
      $btn.toggleClass('is-open');
      const $submenu = $item.find('.l-submenu');
      $submenu.slideToggle(500).css('display', 'flex');
    });
    if ($('.l-l-navList__item-title-arrow').hasClass('is-open')) {
      $(this).parent('.l-navList__item-title-area').next('.l-submenu').css('display', 'flex');
    } else {
      $(this).parent('.l-navList__item-title-area').next('.l-submenu').css('display', '');
    }
    // フッターアコーディオン開閉
    // SP 表示
    $('.l-footer__nav-title-arrow').on('click', function () {
      const $arrow = $(this);
      const $titleArea = $arrow.closest('.l-footer__nav-title-area');
      const $targetList = $titleArea.next('.l-footer__nav-list');

      $targetList.slideToggle(500);
      $arrow.toggleClass('is-open');
    });

  } else if (window.matchMedia('(min-width:1024px)').matches) {
    // PCの処理
    var ua = navigator.userAgent;
    if (ua.indexOf('iPhone') > 0 || ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0) {
      // スマートフォン用コード
    

    } else if (ua.indexOf('iPad') > 0 || ua.indexOf('Android') > 0) {
      // タブレット用コード
     

    } else {
      // PC用コード
        $('.l-nav').css('display', 'flex');
        if ($('.js-sp-btnMenu').hasClass("is-open")) {
        //open表示中の場合
        $('body').removeClass('fixed').css('top', 0 + 'px');
 
        } else {

        }
        if ($('.l-l-navList__item-title-arrow').hasClass('is-open')) {
		      $(this).parent('.l-navList__item-title-area').next('.l-submenu').css('display', 'flex');
        } else {
          $(this).parent('.l-navList__item-title-area').next('.l-submenu').css('display', 'flex');
        }
       // PC 表示
     
    }
  }
});

window.sr=ScrollReveal(),
sr.reveal(".animate-fade",{origin:"bottom",duration:1500,reset:false,easing:"ease-in-out",viewFactor:.3,distance:"0%",opacity:0,scale:1}),
sr.reveal(".animate-bottom",{origin:"bottom",duration:1500,reset:false,easing:"ease-in-out",viewFactor:.3,distance:"20%",opacity:0,scale:1}),
sr.reveal(".animate-left",{origin:"left",duration:1500,reset:false,easing:"ease-in-out",viewFactor:.3,distance:"20%",opacity:0,scale:1}),
sr.reveal(".animate-right",{origin:"right",duration:1500,reset:false,easing:"ease-in-out",viewFactor:.3,distance:"20%",opacity:0,scale:1})