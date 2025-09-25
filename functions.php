<?php
//************************************************ */
//テンプレ呼び出し関数
//************************************************ */

function get_contact() {
	get_template_part('parts/contact');
}


//MW WP FORMの自動タグ出力の制御
function mwwpform_autop_filter() {
	if (class_exists('MW_WP_Form_Admin')) {
		$mw_wp_form_admin = new MW_WP_Form_Admin();
		$forms = $mw_wp_form_admin->get_forms();
		foreach ($forms as $form) {
		add_filter('mwform_content_wpautop_mw-wp-form-' . $form->ID, '__return_false');
		}
	}
}
mwwpform_autop_filter();