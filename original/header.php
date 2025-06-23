<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="https://kuji-cloud.com/lp/wp-content/uploads/2021/11/cropped-512塗りつぶし-192x192.png"
        sizes="192x192">
    <title>QRコードで簡単！ WEB 抽選システム - 手軽に素早く抽選・懸賞キャンペーンを導入 | くじクラウド</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/header.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/footer.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.css" />

    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/jp/jquery-3.3.1.min.js"></script>
    <?php wp_head(); ?> 
</head>

<body>

    <header class="header">
        <div class="header-container">
            <a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/logo.png" alt="くじクラウド" class="logo" /></a>
            <nav class="nav">
                <a href="<?php echo site_url();?>/priceplan">料金プラン</a>
                <a href="<?php echo site_url();?>/system">機能一覧</a>
                <a href="<?php echo site_url();?>/implement">導入事例</a>
                <a href="<?php echo site_url();?>/faq">Q&A</a>
                <a href="<?php echo site_url();?>/download">資料ダウンロード</a>
                <a href="<?php echo site_url();?>/contact">お問い合わせ</a>
                <a href="<?php echo site_url();?>/company">運営会社</a>
            </nav>
            <div class="menubutton">
                <a href="#menu" id="toggle"><span></span></a>
                <div id="menu">
                    <ul>
                        <li><a href="<?php echo site_url();?>/priceplan">料金プラン</a></li>
                        <li><a href="<?php echo site_url();?>/system">機能一覧</a></li>
                        <li><a href="<?php echo site_url();?>/implement">導入事例</a></li>
                        <li><a href="<?php echo site_url();?>/faq" style="font-weight: 500; font-family: Arial, sans-serif;">Q & A</a></li>
                        <li><a href="<?php echo site_url();?>/download">資料ダウンロード</a></li>
                        <li><a href="<?php echo site_url();?>/contact">お問い合わせ</a></li>
                        <li><a href="<?php echo site_url();?>/company">運営会社</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>