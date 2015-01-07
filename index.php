<?php $page = 'top'; ?>
<?php include 'header.php' ?>
<div id="loading"><img src="img/loader.gif"></div>
<div id="fade"></div>
<section id="top-view" class="ytplayer-dance">
    <?php // https://github.com/pupunzi/jquery.mb.YTPlayer/wiki ?>
    <a id="bgndVideo" class="player" 
        data-property="{
            videoURL:'//youtu.be/BT0hj6VTFzU',
            containment:'.ytplayer-dance',
            autoPlay:true,
            showControls:true, //コントロールパネル表示
            loop:true, // ループ（繰り返し）させる
            mute:true, //music
            startAt:0,
            opacity:1,
            optimizeDisplay:true, //will fit the video size into the window size optimizing the view.
        }" title="dance wedding" style="position: relaticve;display:none;background-image:none">
    </a>
    <h1 class="bg-msg">
        <span class="g-font italic">Dance Wedding</span>
    </h1>
</section>
<section id="about">
    <div class="dance-msg">
        <img src="img/ring.png" alt="結婚指輪">
        <div class="detail top">
            <div>
                <div>
                    <h2>一緒に一度の<br>フラッシュモブプロポーズ</h2>
                    <p>二人にとって<br>一生の一度のプロポーズを<br>素敵に演出してみませんか？</p>
                </div>
            </div>
        </div>
    </div>
    <div class="dance-msg">
        <div class="detail bottom">
            <div>
                <div>
                    <h2>結婚式や誕生日会での<br>サプライズダンス</h2>
                    <p>全く新しい<br>結婚式や誕生日会の演出を<br>一緒に作りませんか？</p>
                </div>
            </div>
        </div>
        <img src="img/braide2.png"  alt="新郎新婦">
    </div>
</section>
<section id="post">
    <div class="head">
        <img src="img/post_dance-wedding.png" alt="過去のDance Wedding">
    </div>
    <div class="movies">
        <ul class="post-dance-movies cf">
            <li>
                <iframe height="200" src="https://www.youtube.com/embed/ptuj-vsznmE?list=PL7lxl0JWdvX5dYT0jpuXZf1NvtAM96Tce" frameborder="0"></iframe>
                <p class="date">2014/5/24</p>
                <h3>
                    `エレクトリカルパレード` で<br>フラッシュモブ サプライズ 
                    <br>＠THE CLASSICA TOKYO
                    <br> <span>with Crazy Wedding</span>
                </h3>
            </li>
            <li>
                <iframe height="200" src="https://www.youtube.com/embed/73iAkyFtfRc" frameborder="0"></iframe>
                <p class="date">2014/5/30</p>
                <h3>
                    Pharrell Williams-Happyで結婚式
                    <br>フラッシュモブダンスでサプライズ!!
                    <br> <span>with Crazy Wedding</span>
                </h3>
            </li>
            <li>
                <iframe height="200" src="//www.youtube.com/embed/vFEuR3R87lM?list=PL7lxl0JWdvX5dYT0jpuXZf1NvtAM96Tce" frameborder="0" allowfullscreen></iframe>
                <p class="date"></p>
                <h3>
                    【フラッシュモブ×フレッシュマン】
                    <br>ダンスサプライズキックオフパーティー！！学園天国
                    <br> <span>with Crazy Wedding</span>
                </h3>
            </li>
        </ul>
    </div>
</section>
<section id="planner">
    <div class="head">
        <div><img src="img/p_d.png" alt="プランナー＆ダンサー紹介"></div>
    </div>
    <div class="planner member-list">
        <ul class="cf">
            <li>
                <div>
                    <img class="frame" src="img/intro_planner.png" alt="planner">
                    <img class="people" src="img/p_d/riku.png" alt="リク">
                    <p class="name">りく</p>
                    <img class="line" src="img/line_blue.png" alt="line">
                    <p class="kana">Riku</p>
                </div>
            </li>
            <li>
                <div>
                    <img class="frame" src="img/intro_planner.png" alt="planner">
                    <img class="people" src="img/p_d/koba.png" alt="小林駿">
                    <p class="name">小林　駿</p>
                    <img class="line" src="img/line_blue.png" alt="line">
                    <p class="kana">Kobayashi Shun</p>
                </div>
            </li>
            <li>
                <div>
                    <img class="frame" src="img/intro_planner.png" alt="planner">
                    <img class="people" src="img/p_d/han.png" alt="リク">
                    <p class="name">樊　旭</p>
                    <img class="line" src="img/line_blue.png" alt="line">
                    <p class="kana">Han Akira</p>
                </div>
            </li>
        </ul>
    </div>
    <div class="dancer member-list">
        <ul class="cf">
            <li>
                <div>
                    <img class="frame" src="img/intro_dancer.png" alt="dancer">
                    <img class="people" src="img/p_d/tama.png" alt="tama">
                    <p class="name">Tama</p>
                    <img class="line" src="img/line_purple.png" alt="line">
                    <p class="kana">Tama</p>
                </div>
            </li>
            <li>
                <div>
                    <img class="frame" src="img/intro_dancer.png" alt="dancer">
                    <img class="people" src="img/p_d/masaki.png" alt="まさき">
                    <p class="name">まさき</p>
                    <img class="line" src="img/line_purple.png" alt="line">
                    <p class="kana">Masaki</p>
                </div>
            </li>
            <li>
                <div>
                    <img class="frame" src="img/intro_dancer.png" alt="dancer">
                    <img class="people" src="img/p_d/yoshimai.png" alt="yoshimai">
                    <p class="name">よしまい</p>
                    <img class="line" src="img/line_purple.png" alt="line">
                    <p class="kana">Yoshimai</p>
                </div>
            </li>
        </ul>
    </div>
    <div class="pink-bar"></div>
</section>
<section id="future">
    <div class="inner">
        <div class="head"><img src="img/future.png" alt="弊社の３つの特徴"></div>
        <div class="outl">
            <dl>
                <dt><img src="img/number1.png" alt="1"></dt>
                <dd><span class="m-yellow">ダンサーのプロダクション</span>だから、プロダンサーが振り付け・構成制作・事前レッスン・当日の演出を行います。</dd>
            </dl>
            <dl>
                <dt><img src="img/number2.png" alt="2"></dt>
                <dd><span class="m-yellow">完全オーダーメイド</span>で振り付け制作、演出を一緒に考えさせていただきます。</dd>
            </dl>
            <dl>
                <dt><img src="img/number3.png" alt="3"></dt>
                <dd>プライダルの企業様と一緒に提案させて頂いた<span class="m-yellow">実績</span>があります。</dd>
            </dl>
            <div class="support">
                <p><<span class="m-red">協力企業様</span>></p>
                <p class="company">株式会社 crazy wedding <br>
                株式会社 INNOVATION DESIGN</p>
            </div>
        </div>
    </div>
    <div class="next">
            <p class="more">価格・実施までの流れ、お問い合わせは <a href="./price_and_flow"><img src="img/btn_more.png"  alt="こちら"></a></p>
    </div>
</section>
<?php include 'footer.php' ?>