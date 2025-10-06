// JavaScript Document

//アコーディオン
var accordionHead = $('.accordion-head');
var accordionBody = $('.accordion-body');
accordionBody.hide();
accordionHead.on('click',function(){
   var flag = $(this).children('.accordion-btn').text();
    if(flag == "詳細"){//もしflagが「閉じる」だったら
        $(this).children('.accordion-btn').text("閉じる");
        $(this).children('.accordion-btn').addClass("js-open");
    } else {
        $(this).children('.accordion-btn').text("詳細");
        $(this).children('.accordion-btn').removeClass("js-open");
        flag = "詳細"
    }
    $(this).next('.accordion-body').slideToggle();
});

//アコーディオン
var btn_accordionHead = $('.btn-accordion-head');
var btn_accordionBody = $('.btn-accordion-body');
btn_accordionBody.hide();
btn_accordionHead.on('click',function(){
    $(this).next('.btn-accordion-body').slideToggle();
});


//退職手続きページ
$(window).on('load resize', function(){
    var guide_right_content = $('.guide-right-content').innerHeight();
    var guide_right_content2 = $('.guide-right-content.display-sp-none').innerHeight();
    $('.guide-left-content').css({
        'height': guide_right_content + 'px',
    });
    $('.guide-left-content.display-sp-none').css({
        'height': guide_right_content2 + 'px',
    });

    if($('html').hasClass('sp_width')){
        $('.guide-left-content').css({
            'height': 'auto',
        });
    }
});


//追従バナー
var pankuzuOffset;
var winH;
$(window).on('load resize',function(){
    pankuzuOffset = $('.pankuzu').offset().top;
    winH = $(window).height();
});
$(function() {
    var fixedBnr = $('.fixedBnr');
    var fixedBnr_closeBtn = $('.fixedBnr-closeBtn');

    fixedBnr_closeBtn.on('click', function(){
        fixedBnr.hide();
    });

    $(window).scroll(function () {
        if ($(this).scrollTop() > pankuzuOffset - winH + 17 + 56) {
            fixedBnr.addClass('js-active');
        } else {
            fixedBnr.removeClass('js-active');
        }
    });
});

$(function(){
    var nav_link = $('.nav-link');
    var megamenu = $('.megamenu');
    nav_link.hover(
        function() {
            $(this).parents('.nav-item').addClass("aaa");
            if($(this).parents('.nav-item').find('.megamenu').length){
                $('html').addClass('megamenu-cover');
                console.log(000);
            }
        },
        function() {
            $('html').removeClass('megamenu-cover');
        }
    );
    megamenu.hover(
        function() {
            $('html').addClass('megamenu-cover');
        },
        function() {
            $('html').removeClass('megamenu-cover');
        }
    );
});

//ポップアップバナー
$(function(){
    var popup_link = $('.popup-link');
    var popup_btn = $('.popup-btn-close');

    popup_link.on('click', function(){
        $(this).parent().next('.popup').fadeIn();
    });
    $(document).on('click',function(e) {
        if(!$(e.target).closest('.popup-content').length && !$(e.target).closest('.popup-link').length) {
            $('.popup').fadeOut();
        }
    });
    popup_btn.on('click',function(e) {
        $('.popup').fadeOut();
    });
});