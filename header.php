<!DOCTYPE html>
<html lang="jp">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="content-script-type" content="text/javascript">
    <meta http-equiv="content-style-type" content="text/css">
    <meta charset="UTF-8">
    <title>ダンス・フラッシュモブ（dance,FlashMob）Dance Weddingページ　−　株式会社オースタンスホームページ | 株式会社オースタンスのホームページ</title>
    <meta name="author" content="Ostance">
    <meta name="description" content="ダンス、フラッシュモブなら株式会社オースタンス。結婚式、披露宴、2次会でのサプライズとしてフラッシュモブによるダンスの企画・運営を行っています。無料見積り実施中です。">
    <meta name="keywords" content="結婚式フラッシュモブ,サプライズ,サブライズダンス,ダンス,結婚式,surprise,dance,flashmob">
    <link rel="canonical" href="http://wedding.ostance.com/" />
    <meta property="og:title" content="ダンス・フラッシュモブ（dance,FlashMob）Dance Weddingページ　−　株式会社オースタンスホームページ | 株式会社オースタンスのホームページ" />
    <meta property="og:type" content="activity" />
    <meta property="og:url" content="http://wedding.ostance.com/" />
    <meta property="og:image" content="img/logo.png" />
    <meta property="og:site_name" content="株式会社オースタンスのホームページ" />
    <meta property="og:description" content="ダンス、フラッシュモブなら株式会社オースタンス。結婚式、披露宴、2次会でのサプライズとしてフラッシュモブによるダンスの企画・運営を行っています。無料見積り実施中です。" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="ダンス、フラッシュモブなら株式会社オースタンス。結婚式、披露宴、2次会でのサプライズとしてフラッシュモブによるダンスの企画・運営を行っています。無料見積り実施中です。" />

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
        $(window).on('touchmove.noScroll', function(e) {
            e.preventDefault();
        });
        $(function(){
            $('a[href^=#]').click(function(){
                var speed = 700;
                var href= $(this).attr("href");
                var target = $(href == "#" || href == "" ? 'html' : href);
                var position = target.offset().top;
                $("html, body").animate({scrollTop:position}, speed, "swing");
                return false;
            });
        });
        $('head').append(
          '<style type="text/css">#top-view { display: none;height: 100%; } #fade, #loading { display: block; }</style>'
        );
        $.event.add(window,"load",function() { // 全ての読み込み完了後に呼ばれる関数
          var pageH = $("#top-view").height();
          
          $("#fade").css("height", pageH).delay(900).fadeOut(80);
          $("#loading").delay(2000).fadeOut(300);
          $("#top-view").css("display", "block");
        });
    </script>
    <link href="YTPlayer-2.7.8/css/YTPlayer.css" media="all" rel="stylesheet" type="text/css">
</head>
<body class="kokoro <?php echo $page ?>">
    <header>
        <div class="top-bar cf">
            <h1 class="logo"><a href="./"><img src="img/logo.png" alt="dance wedding"></a></h1>
            <nav class="menu">
                <ul>
                    <?php if($page == 'top'): ?>
                        <li><a href="#about">About</a></li>
                    <?php else: ?>
                        <li><a href="./#about">About</a></li>
                    <?php endif; ?>
                    <?php if($page == 'top'): ?>
                        <li><a href="#post">Record</a></li>
                    <?php else: ?>
                        <li><a href="./#post">Record</a></li>
                    <?php endif; ?>
                    <?php if($page == 'top'): ?>
                        <li><a href="#planner">Planner</a></li>
                    <?php else: ?>
                        <li><a href="./#planner">Planner</a></li>
                    <?php endif; ?>

                    <li><a href="./price_and_flow">Price&Flow</a></li>

                    <?php if($page == 'price_and_flow'): ?>
                        <li><a href="#contact">Conact</a></li>
                    <?php else: ?>
                        <li><a href="./price_and_flow#contact">Conact</a></li>
                    <?php endif; ?>
                    
                </ul>
            </nav>
        </div>
    </header>