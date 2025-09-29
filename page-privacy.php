<?php
/*
Template Name: page-privacy
*/
?>
<?php get_header(); ?>
<main>
<div class="p-fv">
	<div class="p-fv__text-area-title">
		<h1 class="p-fv__page-title"><?php the_title(); ?><span class="p-fv__page-title__en">privacy policy</span></h1>
	</div>
	<picture>
        <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/<?php echo $post->post_name; ?>/first-view.webp" type="image/webp">
		<source media="(max-width: 1023px)" srcset="<?php echo get_template_directory_uri(); ?>/images/<?php echo $post->post_name; ?>/first-view.webp" type="image/webp">
		<source srcset="<?php echo get_template_directory_uri(); ?>/images/<?php echo $post->post_name; ?>/first-view.webp" type="image/webp">
		<img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $post->post_name; ?>/first-view.webp" alt="" class="p-fv__bg">
	</picture>
</div>
 <nav aria-label="breadcrumb">
        <ol class="c-breadcrumb">
            <li><a href="/" class="c-breadcrumb__link">トップ</a></li>
            <li><span class="c-breadcrumb__separator" aria-current="page">＞</span><?php the_title(); ?></li>
        </ol>
</nav>
<div id="contents" class="contents">
    <div class="p-privacy">
        <section class="p-privacy__floatMemu">
            <ul class="p-privacy__floatMemu__inner">
                <li class="p-privacy__floatMemu__list"><a class="c-btn c-btn--lineAccent c-icon-downarrow Memu-scroll" href="#privacy01">個人情報保護方針</a></li>
                <li class="p-privacy__floatMemu__list"><a class="c-btn c-btn--lineAccent c-icon-downarrow Memu-scroll" href="#privacy02">個人情報の<br>利用目的について</a></li>
                <li class="p-privacy__floatMemu__list"><a class="c-btn c-btn--lineAccent c-icon-downarrow Memu-scroll" href="#privacy03">個人データの<br>共同利用について</a></li>
                <li class="p-privacy__floatMemu__list"><a class="c-btn c-btn--lineAccent c-icon-downarrow Memu-scroll" href="#privacy04">安全管理措置について</a></li>
                <li class="p-privacy__floatMemu__list"><a class="c-btn c-btn--lineAccent c-icon-downarrow Memu-scroll" href="#privacy05">個人情報の取扱いに関する<br>苦情・相談受付窓口</a></li>
                <li class="p-privacy__floatMemu__list"><a class="c-btn c-btn--lineAccent c-icon-downarrow Memu-scroll" href="#privacy06">プライバシーマーク認証<br>取得のお知らせ</a></li>
            </ul>
        </section>
        <section class="p-privacy__content" id="privacy01">
            <h2 class="p-privacy__content__title">大同特殊鋼グループ 個人情報保護方針</h2>
            <p class="p-privacy__content__text">大同特殊鋼株式会社ならびにその子会社および関連会社（以下総称して「大同グループ」といいます。）は、個人情報保護の重要性を十分に認識し、お客様、お取引先およびその他関係先等（以下「お客様等」といいます。）から取得したすべての個人情報を、次の方針のもと適切に取り扱います。</p>
            <ul>
                <li class="p-privacy__content__list">
                    <h3 class="p-privacy__content__list__title">1. 法令等の遵守</h3>
                    <ol>
                        <li>（１）個人情報の取扱いにあたり、「個人情報の保護に関する法律」および関連する政省令、ガイドライン等を遵守します。</li>
                        <li>（２）個人情報の取扱いに関する社内規程を整備し、これを遵守するとともに、適時適切にその見直しを行います。</li>
                    </ol>
                </li>
                <li class="p-privacy__content__list">
                    <h3 class="p-privacy__content__list__title">2. 利用目的</h3>
                    <p class="p-privacy__content__list__text">個人情報の利用目的を可能な限り特定して公表または本人に通知し、かかる利用目的の範囲内でのみ当該個人情報を取り扱います。</p>
                </li>
            </ul>
        </section>
    </div>
    <?php get_contact(); ?>
</div>
</main>
<?php get_footer(); ?>