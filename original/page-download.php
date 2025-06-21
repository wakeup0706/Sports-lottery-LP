<?php get_header();?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/download.css" />
    <section class="contact">
        <div class="container">
            <h2 class="section-title">資料ダウンロード</h2>
            <div class="dl container" id="dl">
                <div class="dl-inner">
                    <div class="dl-plan">
                        <h2><span>無料</span>資料ダウンロード</h2>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/download.png" alt="資料ダウンロード">
                    </div>
                    <div class="right-section">
                        <form action="submit.php" method="POST">
                            <label><span class="required">必須</span>ご担当者名</label>
                            <input type="text" id="d_charge_name" placeholder="例）くじ 太郎" required>

                            <label><span class="required">必須</span>法人名</label>
                            <input type="text" id="d_corporation_name" placeholder="例）株式会社くじクラウド" required>

                            <label><span class="required">必須</span>企業URL</label>
                            <input type="url" id="d_company_url" placeholder="例）http://kuji-cloud.mon/lp" required>

                            <label><span class="required">必須</span>メールアドレス</label>
                            <input type="email" id="d_email_address" placeholder="例）taro-yamada@kuji-cloud.com" required>

                            <label><span class="required">必須</span>電話番号</label>
                            <input type="tel" id="d_telephon_number" placeholder="09012345678" maxlength="20" required>

                            <label><span class="optional">任意</span>都道府県</label>
                            <select id="d_prefecture">
                                <option selected value="">選択してください</option>
                                <option value="予算・企画が決まっており、サービスを検討している">予算・企画が決まっており、サービスを検討している</option>
                                <option value="予算は決まっているが、企画内容は決まっていない">予算は決まっているが、企画内容は決まっていない</option>
                                <option value="予算化は出来てないが、企画内容は決まっている">予算化は出来てないが、企画内容は決まっている</option>
                                <option value="予算も企画も決まっていないため、情報収集をしている">予算も企画も決まっていないため、情報収集をしている</option>
                            </select>

                            <label><span class="optional">任意</span>検討状況</label>
                            <select id="d_consideration">
                                <option selected value="">選択してください</option>
                                <option value="検索エンジンから">検索エンジンから</option>
                                <option value="代理店から">代理店から</option>
                                <option value="弊社営業から">弊社営業から</option>
                                <option value="Other">Other</option>
                            </select>

                            <label>その他ご質問など</label>
                            <textarea id="d_other_question" placeholder="例）カスタマイズについて、予算について"></textarea>

                            <button type="submit">送信</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>