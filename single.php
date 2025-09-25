<?php
/*
Template Name: single
*/
?>
<?php get_header(); ?>

<main class="p-news">
	<section class="c-keyVisual">
		<div class="c-keyVisual__img">
			<picture>
				<source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/news/sp-top.webp" type="image/webp">
				<source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/news/sp-top.jpg">
				<source srcset="<?php echo get_template_directory_uri(); ?>/img/news/top.webp" type="image/webp">
				<img src="<?php echo get_template_directory_uri(); ?>/img/news/top.jpg" alt="新着情報 キービジュアル">
			</picture>
		</div>
		<div class="c-keyVisual__text">
			<h1 class="c-keyVisual__title">
				新着情報
			</h1>
			<p class="c-keyVisual__subTitle">
				What's New
			</p>
		</div>
	</section>
	<nav aria-label="breadcrumb">
		<ol class="c-breadcrumb">
			<li><a href="/">トップ</a></li>
			<li><span class="c-breadcrumb__separator">＞</span><span aria-current="page">新着情報</span></li>
		</ol>
	</nav>

	<div class="c-mainContainer">
		<section class="c-sec p-news">
		<?php if (have_posts()): ?>
			<?php while (have_posts()) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
			<?php endwhile; ?>
		<?php else: ?>
		<!-- 投稿が無い場合の処理 -->
		<?php endif; ?>
		</section>
	</div>
</main>

<?php get_footer(); ?>