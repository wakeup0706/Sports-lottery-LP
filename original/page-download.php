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
                                <option value="">選択してください</option>
                                <option value="北海道">北海道</option>
                                <option value="青森県">青森県</option>
                                <option vlaue="岩手県">岩手県</option>
                                <option value="宮城県">宮城県</option>
                                <option value="秋田県">秋田県</option>
                                <option value="山形県">山形県</option>
                                <option value="福島県">福島県</option>
                                <option value="茨城県">茨城県</option>
                                <option value="栃木県">栃木県</option>
                                <option value="群馬県">群馬県</option>
                                <option value="埼玉県">埼玉県</option>
                                <option value="千葉県">千葉県</option>
                                <option value="東京都">東京都</option>
                                <option value="神奈川県">神奈川県</option>
                                <option value="新潟県">新潟県</option>
                                <option vlaue="富山県">富山県</option>
                                <option value="石川県">石川県</option>
                                <option value="福井県">福井県</option>
                                <option value="山梨県">山梨県</option>
                                <option value="長野県">長野県</option>
                                <option value="岐阜県">岐阜県</option>
                                <option value="静岡県">静岡県</option>
                                <option value="愛知県">愛知県</option>
                                <option value="三重県">三重県</option>
                                <option value="滋賀県">滋賀県</option>
                                <option value="京都府">京都府</option>
                                <option value="大阪府">大阪府</option>
                                <option value="兵庫県">兵庫県</option>
                                <option value="奈良県">奈良県</option>
                                <option value="和歌山県">和歌山県</option>
                                <option value="鳥取県">鳥取県</option>
                                <option value="島根県">島根県</option>
                                <option value="岡山県">岡山県</option>
                                <option value="広島県">広島県</option>
                                <option value="山口県">山口県</option>
                                <option value="徳島県">徳島県</option>
                                <option value="香川県">香川県</option>
                                <option value="愛媛県">愛媛県</option>
                                <option value="高知県">高知県</option>
                                <option value="福岡県">福岡県</option>
                                <option value="佐賀県">佐賀県</option>
                                <option value="長崎県">長崎県</option>
                                <option value="熊本県">熊本県</option>
                                <option value="大分県">大分県</option>
                                <option value="宮崎県">宮崎県</option>
                                <option vlaue="鹿児島県">鹿児島県</option>
                                <option value="沖縄県">沖縄県</option>
                            </select>

                            <label><span class="optional">任意</span>検討状況</label>
                            <select id="d_consideration">
                                <option value="">選択してください</option>
                                <option vlaue="予算・企画が決定しており、サービスを選定している">予算・企画が決定しており、サービスを選定している</option>
                                <option value="予算は決定しているが、企画内容は不明確">予算は決定しているが、企画内容は不明確</option>
                                <option value="予算化は出来てないが、企画内容は決まっている">予算化は出来てないが、企画内容は決まっている</option>
                                <option value="予算化は出来ておらず、企画内容も不明確の段階で関連性が欲しい">予算化は出来ておらず、企画内容も不明確の段階で関連性が欲しい</option>
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
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/jp/download.js"></script>
<?php get_footer(); ?>