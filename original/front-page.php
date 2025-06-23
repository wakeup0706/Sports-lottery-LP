<?php  get_header(); ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/top.css" />
    <div class="trial-badge">
        <a href="<?php echo site_url();?>/contact">
            <div class="trial-text">
                <strong>お試しも<br>できます</strong>
                <p>お問い合わせへ</p>
                <div class="arrow-down"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/chevron-double-down 1.svg" alt=""></div>
            </div>
        </a>
    </div>

    <section class="hero">
        <div class="top_part">
            <div class="container">
                <h2 class="sub-heading">＼御社の「やりたい企画」をカタチにする／</h2>
                <h1 class="main-heading">
                    大規模対応でもこの価格<br />
                    業界最安クラスのWeb抽選ツール
                </h1>
                <p class="main__txt">手軽に初めていただきたいから</p>
                <p class="main__price wow animate__fadeInUp" data-wow-duration="1.5s">
                    <span class="price__month inblock">月額</span>
                    <span>33,000</span>
                    <span class="ttl_main">円から!</span>
                </p>
            </div>
        </div>

        <div class="middle_part">
            <div class="container monthly">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/woman.png" alt="woman">
                <div>
                    <p class="main__price wow animate__fadeInUp" data-wow-duration="1.5s">
                        <span class="price__month inblock">月額</span><span>33,000</span>
                        <span class="ttl_main">円から!</span>
                    </p><br>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/woman_sp.png" alt="woman" class="sp_person">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/man_sp.png" alt="woman" class="sp_person">
                    <div class="button-group spacial">
                        <a href="<?php echo site_url();?>/pricePlan" class="btn download wow animate__fadeInUp"
                            data-wow-duration="1.5s">料金プランを詳しくみる</a>
                    </div>
                </div>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/man.png" alt="man">
            </div>
        </div>

        <div class="container end_part">
            <p class="end_part_title">業界最安水準のWebキャンペーン支援ツール「くじクラウド」</p>
            <p>QR読み取りで即参加! 大規模対応&業界最安水準のWeb抽選システム。<br>設定も簡単、リアルタイムで結果表示。イベントやアプリ連携にも最適!</p>
        </div>
    </section>

    <section class="mobile-section">
        <h2 class="section-title">まずは体験してみてください<br><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/logo.png" alt=""></h2>

        <div class="mobile-content">
            <div class="container main-content">
                <div class="mobile">
                    <div class="mobile-view">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/iphone.png" alt="iphon">
                        <div class="phone-frame">
                            <video id="campaignVideo" loop muted playsinline>
                                <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/resize-shopping.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="carousel-buttons">
                        <button onclick="switchVideo('<?php echo get_stylesheet_directory_uri(); ?>/assets/video/resize-shopping.mp4')">ショッピング</button>
                        <button onclick="switchVideo('<?php echo get_stylesheet_directory_uri(); ?>/assets/video/resize-game.mp4')">ゲーム</button>
                        <button onclick="switchVideo('<?php echo get_stylesheet_directory_uri(); ?>/assets/video/resize-newyear.mp4')">お正月</button>
                    </div>
                </div>
                <div class="links">
                    <div class="boken">
                        <p>簡単ステップで抽選完了！</p>
                        <p>キャンペーンやシーンを選ばない柔軟性</p>
                    </div>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/about-fukidashi-pc.jpg" alt="about-fukidashi-pc">
                    <a href="https://kujionline.vermuda-cloud.com/landing-page-pat01?eventId=0a549929-1772-48a7-864c-d550dbeae441&LINE_channelId="
                        class="wow animate__fadeInUp" data-wow-duration="1.5s" target="_blank">ショッピングキャンペーンはコチラ</a>
                    <a href="https://kujionline.vermuda-cloud.com/landing-page-pat02?eventId=520e5a2a-8ebd-4f68-bc38-a04c2a703163&LINE_channelId=2007061582"
                        class="wow animate__fadeInUp" data-wow-duration="1.5s" target="_blank">ゲームキャンペーンはコチラ</a>
                    <p class="wow animate__fadeInUp" data-wow-duration="1.5s">LINE友だち追加にも対応↑</p>
                    <a href="https://kujionline.vermuda-cloud.com/landing-page-pat01?eventId=cd1d29c9-c001-4c78-9153-6057d35f0051&LINE_channelId="
                        class="wow animate__fadeInUp" data-wow-duration="1.5s" target="_blank">お正月キャンペーンはコチラ</a>
                </div>
            </div>
        </div>
    </section>

    <section class="concerns">
        <div class="container">
            <div class="button-group">
                <a href="<?php echo site_url();?>/download" class="btn download wow animate__fadeInUp"
                    data-wow-duration="1.5s">資料ダウンロード<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/downloadICO.svg" alt=""></a>
                <a href="<?php echo site_url();?>/contact" class="btn contact wow animate__fadeInUp" data-wow-duration="1.5s">お問い合わせ<img
                        src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/contectICO.svg" alt=""></a>
            </div>

            <h2 class="section-title">
                こんな<span class="highlight">お悩み</span>ありませんか？
            </h2>

            <div class="content">
                <div class="problems">
                    <div class="problem-card wow animate__fadeInUp" data-wow-duration="1.5s">① 操作が難しいツールは使いこなせない…</div>
                    <div class="problem-card wow animate__fadeInUp" data-wow-duration="1.5s">② コストが高すぎて継続運用ができない…</div>
                    <div class="problem-card wow animate__fadeInUp" data-wow-duration="1.5s">③ 大規模なアクセスに耐えられるか心配…</div>
                </div>
                <div class="illustration">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/concerns.png" alt="お悩みイメージ" />
                </div>
            </div>
        </div>
    </section>

    <section class="solve">
        <div class="container">
            <div class="border_white">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/border_white.png" alt="border_white">
            </div>

            <h2 class="section-title">そのお悩み解決します！</h2>

            <p class="title-content">抽選キャンペーンの手間と<br>費用をまとめて削減</p>

            <div class="solve_card">
                <div class="card wow animate__fadeInUp" data-wow-duration="1.5s">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/solve_directe.png" alt="">
                    <p class="card_title">誰でも簡単</p>
                    <p class="card_content">文字入力とファイル追加さえできればOK。<br>専門知識いらずで抽選ページを作れるキャンペーン支援ツールです</p>
                </div>
                <div class="card wow animate__fadeInUp" data-wow-duration="1.5s">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/solve_yen.png" alt="">
                    <p class="card_title">低コスト運用</p>
                    <p class="card_content">その場で当たりがわかるインスタントウィン（即時抽選）キャンペーンを低コストで開催できます。</p>
                </div>
                <div class="card wow animate__fadeInUp" data-wow-duration="1.5s">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/solve_setting.png" alt="">
                    <p class="card_title">大規模アクセスでも安定稼働</p>
                    <p class="card_content">急なアクセス集中にも強い設計。<br>キャンペーン開始直後の混雑時でもスムーズに動作し、機会損失を防ぎます。<br>安心してご利用いただけます。</p>
                </div>
            </div>
        </div>
    </section>

    <section class="processStep">
        <div class="processStep_container">
            <div class="border_white">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/border_gray.png" alt="border_white">
            </div>

            <h2 class="section-title">たったの4ステップ<br>導入までの流れ</h2>

            <div class="steps">
                <div class="step_card wow animate__fadeInUp" data-wow-duration="1.5s">
                    <div class="mark">STEP 1</div>
                    <p class="card_title">お問い合わせ</p>
                    <p class="card_content">
                        フォームに必要な情報を入力して、お問い合わせください。<br>企画内容のご相談も歓迎。<br>過去の事例や弊社でのキャンペーン運営のノウハウを元に、担当者さまと一緒に戦略を考えます。</p>
                </div>
                <div class="step_card wow animate__fadeInUp" data-wow-duration="1.5s">
                    <div class="mark">STEP 2</div>
                    <p class="card_title">ヒアリング・お見積り</p>
                    <p class="card_content">
                        Web会議ツールなどでヒアリングをさせていただきます。<br>お打ち合わせの際は、料金や機能の詳細、活用アイデアなどを詳しくご案内します。<br>実際の管理画面や抽選ページもご確認いただくことが可能です。
                    </p>
                </div>
                <div class="step_card wow animate__fadeInUp" data-wow-duration="1.5s">
                    <div class="mark">STEP 3</div>
                    <p class="card_title">発注・納品</p>
                    <p class="card_content">
                        発注後は、最短5日でツールを導入可能です。納品時に導入企業さま専用の管理画面をお渡しします。<br>※納品前に新機能の開発が必要な場合は、恐縮ですが導入までお時間をいただくこととなります。（納期は実装する機能によって異なります。）
                    </p>
                </div>
                <div class="step_card wow animate__fadeInUp" data-wow-duration="1.5s">
                    <div class="mark">STEP 4</div>
                    <p class="card_title">抽選ページ作成 キャンペーン開始</p>
                    <p class="card_content">
                        管理画面にログインして抽選ページの設定を済ませると、すぐにキャンペーンを始めることができます。<br>もし使い方でわからない点があれば、気軽にご連絡ください。<br>Web会議ツールなどを使って、設定作業をサポートいたします。
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="support">
        <h3 class="txt-cr">
            <span class="ttl-fill-or wow animate__fadeInUp" data-wow-duration="1.5s"
                style="margin-bottom: 10px;">導入後も手厚くサポート！</span>
            <span class="ttl-fill-or wow animate__fadeInUp" data-wow-duration="1.5s">いつでも気軽にご相談ください。</span>
        </h3>

        <div class="support__inner">
            <ul class="flex flex-center list-none">
                <li class="wow animate__fadeInUp" data-wow-duration="1.5s"><img decoding="async"
                        src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/support-1.png" width="190" height="190" alt="メール" data-xblocker="passed"
                        style="visibility: visible;"></li>
                <li class="wow animate__fadeInUp" data-wow-duration="1.5s"><img decoding="async"
                        src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/support-2.png" width="190" height="190" alt="チャット" data-xblocker="passed"
                        style="visibility: visible;"></li>
                <li class="wow animate__fadeInUp" data-wow-duration="1.5s"><img decoding="async"
                        src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/support-3.png" width="190" height="190" alt="電話" data-xblocker="passed"
                        style="visibility: visible;"></li>
                <li class="wow animate__fadeInUp" data-wow-duration="1.5s"><img loading="lazy" decoding="async"
                        src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/support-4.png" width="190" height="190" alt="web会議ツール"
                        data-xblocker="passed" style="visibility: visible;">
                </li>
            </ul>
            <p class="txt-cr txt-bl ma-bm0 sp-none" style="margin-top: 35px;">
                導入後のサポート体制も万全です。使い方がわからないときはもちろん、<br>企画アイデアのご相談もお待ちしております。
            </p>
        </div>

        <div class="button-group container margins">
            <a href="<?php echo site_url();?>/download" class="btn download wow animate__fadeInUp" data-wow-duration="1.5s">資料ダウンロード<img
                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/downloadICO.svg" alt=""></a>
            <a href="<?php echo site_url();?>/contact" class="btn contact wow animate__fadeInUp" data-wow-duration="1.5s">お問い合わせ<img
                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/contectICO.svg" alt=""></a>
        </div>
    </section>
<?php get_footer(); ?>