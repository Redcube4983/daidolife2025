<?php
//************************************************ */
//テンプレ呼び出し関数
//************************************************ */

function get_contact() {
	get_template_part('parts/contact');
}

//************************************************ */
//フォーム
//************************************************ */

//全てのフォームにバリデーションを適用する為にフォームを取得
add_action( 'init', function() {
	global $wpdb;

	// MW WP Form の投稿タイプを取得（通常は 'mw-wp-form'）
	$forms = get_posts([
		'post_type' => 'mw-wp-form',
		'post_status' => 'publish',
		'numberposts' => -1,
	]);

	foreach ( $forms as $form ) {
		$hook = 'mwform_validation_mw-wp-form-' . $form->ID;

		add_filter( $hook, 'my_exam_validation_rule', 10, 3 );
	}
});
//バリデーションチェック
function my_exam_validation_rule( $Validation, $data, $Data ) {

	// フォームキー → ID（例: "mw-wp-form-17" → 17）
	$form_key = $Data->get_form_key();
	$form_id = (int) str_replace('mw-wp-form-', '', $form_key);

	// フォームの投稿情報を取得
	$form_post = get_post($form_id);
	if ( ! $form_post || $form_post->post_type !== 'mw-wp-form' ) {
		return $Validation;
	}

	// タイトルで分岐（idで上手く行かない）
	$title = $form_post->post_title;

	// ラベル一覧（name属性 → 日本語名）
	$labels = [
		'name_sei'           => '姓',
		'name_mei'           => '名',
		'name_kana_sei'      => 'セイ',
		'name_kana_mei'      => 'メイ',
		'mail'               => 'メールアドレス',
		'mail_check'         => '確認用メールアドレス',
		'tel'                => 'ご連絡先1',
		'tel-radio'          => 'ご連絡先の種類',
		'privacy'            => '個人情報保護方針への同意',
	];

	// 必須入力
	$required = [
		'name_sei',
		'name_mei',
		'name_kana_sei',
		'name_kana_mei',
		'mail',
		'mail_check',
		'tel',
	];
	$requiredSelect = [
		'privacy',
		'tel-radio',
	];
	

	foreach ( $required as $key ) {
		$label = $labels[$key];
		$message = "「{$label}」は必須項目です。入力してください。";
		$Validation->set_rule( $key, 'noEmpty', [
			'message' => $message
		] );
	}
	foreach ( $requiredSelect as $key ) {
		$label = $labels[$key];
		if ( $key === 'privacy' ) {
			$message = "個人情報保護方針への同意は必須です。選択してください。";
		}else if ( $key === 'tel-radio' ) {
			$message = "ご連絡先の種類は必須です。選択してください。";
		}else {
			$message = '何も選択されていません。 該当するものを少なくとも一つ以上選択してください。';
		}

		$Validation->set_rule( $key, 'required', [
			'message' => $message
		] );
	}

	// メール形式
	$Validation->set_rule( 'mail', 'mail', [
		'message' => 'メールアドレスの書式に誤りがあります。正しく入力してください。'
	] );

	// メール一致（equal_to: mail）
	$Validation->set_rule( 'mail_check', 'eq', [
		'target' => 'mail',
		'message'  => 'メールアドレスが一致しません。'
	] );

	// 電話番号形式（例：03-1234-5678）
	$Validation->set_rule( 'tel', 'tel', [
		'message' => '電話番号の形式が正しくありません（例：03-1234-5678）。'
	] );

	return $Validation;
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