//スマホの幅かどうか
function is_sp_width(){
	return $(window).width() <= Common.breakpoint;
}

//-----------------------------------------------------------------
//common
//-----------------------------------------------------------------
var Common = {
	//▼▼▼▼▼ここから設定項目▼▼▼▼▼
	
	//RWD時のブレークポイント
	breakpoint: 849,
	//幅を記憶しておく
	width: $(window).width(),
	
	//▲▲▲▲▲ここまで設定項目▲▲▲▲▲
	
	//スムーススクロール（ページ内リンク）
	smoothScrollSelector: '.js-smoothScroll',
	smooth_scroll:function(){
		var thisObj = this;
		var selector = this.smoothScrollSelector;
		
		$(selector).on('click', function(e){
			var href = $(this).attr('href')
			var linkTo = false;
			if(href.charAt(0) !== '#'){
				return true;
			}else{
				e.preventDefault();
				if(linkTo.length > 0){
					var top = linkTo.position().top;
					$('html,body').animate({ scrollTop: top }, thisObj.delay);
				}else if($(this).attr('href')=='#'){
				//PAGETOPへ
					$('html,body').animate({ scrollTop: 0 }, thisObj.delay);
				}
				if($('html.menu-open').length){
					GnavSP.nav_close();
				}
				return false;
			}
		});
	},
	
	init:function(){
		this.smooth_scroll();
		
	}
}

//グロナビSP
var GnavSP = {
	selectorClick: '.header-btn',
	selector: '.header-btn',
	width: 0,
	delay: 300,
	
	set_show: function(){
		//高さとTOP調整
		$('html').addClass('menu-close');
		if(GnavSP.width != $(window).width()){
			$('.h-menu').removeClass('js-open');
		}
		$('.h-menu').css('height', 0);
		GnavSP.width = $(window).width();
	},
	nav_open: function(){
		$(GnavSP.selectorClick).addClass('js-open')
		$('html').addClass('menu-open');
		$('html').removeClass('menu-close');
	},
	nav_close: function(){
		$(GnavSP.selectorClick).removeClass('js-open')
		$('html').removeClass('menu-open');
		$('html').addClass('menu-close');

		//ドロップダウンメニュー 1つ目
		$('.nav-btn').removeClass('is-openBtn');
		$('.megamenu').hide();

		//ドロップダウンメニュー 2つ目
		$('.sitemap-title').removeClass('is-openBtn');
		$('.sitemap-body').hide();

	},
	init: function(){
		GnavSP.set_show();
		$(window).resize(function(){
			GnavSP.set_show();
		}).on('load', function(){
			GnavSP.set_show();
		});
		$(GnavSP.selectorClick).bind('mousedown, click', function(){
			//OPEN
			if(!$(this).hasClass('js-open')){
				GnavSP.nav_open();
			}else{
				GnavSP.nav_close();
			}
			//return false;
		});
		
	}
}

/*
	追従メニューの設定
*/ 
var header = $('.header');
var header_clone = header.clone();
var header_clone_elm = header_clone;
header_clone_elm.addClass('header-scroll');
$('body').append(header_clone);

$(window).on('load scroll resize', function(){
	var scroll_pos = $(this).scrollTop();
	if(scroll_pos > 300){
		header_clone_elm.addClass('header-scroll_show');
	} else {
		header_clone_elm.removeClass('header-scroll_show');
	}
});


$(function(){
	$('.nav-item').hover(
		function() {
			$(this).find('.megamenu').addClass('js-show');
		},
		function() {
			$(this).find('.megamenu').removeClass('js-show');
		}
	);
});

$(function(){

	/*
		SP
	*/ 
	//ドロップメニュー　1つ目
	var h_nav_btn = $('.header-nav .nav-btn');

	$(function() {
		h_nav_btn.click(function() { 
			if ($(this).hasClass('is-openBtn')) {
				$(this).removeClass('is-openBtn').next('.megamenu').slideUp('fast');
			} else {
				$(this).addClass('is-openBtn').next('.megamenu').slideDown('fast');
			}    
		});
	});

	//ドロップメニュー　2つ目
	var sitemap_ttl = $('.sitemap .sitemap-title');

	$(function() {
		sitemap_ttl.click(function() { 
			if ($(this).hasClass('is-openBtn')) {
				$(this).removeClass('is-openBtn').next('.sitemap-body').slideUp('fast');
			} else {
				$(this).addClass('is-openBtn').next('.sitemap-body').slideDown('fast');
			}    
		});
	});
});


//共通部分
function common_action(){
	
	//スマホの幅かどうかクラスをセット
	var strClass = is_sp_width() ? 'sp_width' : 'pc_width' ;
	$('html').removeClass('sp_width pc_width').addClass(strClass);
	
	//共通 リサイズ時の処理	
	$(window).resize(function(){
		//スマホの幅かどうかクラスをセット
		var strClass = is_sp_width() ? 'sp_width' : 'pc_width' ;
		$('html').removeClass('sp_width pc_width').addClass(strClass);

		//SP幅からPC幅に変更したらSPメニューは全て閉じる
		if($('html').hasClass('pc_width')){
			$('.header-btn').removeClass('js-open');

			//ドロップダウンメニュー 1つ目
			$('.megamenu').css({
				'display': '',
			});
			$('.nav-btn').removeClass('is-openBtn');

			//ドロップダウンメニュー 2つ目
			$('.sitemap-title').removeClass('is-openBtn');
			$('.sitemap-body').css({
				'display': '',
			});
		}

		if($('html').hasClass('sp_width')){
			$('html').removeClass('menu-open');
		}
	});
	
	//TELリンクはPCの時無しにする
	$('.pc_width a[href^="tel"]').click(function(){
		return false;
	});
}

$('a[href^="#"]').click(function(){
    var adjust = 0;
    var speed = 400;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top + adjust;
    $('body,html').animate({scrollTop:position}, speed, 'swing');
    return false;
});


$(function(){
	
	//読み込み時フェード
	$('body')
		//.css('opacity', 0)
		.delay(400)
		.animate({'opacity': 1}, 400);
	Common.init();
	
	//グロナビ
	GnavSP.init();
	
	common_action();
	
});


