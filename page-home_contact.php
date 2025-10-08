<?php
/*
Template Name: page-home_contact
*/
?>
<?php get_header(); ?>
<main>
<div class="p-fv">
	<div class="p-fv__text-area-title">
		<h1 class="p-fv__page-title"><?php the_title(); ?><span class="p-fv__page-title__en"><?php if (is_page('home_contact')) : ?>Real estate inquiries<?php elseif (is_page('home_error')) : ?>Real estate inquiries error<?php elseif (is_page('home_confilm')) : ?>Real estate inquiries Confilm<?php elseif (is_page('home_completion')) : ?>Real estate inquiries completion<?php endif; ?></span></h1>
	</div>
	<picture>
        <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/contact/first-view.webp" type="image/webp">
		<source media="(max-width: 1023px)" srcset="<?php echo get_template_directory_uri(); ?>/images/contact/first-view.webp" type="image/webp">
		<source srcset="<?php echo get_template_directory_uri(); ?>/images/contact/first-view.webp" type="image/webp">
		<img src="<?php echo get_template_directory_uri(); ?>/images/contact/first-view.webp" alt="" class="p-fv__bg">
	</picture>
</div>
 <nav aria-label="breadcrumb">
        <ol class="c-breadcrumb">
            <li><a href="/" class="c-breadcrumb__link">トップ</a></li>
            <li><span class="c-breadcrumb__separator" aria-current="page">＞</span><a href="/home/" class="c-breadcrumb__link">不動産</a></li>
            <?php if (is_page('home_contact')) : ?>
            <li><span class="c-breadcrumb__separator" aria-current="page">＞</span>不動産のお問い合わせ</li>
            <?php elseif (is_page(array('home_confilm','home_completion','home_error'))) : ?>
            <li><span class="c-breadcrumb__separator" aria-current="page">＞</span><a href="/home_contact/" class="c-breadcrumb__link">不動産のお問い合わせ</a></li>
            <li><span class="c-breadcrumb__separator" aria-current="page">＞</span><?php the_title(); ?></li>
            <?php else : ?>
            <?php endif; ?>
        </ol>
</nav>
<div id="contents" class="contents">
    <section class="p-contact">
        <?php if (is_page('home_contact')) : ?>
        <p class="p-contact__explanation">不動産に関するお問い合わせは、<br class="sp">下記フォームをご利用ください。<br>以下の必須項目をご入力のうえ、<br class="sp">【入力内容確認画面へ】ボタンを押してください。<br>確認画面に進みますので、内容をご確認後<br class="sp">【送信】ボタンをクリックしてください。</p>
        <?php elseif (is_page('home_error')) : ?>
        <p class="p-contact__explanation">入力内容に誤りまたは、<br class="sp">不備がございます。<br>エラー内容をご確認のうえ、 <br class="sp">【入力内容確認画面へ】ボタンを<br class="sp">押してください。 </p>
        <?php elseif (is_page('home_confilm')) : ?>
        <p class="c-form__lead confirm">まだお問い合わせは<br class="sp">完了しておりません。<br>入力内容をご確認のうえ、<br class="sp"> 【送信する】 ボタンをクリックしてください。</p>
        <?php endif; ?>
        <!-- Progress Steps -->
        <div class="p-contactPage__progress">
            <div class="p-formIndicator">
                <ol class="p-formIndicator__list">
                <?php if (is_page('home_contact')) : ?>
                    <li class="p-formIndicator__item p-formIndicator__item--input is-active">入力</li>
                    <li class="p-formIndicator__item p-formIndicator__item--error">エラー</li>
                    <li class="p-formIndicator__item p-formIndicator__item--confirm">確認</li>
                    <li class="p-formIndicator__item p-formIndicator__item--complete">完了</li>
                 <?php elseif (is_page('home_error')) : ?>
                    <li class="p-formIndicator__item p-formIndicator__item--input">入力</li>
                    <li class="p-formIndicator__item p-formIndicator__item--error is-active">エラー</li>
                    <li class="p-formIndicator__item p-formIndicator__item--confirm">確認</li>
                    <li class="p-formIndicator__item p-formIndicator__item--complete">完了</li>
                <?php elseif (is_page('home_confilm')) : ?>
                    <li class="p-formIndicator__item p-formIndicator__item--input">入力</li>
                    <li class="p-formIndicator__item p-formIndicator__item--error">エラー</li>
                    <li class="p-formIndicator__item p-formIndicator__item--confirm is-active">確認</li>
                    <li class="p-formIndicator__item p-formIndicator__item--complete">完了</li>
                <?php elseif (is_page('home_completion')) : ?>
                    <li class="p-formIndicator__item p-formIndicator__item--input">入力</li>
                    <li class="p-formIndicator__item p-formIndicator__item--error">エラー</li>
                    <li class="p-formIndicator__item p-formIndicator__item--confirm">確認</li>
                    <li class="p-formIndicator__item p-formIndicator__item--complete is-active">完了</li>
                 <?php endif; ?>
                </ol>
            </div>
        </div>
        <?php echo do_shortcode('[mwform_formkey key="134"]'); ?>
    </section>
    <?php get_contact(); ?>
</div>
</main>
<?php get_footer(); ?>