<?php get_header();?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/company.css">
    <section id="transaction" class="transaction">
        <h2 class="section-title">運営会社</h2>
        <div class="transaction-img">
            <div class="m-width wow animate__fadeInUp" data-wow-duration="1.5s">
                <div>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/company1.jpeg" alt="">
                </div>
                <div>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/company2.jpeg" alt="">
                </div>
                <div>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/company3.jpeg" alt="">
                </div>
            </div>
        </div>
        <div class="container wow animate__fadeInUp" data-wow-duration="1.5s">
            <div class="s-width">
                <div class="row">
                    <div class="label">会社名</div>
                    <div class="value"> 合同会社Vermuda(Vermuda LLC.)</div>
                </div>
                <div class="row">
                    <div class="label">代表者</div>
                    
                    <div class="value">
                        <span>小林 将（代表社員）</span>
                        <span>岡崎 恭平（業務執行役員）</span>
                    </div>
                </div>
                <div class="row">
                    <div class="label">本社</div>
                    <div class="value">〒145-0071 東京都大田区田園調布1丁目15-6 UNE MAISON 102号室</div>
                </div>
                <div class="row">
                    <div class="label">電話番号</div>
                    <div class="value">ご連絡はお問い合わせからお願いいたします。</div>
                </div>
                <div class="row">
                    <div class="label">主な事業内容</div>
                    <div class="value">
                        <p>アプリ・WEBシステム開発</p>
                        <p>IT人材研修・人材採用支援</p>
                        <p>ITコンサルティング</p>
                    </div>
                </div>
                <div class="row">
                    <div class="label">設立</div>
                    <div class="value">2016年3月3日</div>
                </div>
                <div class="row">
                    <div class="label">資本金</div>
                    <div class="value">1,500,000円</div>
                </div>
                <div class="row">
                    <div class="label">
                        <p>主要取引先</p>
                        <p>(順不同・敬称略)</p>
                    </div>
                    <div class="value">
                        パーソルプロセス＆テクノロジー株式会社
                        株式会社主婦と生活社
                        株式会社アベリオシステムズ
                        株式会社文化放送iCraft
                        ジャミール商事株式会社
                        株式会社Grrow株式会社カクセイ
                    </div>
                </div>
            
            </div>
        </div>
        <div class="button-group container margins">
            <a href="<?php echo site_url();?>/download" class="btn download wow animate__fadeInUp" data-wow-duration="1.5s">資料ダウンロード<img src="<?php echo get_stylesheet_directory_uri(); ?>/<?php echo get_stylesheet_directory_uri(); ?>/assets/image/downloadICO.svg" alt=""></a>
            <a href="<?php echo site_url();?>/contact" class="btn contact wow animate__fadeInUp" data-wow-duration="1.5s">お問い合わせ<img src="<?php echo get_stylesheet_directory_uri(); ?>/<?php echo get_stylesheet_directory_uri(); ?>/assets/image/contectICO.svg" alt=""></a>
        </div>
    </section>
    <?php get_footer(); ?>