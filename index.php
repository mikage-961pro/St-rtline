<!DOCTYPE html>
<html lang="ja">

<head>

    <meta charset="UTF-8">
<meta name="robots" content="nofollow">
    <meta name="viewport" content="width=device-width,user-scalable=no,maximum-scale=1" />
<link rel="stylesheet" href="./lib/colorbox.css">
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <title>St@rtline</title>
    <link rel="stylesheet" type="text/css" media="all" href="style.css" />
    <link rel="stylesheet" type="text/css" media="all" href="assets/css/common.css" />
    <link rel="stylesheet" type="text/css" media="all" href="assets/css/top.css" />
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:300,400&subset=japanese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Heebo:800%7CM+PLUS+1p:700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/favicon.ico">
    <script src="./js/index.js"></script>
    <script src="./js/clock.js"></script>
    <script src="./config.js"></script>
<style>
html{
min-width:1240px;
}
</style>
<style>
 button {
    background-color: transparent;
    border: none;
    cursor: pointer;
    outline: none;
    padding: 0;
    appearance: none;
}
 
#Audio-Control {
    overflow: hidden;
    margin-left:20px;
    
}
 
#Audio-Control button {
    border: 1px solid #ccc;
    width: 100px;
    float: left;
    padding: 5px 0;
    -webkit-transition: all 0.6s ease;
    -moz-transition: all 0.6s ease;
    -o-transition: all 0.6s ease;
    transition: all 0.6s ease;
    background: rgba(204, 204, 204, 0.3);
}
 
#Audio-Control button.on {
    border-left: none;
}
 
#Audio-Control button.off {
    border-right: none;
}
 
#Audio-Control button.active {
    background: #ccc;
}
 
#Audio-Control button:not(.active):hover {
    background: rgba(204, 204, 204, 0.3);
}
</style>
</head>

<body id="contents">
    <div class="l-contents">
        <div class="page_ef_tri">
            <div class="triangle triangle01"></div>
            <div class="triangle triangle02"></div>
        </div>
        <div class="chara_box">
            <div class="pc_chara">
                <div class="chara chara_before_js hidden-sp lazyload" data-bg="./assets/img/top/sprites_pc.png"></div>
            </div>
            <div class="sp_chara">
                <div class="chara chara_before_js hidden-pc lazyload" data-bg="./assets/img/top/chara_sp.png"></div>
            </div>
            <div class="op cd_f_js"></div>
        </div>

        <div class="page_bg"></div>
        <div class="page_ef_box hide_tri">
            <div id="scene" class="page_ef">
                <div class="layer layer01 " data-depth="1.0"></div>
                <div class="layer layer02 " data-depth="1.0"></div>
            </div>
        </div>
        
        <div class="movie_wrapper">
            <div class="movie_box">
                <video class="load_movie" id="player" playsinline muted preload>
                    <source src="./assets/media/load.mp4" type="video/mp4">
                </video>
            </div>
        </div>


        <div id="loader-bg" class="loader_bg">
            <div class="loader" id="loader">
                <img src="assets/img/top/lazydummy.png" data-src="./assets/img/top/load.png" alt="一緒に歌おう！" class="load_img lazyload hidden-pc">
            </div>
        </div>

        <div class="body_frame frame_top frame_anime"></div>
        <div class="body_frame frame_left frame_anime"></div>
        <div class="body_frame frame_right frame_anime"></div>
        <div class="body_frame frame_bottom frame_anime"></div>

        <h1 class="catch">

            <div class="img_box">
                <span class="catch_mask catch_mask_js"></span>

            </div>
        </h1>

        <div class="main">
            <div class="countdown_area countdown_js">
                    <div id="more">
                            <span id="date"></span>
                            <span id="clock"></span></div>
<div id="services" style="color:White;" >
    <div class="category">
        <h2>THE IDOLM@STER</h2>
        <!-- <a class="service" href="https://idolmaster.jp">
            <i class="fas fa-at"></i>Official Web
        </a> -->
        <a class="service" href="https://millionlive.miyacorata.net">
            <img src="assets/img/top/papillon.png" width="50px" alt="papillon">ML-Portal
        </a>
        <a class="service" href="https://283pro.net">
            <img src="assets/img/top/283_s.png" alt="283pro" width="50px">SC-Portal
        </a>
    </div>
    <div class="category">
        <h2>Game</h2>
        
        <a class="service" href="https://shinycolors.enza.fun">
            <img src="assets/img/top/twista.svg" width="50px" alt="アイドルマスター シャイニーカラーズ">シャイニーカラーズ
        </a>
        <!-- <a class="service" href="https://shinycolors.idolmaster.jp">
            <img src="assets/img/top/twista.svg" width="50px" alt="アイドルマスター シャイニーカラーズ">シャイニーカラーズ HP
        </a> -->
        
    </div>
    <br>
    <div class="category">
        <h2>Social</h2>
        <a class="service" href="https://imastodon.net">
            <i class="fas fa-at"></i>im@stodon
        </a>
        <a class="service" href="https://twista.283.cloud">
            <img src="assets/img/top/twista.svg" width="50px" alt="twista">twista
        </a>
        <!-- <a class="service" href="https://twitter.com">
            <i class="fab fa-twitter"></i>Twitter
        </a> -->
    </div>
    <!-- <div class="category">
        <h2>Develop</h2>
        <a class="service" href="https://github.com">
            <i class="fab fa-github"></i>GitHub
        </a>
    </div> -->
