<?php
/*
Template Name: page-sitepolicy
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
    <div class="p-sitePolicy">
        <section class="p-sitePolicy__content">
            <p class="p-sitePolicy__content__text">大同ライフサービスウェブサイト <a href="/">https://www.daidolife.co.jp/</a>（以下「当サイト」）は、株式会社大同ライフサービスが運営しています。当サイトのご利用に際しては以下の点についてあらかじめご了承いただいた上でご利用ください。また、当社は予告なく利用規約を変更することがありますので、あらかじめご了承ください。</p>
            <ul class="p-sitePolicy__content__ul p-sitePolicy__content__ul__noNumber">
                <li class="p-sitePolicy__content__list p-sitePolicy__content__list__noNumber">
                    <h3 class="p-sitePolicy__content__list__title">免責事項</h3>
                    <p class="p-sitePolicy__content__list__text">当社は、当サイトに掲示した情報に関していかなる保証をするものではなく、その内容に誤りがあった場合、または当サイトのご利用に関してお客様その他の第三者に対して、一切責任を負いません。また、当サイトのご利用に起因するソフトウェア、ハードウェア上の事故その他のいかなる損害についても責任を負いません。また、当サイト上のリンクを通じてお客様がアクセスされるウェブサイトについて、いかなる責任も負いません。なお、当サイトに掲示されている情報は予告なく変更されることがありますので、あらかじめご了承ください。</p>
                </li>
                <li class="p-sitePolicy__content__list p-sitePolicy__content__list__noNumber">
                    <h3 class="p-sitePolicy__content__list__title">個人情報の取扱いについて</h3>
                    <p class="p-sitePolicy__content__list__text">個人情報の取扱いについては、<a href="/privacy/">プライバシーポリシー</a>のページをご覧ください。</p>
                </li>
                <li class="p-sitePolicy__content__list p-sitePolicy__content__list__noNumber">
                    <h3 class="p-sitePolicy__content__list__title">ご利用推奨環境</h3>
                    <p class="p-sitePolicy__content__list__text">快適にご利用いただくために、以下のブラウザのご利用を推奨します。※他のブラウザでご覧になった場合、一部コンテンツが正しく表示されないことがあります。</p>
                </li>
                <li class="p-sitePolicy__content__list p-sitePolicy__content__list__noNumber">
                    <h3 class="p-sitePolicy__content__list__title">JavaScriptについて</h3>
                    <p class="p-sitePolicy__content__list__text">当サイトはJavaScriptを使用しています。ブラウザの設定でJavaScriptを無効にしている場合に、ページが正しく表示されないことがあります。当サイトご利用の際には、JavaScriptを「有効」に設定して閲覧してください。</p> 
                </li>
                <li class="p-sitePolicy__content__list p-sitePolicy__content__list__noNumber">
                    <h3 class="p-sitePolicy__content__list__title">プラグインについて</h3>
                    <p class="p-sitePolicy__content__list__text">一部のコンテンツでは、以下のプラグインが必要です。インストールされていない場合は、バナーをクリックしてウェブサイトから最新のバージョンをダウンロードしてください。</p>
                </li>
                <li class="p-sitePolicy__content__list p-sitePolicy__content__list__noNumber">
                    <h3 class="p-sitePolicy__content__list__title">Cookie（クッキー）について</h3>
                    <p class="p-sitePolicy__content__list__text">当社ウェブサイトは、お客様の利便性向上を目的に、Cookie（クッキー）という技術を利用しています。 お客様は、お使いのブラウザ（※1）の設定により、クッキーの受け取りを拒否したり、クッキーを受け取ったときに警告を表示させたりすることができます。 ただし、拒否された場合には、当社ウェブサイト上で提供される各種サービスの内容に一部影響が生じる可能性があります。</p>
                    <p class="p-sitePolicy__content__list__text">（※1）インターネット上のウェブページを閲覧するためのソフト。Google Chrome、Internet Explorer、Microsoft Edge、Mozilla Firefox、Safariなどのことを指します。 </p>
                </li>
            </ul>
        </section>
    </div>
    <?php get_contact(); ?>
</div>
</main>
<?php get_footer(); ?>