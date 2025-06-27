<?php get_header();?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/contact.css" />

    <section class="contact">
        <div class="container">
            <h2 class="section-title">お申し込み・ご相談</h2>
            <form action="submit.php" method="POST">
                <div class="input_area">
                    <dl>
                        <dt><span>必須</span>ご担当者名</dt>
                        <dd>
                            <input type="text" name="your-name" id="user_name" placeholder="例）くじ　太郎" required>
                            <p>※全角で入力して下さい。</p>
                        </dd>

                        <dt><span>必須</span>法人名</dt>
                        <dd>
                            <input type="text" name="your-company" id="company_name" placeholder="例）株式会社くじクラウド" required>
                            <p>※個人事業主の方は、直接ご契約を行うことができませんのでご了承ください。</p>
                        </dd>

                        <dt><span>必須</span>企業URL</dt>
                        <dd>
                            <input type="url" name="your-url" id="company_url" placeholder="例）http://kuj-cloud.com" required>
                            <p>※企業WEBサイトの無い場合、その他、社内取引審査の結果によっては<br class="sp-none">お取引をお断りする場合があります。</p>
                        </dd>

                        <dt><span>必須</span>メールアドレス</dt>
                        <dd>
                            <input type="email" name="your-email" id="company_email" class="middle" placeholder="例）taro-yamada@kuj-cloud.com"
                                required>
                        </dd>

                        <dt><span>必須</span>電話番号</dt>
                        <dd>
                            <input type="text" name="your-tel" class="middle" id="phonnumber" placeholder="例）03-1111-2222"
                                pattern="\d{2,4}-\d{2,4}-\d{3,4}" required>
                            <p>※ハイフンあり半角数字で入力してください。</p>
                        </dd>

                        <dt><span class="grey">任意</span>都道府県</dt>
                        <dd>
                            <div class="select select01 middle">
                                <select name="your-area" id="prefecture">
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
                            </div>
                        </dd>

                        <dt><span class="grey">任意</span>検討状況</dt>
                        <dd>
                            <div class="select select01">
                                <select name="your-status" id="prepared">
                                    <option value="">選択してください</option>
                                    <option vlaue="予算・企画が決定しており、サービスを選定している">予算・企画が決定しており、サービスを選定している</option>
                                    <option value="予算は決定しているが、企画内容は不明確">予算は決定しているが、企画内容は不明確</option>
                                    <option value="予算化は出来てないが、企画内容は決まっている">予算化は出来てないが、企画内容は決まっている</option>
                                    <option value="予算化は出来ておらず、企画内容も不明確の段階で関連性が欲しい">予算化は出来ておらず、企画内容も不明確の段階で関連性が欲しい</option>
                                </select>
                            </div>
                        </dd>

                        <dt>その他ご質問など</dt>
                        <dd>
                            <textarea cols="40" rows="10" maxlength="2000" id="content" aria-invalid="false"
                                placeholder="例) カスタマイズについて、予算について" name="your-message"></textarea>
                            <br>
                            <p>※個人情報の取り扱いにつきましては、<a href="https://vermuda.jp/policy/" target="_blank"
                                    style="text-decoration: underline;">プライバシーポリシー</a>をご参照ください。<br>
                                <span style="font-size:10px; line-height: 1.2; display: block; margin-top: 5px;">This site
                                    is protected by reCAPTCHA and the Google<br><a
                                        href="https://policies.google.com/privacy"
                                        style="text-decoration: underline;">Privacy Policy</a> and <a
                                        href="https://policies.google.com/terms" style="text-decoration: underline;">Terms
                                        of Service</a> apply.</span>
                            </p>
                        </dd>
                    </dl>
                    <button type="submit"><span class="loader" id="sendEmailButton" style="display: none;"></span>この内容で送信する</button>
                </div>
            </form>
        </div>
    </section>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/jp/contact.js"></script>
<?php get_footer(); ?>