</div>


                <div class="live_box">
                </div>
            </div>
        </div>
    </div>
    <footer class="l-footer">
        <div class="produced_area hide_logo">
            <div class="wrap">
                <ul class="logo_list">
            </div>
        </div>
        <div class="footer_box">
            <div class="copy_area hide_copy">
                <div class="copy_box">
                    <p class="txt mon"><span class="wd">© Crypton Future Media, INC.</span> <span class="wd">www.piapro.net <span class="copy_logo"><img src="assets/img/top/logo_piapro_g.png" alt="piapro" class="hidden-sp"><img src="assets/img/top/logo_piapro_w.png" alt="piapro" class="hidden-pc"></span></span> <span class="wd">All rights reserved.</span></p>
                </div>
            </div>
        </div>
    </footer>


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script>
    
    $(window).on('load', function() {

        $(function() {

            var h = $(window).height();
            $('#loader-bg').height(h).css('display', 'block');

            var player = $('#player').get(0);

            player.play(); //動画再生

            if (window.matchMedia('(max-width:768px)').matches) {
                
                        $('.movie_wrapper').remove(); //videoタグ削除
                
                        $('.loader').fadeIn(430).delay(400).queue(function() {
                            $('.load_img').fadeOut(430).dequeue();
                        });

                        $('#loader-bg').delay(1400).fadeOut(600).queue(function() {
                            $('.animate,.frame_anime').addClass('show').dequeue();
                        });

                        //キャッチコピー
                        $('.catch_mask_js').delay(3000).css({
                            'width': '100%'
                        }).queue(function() {
                            $('.catch_img_js').css({
                                'opacity': '1'
                            });
                            $(this).css({
                                'right': 0,
                                'left': 'auto',
                                'width': 0,
                                'transition': 'width .45s ease'
                            }).dequeue();
                        });

                        $('.hide_logo,.hide_copy,.hide_share').addClass('animated');

                        //公式Twitter
                        $('.hide_btn').delay(3600).queue(function() {
                            $(this).css({
                                'opacity': 1,
                                'transform': "translateY(0px)"
                            });
                            $(this).addClass('animation').dequeue();
                        });;

            } else {

                //動画終了
                player.addEventListener('ended', function() {

                    $('.movie_wrapper').remove(); //videoタグ削除

                    $('#loader-bg').delay(0).fadeOut(800).queue(function() {
                        $('.animate,.frame_anime').addClass('show').dequeue();
                    });

                    //キャッチコピー
                    $('.catch_mask_js').delay(1600).css({
                        'width': '100%'
                    }).queue(function() {
                        $('.catch_img_js').css({
                            'opacity': '1'
                        });
                        $(this).css({
                            'right': 0,
                            'left': 'auto',
                            'width': 0,
                            'transition': 'width .45s ease'
                        }).dequeue();
                    });

                        //ロゴ
                        $('.hide_logo').delay(2000).queue(function() {
                            $(this).css({
                                'opacity': 1,
                                'transform': "translateY(0px)"
                            });
                            $(this).addClass('animated').dequeue();
                        });

                        //コピーライト
                        $('.hide_copy').delay(2000).queue(function() {
                            $(this).css({
                                'opacity': 1,
                                'transform': "translateX(0px)"
                            });
                            $(this).addClass('animated').dequeue();
                        });

                        //シェア
                        $('.hide_share').delay(2000).queue(function() {
                            $(this).css({
                                'opacity': 1,
                                'transform': "translateX(0px)"
                            });
                            $(this).addClass('animated').dequeue();
                        });

                    //公式Twitter
                    $('.hide_btn').delay(2500).queue(function() {
                        $(this).css({
                            'opacity': 1,
                            'transform': "translateY(0px)"
                        });
                        $(this).addClass('animation').dequeue();
                    });;
                });

            }

        });

    });
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/4.1.4/lazysizes.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/4.1.4/plugins/unveilhooks/ls.unveilhooks.min.js"></script>
<script src="assets/js/common.js"></script></html>
<div style="display:none;"><a rel="me" href="https://imastodon.net/@Oshika_961pro">Mastodon</a></div>
</html>
