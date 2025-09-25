<?php if (is_page(array('contact','confilm','completion','error'))) : ?>
<section class="c-contactArea animate-bottom">
    <p class="c-contactArea__text">お電話でもお問い合わせを承っております。</p>
    <a hreh="tel:0120-68-8448" class="c-contactArea__tel">0120-68-8448</a>
    <p class="c-contactArea__hours">受付時間 平日〇:〇〇～〇:〇〇</p>
</section>
<?php elseif (is_page()) : ?>
<section class="c-contactArea animate-bottom">
	<div class="c-contactArea__inner">
		<a class="c-contactArea__link" href="/contact/"><span>お問い合わせ</span></a>
		<p>大同ライフサービスへの<br class="sp">各種お問い合わせ・ご質問は<br>こちらのフォームをご利用ください。</p>
	</div>
</section>
<?php else : ?>
<section class="c-contactArea animate-bottom">
	<div class="c-contactArea__inner">
		<a class="c-contactArea__link" href="/contact/"><span>お問い合わせ</span></a>
		<p>大同ライフサービスへの<br class="sp">各種お問い合わせ・ご質問は<br>こちらのフォームをご利用ください。</p>
	</div>
</section>
<?php endif; ?>