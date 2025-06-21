<?php

add_theme_support( 'post-thumbnails' );

function my_enqueue_scripts() {
    // Contact page JS
    if (is_page('contact')) {
        wp_enqueue_script(
            'contact-js',
            get_template_directory_uri() . '/assets/jp/contact.js',
            array('jquery'),
            null,
            true
        );
        wp_localize_script('contact-js', 'my_ajax_obj', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce'    => wp_create_nonce('my_ajax_nonce'),
        ));
    }

    // Download page JS
    if (is_page('download')) {
        wp_enqueue_script(
            'download-js',
            get_template_directory_uri() . '/assets/jp/download.js',
            array('jquery'),
            null,
            true
        );
        wp_localize_script('download-js', 'my_ajax_obj', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce'    => wp_create_nonce('my_ajax_nonce'),
        ));
    }
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');


// --------------------------------------------------

add_action('wp_ajax_send_email', 'cvf_sendEmail');
add_action('wp_ajax_nopriv_send_email', 'cvf_sendEmail');

function cvf_sendEmail() {
    if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'my_ajax_nonce')) {
        wp_send_json_error("セキュリティ検証に失敗しました。");
        exit;
    }

    $user_name = $_POST['user_name'];
    $company_name = $_POST['company_name'];
    $company_url = $_POST['company_url'];
    $company_email = $_POST['company_email'];
    $phonnumber = $_POST['phonnumber'];
    $prefecture = $_POST['prefecture'];
    $prepared = $_POST['prepared'];
    $content = $_POST['content'];

    $admin_email = 'goldenchain0804@gmail.com';
    $user_email  = $company_email;

    $subject_admin = '【くじクラウド】 お問い合わせがありました。';
    $subject_user  = '【くじクラウド】 お問い合わせありがとうございます。';

    $body_admin = '<!DOCTYPE html><html><meta charset="UTF-8"><body>';
    $body_admin .= '◆ ご担当者名: ' . $user_name . '<br>';
    $body_admin .= '◆ 法人名: ' . $company_name . '<br>';
    $body_admin .= '◆ 企業URL: ' . $company_url . '<br>';
    $body_admin .= '◆ メールアドレス: ' . $company_email . '<br>';
    $body_admin .= '◆ 電話番号: ' . $phonnumber . '<br>';
    $body_admin .= '◆ 都道府県: ' . $prefecture . '<br>';
    $body_admin .= '◆ 検討状況: ' . $prepared . '<br>';
    $body_admin .= '◆ その他ご質問など: <br>' . $content . '<br>';
    $body_admin .= '</body></html>';

    $body_user = '<!DOCTYPE html><html><meta charset="UTF-8"><body>';
    $body_user .= $user_name . '様<br>';
    $body_user .= 'この度はくじクラウドへお問い合わせいただき誠にありがとうございます。<br>担当者より3営業日以内にご連絡差し上げますのでお待ちください。<br><br>以下ご入力いただいた内容となりますのでご確認ください。<br>';
    $body_user .= '◆ ご担当者名: ' . $user_name . '<br>';
    $body_user .= '◆ 法人名: ' . $company_name . '<br>';
    $body_user .= '◆ 企業URL: ' . $company_url . '<br>';
    $body_user .= '◆ メールアドレス: ' . $company_email . '<br>';
    $body_user .= '◆ 電話番号: ' . $phonnumber . '<br>';
    $body_user .= '◆ 都道府県: ' . $prefecture . '<br>';
    $body_user .= '◆ 検討状況: ' . $prepared . '<br>';
    $body_user .= '◆ その他ご質問など: <br>' . $content . '<br><br>';
    $body_user .= '━━━━━━━━━━━━━━━━━━━━━━━<br>';
    $body_user .= 'くじクラウド<br>';
    $body_user .= '合同会社Vermuda（Vermuda LLC.）<br>';
    $body_user .= '担当：長井 星司<br>';
    $body_user .= 'mail：s.nagai@vermuda.jp<br><br>';
    $body_user .= '〒145-0071 東京都大田区田園調布1丁目15-6 UNE MAISON 102号室<br>';
    $body_user .= 'https://vermuda.jp<br>';
    $body_user .= '━━━━━━━━━━━━━━━━━━━━━━━<br>';
    $body_user .= '</body></html>';

    $headers_admin = array(
        'Content-Type: text/html; charset=UTF-8',
        'From: くじクラウド <'. $user_email .'>',
    );

    $headers_user = array(
        'Content-Type: text/html; charset=UTF-8',
        'From: くじクラウド <info@kuji-cloud.com>',
    );

    $sent_to_admin = wp_mail($admin_email, $subject_admin, $body_admin, $headers_admin);
    $sent_to_user = wp_mail($user_email, $subject_user, $body_user, $headers_user);

    if ($sent_to_admin && $sent_to_user) {
        wp_send_json_success("メールを送信しました。");
    } else {
        wp_send_json_error("メールの送信に失敗しました。");
    }

    exit();
}

// ------------------------------------------------------------------

add_action('wp_ajax_download_email', 'downloadEmail');
add_action('wp_ajax_nopriv_download_email', 'downloadEmail');

function downloadEmail() {
    if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'my_ajax_nonce')) {
        wp_send_json_error("セキュリティ検証に失敗しました。");
        exit;
    }

    $user_name = $_POST['user_name'];
    $company_name = $_POST['company_name'];
    $company_url = $_POST['company_url'];
    $company_email = $_POST['company_email'];
    $phonnumber = $_POST['phonnumber'];
    $prefecture = $_POST['prefecture'];
    $prepared = $_POST['prepared'];
    $content = $_POST['content'];

    $admin_email = 'goldenchain0804@gmail.com';

    $subject_admin = '【くじクラウド】 お問い合わせがありました。';

    $body_admin = '<!DOCTYPE html><html><meta charset="UTF-8"><body>';
    $body_admin .= '◆ ご担当者名: ' . $user_name . '<br>';
    $body_admin .= '◆ 法人名: ' . $company_name . '<br>';
    $body_admin .= '◆ 企業URL: ' . $company_url . '<br>';
    $body_admin .= '◆ メールアドレス: ' . $company_email . '<br>';
    $body_admin .= '◆ 電話番号: ' . $phonnumber . '<br>';
    $body_admin .= '◆ 都道府県: ' . $prefecture . '<br>';
    $body_admin .= '◆ 検討状況: ' . $prepared . '<br>';
    $body_admin .= '◆ その他ご質問など: <br>' . $content . '<br>';
    $body_admin .= '</body></html>';

    $headers_admin = array(
        'Content-Type: text/html; charset=UTF-8',
        'From: くじクラウド <'. $user_email .'>',
    );

    if (wp_mail($admin_email, $subject_admin, $body_admin, $headers_admin)) {
        wp_send_json_success("メールを送信しました。");
    } else {
        wp_send_json_error("メールの送信に失敗しました。");
    }

    exit();
}