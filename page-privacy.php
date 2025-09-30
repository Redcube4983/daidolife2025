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
            <ul class="p-privacy__content__ul">
                <li class="p-privacy__content__list">
                    <h3 class="p-privacy__content__list__title">法令等の遵守</h3>
                    <ol>
                        <li>個人情報の取扱いにあたり、「個人情報の保護に関する法律」および関連する政省令、ガイドライン等を遵守します。</li>
                        <li>個人情報の取扱いに関する社内規程を整備し、これを遵守するとともに、適時適切にその見直しを行います。</li>
                    </ol>
                </li>
                <li class="p-privacy__content__list">
                    <h3 class="p-privacy__content__list__title">利用目的</h3>
                    <p class="p-privacy__content__list__text">個人情報の利用目的を可能な限り特定して公表または本人に通知し、かかる利用目的の範囲内でのみ当該個人情報を取り扱います。</p>
                </li>
                <li class="p-privacy__content__list">
                    <h3 class="p-privacy__content__list__title">取得・利用</h3>
                    <p class="p-privacy__content__list__text">個人情報は、適法かつ公正な手段を用いて、利用目的の達成に必要な範囲内に限り取得し、利用します。</p>
                </li>
                <li class="p-privacy__content__list">
                    <h3 class="p-privacy__content__list__title">適正管理</h3>
                    <ol>
                        <li>個人データの漏えい、滅失または毀損等を防止するために、必要かつ適切な安全管理措置を講じます。</li>
                        <li>保有する個人データを正確かつ最新の内容に保つとともに、利用の必要がなくなった個人データを遅滞なく消去するよう努めます。</li>
                    </ol>
                </li>
                <li class="p-privacy__content__list">
                    <h3 class="p-privacy__content__list__title">第三者提供の制限</h3>
                    <p class="p-privacy__content__list__text">事前に本人の同意を得ている場合または法令等に定められた場合を除き、保有する個人データを第三者に提供しません。ただし、利用目的の達成に必要な範囲内において個人データの取扱いを委託する場合、他社と合併等する場合、および特定の者との間で個人データを共同利用する場合には、本人の同意を得ることなく個人データを第三者に提供することがあります。</p>
                </li>
                <li class="p-privacy__content__list">
                    <h3 class="p-privacy__content__list__title">開示等の請求への対応</h3>
                    <p class="p-privacy__content__list__text">個人データの開示、訂正・追加・削除、利用停止、消去、第三者への提供の停止および第三者提供記録の開示等の請求をお客様等から受けた場合には、遅滞なく対応いたします。</p>
                </li>
                <li class="p-privacy__content__list">
                    <h3 class="p-privacy__content__list__title">教育</h3>
                    <p class="p-privacy__content__list__text">個人情報保護に関する取り組みを徹底・強化するため、役員、従業員等に対する教育と啓発を継続的に実施します。</p>
                </li>
                <li class="p-privacy__content__list">
                    <h3 class="p-privacy__content__list__title">継続的改善（株式会社大同ライフサービス追加事項）</h3>
                    <p class="p-privacy__content__list__text">個人情報の取扱いに関する苦情・相談に迅速に対応し、個人情報管理規程、その他関連規程及び安全管理体制に関して、有効かつ適正な運用がなされるよう継続的な見直しと改善を図ります。</p>
                </li> 
                <li class="p-privacy__content__list">
                    <h3 class="p-privacy__content__list__title">改定</h3>
                    <ol>
                        <li>大同グループは、本個人情報保護方針を改定する権利を留保し、これを予告なく改定することがあります。</li>
                        <li>個人情報の利用目的を変更した場合、すみやかに変更後の利用目的をお客様等に通知または公表します。</li>
                        <li>共同利用にかかる個人データの利用目的または個人データの管理について責任を有する者を変更する場合、事前にお客様等に通知または公表します。</li>
                    </ol>
                </li> 
            </ul>
            <div class="p-privacy__contact">
                <h3 class="p-privacy__contact__title">お問い合わせ窓口</h3>
                <p class="p-privacy__contact__text">株式会社大同ライフサービスが保有する個人情報に関するお問い合わせおよび請求は、以下の窓口で受け付けます。</p>
                <h4 class="p-privacy__contact__section">株式会社大同ライフサービス 企画部ＣＲＭ室</h4>
                <div class="p-privacy__contact__tel">電話番号：０５２－６１１－８８７３</div>
                <time class="p-privacy__contact__time">受付時間：平日9時～17時</time>
            </div>
            <div class="p-privacy__footer">
            <ul class="p-privacy__footer__date">
                <li>制定 ２００５年４月１日</li>
                <li>改定 ２０２１年２月１日</li>
                <li>改定 ２０２２年４月１日</li>
            </ul>
            <div class="p-privacy__footer__signature">
                <h4>株式会社大同ライフサービス</h4>
                <h5>代表取締役社長 秋田 康明</h5>
            </div>
            </div>
        </section>
    </div>
    <?php get_contact(); ?>
</div>
</main>
<?php get_footer(); ?>