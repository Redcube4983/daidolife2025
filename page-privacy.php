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
                <div class="p-privacy__contact__tel">TEL：052-611-8873</div>
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
        <section class="p-privacy__content" id="privacy02">
            <h2 class="p-privacy__content__title">個人情報の利用目的について</h2>
            <p class="p-privacy__content__text">株式会社大同ライフサービス（以下「当社」といいます。）は、本人に対して個別に個人情報の利用目的を明示・通知していない場合、お客様等の個人情報を以下の目的のために利用します。ただし、個人情報取得時の状況に照らしてその利用目的が明らかである場合を除きます。</p>
            <ul class="p-privacy__content__ul p-privacy__content__ul__noNumber">
                <li class="p-privacy__content__list p-privacy__content__list__noNumber">
                    <h3 class="p-privacy__content__list__title">事業一般で取扱う個人情報の利用目的</h3>
                    <ol class="nomalNumber">
                        <li>お客様からの商品、サービスの申込受付</li>
                        <li>商品、サービス提供における本人確認、ご連絡</li>
                        <li>お客様への商品の発送、サービスのご提供</li>
                        <li>お問合せ、ご相談への対応</li>
                        <li>お客様への大同グループ各社の商品、イベント、キャンペーンおよびアンケートの送付、訪問等によるご案内、興味等に合わせた広告配信</li>
                        <li>お客様への会報誌、景品等の送付</li>
                        <li>市場調査</li>
                        <li>事業活動で取得した個人情報やウェブサイト等での閲覧・行動履歴等の情報によるご興味・需要・満足度のデータ分析</li>
                        <li>大同グループ各社の商品、システム、およびサービスの企画、開発、改良</li>
                        <li>お客様に適切と思われる商品、サービスのご案内、ご提供</li>
                        <li>商談、面談およびこれに伴うご連絡</li>
                        <li>委託元から受託した業務の履行</li>
                        <li>法律に基づく個人情報の第三者提供</li>
                        <li>契約審査、契約手続、お支払い手続等その他契約管理全般</li>
                        <li>大同グループ各社の経営管理や各種リスク管理の適切かつ円滑な遂行</li>
                        <li>その他お客様のニーズに適切かつ円滑にお応えするため</li>
                    </ol>
                </li>
                <li class="p-privacy__content__list p-privacy__content__list__noNumber">
                    <h3 class="p-privacy__content__list__title">保険代理店委託業務で取扱う個人情報の利用目的</h3>
                    <ol class="nomalNumber">
                        <li>当社が委託を受けている各保険会社の損害保険、生命保険の商品やサービスの案内・提供・維持管理主な各種商品やサービスの内容は、各保険会社のホームページに掲載しておりますので、こちらをご確認ください。</li>
                    </ol>
                </li>
                <li class="p-privacy__content__list p-privacy__content__list__noNumber">
                    <h3 class="p-privacy__content__list__title">採用応募者に関する個人情報</h3>
                    <ol class="nomalNumber">
                        <li>当社の採用活動に関するご連絡、資料の送付、ご本人確認等</li>
                        <li>採用業務管理</li>
                    </ol>
                </li>
                <li class="p-privacy__content__list p-privacy__content__list__noNumber">
                    <h3 class="p-privacy__content__list__title">退職者、社員等に関する個人情</h3>
                    <ol class="nomalNumber">
                        <li>人事労務管理、福利厚生、労働関連法令への対応、その他事務連絡等</li>
                    </ol>
                </li>
            </ul>
        </section>
        <section class="p-privacy__content" id="privacy03">
            <h2 class="p-privacy__content__title">個人データの共同利用について</h2>
            <ul class="p-privacy__content__ul">
                <li class="p-privacy__content__list">
                    <h3 class="p-privacy__content__list__title">大同グループは、大同グループ各社が取得したお客様等に関する個人データを、以下のとおり共同利用する場合があります。</h3>
                    <ol>
                        <li class="list__bold"><h4>共同利用する個人データの項目</h4>
                            <p>氏名、年齢、性別、生年月日、所属企業・団体、所属部署、肩書・役職、資格、来歴、連絡先 共同</p>
                        </li>
                        <li class="list__bold"><h4>利用する者の範囲</h4>
                            <p>大同グループ各社</p>
                        </li>
                        <li class="list__bold"><h4>共同利用の利用目的</h4>
                            <ol class="nomalNumber__child">
                                <li>大同グループの提供する各種製品やサービス、イベント等に関する案内および連絡のため</li>
                                <li>お客様等からのお問い合わせ、請求等への対応のため</li>
                                <li>その他大同グループとしての業務の適切かつ円滑な遂行のため</li>
                            </ol>
                        </li>
                        <li class="list__bold"><h4>同利用する個人データの管理責任者</h4>
                            <p>当該個人データを取得し、共同利用に供した大同グループ各社当社の住所および代表者の氏名については、会社概要をご覧ください。</p>
                        </li>
                    </ol>
                </li>
                <li class="p-privacy__content__list">
                    <h3 class="p-privacy__content__list__title">当社は、当社が取得したお客様等に関する個人データを、以下のとおり共同利用する場合があります。</h3>
                    <ol>
                        <li class="list__bold">
                            <h4>共同利用する個人データの項目</h4>
                            <ol class="nomalNumber__child">
                                <li>
                                    <h5>商品、サービス利用に際してご提供いただいた情報</h5>
                                    <p>氏名、ご住所、生年月日、性別、ご連絡先、お勤め先、ご家族に関する情報、ご健康に関する情報、認証や識別に関する情報，お住まいに関する情報、お支払いに関する情報等</p>
                                </li>
                                <li>
                                    <h5>商品、サービス利用により取得した情報</h5>
                                    <p>機器やソフトウエア等の操作情報および取得情報（画像、音声、ご利用環境に関する情報、ご健康に関する情報等）、ご利用状況等</p>
                                </li>
                                <li>
                                    <h5>ご利用いただいている商品、サービスに関する情報</h5>
                                    <p>商品名、サービス名、機器や機種情報、ご利用開始日、ご購入日、ご利用場所、ご利用動機、ご紹介情報等</p>
                                </li>
                                <li>
                                    <h5>研究、開発を目的としてご提供いただいた情報または取得した情報</h5>
                                    <p>氏名、ご住所、生年月日、性別、ご連絡先、ご家族に関する情報機器やソフトウエア等の操作情報および取得情報等（画像、音声、ご利用環境に関する情報、ご健康に関する情報等）</p>
                                </li>
                                <li>
                                    <h5>お問合せ、訪問、作業、取引等により当社が取得した情報</h5>
                                    <p>日付、内容、ご対応者情報、お支払い状況、名刺情報、イベント等のご参加情報、アンケート情報等</p>
                                </li>
                            </ol>
                        </li>
                        <li class="list__bold">
                            <h4>共同利用する者の範囲</h4>
                            <p>大同グループ各社</p>
                        </li>
                        <li class="list__bold">
                            <h4>共同利用の利用目的</h4>
                            <ol class="nomalNumber__child">
                                <li>
                                    <h5>大同グループの提供する各種製品やサービス、イベント等に関する案内および連絡のため</h5>
                                </li>
                                <li>
                                    <h5>お客様等からのお問い合わせ、請求等への対応のため</h5>
                                </li>
                                <li>
                                    <h5>その他大同グループとしての業務の適切かつ円滑な遂行のため</h5>
                                </li>
                            </ol>
                        </li>
                        <li class="list__bold">
                            <h4>同利用する個人データの管理責任者</h4>
                            <p>当該個人データを取得し、共同利用に供した大同グループ各社当社の住所および代表者の氏名については、会社概要をご覧ください。</p>
                        </li>
                    </ol>
                </li>
            </ul>
        </section>
        <section class="p-privacy__content" id="privacy04">
            <h2 class="p-privacy__content__title">安全管理措置について</h2>
            <p class="p-privacy__content__text">当社は、個人情報の漏えい、滅失または毀損等を防止するために、以下の安全管理措置を講じています。
