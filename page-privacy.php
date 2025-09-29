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
    <section class="p-privacy">
        <div class="p-privacy__floatMemu">
            <ul class="p-privacy__floatMemu__inner">
                <li class="p-privacy__floatMemu__list"><a class="c-btn" href="#privacy01">個人情報保護方針</a></li>
                <li class="p-privacy__floatMemu__list"><a class="c-btn" href="#privacy02">個人情報の<br>利用目的について</a></li>
                <li class="p-privacy__floatMemu__list"><a class="c-btn" href="#privacy03">個人データの<br>共同利用について</a></li>
                <li class="p-privacy__floatMemu__list"><a class="c-btn" href="#privacy04">安全管理措置について</a></li>
                <li class="p-privacy__floatMemu__list"><a class="c-btn" href="#privacy05">個人情報の取扱いに関する<br>苦情・相談受付窓口</a></li>
                <li class="p-privacy__floatMemu__list"><a class="c-btn" href="#privacy06">プライバシーマーク認証<br>取得のお知らせ</a></li>
            </ul>
        </div>
    </section>
    <?php get_contact(); ?>
</div>
</main>
<?php get_footer(); ?>