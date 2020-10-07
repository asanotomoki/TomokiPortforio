<?php get_header(); ?>
<!-- ------Works------ -->
<section id="works" class="works">
    <div class="top_caption">
        <h2>Works</h2>
    </div>
    <div class="works_btn">
        <div class="hp_btn btn">
            <button id="hp_btn">Web制作</button>
        </div>
        <div class="ap_btn btn">
            <button id="ap_btn">Webアプリ</button>
        </div>
    </div>
    <div class="works_contents">
        <div class="content hp_content">
            <a href="./portforio.html">
                <p class="content_image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portforio2.png">
                </p>
            </a>
            <p class="content_text">
                現在のPortforioサイトです。<br />
                使用技術 : HTML / CSS / JavaScript / WordPress / デザイン( XD )<br />
                きれいに見えるようアニメーションにこだわりました。<br />
            </p>
        </div>
        <div class="content hp_content">
            <a href="https://techmeets.jp/student/399_asano/Action1/Action1.html">
                <p class="content_image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Action.png">
                </p>
            </a>
            <p class="content_text">
                模写サイトの処女作です。学習初めて１ヶ月目の時に作りました。<br />
                使用技術 : HTML / CSS / PHP / jQuery<br />
                初めてでうまくいかないこともたくさんあり苦労の連続でしたが作り終えた時の達成感が凄かったのを覚えています。
            </p>
        </div>
        <div class="content hp_content">
            <p>
                <a href="https://techmeets.jp/student/399_asano/TOMOKI_Portforio/tomokiportforio.html">
                    <p class="content_image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portforio.png">
                    </p>
                </a>
                <p class="content_text">
                    初めて作ったPortforioサイトです。<br />
                    使用技術 : HTML / CSS / jQuery / デザイン<br />
                    右も左も分からず苦労しつつ完成させました。<br />
                    今見るとパッとしないサイトですが、当時は自分一人の力で作れてうれしかったです。
                </p>
        </div>
        <div class="content hp_content">
            <!-- Slider main container -->
            <div class="swiper-container  content_image">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/xd1.png"></p>
                    </div>
                    <div class="swiper-slide">
                        <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/xd2.png"></p>
                    </div>
                    <div class="swiper-slide">
                        <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/xd3.png"></p>
                    </div>
                    <div class="swiper-slide">
                        <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/xd4.png"></p>
                    </div>
                    <div class="swiper-slide">
                        <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/xd5.png"></p>
                    </div>
                    <div class="swiper-slide">
                        <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/xd6.png"></p>
                    </div>
                    <div class="swiper-slide">
                        <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/xd7.png"></p>
                    </div>
                    <div class="swiper-slide">
                        <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/xd8.png"></p>
                    </div>
                    <div class="swiper-slide">
                        <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/xd9.png"></p>
                    </div>
                    <div class="swiper-slide">
                        <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/xd10.png"></p>
                    </div>
                    <div class="swiper-slide">
                        <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/xd11.png"></p>
                    </div>
                    <div class="swiper-slide">
                        <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/xd12.png"></p>
                    </div>
                </div>
                <!-- If we need pagination -->

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <!-- If we need scrollbar -->
            </div>
            <p class="content_text">
                XDで作った模写サイトです。<br />
                全部で1２の模写をしました。<br />
                この時は毎朝6:00に起き朝イチで模写をするのが日課でした。<br />
                徐々に作る速度が上がり成長を実感してました。
            </p>
        </div>
        <div class="content hp_content">
            <p class="content_image">
                <video controls>
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/images/cssanimation.mov">
                </video>
            </p>
            <p class="content_text">
                CSSのみで作られたアニメーションを見て感動したので、自分でも作りました。<br />
                正直まだまだですがCSSのアニメーションは楽しいかったです。<br />
                ※こちらはサーバーにアップしていないので動画でお楽しみください。
            </p>
        </div>
        <div class="content ap_content">
            <p class="content_image">
                <video controls>
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/images/bookmemo.mov">
                </video>
            </p>
            <p class="content_text">
                初めてアプリケーションをPHPでつくりました。<br />
                使用技術 : PHP / MySQL<br />
                Progateで学びすぐに作り始めました。<br />
                カテゴリー別のメモ帳をがあると面白いのではないかと思い作りました。<br />
                どのように作るのか全く分からず1週間、毎日15時間ほど作業に没頭して作りました。<br />
                ※こちらはサーバーにアップしていないので動画でお楽しみください。
            </p>
        </div>
        <div class="content ap_content">
            <p class="content_image">
                <video controls>
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/images/matchi-soccer.mov">
                </video>
            </p>
            <p class="content_text">
                初めてLaravelを触り、アプリを作りました。<br />
                使用技術 : Laravel / MySQL<br />
                MVCモデルやルーターの考え方、全く分からない状態から１日１５時間作業して10日で作りました。<br />
                ※こちらはサーバーにアップしていないので動画でお楽しみください。<br />
                Github : <a href="https://github.com/asanotomoki/tomoki">https://github.com/asanotomoki/tomoki</a>
            </p>
        </div>
        <div class="content ap_content">
            <p class="content_image  linebot">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/linebot.png">
            </p>
            <p class="content_text">
                英語の例文を返す『 英語例文 』というLINEBotを作りました。<br />
                使用技術 : PHP / PHPQuery<br />
                PHPで初めてWebスクレイピングをし楽しかったです。<br />
                Github : <a href="https://github.com/asanotomoki/Linebot">https://github.com/asanotomoki/Linebot</a>
            </p>
        </div>
    </div>
</section>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/works-btn.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/swiper.js"></script>
<?php get_footer(); ?>