まず、個人情報の適正な取扱いの確保のため、「法令の遵守」、「お問い合わせ窓口」等についての基本方針を策定し、取得、利用、保存、提供、削除・廃棄等の段階ごとに、取扱方法、責任者・担当者およびその任務等について個人情報の取扱規程を策定しています。
そして、個人情報の取扱いに関する留意事項について、役職員に研修を実施するとともに、個人情報についての秘密保持に関する事項を就業規則に記載しています。
当社および委託先が、外国においてお客様等の個人情報を取り扱う場合には、当該国の個人情報の保護に関する制度を把握して適切かつ合理的な安全管理措置を実施しています。
安全管理措置に関するお問い合わせおよび請求は、以下の窓口で受け付けます。</p>
        </section>
        <section class="p-privacy__content" id="privacy05">
            <h2 class="p-privacy__content__title">個人情報の取扱いに関する苦情・相談受付窓口</h2>
            <ul class="p-privacy__content__ul">
                <li class="p-privacy__content__list">
                    <h3 class="p-privacy__content__list__title">個人情報についての苦情・相談</h3>
                    <div class="p-privacy__contact">
                        <h4 class="p-privacy__contact__section">株式会社大同ライフサービス 企画部</h4>
                        <div class="p-privacy__contact__tel">TEL：052-611-8843</div>
                    </div>
                </li>
                <li class="p-privacy__content__list">
                    <h3 class="p-privacy__content__list__title">認定個人情報保護団体のお知らせ</h3>
                    <div class="p-privacy__contact">
                        <p class="p-privacy__contact__mail">E-mail：<a href="mailto:soumu@daidolife.co.jp">soumu@daidolife.co.jp</a>（代表）</a></p>
                        <p class="p-privacy__contact__text">株式会社大同ライフサービスは、個人情報保護法の規定に基づき、「一般財団法人  日本情報経済社会推進協会」を認定個人情報保護団体とし、苦情解決の申し出先（連絡先）としています。</p>
                        <h4 class="p-privacy__contact__section">認定個人情報保護団体の名称</h4>
                        <p class="p-privacy__contact__text">一般財団法人  日本情報経済社会推進協会</p>
                    </div>
                    <div class="p-privacy__contact">
                        <h3 class="p-privacy__contact__title">苦情解決の連絡先</h3>
                        <h4 class="p-privacy__contact__section">一般財団法人  日本情報経済社会推進協会</h4>
                        <p class="p-privacy__contact__text">プライバシーマーク推進センター 認定個人情報保護団体事務局</p>
                        <p class="p-privacy__contact__text">〒106-0032<br>東京都港区六本木一丁目９番９号<br>六本木ファーストビル（受付１Ｆ）</p>
                        <div class="p-privacy__contact__tel">TEL.0120-116-213　TEL.0120-700-779</div>
                        <time class="p-privacy__contact__time">消費者相談受付時間<br class="sp">9：30～12:00、13:00～16:30</time>
                    </div>
                </li>
            </ul>
        </section>
        <section class="p-privacy__content" id="privacy06">
            <h2 class="p-privacy__content__title">プライバシーマーク認証取得のお知らせ</h2>
            <div class="p-privacy__content__privacyArea">
                <p class="p-privacy__content__privacyArea__text">当社は、平成19年３月12日付で、一般財団法人日本情報経済社会推進協会(JIPDEC)より、個人情報について適切な保護措置を講ずる体制を整備している事業者として、「プライバシーマーク」付与の認定を受けました。
今後も、より一層安心して当社サービスをご利用いただけるよう、個人情報保護管理システムの継続的改善に努めてまいります。</p>
                <div class="p-privacy__content__privacyArea__image">
                    <a href="https://privacymark.jp/" target="_brank"><img src="<?php echo get_template_directory_uri(); ?>/images/common/pmark-logo.webp"></a>
                </div>
            </div>
        </section>
    </div>
    <?php get_contact(); ?>
</div>
</main>
<?php get_footer(); ?>