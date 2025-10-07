<?php
/*
Template Name: page
*/
?>
<?php get_header(); ?>
<main>
<div class="p-fv">
	<div class="p-fv__text-area-title">
		<h1 class="p-fv__page-title"><?php the_title(); ?><span class="p-fv__page-title__en"><?php echo $post->post_name; ?></span></h1>
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
    <div class="p-<?php echo $post->post_name; ?>">
        <section class="<?php echo $post->post_name; ?>__content">
            <?php if (have_posts()): ?>
			<?php while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
			<?php endwhile; ?>
            <?php else: ?>
            <!-- 投稿が無い場合の処理 -->
            <?php endif; ?>
        </section>
    </div>
    <?php get_contact(); ?>
</div>
</main>
<?php get_footer(); ?>