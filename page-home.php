<?php
/*
Template Name: page-home
*/
?>
<?php get_header(); ?>
<main>
<div class="p-fv">
	<div class="p-fv__text-area">
		<h2>大同グループとして「信頼」される<br>理想の住まいをお届けします</h2>
	</div>
	<picture>
		<source media="(max-width: 1023px)" srcset="<?php echo get_template_directory_uri(); ?>/images/<?php echo $post->post_name; ?>/first-view.webp" type="image/webp">
		<source srcset="<?php echo get_template_directory_uri(); ?>/images/<?php echo $post->post_name; ?>/first-view.webp" type="image/webp">
		<img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $post->post_name; ?>/first-view.webp" alt="" class="p-fv__bg">
	</picture>
</div>
 <nav aria-label="breadcrumb">
        <ol class="c-breadcrumb">
            <li><a href="/" class="c-breadcrumb__link">トップ</a></li>
            <li><span class="c-breadcrumb__separator" aria-current="page">＞</span>不動産</li>
        </ol>
</nav>
<div id="contents" class="contents">
    <section class="p-home">
        <p>お住まいの売買や賃貸借をはじめ、<br>不動産に関するお客様一人ひとりのニーズに合わせ、お応えいたします。</p>
        <ul class="">
            <li class=""><a class="" href="">賃貸物件</a></li>
            <li class=""><a class="" href="">注文住宅用地</a></li>
            <li class=""><a class="" href="">リフォーム</a></li>
            <li class=""><a class="" href="">【入居者様】ご解約手続き</a></li>
        </ul>
    </section>
    <?php get_contact(); ?>
</div>
</main>
<?php get_footer(); ?>