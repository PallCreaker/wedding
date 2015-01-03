<!DOCTYPE html>
<html lang="jp">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="content-script-type" content="text/javascript">
    <meta http-equiv="content-style-type" content="text/css">
    <meta charset="UTF-8">
    <title>Dance Wedding -ostance-</title>
    <meta name="author" content="Ostance">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="shortcut icon" href="img/common/favicon.ico">
    <link href="./css/normalize.css" rel="stylesheet" type="text/css">
    <link href="./css/main.css" rel="stylesheet" type="text/css">
    <link href='//fonts.googleapis.com/css?family=Antic+Didone' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
    <script type="text/javascript" src="./YTPlayer-2.7.8/inc/jquery.mb.YTPlayer.js"></script>
    <script>
      $(function(){
          $(".player").mb_YTPlayer();
        });
    </script>
    <link href="YTPlayer-2.7.8/css/YTPlayer.css" media="all" rel="stylesheet" type="text/css">
</head>
<body class="kokoro">
    <header>
        <div class="top-bar cf">
            <h1 class="logo"><a href="./"><img src="img/logo.png" alt="dance wedding"></a></h1>
            <nav class="menu">
                <ul>
                    <li><a href="#top">Top</a></li>
                    <li><a href="#About">About</a></li>
                    <li><a href="#Post">Post</a></li>
                    <li><a href="#Planner">Planner</a></li>
                    <li><a href="#Contact">Conact</a></li>
                </ul>
            </nav>
        </div>
    </header>
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
        <div class="bg-msg">
            <span class="g-font italic">Dance Wedding</span>
        </div>
    </section>
    <section id="about">
        <div class="dance-msg">
            <img src="img/engagement_ring.png" alt="結婚指輪">
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
            <img src="img/braide_groom.png"  alt="新郎新婦">
        </div>
    </section>
    <section id="post">
        <div class="head">
            <img src="img/post_dance-wedding.png" alt="過去のDance Wedding">
        </div>
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
    </section>
    <section id="planner">
        <div class="head">
            <p>プランナー＆ダンサー</p>
        </div>
        <div class="d-tri"><img src="img/bg_tri.png" height="55" width="999" alt=""></div>
        
    </section>
    <p class="kokoro cf">asdfasdfadfあいうえおかきくけこさしすせそ明朝体 で　つ す</p>
</body>
</html>